<div class="header sticky-sidebar">
            <nav class="header-nav navbar top-navbar navbar-expand-md navbar-dark">
                <div class="header-nav__left navbar-header">
                    <a class="navbar-brand header-nav__left__logo" href="index.html">
                        <b class="header-nav__left__logo__icon">
                            <img src="{{asset('plugins/img/idea.png')}}" alt="homepage" height="37px" width="37px" />
                        </b>
                        <!-- end header-nav__left__logo__icon -->
                        <span class="header-nav__left__logo__text">
                            QUẢN LÝ NHÂN SỰ
                        </span>
                        <!-- end header-nav__left__logo__text -->
                    </a>
                    <!-- end header-nav__left__logo -->
                </div>
                <!-- end header-nav__left -->
                <div class="header-nav__right navbar-collapse">
                    <ul class="header-nav__right__bar navbar-nav ms-auto d-flex align-items-center">
                        <!-- end nav-search -->
                        <li class="nav-profile">
                            <a class="nav-profile__avatar">
                                <img src="{{asset('plugins/img/profile.png')}}" alt="user-img" width="36px"
                                    class="nav-profile__avatar__circle img-circle">
                                <span class="text-black-50 font-medium nav-profile__avatar__text">{{ Auth::user()->name }}</span>
                            </a>
                            <a class="dropdown-trigger waves-effect waves-dark" href="{{ route('auth.logout') }}" data-target="dropdown1">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                        <!-- end nav-profile -->
                    </ul>
                    <!-- end header-nav__right__bar -->
                </div>
                <!-- end header-nav__right -->
            </nav>
            <!-- end header-nav -->
        </div>
        <!-- end header -->
        <div class="content">
            <div class="content-sidebar sticky-sidebar">
                <div class="content-sidebar__scroll">
                    <nav class="sidebar-nav sidebar">
                        <ul id="sidebarnav">
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard"
                                    aria-expanded="false">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span class="hide-menu">Trang chủ</span>
                                </a>
                            </li>
                            <li class="sidebar-item nav-item has-submenu">
                                <a class="nav-link sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                    aria-expanded="false">
                                    <i class="fa fa-group" aria-hidden="true"></i>
                                    <span class="hide-menu">Nhân viên</span>
                                </a>
                                <ul class="submenu collapse">
                                    <li><a class="nav-link" href="/employees">Danh sách </a></li>
                                    <li><a class="nav-link" href="/departments">Phòng ban </a></li>
                                    <li><a class="nav-link" href="/divisions">Chức vụ </a> </li>
                                </ul>
                            </li>
                            <!-- <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="salaries"
                                    aria-expanded="false">
                                    <i class="fa fa-paypal" aria-hidden="true"></i>
                                    <span class="hide-menu">Quản lý lương</span>
                                </a>
                            </li> -->
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                    aria-expanded="false">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="hide-menu">Tài khoản</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- end sidebar-nav -->
                </div>
                <!-- end content-sidebar__scroll -->
            </div>
            <!-- end content-sidebar -->
            <div class="page-wrapper">
                @yield('content')
            </div>
            <!-- end page-wrapper -->
        </div>
        <!-- end content -->
