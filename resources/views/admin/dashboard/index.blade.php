@extends('admin.includes.layout')

@section('content')
<div class="row  border-bottom white-bg dashboard-header">
    wel-come to dashboard
</div><!-- body part -->
@endsection


@section('js')

    <!-- Flot -->
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/flot/jquery.flot.pie.js') }}"></script>

    <!-- Peity -->
    <script src=" {{ asset ('assets/admin/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/demo/peity-demo.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src=" {{ asset ('assets/admin/js/inspinia.js') }}"></script>
    <script src=" {{ asset ('assets/admin/js/plugins/pace/pace.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src=" {{ asset ('assets/admin/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- GITTER -->
    <script src=" {{ asset ('assets/admin/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

    <!-- Sparkline -->
    <script src=" {{ asset ('assets/admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Sparkline demo data  -->
    <script src=" {{ asset ('assets/admin/js/demo/sparkline-demo.js') }}"></script>

    <!-- ChartJS-->
    <script src=" {{ asset ('assets/admin/js/plugins/chartJs/Chart.min.js') }}"></script>

    <!-- Toastr -->
    <script src=" {{ asset ('assets/admin/js/plugins/toastr/toastr.min.js') }}"></script>
@endsection