@csrf
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('backend/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />
    @include('admin.layout.sideNav')

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
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('backend/production/images/img.jpg')}}" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                        </a>
                        <a class="dropdown-item"  href="javascript:;">Help</a>
                        <a class="dropdown-item"  href="{{route('Logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="text-center">
                                <a class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->

{{--@csrf--}}
{{--<section class="main_content dashboard_part">--}}
{{--    <!-- menu  -->--}}
{{--    <div class="container-fluid no-gutters">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12 p-0">--}}
{{--                <div class="header_iner d-flex justify-content-between align-items-center">--}}
{{--                    <div class="sidebar_icon d-lg-none">--}}
{{--                        <i class="ti-menu"></i>--}}
{{--                    </div>--}}
{{--                    <div class="serach_field-area">--}}
{{--                        <div class="search_inner">--}}
{{--                            <form action="#">--}}
{{--                                <div class="search_field">--}}
{{--                                    <input type="text" placeholder="Search here..." >--}}
{{--                                </div>--}}
{{--                                <button type="submit"> <img src="{{asset('backend/img/icon/icon_search.svg')}}" alt=""> </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="header_right d-flex justify-content-between align-items-center">--}}
{{--                        <div class="header_notification_warp d-flex align-items-center">--}}
{{--                            <li>--}}
{{--                                <a href="#"> <img src="{{asset('backend/img/icon/bell.svg')}}" alt=""> </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#"> <img src="{{asset('backend/img/icon/msg.svg')}}" alt=""> </a>--}}
{{--                            </li>--}}
{{--                        </div>--}}
{{--                        <div class="profile_info">--}}
{{--                            <img src="{{asset('backend/img/client_img.png')}}" alt="#">--}}
{{--                            <div class="profile_info_iner">--}}
{{--                                <p>Welcome Admin!</p>--}}
{{--                                <h5>Travor James</h5>--}}
{{--                                <div class="profile_info_details">--}}
{{--                                    @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--                                    <a href="--}}
{{--{{route('profile'),['user'=>Auth::user()->id]}}--}}
{{--                                        ">My Profile <i class="ti-user"></i></a>--}}
{{--                                    @endif--}}
{{--                                    <a href="#">Settings <i class="ti-settings"></i></a>--}}
{{--                                    <a href="{{route('Logout')}}">Log Out <i class="ti-shift-left"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--/ menu  -->--}}
