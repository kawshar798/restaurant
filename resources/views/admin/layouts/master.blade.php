<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.png">

    <title>SpicyBite -@yield('title')</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/plugins/morris/morris.css">

    <!-- App css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/plugins/switchery/switchery.min.css">
    <!-- Summernote css -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/plugins/summernote/summernote.css">
    <!-- Notification css (Toastr) -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/plugins/toastr/toastr.min.css">



    <!-- DataTables -->
    <link href="{{asset('/')}}admin/assets/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/')}}admin/assets/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>



    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{asset('/')}}admin/assets/js/modernizr.min.js"></script>

</head>


<body>


@include('admin.layouts.includes.topnavbar')

<br>
<br>
<br>

<div class="wrapper">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li>
                                <a href="{{route('admin.dashboard')}}">Admin</a>
                            </li>
                            <li>
                                <a href="#">@yield('page_main_title')</a>
                            </li>
                            <li class="active">
                                @yield('page_title')
                            </li>
                        </ol>
                    </div>
                    <h4 class="page-title">@yield('page_title')</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

    @yield('content')

    <!-- Footer -->
        <footer class="footer text-right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        ©2018 SpicyBite.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</div>



<!-- jQuery  -->
<script src="{{asset('/')}}admin/assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/detect.js"></script>
<script src="{{asset('/')}}admin/assets/js/fastclick.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.blockUI.js"></script>
<script src="{{asset('/')}}admin/assets/js/waves.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.slimscroll.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.scrollTo.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/switchery/switchery.min.js"></script>

<!--Wysiwig js-->
<script src="{{asset('/')}}admin/assets/plugins/tinymce/tinymce.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/summernote/summernote.min.js"></script>


<script src="{{asset('/')}}admin/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/datatables/dataTables.bootstrap4.js"></script>

<!-- Counter js  -->
<script src="{{asset('/')}}admin/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/counterup/jquery.counterup.min.js"></script>

<!--Morris Chart-->
<script src="{{asset('/')}}admin/assets/plugins/morris/morris.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/raphael/raphael-min.js"></script>

<!-- Toastr js -->
<script src="{{asset('/')}}admin/assets/plugins/toastr/toastr.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.dataTables.js"></script>
<script src="{{asset('/')}}admin/assets/js/dataTables.bootstrap4.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.datetimepicker.full.min.js"></script>

<!-- Dashboard init -->
<script src="{{asset('/')}}admin/assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/jquery.core.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.app.js"></script>
<script src="{{asset('/')}}admin/assets/js/custom.js"></script>
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable();

        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>
{!! Toastr::message() !!}
</body>
</html>