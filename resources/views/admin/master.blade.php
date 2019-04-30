<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laravel Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/backend/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all"/>
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/datatables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/summernote.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/responsive.css')}}">

@yield('style')
<!-- modernizr css -->
    <script src="{{asset('assets/backend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li @if(isset($menu) && $menu=='dashboard') class="active" @endif>
                            <a href="{{route('admin-dashboard')}}"><i
                                        class="ti-dashboard"></i><span>{{__('dashboard')}}</span></a>
                        </li>
                        <li @if(isset($menu) && (in_array($menu, array('admin_setting')))) class="active" @endif>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-cog"></i><span>{{__('Settings')}}</span></a>
                            <ul class="collapse in">
                                <li @if($menu == 'admin_setting') class="active" @endif>
                                    <a href="{{route('admin_setting') }}">{{__('Admin Settings')}}</a>
                                </li>
                            </ul>
                        </li>


                        <li @if(isset($menu) && (in_array($menu, array('tasks')))) class="active" @endif>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-cog"></i><span>{{__('Reports')}}</span></a>
                            <ul class="collapse">                           
                                <li @if($menu == 'user-cards') class="active" @endif>
                                    <a href="{{route('tasks')}}"><i class="ti-dashboard"></i><span>{{__('Tasks')}}</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <!-- header area start -->
        <div class="header-area">
            <div class="row align-items-center">
                <!-- nav and search button -->
                <div class="col-md-6 col-sm-8 clearfix">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->

        @if(Session::has('success'))
            <div class="alert-float alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{Session::get('success')}}
            </div>
        @endif

        @if(Session::has('dismiss'))
            <div class="alert-float alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{Session::get('dismiss')}}
            </div>
        @endif
        @if(count($errors) > 0)
            <div class="myalert alert-float alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- page title area start -->
    @yield('content')
    <!-- page title area end -->
        {{--<div class="main-content-inner">--}}

        {{--</div>--}}
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>All right reserved</p>
        </div>
    </footer>
    <!-- footer area end-->
</div>
<!-- page container area end -->
<!-- offset area end -->
<!-- jquery latest version -->
<script src="{{asset('assets/backend/js/vendor/jquery-2.2.4.min.js')}}"></script>
<!-- bootstrap 4 js -->
<script src="{{asset('assets/backend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/backend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/backend/js/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/backend/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/backend/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('assets/backend/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/backend/js/datatables.bootstrap.js')}}"></script>
<!-- others plugins -->
<script src="{{asset('assets/backend/js/plugins.js')}}"></script>

<script src="{{asset('assets/backend/js/scripts.js')}}"></script>
 @yield('script')
</body>

</html>