<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
    <div class="mdl-snackbar__text"></div>
    <button class="mdl-snackbar__action" type="button"></button>
</div>
<script>
    (function() {
        'use strict';
        var snackbarContainer = document.querySelector('#demo-toast-example');
        window.onload =  function() {
            'use strict';
            var data = {message: '{{ $flash }}'};
            snackbarContainer.MaterialSnackbar.showSnackbar(data);
        };
    }());
</script>