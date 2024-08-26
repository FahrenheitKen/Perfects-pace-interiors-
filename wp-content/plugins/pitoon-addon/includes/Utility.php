<?php

namespace Layerdrops\Pitoon;

class Utility
{
    public function __construct()
    {
        $this->register_image_size();
        add_filter('single_template', [$this, 'load_portfolio_template']);
        add_filter('single_template', [$this, 'load_service_template']);
        add_filter('single_template', [$this, 'load_team_template']);
        add_filter('wpcf7_autop_or_not', '__return_false');

        add_action('wp_ajax_nopriv_signup_paragon', array($this, 'frontend_login_and_registration'));
        add_action('wp_ajax_signup_paragon', array($this, 'frontend_login_and_registration'));
    }
    public function register_image_size()
    {
        add_image_size('pitoon_blog_370X280', 370, 280, true); //in use
        add_image_size('pitoon_blog_180X260', 180, 260, true); //in use
        add_image_size('pitoon_blog_770X428', 770, 428, true); //in use
        add_image_size('pitoon_brand_logo_202X102', 202, 102, true); //in use
        add_image_size('pitoon_brand_woo_270X308', 270, 308, true); //in use
        add_image_size('pitoon_brand_70X70', 70, 70, true); //in use

    }

    public function load_portfolio_template($template)
    {
        global $post;

        if ('portfolio' === $post->post_type && locate_template(array('single-portfolio.php')) !== $template) {
            /*
            * This is a 'portfolio' post
            * AND a 'single portfolio template' is not found on
            * theme or child theme directories, so load it
            * from our plugin directory.
            */
            return PITOON_ADDON_PATH . '/post-templates/single-portfolio.php';
        }

        return $template;
    }

    public function load_service_template($template)
    {
        global $post;

        if ('service' === $post->post_type && locate_template(array('single-service.php')) !== $template) {
            /*
            * This is a 'service' post
            * AND a 'single service template' is not found on
            * theme or child theme directories, so load it
            * from our plugin directory.
            */
            return PITOON_ADDON_PATH . '/post-templates/single-service.php';
        }

        return $template;
    }


    public function load_team_template($template)
    {
        global $post;

        if ('team' === $post->post_type && locate_template(array('single-team.php')) !== $template) {
            /*
            * This is a 'team' post
            * AND a 'single team template' is not found on
            * theme or child theme directories, so load it
            * from our plugin directory.
            */
            return PITOON_ADDON_PATH . '/post-templates/single-team.php';
        }

        return $template;
    }

    public function frontend_login_and_registration()
    {

        if ($_POST['param'] == "register") {
            $output['status']                       =   1;
            $output['message']     =  __('User name or email already exit', 'pitoon-addon');
            $nonce         =   isset($_POST['security']) ? $_POST['security'] : '';
            if (!wp_verify_nonce($nonce, 'pitoon-register-nonce')) {
                wp_send_json($output);
            }

            $email                               =   sanitize_email($_POST['singupEmail']);
            $singupPassword                      =   sanitize_text_field($_POST['singupPassword']);
            $term                                =   sanitize_text_field($_POST['term']);


            if (email_exists($email)) {
                wp_send_json($output);
            }

            if (empty($singupPassword)) {
                $output['message']     =  __('Please fill up all field', 'pitoon-addon');
                wp_send_json($output);
            }

            if (empty($term)) {
                $output['message']     =  __('Please read term and condition and check it', 'pitoon-addon');
                wp_send_json($output);
            }
            // wp_create_user(), wp_insert_user()
            $user_id                                =   wp_insert_user([
                //'first_name'                        =>  $fname,
                'user_email'                        =>  $email,
                'user_login'                        =>  $email,
                'user_pass'                        =>  $singupPassword,
            ]);


            $user                                   =   get_user_by('id', $user_id);
            wp_set_current_user($user_id, $user->user_login);
            wp_set_auth_cookie($user_id, false);
            do_action('wp_login', $user->user_login, $user);

            $output['status']                       =   2;
            $output['message']                      = __('Registration Successful', 'pitoon-addon');
            wp_send_json($output);
            die();
        } //end register method
        elseif ($_POST['param'] == "login") {

            $output['status']                       =   1;
            $nonce         =   isset($_POST['security']) ? $_POST['security'] : '';
            if (!wp_verify_nonce($nonce, 'pitoon-login-nonce')) {
                wp_send_json($output);
            }
            $data['user_login']         = sanitize_user($_REQUEST['username']);
            $data['user_password']      = sanitize_text_field($_REQUEST['password']);
            $data['remember']      = sanitize_text_field($_REQUEST['remember']);
            $remember = (isset($data['remember']) ? 'true' : false);
            $user_login                 = wp_signon($data, $remember);

            // Check the results of our login and provide the needed feedback
            if (is_wp_error($user_login)) {
                wp_send_json(array(
                    'status' => 1,
                    'message'  => $user_login->get_error_message(),
                ));
            } else {
                wp_send_json(array(
                    'status' => 2,
                    'message'  => __('Logged In Successfully', 'pitoon-addon')
                ));
            }
        } //end login method
        elseif ($_POST['param'] == "reset") {
            // Check if we are sending an email or username and sanitize it appropriately
            if (is_email($_REQUEST['forgotEmail'])) {
                $username = sanitize_email($_REQUEST['forgotEmail']);
            } else {
                $username = sanitize_user($_REQUEST['forgotEmail']);
            }

            $user_forgotten = self::pitoon_retrieve_password($username);

            // Check if there were any errors when requesting a new password
            if (is_wp_error($user_forgotten)) {
                echo wp_send_json(array(
                    'status'      => 1,
                    'message' => $user_forgotten->get_error_message(),
                ));
            } else {
                echo wp_send_json(array(
                    'status'   => 2,
                    'message' => __('Password Reset. Please check your email.', 'pitoon-addon'),
                ));
            }
        }

        echo wp_send_json($output);

        die(0);
    }

    public static function pitoon_retrieve_password($user_data)
    {

        global $wpdb, $current_site;

        $errors = new \WP_Error();

        if (empty($user_data)) {
            $errors->add('empty_username', __('Please enter a username or e-mail address.', 'pitoon-addon'));
        } else if (strpos($user_data, '@')) {
            $user_data = get_user_by('email', trim($user_data));
            if (empty($user_data))
                $errors->add('invalid_email', __('There is no user registered with that email address.', 'pitoon-addon'));
        } else {
            $login = trim($user_data);
            $user_data = get_user_by('login', $login);
        }

        do_action('lostpassword_post');

        if ($errors->get_error_code())
            return $errors;

        if (!$user_data) {
            $errors->add('invalidcombo', __('Invalid username or e-mail.', 'pitoon-addon'));
            return $errors;
        }

        // redefining user_login ensures we return the right case in the email
        $user_login = $user_data->user_login;
        $user_email = $user_data->user_email;

        do_action('retreive_password', $user_login);  // Misspelled and deprecated
        do_action('retrieve_password', $user_login);

        $allow = apply_filters('allow_password_reset', true, $user_data->ID);

        if (!$allow)
            return new \WP_Error('no_password_reset', __('Password reset is not allowed for this user', 'pitoon-addon'));
        else if (is_wp_error($allow))
            return $allow;

        $key = wp_generate_password(20, false);

        do_action('retrieve_password_key', $user_login, $key);

        require_once ABSPATH . 'wp-includes/class-phpass.php';
        $wp_hasher = new \PasswordHash(8, true);

        $hashed = $wp_hasher->HashPassword($key);

        // Now insert the new md5 key into the db
        $wpdb->update($wpdb->users, array('user_activation_key' => $hashed), array('user_login' => $user_login));

        $message = __('Someone requested that the password be reset for the following account:', 'pitoon-addon') . "\r\n\r\n";
        $message .= network_home_url('/') . "\r\n\r\n";
        $message .= sprintf(__('Username: %s', 'pitoon-addon'), $user_login) . "\r\n\r\n";
        $message .= __('If this was a mistake, just ignore this email and nothing will happen.', 'pitoon-addon') . "\r\n\r\n";
        $message .= __('To reset your password, visit the following address:', 'pitoon-addon') . "\r\n\r\n";
        $message .= '<' . network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login') . ">\r\n";

        if (is_multisite()) {
            $blogname = $GLOBALS['current_site']->site_name;
        } else {
            // The blogname option is escaped with esc_html on the way into the database in sanitize_option
            // we want to reverse this for the plain text arena of emails.
            $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);
        }

        $title   = sprintf(__('[%s] Password Reset', 'pitoon-addon'), $blogname);
        $title   = apply_filters('retrieve_password_title', $title);
        $message = apply_filters('retrieve_password_message', $message, $key);

        if ($message && !wp_mail($user_email, $title, $message)) {
            $errors->add('noemail', __('The e-mail could not be sent. Possible reason: your host may have disabled the mail() function.', 'pitoon-addon'));

            return $errors;

            wp_die();
        }

        return true;
    }
}
