
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/logo/logo_small.gif')}}"/>
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{asset('libs/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/nprogress/nprogress.css')}}" rel="stylesheet">
    <link href="{{asset('libs/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <link href="{{asset('libs/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

    @stack('css')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('/dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Nula Cosmetic!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="{{url('/')}}/images/user.png" alt="" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>admin</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Thông tin chung</h3>
                        <ul class="nav side-menu">
                            <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Trang chủ</a>
                            </li>
                            <li>
                                <a href="{{route('banners.index')}}"><i class="fa fa-table"></i>Quản lý banners</a>
                            </li>
                            <li>
                                <a href="{{route('categories.index')}}"><i class="fa fa-table"></i> Quản lý chuyên mục</a>
                            </li>
                            <li>
                                <a><i class="fa fa-table"></i> Quản lý sản phẩm <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    @foreach($categories as $category)
                                        <li><a href="{{route('products.list', ['slug' => $category->slug])}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('news.index')}}"><i class="fa fa-newspaper-o"></i> Quản lý tin tức</a>
                            </li>
                            <li>
                                <a href="{{route('services.index')}}"><i class="fa fa-newspaper-o"></i> Quản lý dịch vụ</a>
                            </li>
                            <li>
                                <a href="{{route('contents_single.index')}}"><i class="fa fa-newspaper-o"></i> Quản lý bài viết</a>
                            </li>
                            <li>
                                <a href="{{route('contacts.index')}}"><i class="fa fa-user"></i> Quản lý liên hệ</a>
                            </li>

                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Thông tin cửa hàng</h3>
                        <ul class="nav side-menu">
                            <li><a href="{{url('admin/users')}}"><i class="fa fa-users"></i> Quản lý người dùng</a></li>
                            <li><a href="{{route('info.index')}}"><i class="fa fa-gears"></i> Cài đặt</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a href="{{url('admin/logout')}}" data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{url('/')}}/images/user.png" alt="">
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{url('/admin/profile')}}"> Profile</a></li>
                                <li><a href="{{url('/')}}" target="_blank">Customer View</a></li>
                                <li>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modalChangePassword">Change Password</a>
                                </li>
                                {{--<li>--}}
                                {{--<a href="javascript:;">--}}
                                {{--<span class="badge bg-red pull-right">50%</span>--}}
                                {{--<span>Settings</span>--}}
                                {{--</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="{{url('admin/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>
                            <div id="modalChangePassword" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <form action="{{route('admin.changePassword')}}" class="form-horizontal" method='post'>
                                    {{csrf_field()}}
                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Change Password</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="col-md-4 text-right">
                                                        <label class="control-label">Password New <span class="required">*</span></label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" class="form-control" name="password" placeholder="********"/>
                                                    </div>

                                                </div>
                                                {{--<div class="form-group">--}}
                                                {{--<div class="col-md-4 text-right">--}}
                                                {{--<label class="control-label">Confirm Password <span class="required">*</span></label>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-7">--}}
                                                {{--<input type="password" class="form-control" name="confirm_password" placeholder="********"/>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Update</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        @yield('content')

        <footer>
            <div class="pull-right">
                Đại Phát - Admin Dashboard
            </div>
            <div class="clearfix"></div>
        </footer>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('libs/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('libs/nprogress/nprogress.js')}}"></script>
<script src="{{asset('libs/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('libs/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('libs/Datebuild/date.js')}}"></script>
<!-- JQVMap -->
<!-- bootstrap-daterangepicker -->
<script src="{{asset('js/moment/moment.min.js')}}"></script>
<script src="{{asset('js/datepicker/daterangepicker.js')}}"></script>

@stack('js')

</body>
</html>
