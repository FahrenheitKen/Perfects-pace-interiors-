(function ($) {
  "use strict";
  $(document).ready(function () {
    $('[id*="-pitoon_"] .customize-control-select select').each(function () {
      $(this).select2();
    });
  });
})(jQuery);
