<?php

namespace Layerdrops\Pitoon\Frontend;

/**
 * Shortcode handler class
 */
class Shortcodes
{

    /**
     * Initializes the class
     */
    function __construct()
    {
        add_shortcode('pitoon-footer', [$this, 'render_footer_shortcode']);
        add_shortcode('pitoon-header', [$this, 'render_header_shortcode']);
    }

    /**
     * Shortcode handler class
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function render_footer_shortcode($atts, $content = '')
    {
        // the query
        $query_args = array(
            'p' => $atts['id'],
            'post_type' => 'footer',
        );
        $post_query = new \WP_Query($query_args); ?>

        <?php if ($post_query->have_posts()) : ?>
            <!-- the loop -->
            <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php esc_html__('Sorry, no posts matched your criteria.', 'pitoon-addon'); ?></p>
        <?php endif;
    }

    /**
     * shortcode handler for header
     * @param array $atts
     * @param string $content
     */
    public function render_header_shortcode($atts, $content = '')
    {
        // the query
        $query_args = array(
            'p' => $atts['id'],
            'post_type' => 'header',
        );
        $post_query = new \WP_Query($query_args); ?>

        <?php if ($post_query->have_posts()) : ?>
            <!-- the loop -->
            <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php esc_html__('Sorry, no posts matched your criteria.', 'pitoon-addon'); ?></p>
<?php endif;
    }
}
