(document.querySelectorAll("[toast-list]") ||
  document.querySelectorAll("[data-choices]") ||
  document.querySelectorAll("[data-provider]")) &&
  (document.writeln(
    "<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'></script>"
  ),
  document.writeln(
    "<script type='text/javascript' src='{{asset('libs/choices.js/public/assets/scripts/choices.min.js')}}'></script>"
  ),
  document.writeln(
    "<script type='text/javascript' src='{{asset('libs/flatpickr/flatpickr.min.js')}}'></script>"
  ));
