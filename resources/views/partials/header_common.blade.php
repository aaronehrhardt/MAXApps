<div class="fixed-action-btn" style="bottom: 45px; right: 24px; "> <a class="btn-floating btn-large red"> <i class="large mdi-editor-mode-edit"></i> </a>
    <ul>
        <li><a class="btn-floating red tooltipped" data-position="left" data-delay="30" data-tooltip="Bookmark App" style="border-radius:0"><i class="large mdi-action-bookmark"></i></a></li>
        <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="30" data-tooltip="Add Tab" style="border-radius:0"><i class="large mdi-content-add"></i></a></li>
        <li><a class="btn-floating green tooltipped" data-position="left" data-delay="30" data-tooltip="Share App" style="border-radius:0"><i class="large mdi-social-share"></i></a></li>
        <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="30" data-tooltip="Get App" style="border-radius:0"><i class="mdi-action-get-app"></i></a></li>
    </ul>
</div>
<div id="wrapper" class="active">
    <div class="overlay"></div>
    <!-- sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top blue darken-1" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav list-group">
            <li class="dropdown hidden-lg hidden-md"><a href="#" class="dropdown-toggle list-group-item" data-toggle="dropdown"><i class="small mdi-action-account-box"></i> My Account <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="/update_profile">Update Profile</a></li>
                    <li><a href="/change_password">Change Password</a></li>
                    <li><a href="/login">Logout</a></li>
                </ul>
            </li>
            <li> <a class="list-group-item" href="/dashboard"><i class="fa fa-tachometer"></i> Dashboard</a> </li>
            <li> <a class="list-group-item" href="/"><i class="small mdi-action-favorite"></i>All Apps</a> </li>
            <li> <a class="list-group-item" href="/leads"><i class="small mdi-action-perm-contact-cal"></i> Leads</a> </li>
            <li> <a class="list-group-item" href="/referrals"><i class="small mdi-social-group"></i> Referrals</a> </li>
            <li> <a class="list-group-item" href="#"><i class="small mdi-maps-place"></i> Marketing</a> </li>
            <li> <a class="list-group-item" href="#"><i class="small mdi-communication-textsms"></i> Social</a> </li>
            <li> <a class="list-group-item" href="#" target="_blank"><i class="fa fa-newspaper-o"></i> News</a> </li>
            <li> <a class="list-group-item" href="http://www.weather.com/" target="_blank"><i class="wi wi-day-sunny-overcast"></i> Weather</a> </li>
        </ul>
    </nav>
    <!-- /sidebar -->
    <!-- main nav bar -->
    <nav>
        <div class="nav-wrapper blue darken-1"> <a href="/" class="brand-logo"><img src="{{ asset('images/REMAX_2col_R_logo.png') }}"></a>
            <ul class="right hide-on-med-and-down">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="mdi-action-account-box"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/update_profile">Update Profile</a></li>
                        <li><a href="/change_password">Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="/login">Logout</a></li>
                    </ul>
                </li>
                <li><a><i class="mdi-social-notifications"></i></a></li>
                <li><a><i class="mdi-action-search"></i></a></li>
            </ul>
        </div>
    </nav>
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>
        <div id="Container" class="container">
            <!-- /main nav bar -->