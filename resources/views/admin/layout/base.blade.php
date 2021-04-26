<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Dashboard - @yield('title')</title>

    <link rel="icon" href="{{URL::asset('img/favicon.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{URL::asset('vendors/themefy_icon/themify-icons.css')}}" />
    <!-- swiper slider CSS -->
    <link rel="stylesheet" href="{{URL::asset('vendors/swiper_slider/css/swiper.min.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{URL::asset('vendors/select2/css/select2.min.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{URL::asset('vendors/niceselect/css/nice-select.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{URL::asset('vendors/owl_carousel/css/owl.carousel.css')}}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{URL::asset('vendors/gijgo/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{URL::asset('vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('vendors/tagsinput/tagsinput.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{URL::asset('vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('vendors/datatable/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{URL::asset('vendors/text_editor/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{URL::asset('vendors/morris/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{URL::asset('vendors/material_icon/material-icons.css')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{URL::asset('css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/colors/default.css')}}" id="colorSkinCSS">
	<script src="{{URL::asset('assets/js/sweetalert.js')}}"></script>

</head>
<body class="crm_body_bg">
    
@if (session('auth'))
<script>
	Swal.fire({
		icon: 'error',
		title: 'Error',
		text: '{{session("auth")}}',
		})
</script>	

@endif

<!-- main content part here -->
 
 <!-- sidebar  -->
 <!-- sidebar part here -->
 {{View::make('admin.layout.header')}}

    @yield('content')

 <!-- footer part -->
{{View::make('admin.layout.footer')}}
</section>
<!-- main content part end -->

<!-- footer  -->
<!-- jquery slim -->
<script src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{URL::asset('js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{URL::asset('js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{URL::asset('vendors/count_up/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{URL::asset('vendors/chartlist/Chart.min.js')}}"></script>
<!-- counterup js -->
<script src="{{URL::asset('vendors/count_up/jquery.counterup.min.js')}}"></script>
<!-- swiper slider js -->
<script src="{{URL::asset('vendors/swiper_slider/js/swiper.min.js')}}"></script>
<!-- nice select -->
<script src="{{URL::asset('vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{URL::asset('vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>
<!-- gijgo css -->
<script src="{{URL::asset('vendors/gijgo/gijgo.min.js')}}"></script>
<!-- responsive table -->
<script src="{{URL::asset('vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('vendors/datatable/js/buttons.print.min.js')}}"></script>

<script src="{{URL::asset('js/chart.min.js')}}"></script>
<!-- progressbar js -->
<script src="{{URL::asset('vendors/progressbar/jquery.barfiller.js')}}"></script>
<!-- tag input -->
<script src="{{URL::asset('vendors/tagsinput/tagsinput.js')}}"></script>
<!-- text editor js -->
<script src="{{URL::asset('vendors/text_editor/summernote-bs4.js')}}"></script>

<script src="{{URL::asset('vendors/apex_chart/apexcharts.js')}}"></script>

<!-- custom js -->
<script src="{{URL::asset('js/custom.js')}}"></script>

<!-- active_chart js -->
<script src="{{URL::asset('js/active_chart.js')}}"></script>
<script src="{{URL::asset('vendors/apex_chart/radial_active.js')}}"></script>
<script src="{{URL::asset('vendors/apex_chart/stackbar.js')}}"></script>
<script src="{{URL::asset('vendors/apex_chart/area_chart.js')}}"></script>
<!-- <script src="{{URL::asset('vendors/apex_chart/pie.js')}}"></script> -->
<script src="{{URL::asset('vendors/apex_chart/bar_active_1.js')}}"></script>
<script src="{{URL::asset('vendors/chartjs/chartjs_active.js')}}"></script>


</body>
</html>