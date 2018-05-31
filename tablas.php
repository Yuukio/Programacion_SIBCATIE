
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Real - Bootstrap 4 Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard,Vue,Vue.js,React,React.js">
        <link rel="shortcut icon" href="img/favicon.png">
        <title>Real - Bootstrap 4 Admin Template</title>

        <!-- Icons -->
        <link href="vendors/css/flag-icon.min.css" rel="stylesheet">
        <link href="vendors/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">

        <!-- Main styles for this application -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Styles required by this views -->
        <link href="vendors/css/dataTables.bootstrap4.min.css" rel="stylesheet">

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-49801694-4', 'auto', {
                'allowLinker': true
            });
            ga('require', 'linker');
            ga('linker:autoLink', ['gumroad.com']);
            ga('send', 'pageview');
        </script>
    </head>

    <!-- BODY options, add following classes to body to change options
    
    // Header options
    1. '.header-fixed'					- Fixed Header
    
    // Brand options
    1. '.brand-minimized'       - Minimized brand (Only symbol)
    
    // Sidebar options
    1. '.sidebar-fixed'					- Fixed Sidebar
    2. '.sidebar-hidden'				- Hidden Sidebar
    3. '.sidebar-off-canvas'		- Off Canvas Sidebar
    4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
    5. '.sidebar-compact'			  - Compact Sidebar
    
    // Aside options
    1. '.aside-menu-fixed'			- Fixed Aside Menu
    2. '.aside-menu-hidden'			- Hidden Aside Menu
    3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu
    
    // Breadcrumb options
    1. '.breadcrumb-fixed'			- Fixed Breadcrumb
    
    // Footer options
    1. '.footer-fixed'					- Fixed footer
    
    -->

    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        <header class="app-header navbar">
            <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none h-100 b-r-1" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline float-left px-4 d-md-down-none">
                <i class="fa fa-search"></i>
                <input class="form-control" type="text" placeholder="Are you looking for something?">
            </form>

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown d-md-down-none pr-2">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb h5 mb-0" title="gb" id="gb"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>Choose language</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-pl h4 mb-0" title="pl" id="pl"></i> Polish</a>
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb h4 mb-0" title="gb" id="gb"></i> English</a>
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es h4 mb-0" title="es" id="es"></i> Español</a>
                    </div>
                </li>
                <li class="nav-item dropdown d-md-down-none">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                        <div class="dropdown-header text-center">
                            <strong>You have 5 notifications</strong>
                        </div>
                        <a href="#" class="dropdown-item">
                            <i class="icon-user-follow text-success"></i> New user registered
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="icon-user-unfollow text-danger"></i> User deleted
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="icon-chart text-info"></i> Sales report is ready
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="icon-basket-loaded text-primary"></i> New client
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="icon-speedometer text-warning"></i> Server overloaded
                        </a>
                        <div class="dropdown-header text-center">
                            <strong>Server</strong>
                        </div>
                        <a href="#" class="dropdown-item">
                            <div class="text-uppercase mb-1">
                                <small><b>CPU Usage</b></small>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                            <small class="text-muted">348 Processes. 1/4 Cores.</small>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="text-uppercase mb-1">
                                <small><b>Memory Usage</b></small>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                            <small class="text-muted">11444GB/16384MB</small>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="text-uppercase mb-1">
                                <small><b>SSD 1 Usage</b></small>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                            <small class="text-muted">243GB/256GB</small>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-md-down-none">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-list"></i><span class="badge badge-pill badge-warning">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                        <div class="dropdown-header text-center">
                            <strong>You have 5 pending tasks</strong>
                        </div>
                        <a href="#" class="dropdown-item">
                            <div class="small mb-1">Upgrade NPM &amp; Bower
                                <span class="float-right">
                                    <strong>0%</strong>
                                </span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="small mb-1">ReactJS Version
                                <span class="float-right">
                                    <strong>25%</strong>
                                </span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="small mb-1">VueJS Version
                                <span class="float-right">
                                    <strong>50%</strong>
                                </span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="small mb-1">Add new layouts
                                <span class="float-right">
                                    <strong>75%</strong>
                                </span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="small mb-1">Angular 2 Cli Version
                                <span class="float-right">
                                    <strong>100%</strong>
                                </span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item text-center">
                            <strong>View all tasks</strong>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-md-down-none">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-envelope-letter"></i><span class="badge badge-pill badge-info">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                        <div class="dropdown-header text-center">
                            <strong>You have 4 messages</strong>
                        </div>
                        <a href="#" class="dropdown-item">
                            <div class="message">
                                <div class="py-3 mr-3 float-left">
                                    <div class="avatar">
                                        <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-success"></span>
                                    </div>
                                </div>
                                <div>
                                    <small class="text-muted">John Doe</small>
                                    <small class="text-muted float-right mt-1">Just now</small>
                                </div>
                                <div class="text-truncate font-weight-bold">
                                    <span class="fa fa-exclamation text-danger"></span> Important message</div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="message">
                                <div class="py-3 mr-3 float-left">
                                    <div class="avatar">
                                        <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-warning"></span>
                                    </div>
                                </div>
                                <div>
                                    <small class="text-muted">John Doe</small>
                                    <small class="text-muted float-right mt-1">5 minutes ago</small>
                                </div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="message">
                                <div class="py-3 mr-3 float-left">
                                    <div class="avatar">
                                        <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-danger"></span>
                                    </div>
                                </div>
                                <div>
                                    <small class="text-muted">John Doe</small>
                                    <small class="text-muted float-right mt-1">1:52 PM</small>
                                </div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="message">
                                <div class="py-3 mr-3 float-left">
                                    <div class="avatar">
                                        <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-info"></span>
                                    </div>
                                </div>
                                <div>
                                    <small class="text-muted">John Doe</small>
                                    <small class="text-muted float-right mt-1">4:03 PM</small>
                                </div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item text-center">
                            <strong>View all messages</strong>
                        </a>
                    </div>
                </li>
                <li class="nav-item d-md-down-none">
                    <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                        <span class="badge badge-pill badge-danger">9</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>Account</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
                        <div class="dropdown-header text-center">
                            <strong>Settings</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-dark">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                    </div>
                </li>
                <button class="navbar-toggler aside-menu-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </ul>
        </header>
        <div class="app-body">
            <div class="sidebar">

                <div class="sidebar-header">
                    <img src="img/avatars/8.jpg" class="img-avatar" alt="Avatar">
                    <div>
                        <strong>JOHN DOE</strong>
                    </div>
                    <div class="text-muted">
                        <small>Founder &amp; CEO</small>
                    </div>
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-link">
                            <i class="icon-settings"></i>
                        </button>
                        <button type="button" class="btn btn-link">
                            <i class="icon-speech"></i>
                        </button>
                        <button type="button" class="btn btn-link">
                            <i class="icon-user"></i>
                        </button>
                    </div>
                </div>

                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-info">NEW</span></a>
                        </li>

                        <li class="nav-title">
                            Theme
                        </li>
                        <li class="nav-item">
                            <a href="colors.html" class="nav-link"><i class="icon-drop"></i> Colors</a>
                        </li>
                        <li class="nav-item">
                            <a href="typography.html" class="nav-link"><i class="icon-pencil"></i> Typograhy</a>
                        </li>
                        <li class="nav-title">
                            Components
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Base</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="base-breadcrumb.html"><i class="icon-puzzle"></i> Breadcrumb</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-cards.html"><i class="icon-puzzle"></i> Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-carousel.html"><i class="icon-puzzle"></i> Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-collapse.html"><i class="icon-puzzle"></i> Collapse</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-jumbotron.html"><i class="icon-puzzle"></i> Jumbotron</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-list-group.html"><i class="icon-puzzle"></i> List group</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-navs.html"><i class="icon-puzzle"></i> Navs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-pagination.html"><i class="icon-puzzle"></i> Pagination</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-popovers.html"><i class="icon-puzzle"></i> Popovers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-progress.html"><i class="icon-puzzle"></i> Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-switches.html"><i class="icon-puzzle"></i> Switches</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-tabs.html"><i class="icon-puzzle"></i> Tabs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-tooltips.html"><i class="icon-puzzle"></i> Tooltips</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-cursor"></i> Buttons</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons-buttons.html"><i class="icon-cursor"></i> Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons-button-group.html"><i class="icon-cursor"></i> Buttons Group</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons-dropdowns.html"><i class="icon-cursor"></i> Dropdowns</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons-loading-buttons.html"><i class="icon-cursor"></i> Loading Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons-social-buttons.html"><i class="icon-cursor"></i> Social Buttons</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-code"></i> Editors</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="editors-code-editor.html"><i class="icon-note"></i> Code Editor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="editors-markdown-editor.html"><i class="fa fa-code"></i> Markdown Editor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="editors-text-editors.html"><i class="icon-note"></i> Rich Text Editor</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-note"></i> Forms</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-basic-forms.html"><i class="icon-note"></i> Basic Forms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-advanced-forms.html"><i class="icon-note"></i> Advanced Forms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-validation.html"><i class="icon-note"></i> Validation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="google-maps.html"><i class="icon-map"></i> Google Maps <span class="badge badge-info">NEW</span></a>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-flags.html"><i class="icon-star"></i> Flags <span class="badge badge-success">NEW</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome <span class="badge badge-secondary">4.7</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bell"></i> Notifications</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications-alerts.html"><i class="icon-bell"></i> Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications-badge.html"><i class="icon-bell"></i> Badge</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications-modals.html"><i class="icon-bell"></i> Modals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications-toastr.html"><i class="icon-bell"></i> Toastr</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-energy"></i> Plugins</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="plugins-calendar.html"><i class="icon-calendar"></i> Calendar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="plugins-draggable-cards.html"><i class="icon-cursor-move"></i> Draggable Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="plugins-sliders.html"><i class="icon-equalizer"></i> Sliders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="plugins-spinners.html"><i class="fa fa-spinner"></i> Spinners</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-list"></i> Tables</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-tables.html"><i class="icon-list"></i> Standard Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-datatables.html"><i class="icon-list"></i> DataTables</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="badge badge-info">NEW</span></a>
                        </li>
                        <li class="divider"></li>
                        <li class="nav-title">
                            Extras
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-layers"></i> UI Kits</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-speech"></i> Invoicing</a>
                                    <ul class="nav-dropdown-items">
                                        <li class="nav-item">
                                            <a class="nav-link" href="UIkits-invoicing-invoice.html"><i class="icon-speech"></i> Invoice</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-dropdown">
                                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-speech"></i> Email</a>
                                    <ul class="nav-dropdown-items">
                                        <li class="nav-item">
                                            <a class="nav-link" href="UIkits-email-inbox.html"><i class="icon-speech"></i> Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="UIkits-email-message.html"><i class="icon-speech"></i> Message</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="UIkits-email-compose.html"><i class="icon-speech"></i> Compose</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="divider m-2"></li>
                        <li class="nav-title">
                            Labels
                        </li>
                        <li class="nav-item hidden-cn">
                            <a class="nav-label" href="#"><i class="fa fa-circle text-danger"></i> Label danger</a>
                        </li>
                        <li class="nav-item hidden-cn">
                            <a class="nav-label" href="#"><i class="fa fa-circle text-info"></i> Label info</a>
                        </li>
                        <li class="nav-item hidden-cn">
                            <a class="nav-label" href="#"><i class="fa fa-circle text-warning"></i> Label warning</a>
                        </li>
                        <li class="divider"></li>
                        <li class="nav-title">
                            System Utilization
                        </li>
                        <li class="nav-item px-3 hidden-cn">
                            <div class="text-uppercase mb-1">
                                <small><b>CPU Usage</b></small>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">348 Processes. 1/4 Cores.</small>
                        </li>
                        <li class="nav-item px-3 hidden-cn">
                            <div class="text-uppercase mb-1">
                                <small><b>Memory Usage</b></small>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">11444GB/16384MB</small>
                        </li>
                        <li class="nav-item px-3 hidden-cn">
                            <div class="text-uppercase mb-1">
                                <small><b>SSD 1 Usage</b></small>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">243GB/256GB</small>
                        </li>

                    </ul>
                </nav>
                <button class="sidebar-minimizer brand-minimizer" type="button"></button>
            </div>
            <!-- Main content -->
            <main class="main">

                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <div class="container-fluid">

                    <div class="animated fadeIn">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-edit"></i> DataTables
                                <div class="card-actions">
                                    <a href="https://datatables.net">
                                        <small class="text-muted">docs</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered datatable">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date registered</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Anton Phunihel</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alphonse Ivo</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thancmar Theophanes</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Walerian Khwaja</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Clemens Janko</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chidubem Gottlob</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hristofor Sergio</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tadhg Griogair</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pollux Beaumont</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Adam Alister</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Carlito Roffe</td>
                                            <td>2012/08/23</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sana Amrin</td>
                                            <td>2012/08/23</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Adinah Ralph</td>
                                            <td>2012/06/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-dark">Inactive</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dederick Mihail</td>
                                            <td>2012/06/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-dark">Inactive</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hipólito András</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fricis Arieh</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Scottie Maximilian</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bao Gaspar</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tullio Luka</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Felice Arseniy</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-dark">Inactive</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Finlay Alf</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-dark">Inactive</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Theophilus Nala</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sullivan Robert</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kristóf Filiberto</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kuzma Edvard</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bünyamin Kasper</td>
                                            <td>2012/08/23</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Crofton Arran</td>
                                            <td>2012/08/23</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bernhard Shelah</td>
                                            <td>2012/06/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-dark">Inactive</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Grahame Miodrag</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Innokentiy Celio</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kostandin Warinhari</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ajith Hristijan</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>

                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.conainer-fluid -->
            </main>

            <aside class="aside-menu">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="timeline" role="tabpanel">
                        <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
                            <small><b>Today</b></small>
                        </div>
                        <hr class="transparent mx-3 my-0">
                        <div class="callout callout-warning m-0 py-3">
                            <div class="avatar float-right">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div>Meeting with
                                <strong>Lucas</strong>
                            </div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
                        </div>
                        <hr class="mx-3 my-0">
                        <div class="callout callout-info m-0 py-3">
                            <div class="avatar float-right">
                                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div>Skype with
                                <strong>Megan</strong>
                            </div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                            <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line </small>
                        </div>
                        <hr class="transparent mx-3 my-0">
                        <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
                            <small><b>Tomorrow</b></small>
                        </div>
                        <hr class="transparent mx-3 my-0">
                        <div class="callout callout-danger m-0 py-3">
                            <div>New UI Project -
                                <strong>deadline</strong>
                            </div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                            <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
                            <div class="avatars-stack mt-2">
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                            </div>
                        </div>
                        <hr class="mx-3 my-0">
                        <div class="callout callout-success m-0 py-3">
                            <div>
                                <strong>#10 Startups.Garden</strong> Meetup</div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
                        </div>
                        <hr class="mx-3 my-0">
                        <div class="callout callout-primary m-0 py-3">
                            <div>
                                <strong>Team meeting</strong>
                            </div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                            <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
                            <div class="avatars-stack mt-2">
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                            </div>
                        </div>
                        <hr class="mx-3 my-0">
                    </div>
                    <div class="tab-pane p-3" id="messages" role="tabpanel">
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                        <hr>
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                        <hr>
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                        <hr>
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                        <hr>
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                    </div>
                    <div class="tab-pane p-3" id="settings" role="tabpanel">
                        <h6>Settings</h6>
                        <div class="aside-options">
                            <div class="clearfix mt-4">
                                <small><b>Option 1</b></small>
                                <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                    <input type="checkbox" class="switch-input" checked="">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                            <div>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                            </div>
                        </div>
                        <div class="aside-options">
                            <div class="clearfix mt-3">
                                <small><b>Option 2</b></small>
                                <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                            <div>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                            </div>
                        </div>
                        <div class="aside-options">
                            <div class="clearfix mt-3">
                                <small><b>Option 3</b></small>
                                <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                        </div>
                        <div class="aside-options">
                            <div class="clearfix mt-3">
                                <small><b>Option 4</b></small>
                                <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                    <input type="checkbox" class="switch-input" checked="">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                        </div>
                        <hr>
                        <h6>System Utilization</h6>
                        <div class="text-uppercase mb-1 mt-4">
                            <small><b>CPU Usage</b></small>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">348 Processes. 1/4 Cores.</small>
                        <div class="text-uppercase mb-1 mt-2">
                            <small><b>Memory Usage</b></small>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">11444GB/16384MB</small>
                        <div class="text-uppercase mb-1 mt-2">
                            <small><b>SSD 1 Usage</b></small>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">243GB/256GB</small>
                        <div class="text-uppercase mb-1 mt-2">
                            <small><b>SSD 2 Usage</b></small>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">25GB/256GB</small>
                    </div>
                </div>
            </aside>

        </div>
        <footer class="app-footer">
            <span><a href="https://genesisui.com">Real</a> © 2017 creativeLabs.</span>
            <span class="ml-auto">Powered by <a href="https://genesisui.com">GenesisUI</a></span>
        </footer>

        <!-- Bootstrap and necessary plugins -->
        <script src="vendors/js/jquery.min.js"></script>
        <script src="vendors/js/popper.min.js"></script>
        <script src="vendors/js/bootstrap.min.js"></script>
        <script src="vendors/js/pace.min.js"></script>

        <!-- Plugins and scripts required by all views -->
        <script src="vendors/js/Chart.min.js"></script>

        <!-- Real main scripts -->

        <script src="js/app.js"></script>

        <!-- Plugins and scripts required by this views -->
        <script src="vendors/js/jquery.dataTables.min.js"></script>
        <script src="vendors/js/dataTables.bootstrap4.min.js"></script>

        <!-- Custom scripts required by this view -->
        <script src="js/views/datatables.js"></script>

    </body>
    <script>'undefined' === typeof _trfq || (window._trfq = []);'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({'tccl.baseHost': 'secureserver.net'}), _trfd.push({'ap': 'cpsh'}, {'server': 'a2plcpnl0436'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>