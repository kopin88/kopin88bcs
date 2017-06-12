<!--   Core JS Files   -->
<script src="{{ mix('js/app.js')}}" type="text/javascript"></script>
{{-- <script src="{{ mix('js/all.js')}}" type="text/javascript"></script> --}}

{{-- <script src="/js/chartist.min.js" type="text/javascript"></script> --}}
{{-- <script src="/js/bootstrap-notify.js" type="text/javascript"></script>
<script src="/js/material-dashboard.js" type="text/javascript"></script>
<script src="/js/demo.js" type="text/javascript"></script> --}}
@yield('script')
<script type="text/javascript">
    $(document).ready(function(){

    // Javascript method's body can be found in assets/js/demos.js
        // demo.initDashboardPageCharts();

    });
</script>

<script type="text/javascript">
  // Tooltips Initialization
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
