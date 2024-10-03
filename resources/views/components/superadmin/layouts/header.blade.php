<div>
    <div class="header">

        <div class="header-left active">
            <a href="#" class="logo">
                <img src="{{ asset('superadmin/images/logo.png') }}" alt="Logo">
            </a>
            <a href="#" class="logo-small">
                {{-- <img src="{{ asset('frontend/logo/'.$setting->logo) }}" alt="Logo"> --}}
            </a>
            <a id="toggle_btn" href="javascript:void(0);">
            </a>
        </div>
    
        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>
    
        <ul class="nav user-menu">
    
            <li class="nav-item">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="#">
                        <div class="searchinputs">
                            <input type="text" placeholder="Search Here ...">
                            <div class="search-addon">
                                <span><img src="{{ asset('superAdmin/images/icons/closes.svg') }}" alt="img"></span>
                            </div>
                        </div>
                        <a class="btn" id="searchdiv"><img src="{{ asset('superAdmin/images/icons/search.svg') }}" alt="img"></a>
                    </form>
                </div>
            </li>
    
    
            <li class="nav-item dropdown has-arrow flag-nav">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                    role="button">
                    <img src="{{ asset('superAdmin/images/flags/us1.png') }}" alt="" height="20">
                    English
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('superAdmin/images/flags/us.png') }}" alt="" height="16">
                        English
                    </a>
                </div>
            </li>
    
    
            <li class="nav-item dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <img src="{{ asset('superAdmin/images/icons/notification-bing.svg') }}" alt="img"> <span
                        class="badge rounded-pill">0</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt="" src="{{ asset('superAdmin/images/profiles/avatar-02.jpg') }}">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                new task <span class="noti-title">New Product Add</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">Now</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>  
                            
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>
    
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                    <span class="user-img">
                        <img style="width:25px" src="{{ asset('superAdmin/images/icons/users1.svg')}}" alt="img">
                    <span class="status online"></span></span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <div class="profileset">
                            <span class="user-img">
                                <img style="width:25px" src="{{ asset('superAdmin/images/icons/users1.svg')}}" alt="img">
                                <span class="status online"></span></span>
                            <div class="profilesets">
                                <h6>{{Auth::guard('superadmin')->user()->name}}</h6>
                                <h5>
                                    SuperAdmin
                                </h5>
                            </div>
                        </div>
                        <hr class="m-0">
                        <a class="dropdown-item anchor" href="profileSettings"> <i class="me-2" data-feather="user"></i> My Profile</a>
                        <a class="dropdown-item anchor" href="generalSettings"><i class="me-2" data-feather="settings"></i>Settings</a>
                        <hr class="m-0">
                        <form action="{{ route('superadmin.logout') }}" method="post">
                            @csrf
                            <button class="dropdown-item logout pb-0" href="{{ route('superadmin.logout') }}">
                                <img src="{{ asset('superAdmin/images/icons/log-out.svg') }}" class="me-2" alt="img">Logout
                            </button>
                        </form>

                    </div>
                </div>
            </li>
        </ul>
    
    
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </div>
    
    </div>
</div>