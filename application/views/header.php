<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lion-admin-templates.multipurposethemes.com/lion-admin/realestate-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 06:05:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Lion Admin - Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">

	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>css/bootstrap-extend.css">
  
	<!-- bootstrap slider -->
  <link rel="stylesheet" href="<?php echo base_url('resource/') ?>assets/vendor_plugins/bootstrap-slider/slider.css">
  
  	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url('resource/') ?>css/master_style.css">

  <!-- Lion_admin skins -->
  <link rel="stylesheet" href="<?php echo base_url('resource/') ?>css/skins/_all-skins.css">

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
          <a href="<?= site_url("Welcome/web"); ?>">
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
      </ul>
    </section>
  </aside>