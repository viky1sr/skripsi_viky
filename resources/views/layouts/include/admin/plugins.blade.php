<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset(config('sentence.jquery_js'))}}"></script>
<script src="{{asset(config('sentence.popper_js'))}}"></script>
<script src="{{asset(config('sentence.bootstrap_js'))}}"></script>
<script src="{{asset(config('sentence.perfect_scrollbar_js'))}}"></script>
<script src="{{asset(config('sentence.asset_app_js'))}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset(config('sentence.custom_js'))}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
<script src="{{asset(config('sentence.apex_charts_js'))}}"></script>
<script src="{{asset(config('sentence.dash_1_js'))}}"></script>
<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
