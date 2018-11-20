<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lion-admin-templates.multipurposethemes.com/lion-admin/realestate-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 06:05:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://lion-admin-templates.multipurposethemes.com/lion-admin/images/favicon.ico">

    <title>Lion Admin - Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">

	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>css/bootstrap-extend.css">
  
	<!-- Morris charts -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>assets/vendor_components/morris.js/morris.css">

	<!-- date picker -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">

	<!-- daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">

	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">

	<!-- fullCalendar -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>assets/vendor_components/fullcalendar/dist/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>assets/vendor_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>css/master_style.css">

	<!-- Lion_admin skins -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>css/skins/_all-skins.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


  </head>

<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="<?php echo base_url('resource/') ?>images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="<?php echo base_url('resource/') ?>images/logo-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="<?php echo base_url('resource/') ?>images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="<?php echo base_url('resource/') ?>images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>

          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 5 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('resource/') ?>images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('resource/') ?>images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('resource/') ?>images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('resource/') ?>images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('resource/') ?>images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See all e-Mails</a></li>
            </ul>
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 7 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nunc fringilla lorem
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-message"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 6 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Lorem ipsum dolor sit amet
                        <small class="pull-right">30%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 30%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Vestibulum nec ligula
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-danger" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Donec id leo ut ipsum
                        <small class="pull-right">70%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-light-blue" style="width: 70%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Praesent vitae tellus
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nam varius sapien
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nunc fringilla
                        <small class="pull-right">90%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-primary" style="width: 90%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">90% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
		  <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('resource/') ?>images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('resource/') ?>images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

                <p>
                  Romi Roy
                  <small class="mb-5">jb@gmail.com</small>
                  <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="ti-settings"></i> Account Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li class="active">
          <a href="index.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url("lists/listsaham"); ?>">List Saham</a></li>
            <li><a href="<?= site_url("lists/listdeviden"); ?>">List Deviden</a></li>
          </ul>
        </li>
        <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('resource/') ?>pages/widgets/blog.html">Blog</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/widgets/chart.html">Chart</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/widgets/list.html">List</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/widgets/social.html">Social</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/widgets/statistic.html">Statistic</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/widgets/tiles.html">Tiles</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/widgets/weather.html">Weather</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/widgets/widgets.html">Widgets</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('resource/') ?>pages/layout/boxed.html">Boxed</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/layout/fixed.html">Fixed</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/layout/collapsed-sidebar.html">Collapsed Sidebar</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-square-o"></i>
            <span>Box</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('resource/') ?>pages/box/advanced.html">Advanced</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/box/basic.html">Boxed</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/box/color.html">Color</a></li>
			<li><a href="<?php echo base_url('resource/') ?>pages/box/group.html">Group</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('resource/') ?>pages/charts/chartjs.html">ChartJS</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/charts/flot.html">Flot</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/charts/inline.html">Inline charts</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/charts/morris.html">Morris</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/charts/peity.html">Peity</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/charts/chartist.html">Chartist</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/charts/rickshaw-charts.html">Rickshaw Charts</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/charts/nvd3-charts.html">NVD3 Charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/advanced.html">Advanced Elements</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/code-editor.html">Code Editor</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/editor-markdown.html">Markdown</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/editors.html">Editors</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/form-validation.html">Form Validation</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/form-wizard.html">Form Wizard</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/general.html">General Elements</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/mask.html">Formatter</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/premade.html">Pre-made Forms</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/forms/xeditable.html">Xeditable Editor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('resource/') ?>pages/tables/simple.html">Simple tables</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/tables/data.html">Data tables</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/tables/editable-tables.html">Editable Tables</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/tables/table-color.html">Table Color</a></li>
          </ul>
        </li>
		<li>
          <a href="<?php echo base_url('resource/') ?>pages/email/index.html">
            <i class="fa fa-envelope-open-o"></i> <span>Emails</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
		<li class="header nav-small-cap">EXTRA COMPONENTS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map"></i> <span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('resource/') ?>pages/map/map-google.html">Google Map</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/map/map-vector.html">Vector Map</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-plug"></i> <span>Extension</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('resource/') ?>pages/extension/fullscreen.html">Fullscreen</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/blank.html">Blank</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/coming-soon.html">Coming Soon</a></li>
            <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/custom-scroll.html">Custom Scrolls</a></li>
			<li><a href="<?php echo base_url('resource/') ?>pages/samplepage/faq.html">FAQ</a></li>
			<li><a href="<?php echo base_url('resource/') ?>pages/samplepage/gallery.html">Gallery</a></li>
			<li><a href="<?php echo base_url('resource/') ?>pages/samplepage/invoice.html">Invoice</a></li>
			<li><a href="<?php echo base_url('resource/') ?>pages/samplepage/lightbox.html">Lightbox Popup</a></li>
			<li><a href="<?php echo base_url('resource/') ?>pages/samplepage/pace.html">Pace</a></li>
			<li><a href="<?php echo base_url('resource/') ?>pages/samplepage/pricing.html">Pricing</a></li>
            <li class="treeview">
              <a href="#">Authentication
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/login.html">Login</a></li>
                <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/register.html">Register</a></li>
                <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/lockscreen.html">Lockscreen</a></li>
                <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/user-pass.html">Recover password</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">Error Pages
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/404.html">404</a></li>
                <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/500.html">500</a></li>
                <li><a href="<?php echo base_url('resource/') ?>pages/samplepage/maintenance.html">Maintenance</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li>

      </ul>
    </section>
  </aside>