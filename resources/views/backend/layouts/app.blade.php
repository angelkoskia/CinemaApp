<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <!-
    <link rel="shortcut icon" type="image/x-icon" href="/backend_assets/assets/images/brand/favicon.ico" />

    <
    <title>Zanex – Bootstrap  Admin & Dashboard Template</title>


    <link href="/backend_assets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/backend_assets/assets/css/style.css" rel="stylesheet"/>
    <link href="/backend_assets/assets/css/dark-style.css" rel="stylesheet"/>
    <link href="/backend_assets/assets/css/skin-modes.css" rel="stylesheet" />
    <link href="/backend_assets/assets/css/sidemenu.css" rel="stylesheet" id="sidemenu-theme">
    <link href="/backend_assets/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>
    <link href="/backend_assets/assets/plugins/select2/select2.min.css" rel="stylesheet"/>
    <link href="/backend_assets/assets/plugins/datatable/css/dataTables.bootstrap5.css" rel="stylesheet" />
    <link href="/backend_assets/assets/plugins/datatable/css/buttons.bootstrap5.min.css"  rel="stylesheet">
    <link href="/backend_assets/assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet" />
    <link href="/backend_assets/assets/plugins/select2/select2.min.css" rel="stylesheet"/>
    <link href="/backend_assets/assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />
    <link href="/backend_assets/assets/css/icons.css" rel="stylesheet"/>
    <link href="/backend_assets/assets/plugins/sidebar/sidebar.css" rel="stylesheet">
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="/backend_assets/assets/colors/color1.css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body class="app sidebar-mini">
<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="/backend_assets/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<div class="page">
    <div class="page-main">
        @include('backend.layouts.leftsidebar')
        @include('backend.layouts.header')
        <div class="app-content">
            <div class="side-app">
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('backend.layouts.footer')

<!-- JQUERY JS -->
<script src="/backend_assets/assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="/backend_assets/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="/backend_assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SPARKLINE JS-->
<script src="/backend_assets/assets/js/jquery.sparkline.min.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="/backend_assets/assets/js/circle-progress.min.js"></script>

<!-- C3 CHART JS -->
<script src="/backend_assets/assets/plugins/charts-c3/d3.v5.min.js"></script>
<script src="/backend_assets/assets/plugins/charts-c3/c3-chart.js"></script>

<!-- INPUT MASK JS-->
<script src="/backend_assets/assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="/backend_assets/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="/backend_assets/assets/plugins/select2/select2.full.min.js"></script>

<!-- DATA TABLE JS-->
<script src="/backend_assets/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="/backend_assets/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="/backend_assets/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="/backend_assets/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="/backend_assets/assets/plugins/datatable/js/jszip.min.js"></script>
<script src="/backend_assets/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="/backend_assets/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="/backend_assets/assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="/backend_assets/assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="/backend_assets/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="/backend_assets/assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="/backend_assets/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="/backend_assets/assets/js/table-data.js"></script>

<!-- SIDEBAR JS -->
<script src="/backend_assets/assets/plugins/sidebar/sidebar.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="/backend_assets/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="/backend_assets/assets/plugins/p-scroll/pscroll.js"></script>
<script src="/backend_assets/assets/plugins/p-scroll/pscroll-1.js"></script>

<!-- CUSTOM JS-->
<script src="/backend_assets/assets/js/custom.js"></script>
<script>
    $(document).ready(function () {
       $('.myTables').DataTable()
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
