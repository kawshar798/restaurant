
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.ico">
    <!-- App title -->
    <title>SpicyBite</title>

    <!-- App css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{asset('/')}}admin/assets/js/modernizr.min.js"></script>

</head>


<body class="bg-transparent">

<!-- HOME -->
<section>
    <div class="container-alt">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 account-pages">
                        <div class="text-center account-logo-box">
                            <h2 class="text-uppercase">
                                <a href="index.html" class="text-success">
                               
                                {{ __('Login') }}
                                    <span><img src="{{asset('/')}}admin/assets/images/logo/logo.png" alt="" height="36"></span>
                                </a>
                            </h2>
                            <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                        </div>
                        <div class="account-content">

                            <form method="POST" class="form-horizontal" action="{{ route('login') }}" }}">
                            @csrf

                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Username" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group account-btn text-center m-t-10">
                                <div class="col-xs-12">
                                    <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            </form>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- end card-box-->

                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- END HOME -->

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('/')}}admin/assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/detect.js"></script>
<script src="{{asset('/')}}admin/assets/js/fastclick.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.blockUI.js"></script>
<script src="{{asset('/')}}admin/assets/js/waves.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.slimscroll.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/jquery.core.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery.app.js"></script>

</body>
</html>
