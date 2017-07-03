<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {{ Html::style('sites_custom/css/app.css') }}
        {{ Html::style('bower/swiper/dist/css/swiper.min.css') }}
        {{ Html::style('bower/nvd3/build/nv.d3.min.css') }}
        {{ Html::style('sites_custom/css/lc_switch.css') }}
        {{ Html::style('sites_custom/css/custom.css') }}
        {{ Html::style('sites_custom/css/dashboard1.css') }}
        {{ Html::style('sites_custom/css/dashboard1_timeline.css') }}
    </head>
    <body class="skin-default">
        <div class="preloader">
            <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
        </div>
        <!-- header logo: style can be found in header-->
        <header class="header">
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="index.html" class="logo">
                    <!-- Add the class icon to your logo image or logo icon to add the marginin -->
                    <img src="img/logo.png" alt="logo"/>
                </a>
                <!-- Header Navbar: style can be found in header-->
                <!-- Sidebar toggle button-->
                <div>
                    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                            class="fa fa-fw ti-menu"></i>
                    </a>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw ti-email black"></i>
                                <span class="label label-success">2</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages table-striped">
                                <li class="dropdown-title">New Messages</li>
                                <li>
                                    <a href="" class="message striped-col">
                                        <img class="message-image img-circle" src="img/authors/avatar7.jpg" alt="avatar-image">

                                        <div class="message-body"><strong>Ernest Kerry</strong>
                                            <br>
                                            Can we Meet?
                                            <br>
                                            <small>Just Now</small>
                                            <span class="label label-success label-mini msg-lable">New</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="message">
                                        <img class="message-image img-circle" src="img/authors/avatar6.jpg" alt="avatar-image">

                                        <div class="message-body"><strong>John</strong>
                                            <br>
                                            Dont forgot to call...
                                            <br>
                                            <small>5 minutes ago</small>
                                            <span class="label label-success label-mini msg-lable">New</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="message striped-col">
                                        <img class="message-image img-circle" src="img/authors/avatar5.jpg" alt="avatar-image">

                                        <div class="message-body">
                                            <strong>Wilton Zeph</strong>
                                            <br>
                                            If there is anything else &hellip;
                                            <br>
                                            <small>14/10/2014 1:31 pm</small>
                                        </div>

                                    </a>
                                </li>
                                <li>
                                    <a href="" class="message">
                                        <img class="message-image img-circle" src="img/authors/avatar1.jpg" alt="avatar-image">
                                        <div class="message-body">
                                            <strong>Jenny Kerry</strong>
                                            <br>
                                            Let me know when you free
                                            <br>
                                            <small>5 days ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="message striped-col">
                                        <img class="message-image img-circle" src="img/authors/avatar.jpg" alt="avatar-image">
                                        <div class="message-body">
                                            <strong>Tony</strong>
                                            <br>
                                            Let me know when you free
                                            <br>
                                            <small>5 days ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-footer"><a href="#"> View All messages</a></li>
                            </ul>

                        </li>
                        <!--rightside toggle-->
                        <li>
                            <a href="#" class="dropdown-toggle toggle-right" data-toggle="dropdown">
                                <i class="fa fa-fw ti-view-list black"></i>
                                <span class="label label-danger">9</span>
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                                <img src="img/authors/avatar1.jpg" width="35" class="img-circle img-responsive pull-left"
                                     height="35" alt="User Image">
                                <div class="riot">
                                    <div>
                                        Addison
                                        <span>
                                                <i class="caret"></i>
                                            </span>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                                    <p> Addison</p>
                                </li>
                                <!-- Menu Body -->
                                <li class="p-t-3"><a href="user_profile.html"> <i class="fa fa-fw ti-user"></i> My Profile </a>
                                </li>
                                <li role="presentation"></li>
                                <li><a href="edit_user.html"> <i class="fa fa-fw ti-settings"></i> Account Settings </a></li>
                                <li role="presentation" class="divider"></li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="lockscreen.html">
                                            <i class="fa fa-fw ti-lock"></i>
                                            Lock
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="login.html">
                                            <i class="fa fa-fw ti-shift-right"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar-->
                <section class="sidebar">
                    <div id="menu" role="navigation">
                        <div class="nav_profile">
                            <div class="media profile-left">
                                <a class="pull-left profile-thumb" href="#">
                                    <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image"></a>
                                <div class="content-profile">
                                    <h4 class="media-heading">Addison</h4>
                                    <ul class="icon-list">
                                        <li>
                                            <a href="users.html">
                                                <i class="fa fa-fw ti-user"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="lockscreen.html">
                                                <i class="fa fa-fw ti-lock"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="edit_user.html">
                                                <i class="fa fa-fw ti-settings"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login.html">
                                                <i class="fa fa-fw ti-shift-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="navigation">
                            <li class="active" id="active">
                                <a href="index.html">
                                    <i class="menu-icon ti-desktop"></i>
                                    <span class="mm-text ">Dashboard 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="index2.html">
                                    <i class="menu-icon ti-layout-list-large-image"></i>
                                    <span class="mm-text ">Dashboard 2</span>
                                </a>
                            </li>
                            <li class="menu-dropdown">
                                <a href="javascript:void(0)">
                                    <i class="menu-icon ti-check-box"></i>
                                    <span>Forms</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-fw ti-receipt"></i> Features
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu p-l-40">
                                            <li>
                                                <a href="form_elements.html">
                                                    <i class="fa fa-fw ti-cup"></i> Form Elements
                                                </a>
                                            </li>
                                            <li>
                                                <a href="form_validations.html">
                                                    <i class="fa fa-fw ti-alert"></i> Form Validations
                                                </a>
                                            </li>
                                            <li>
                                                <a href="form_layouts.html">
                                                    <i class="fa fa-fw ti-layout-width-default"></i> Form Layouts
                                                </a>
                                            </li>
                                            <li>
                                                <a href="complex_forms.html">
                                                    <i class="fa fa-fw ti-layout-cta-left"></i> Complex Forms
                                                </a>
                                            </li>
                                            <li>
                                                <a href="complex_forms2.html">
                                                    <i class="fa fa-fw ti-layout-cta-center"></i> Complex Forms 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="realtime_form.html">
                                                    <i class="fa fa-fw ti-write"></i> Realtime Forms
                                                </a>
                                            </li>
                                            <li>
                                                <a href="radio_checkboxes.html">
                                                    <i class="fa fa-fw ti-check-box"></i> Radio and Checkbox
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-fw ti-clipboard"></i> Components
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu p-l-40">
                                            <li>
                                                <a href="form_editors.html">
                                                    <i class="fa fa-fw ti-pencil"></i> Form Editors
                                                </a>
                                            </li>
                                            <li>
                                                <a href="form_wizards.html">
                                                    <i class="fa fa-fw ti-settings"></i> Form Wizards
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dropdowns.html">
                                                    <i class="fa fa-fw ti-widget-alt"></i> Drop Downs
                                                </a>
                                            </li>
                                            <li>
                                                <a href="datepicker.html">
                                                    <i class="fa fa-fw ti-calendar"></i> Date pickers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="advanceddate_pickers.html">
                                                    <i class="fa fa-fw ti-notepad"></i> Advanced Date pickers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="x-editable.html">
                                                    <i class="fa fa-fw ti-slice"></i> X-editable
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-desktop"></i>
                                    <span>
                                            UI Features
                                        </span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="general_components.html">
                                            <i class="fa fa-fw ti-plug"></i> General Components
                                        </a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">
                                            <i class="fa fa-fw ti-layout-placeholder"></i> Buttons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tabs_accordions.html">
                                            <i class="fa fa-fw ti-layers"></i> Tabs &amp; Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="fonts.html">
                                            <i class="fa fa-fw ti-ink-pen"></i> Font Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="advanced_modals.html">
                                            <i class="fa fa-fw ti-brush-alt"></i> Advanced Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href="timeline.html">
                                            <i class="fa fa-fw ti-time"></i> Timeline
                                        </a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">
                                            <i class="fa fa-fw ti-flag-alt"></i> Notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-briefcase"></i>
                                    <span>
                                            UI Components
                                        </span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="pickers.html">
                                            <i class="fa fa-fw ti-brush"></i> Pickers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="grid_layout.html">
                                            <i class="fa fa-fw ti-layout-grid2"></i> Grid Layout
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tags_input.html">
                                            <i class="fa fa-fw ti-tag"></i> Tags Input
                                        </a>
                                    </li>
                                    <li>
                                        <a href="nestable_list.html">
                                            <i class="fa fa-fw ti-view-list"></i> Nestable List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sweet_alert.html">
                                            <i class="fa fa-fw ti-bell"></i> Sweet Alert
                                        </a>
                                    </li>
                                    <li>
                                        <a href="toastr_notifications.html">
                                            <i class="fa fa-fw ti-tablet"></i> Toastr Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="draggable_portlets.html">
                                            <i class="fa fa-fw ti-control-shuffle"></i> Draggable Portlets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="transitions.html"> <i class="fa fa-fw ti-star"></i> Transitions </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-widget"></i>
                                    <span>Widgets</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="widgets.html">
                                            <i class=" menu-icon fa fa-fw ti-widgetized"></i>
                                            Widgets 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets1.html">
                                            <i class=" menu-icon fa fa-fw ti-widget-alt"></i>
                                            Widgets 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-layout-grid4"></i>
                                    <span>DataTables</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="simple_tables.html">
                                            <i class="fa fa-fw ti-layout"></i> Simple tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="datatables.html">
                                            <i class="fa fa-fw ti-server"></i> Data Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="advanced_datatables.html">
                                            <i class="fa fa-fw ti-layout-grid3"></i> Advanced Tables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="responsive_datatables.html">
                                            <i class="fa fa-fw ti-layout-accordion-merged"></i> Responsive DataTables
                                        </a>
                                    </li>
                                    <li>
                                        <a href="bootstrap_tables.html">
                                            <i class="fa fa-fw ti-layout-grid2"></i> Bootstrap Tables
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#"> <i class="menu-icon ti-bar-chart"></i>
                                    <span>Charts</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="flot_charts.html">
                                            <i class="fa fa-fw ti-bar-chart-alt"></i> Flot Charts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="nvd3_charts.html"> <i class="fa fa-fw ti-stats-up"></i> NVD3 Charts </a>
                                    </li>
                                    <li>
                                        <a href="circle_sliders.html"> <i class="fa fa-fw ti-basketball"></i> Circle Sliders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chartjs_charts.html"> <i class="fa fa-fw ti-pie-chart"></i> Chartjs Charts </a>
                                    </li>
                                    <li>
                                        <a href="dimple_charts.html"> <i class="fa fa-fw ti-save-alt"></i> Dimple Charts </a>
                                    </li>
                                    <li>
                                        <a href="amcharts.html"> <i class="fa fa-fw ti-stats-up"></i> Amcharts </a>
                                    </li>
                                    <li>
                                        <a href="chartist.html"> <i class="fa fa-fw ti-bar-chart"></i> Chartist Charts </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-calendar"></i>
                                    <span>Calendar</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="calendar.html">
                                            <i class=" menu-icon fa fa-fw ti-video-clapper"></i>
                                            <span>Calendar</span>
                                            <small class="badge">7</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="calendar2.html">
                                            <i class=" menu-icon fa fa-fw ti-calendar"></i>
                                            <span>Advanced Calendar</span>
                                            <small class="badge">6</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-gallery"></i>
                                    <span>Gallery</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="masonry_gallery.html">
                                            <i class="fa fa-fw ti-gallery"></i> Masonry Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="multiplefile_upload.html">
                                            <i class="fa fa-fw ti-upload"></i> Multiple File Upload
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dropify.html">
                                            <i class="fa fa-fw ti-dropbox"></i> Dropify
                                        </a>
                                    </li>
                                    <li>
                                        <a href="image_hover.html">
                                            <i class="fa fa-fw ti-image"></i> Image Hover
                                        </a>
                                    </li>
                                    <li>
                                        <a href="image_filter.html">
                                            <i class="fa fa-fw ti-filter"></i> Image Filter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="image_magnifier.html">
                                            <i class="fa fa-fw ti-zoom-in"></i> Image Magnifier
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#"> <i class="menu-icon ti-user"></i> <span>Users</span> <span
                                        class="fa arrow"></span> </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="users.html">
                                            <i class="fa fa-fw ti-menu-alt" aria-hidden="true"></i> Users List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="addnew_user.html">
                                            <i class="fa fa-fw ti-user"></i> Add New User
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user_profile.html">
                                            <i class="fa fa-fw ti-id-badge"></i> View Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="deleted_users.html">
                                            <i class="fa fa-fw ti-trash"></i> Deleted Users
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-location-pin"></i>
                                    <span>Maps</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="google_maps.html">
                                            <i class="fa fa-fw ti-world"></i> Google Maps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vector_maps.html">
                                            <i class="fa fa-fw ti-map"></i> Vector Maps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="advanced_maps.html">
                                            <i class="fa fa-fw ti-map-alt"></i> Advanced Maps
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-files"></i>
                                    <span>Pages</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blank.html">
                                            <i class="fa fa-fw ti-file"></i> Blank
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoice.html">
                                            <i class="fa fa-fw ti-layout-cta-left"></i> Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <a href="session_timeout.html">
                                            <i class="fa fa-fw ti-time"></i> Session Timeout
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.html">
                                            <i class="fa fa-fw ti-shift-right"></i> Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="register.html">
                                            <i class="fa fa-fw ti-check-box"></i> Register
                                        </a>
                                    </li>
                                    <li>                                 <a href="forgot_password.html">                                     <i class="fa fa-fw ti-help"></i> Forgot Password                                 </a>                             </li>                             <li>                                 <a href="reset_password.html">                                     <i class="fa fa-fw ti-key"></i> Reset Password                                 </a>                             </li>
                                    <li>
                                        <a href="lockscreen.html">
                                            <i class="fa fa-fw ti-lock"></i> Lockscreen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html">
                                            <i class="fa fa-fw ti-unlink"></i> 404 Error
                                        </a>
                                    </li>
                                    <li>
                                        <a href="500.html">
                                            <i class="fa fa-fw ti-face-sad"></i> 500 Error
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-layout-grid3"></i>
                                    <span>Layouts</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="menubarfold.html">
                                            <i class="fa fa-fw ti-layout-menu-v"></i> Menubar Fold
                                        </a>
                                    </li>
                                    <li>
                                        <a href="boxed_movable_header.html">
                                            <i class="fa fa-fw ti-layout-grid2"></i> Boxed &amp; Movable Header
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layout_movable_header.html">
                                            <i class="fa fa-fw ti-view-list-alt"></i> Movable Header
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layout_boxed_fixed_header.html">
                                            <i class="fa fa-fw ti-view-list"></i> Boxed &amp; Fixed Header
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layout_fixed.html">
                                            <i class="fa fa-fw ti-layout-column2"></i> Fixed Header &amp; Menu
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="menu-icon ti-menu"></i>
                                    <span>
                                            Menu levels
                                        </span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 1
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 3
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 3
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 3
                                                            <span class="fa arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu sub-submenu">
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 4
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 4
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 4
                                                                    <span class="fa arrow"></span>
                                                                </a>
                                                                <ul class="sub-menu sub-submenu">
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 5
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 5
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 5
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 4
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                    <span class="fa arrow"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw ti-control-skip-forward"></i> Level 1
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                    <span class="fa arrow"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                    <span class="fa arrow"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                    <span class="fa arrow"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- / .navigation -->
                    </div>
                    <!-- menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <aside class="right-side">
                @yield('content')
                <!-- /.content -->
            </aside>
            <!-- /.right-side -->
        </div>
        <!-- ./wrapper -->
        <!-- global js -->
        <div id="qn"></div>
        {{ Html::script('sites_custom/js/app.js') }}
        {{ Html::script('sites_custom/js/jquery.flot.spline.js') }}
        {{ Html::script('bower/flot/jquery.flot.js') }}
        {{ Html::script('bower/flot/jquery.flot.resize.js') }}
        {{ Html::script('bower/flot/jquery.flot.stack.js') }}
        <script type="text/javascript" src="vendors/flotspline/js/jquery.flot.spline.min.js"></script>
        <script type="text/javascript" src="vendors/flot.tooltip/js/jquery.flot.tooltip.js"></script>
        {{ Html::script('bower/swiper/dist/js/swiper.min.js') }}
        <script src="vendors/chartjs/js/Chart.js"></script>
        <script type="text/javascript" src="js/nvd3/d3.v3.min.js"></script>
        {{ Html::script('bower/nvd3/build/nv.d3.min.js') }}
        {{ Html::script('bower/moment/min/moment.min.js') }}
        <script type="text/javascript" src="vendors/advanced_newsTicker/js/newsTicker.js"></script>
        {{ Html::script('sites_custom/js/dashboard1.js') }}

        @yield('scrip')

    </body>
</html>