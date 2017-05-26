@include('admin.layout.header')
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class=" ">
        <!-- START TOPBAR -->
        <div class='page-topbar '>
            <div class='logo-area'>
            </div>
            <div class='quick-area'>
                <div class='pull-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap">
                            <a href="javascript:;" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        @if(isset($TT_Admin))
                            <li class="profile">
                                <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="TT_Admin/data/profile/{{$TT_Admin->img}}" alt="user-image" class="img-circle img-inline">
                                <span>{{$TT_Admin->name}} <i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul class="dropdown-menu profile animated fadeIn">
                                    <li>
                                        <a href="../admin/user/thong-tin-ca-nhan">
                                        <i class="fa fa-wrench"></i>
                                        Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#profile">
                                        <i class="fa fa-user"></i>
                                        Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#help">
                                        <i class="fa fa-info"></i>
                                        Help
                                        </a>
                                    </li>
                                    <li class="last">
                                        <a href="../admin/dang-xuat">
                                        <i class="fa fa-lock"></i>
                                        Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid container-fluid">
            <!-- SIDEBAR - START -->
            <div class="page-sidebar pagescroll">
                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper">
                    <!-- USER INFO - START -->
                    <div class="profile-info row">
                        <div class="profile-image col-xs-4">
                            <a href="ui-profile.html">
                            <img alt="" src="TT_Admin/data/profile/{{$TT_Admin->img}}" class="img-responsive img-circle">
                            </a>
                        </div>
                        @if(isset($TT_Admin))
                            <div class="profile-details col-xs-8">
                                <h3>
                                    <a href="ui-profile.html">{{$TT_Admin->name}}</a>
                                    <!-- Available statuses: online, idle, busy, away and offline -->
                                    <span class="profile-status online"></span>
                                </h3>
                                <p class="profile-title">{{$TT_Admin->userGroup->name}}</p>
                            </div>
                        @endif
                    </div>
                    <!-- USER INFO - END -->
                    @include('admin.layout.menu')
                </div>
                <!-- MAIN MENU - END -->
            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            

            @yield('content')
            <!-- END CONTENT -->
            <div class="chatapi-windows ">
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
        <!-- CORE JS FRAMEWORK - START --> 
        

@include('admin.layout.footer')
