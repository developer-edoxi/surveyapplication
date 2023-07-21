<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/crm2/horizontal/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 11:16:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://crm-admin-dashboard-template.multipurposethemes.com/images/favicon.ico">

    <title>CRMi - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="src/css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="src/css/horizontal-menu.css"> 
	<link rel="stylesheet" href="src/css/style.css">
	<link rel="stylesheet" href="src/css/skin_color.css">
	<style>
        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 320px;
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

        input[type="number"] {
            min-width: 50px;
        }
    </style>
  </head>

<?php

$msg=$this->session->flashdata('msg');

if(isset($msg)){

echo "<script>alert('$msg');</script>";

}

?>

<body class="layout-top-nav light-skin theme-primary fixed">

	
<div class="wrapper">
	
	
  <header class="main-header">
	  <div class="inside-header">
		<div class="d-flex align-items-center logo-box justify-content-start">
			<!-- Logo -->
			<a href="index.html" class="logo">
			  <!-- logo-->
			  <div class="logo-mini w-30">
				  <span class="light-logo"><img src="images/logo-letter.png" alt="logo"></span>
				  <span class="dark-logo"><img src="images/logo-letter-white.png" alt="logo"></span>
			  </div>
			  <div class="logo-lg">
				  <span class="light-logo"><img src="images/logo-dark-text.png" alt="logo"></span>
				  <span class="dark-logo"><img src="images/logo-light-text.png" alt="logo"></span>
			  </div>
			</a>	
		</div>  
		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top">
		  <!-- Sidebar toggle button-->
		  <div class="app-menu">
			<ul class="header-megamenu nav">
				<li class="btn-group d-lg-inline-flex d-none">
					<div class="app-menu">
						<div class="search-bx mx-5">
							<form>
								<div class="input-group">
								  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
								  <div class="input-group-append">
									<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
								  </div>
								</div>
							</form>
						</div>
					</div>
				</li>
			</ul> 
		  </div>

		  <div class="navbar-custom-menu r-side">
			<ul class="nav navbar-nav">
				<li class="dropdown notifications-menu btn-group nav-item">
					<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" data-bs-toggle="dropdown" title="Notifications">
						<i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
						<div class="pulse-wave"></div>
					</a>
					<ul class="dropdown-menu animated bounceIn">
					  <li class="header">
						<div class="p-20">
							<div class="flexbox">
								<div>
									<h4 class="mb-0 mt-0">Notifications</h4>
								</div>
								<div>
									<a href="#" class="text-danger">Clear All</a>
								</div>
							</div>
						</div>
					  </li>
					  <li>
						<!-- inner menu: contains the actual data -->
						<ul class="menu sm-scrol">
						  <li>
							<a href="#">
							  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
							</a>
						  </li>
						</ul>
					  </li>
					  <li class="footer">
						  <a href="#">View all</a>
					  </li>
					</ul>
				</li>
				<li class="btn-group nav-item">
					<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_actions_toggle">
						<i class="icon-Layout-arrange"><span class="path1"></span><span class="path2"></span></i>
					</a>
				</li>
				<li class="btn-group nav-item d-xl-inline-flex d-none">
					<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_panel_toggle">
						<i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
					</a>
				</li>
				<li class="btn-group nav-item d-xl-inline-flex d-none">
					<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_shop_toggle">
						<i class="icon-Cart1"><span class="path1"></span><span class="path2"></span></i>
					</a>
				</li>
				<li class="btn-group nav-item d-xl-inline-flex d-none">
					<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
						<i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
					</a>
				</li>

				<li class="btn-group">
					<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
						<img class="rounded" src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/usa.svg" alt="">
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/usa.svg" alt=""> English</a>
						<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/spain.svg" alt=""> Spanish</a>
						<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/ger.svg" alt=""> German</a>
						<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/jap.svg" alt=""> Japanese</a>
						<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/fra.svg" alt=""> French</a>
					</div>
				</li>

				<li class="btn-group nav-item d-xl-inline-flex d-none">
					<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
						<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
					</a>
				</li>

				<!-- User Account-->
				<li class="dropdown user user-menu">
					<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
						<div class="d-flex pt-1">
							<div class="text-end me-10">
								<p class="pt-5 fs-14 mb-0 fw-700 text-primary">Johen Doe</p>
								<small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
							</div>
							<img src="images/avatar/avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
						</div>
					</a>
				</li>

			</ul>
		  </div>
		</nav>
	  </div>
  </header>
  
  <nav class="main-nav" role="navigation">

	  <!-- Mobile menu toggle button (hamburger/x icon) -->
	  <input id="main-menu-state" type="checkbox" />
	  <label class="main-menu-btn" for="main-menu-state">
		<span class="main-menu-btn-icon"></span> Toggle main menu visibility
	  </label>

	  <!-- Sample menu definition -->
	  <ul id="main-menu" class="sm sm-blue"> 
		<li><a href="index.html"><i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>Dashboard</a></li>
		<li><a href="analytics.html"><i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>Analytics</a></li>
		<li><a href="reports.html"><i class="icon-Flag"><span class="path1"></span><span class="path2"></span></i>Reports</a></li>
		<li><a href="extra_calendar.html"><i class="icon-Alarm-clock"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Calendar</a></li>
		<li><a href="contact_app_chat.html"><i class="icon-Chat2"></i>Chat</a></li>
		<li><a href="contact_userlist_grid.html"><i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>Contacts</a></li>
		<li><a href="#"><i class="icon-Air-ballon"><span class="path1"></span><span class="path2"></span></i>Apps</a>
			<ul> 
				<li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>				
				<li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
				<li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="icon-Globe"><span class="path1"></span><span class="path2"></span></i>Widgets</a>
		  <ul>
			<li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
            <li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
            <li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
            <li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
            <li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
            <li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
            <li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>			  
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a>
			  <ul>
				<li><a href="component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
				<li><a href="component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
				<li><a href="component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
			  </ul>			  
			</li>  
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps</a>
			  <ul>
				<li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
            	<li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
			  </ul>			  
			</li>
		  </ul>
		</li>
		<li><a href="#"><i class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></i>Login &amp; Error</a>
		  <ul>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Authentication</a>
			  <ul>
				<li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
				<li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
				<li><a href="auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
				<li><a href="auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>	
			  </ul>			  
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Miscellaneous</a>
			  <ul>
				<li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
				<li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
				<li><a href="error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>
			  </ul>			  
			</li>
		  </ul>		  
		</li>
		<li><a href="#"><i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>UI</a>			
		  <ul>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Utilities</a>
			  <ul>
				<li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
				<li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
				<li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
				<li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>	
				<li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
				<li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
				<li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
				<li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
				<li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
				<li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
				<li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
				<li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
				<li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
				<li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
			  </ul>			  
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card</a>
			  <ul>
				<li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
				<li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
				<li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
				<li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
				<li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
			  </ul>			  
			</li>			
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons</a>
			  <ul>
				<li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
				<li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
				<li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>	
				<li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
				<li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
				<li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
				<li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
				<li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
			  </ul>			  
			</li>		
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components</a>
			  <ul>
				<li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
				<li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
				<li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
				<li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
				<li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
				<li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
				<li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
				<li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
				<li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
				<li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>
			  </ul>			  
			</li>
		  </ul>		  
		</li>
		<li><a href="#"><i class="icon-Box2"><span class="path1"></span><span class="path2"></span></i>Forms & Table</a>
		  <ul>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms</a>			  
			  <ul>
				<li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
				<li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
				<li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>	
				<li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
				<li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
				<li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
				<li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
				<li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
				<li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
				<li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
			  </ul>
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables</a>			  
			  <ul>
				<li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
				<li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
				<li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
				<li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
			  </ul>
			</li>			
		  </ul>		  	
		</li>
		<li><a href="#"><i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>Charts</a>
		  <ul>
			<li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
			<li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
			<li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
			<li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
			<li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
			<li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
			<li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
			<li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
			<li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
			<li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
			<li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
			<li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
			<li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a></li>
		  </ul>  	
		</li>
		<li><a href="#"><i class="icon-Selected-file"><span class="path1"></span><span class="path2"></span></i>Pages</a>
		  <ul>
			<li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
			<li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>	
			<li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
			<li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Profile</a></li>
			<li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>	
			<li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Extra Pages</a>
			  <ul>
				<li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
				<li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
				<li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
				<li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
				<li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
				<li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
			  </ul>			  
			</li>
		  </ul>		  
		</li>		  
		<li><a href="#"><i class="icon-Cart2"><span class="path1"></span><span class="path2"></span></i>Ecommerce</a>
		  <ul>
			<li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
            <li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
            <li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
            <li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
            <li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
            <li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
		  </ul>
		</li>
		<li><a href="email_index.html"><i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>
	  </ul>
	</nav>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xxxl-8 col-xl-9 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-6 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<div class="bg-primary mb-20 w-50 h-50 rounded10 text-center l-h-50">
												<i class="fs-18 fa fa-file"></i>
											</div>
											<h4 class="mb-5">Total Enquiry</h4>
										
										</div>
										<div id="chart_41"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<div class="bg-info mb-20 w-50 h-50 rounded10 text-center l-h-50">
												<i class="fs-18 fa fa-cogs"></i>
											</div>
											<h4 class="mb-5 text-nowrap">Total Universities</h4>
										
										</div>
										<div id="chart_42"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<div class="bg-success mb-20 w-50 h-50 rounded10 text-center l-h-50">
												<i class="fs-18 fa fa-trophy"></i>
											</div>
											<h4 class="mb-5">Today's Enquiry</h4>
											
										</div>
										<div id="chart_43"></div>
									</div>
								</div>
							</div>
						</div>
					</div>					
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">
							<span id="text_1"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container1"></div>
       
    					</figure>
						</div>
					
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-3 col-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">
								Recent Activity
							</h3>
						</div>
						<div class="box-body">
							<div class="activity-div">
								<div class="timeline-label">
									<div class="timeline-item">
										<div class="timeline-label fw-500 fs-16"><span id="time_1">08:42</span></div>
										<div class="timeline-badge">
											<i class="fa fa-genderless text-warning fs-14"></i>
										</div>
										<div class="timeline-content text-muted ps-3"><span id="word_1">A</span></div>
									</div>
									<div class="timeline-item">
										<div class="timeline-label fw-500 fs-16"><span id="time_2">10:42</span></div>
										<div class="timeline-badge">
											<i class="fa fa-genderless text-success fs-14"></i>
										</div>
										<div class="timeline-content d-flex">
											<span class="fw-500 ps-3"><span id="word_2">B</span></span>
										</div>
									</div>
									<div class="timeline-item">
										<div class="timeline-label fw-500 fs-16"><span id="time_3">18:42</span></div>
										<div class="timeline-badge">
											<i class="fa fa-genderless text-danger fs-14"></i>
										</div>
										<div class="timeline-content fw-500 ps-3"><span id="word_3">C</span>
										<a href="#" class="text-primary"></a></div>
									</div>
									<div class="timeline-item">
										<div class="timeline-label fw-500 fs-16"><span id="time_4">02:42</span></div>
										<div class="timeline-badge">
											<i class="fa fa-genderless text-primary fs-14"></i>
										</div>
										<div class="timeline-content text-muted ps-3"><span id="word_4">D</span></div>
									</div>
									<div class="timeline-item">
										<div class="timeline-label fw-500 fs-16"><span id="time_5">04:45</span></div>
										<div class="timeline-badge">
											<i class="fa fa-genderless text-danger fs-14"></i>
										</div>
										<div class="timeline-content fw-500 ps-3"><span id="word_5">E</span>
										<a href="#" class="text-primary"></a></div>
									</div>
								
								</div>
							</div>							
						</div>
					</div>
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">
								Sales Analytics
							</h3>
						</div>
						<div class="box-body">
							<div style="min-height: 207.7px;">
								<div id="sales_chart"></div>
							</div>							
						</div>
					</div>	
				</div>
				
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_2"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						
						<figure class="highcharts-figure">
        					<div id="container2"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_3"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						
						<figure class="highcharts-figure">
        					<div id="container3"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_4"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
					
						<figure class="highcharts-figure">
        					<div id="container4"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_5"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container5"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<<div class="box-header">
							<h3 class="box-title">
							<span id="text_6"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container6"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_7"></span>
							</h3>
						</div>
						<div class="box-body pb-0">	
						<figure class="highcharts-figure">
        					<div id="container7"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_8"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container8"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_9"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container9"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_10"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container10"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_11"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container11"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_12"></span>
							</h3>
						</div>
						<div class="box-body pb-0">	
						<figure class="highcharts-figure">
        					<div id="container12"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_13"></span>
							</h3>
						</div>
						<div class="box-body pb-0">	
						<figure class="highcharts-figure">
        					<div id="container13"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_14"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container14"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_15"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container15"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_16"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container16"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_17"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container17"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_18"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container18"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_19"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container19"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
					<div class="box-header">
							<h3 class="box-title">
							<span id="text_20"></span>
							</h3>
						</div>
						<div class="box-body pb-0">
						<figure class="highcharts-figure">
        					<div id="container20"></div>
       
    					</figure>
						</div>					
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-body">	
							<div class="flex-grow-1 pb-10">	
								<div class="bg-warning w-70 h-70 rounded10 mb-30 text-center l-h-70">							
									<i class="fa fa-user fs-24"></i>							
								</div>

								<a href="#" class="text-dark fw-600 hover-primary fs-18">
									How to manage your Clients<br>in Proper way
								</a>
								<p class="fs-16 mt-15">
									Top priority project of August 2020
								</p>
								<div class="d-flex align-items-center">
									<span class="badge badge-lg badge-pill badge-warning-light me-15">Report</span>
									<div class="fs-16">
										<i class="fa fa-clock text-primary"></i>
										15 min
									</div>
								</div>
							</div>							
							<div class="d-flex flex-column mt-10">
								<div class="d-flex">
									<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
										<img src="images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
									</a>
									<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
										<img src="images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
									</a>
									<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
										<img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
									</a>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Daily Orders</h3>
						</div>
						<div class="box-body">
							<div id="charts_widget_1_chart"></div>
						</div>
					</div>
				</div>
			
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Side panel --> 
  <!-- quick_actions_toggle -->

	<!-- Vendor JS -->
	<script src="src/js/vendors.min.js"></script>
	<script src="src/js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>	

	<script src="assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	
	<!-- CRMi App -->
	<script src="src/js/jquery.smartmenus.js"></script>
	<script src="src/js/menus.js"></script>
	<script src="src/js/template.js"></script>
	<script src="src/js/pages/dashboard.js"></script>

	<script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
	<!-- <script type="module" src="js/dashbord.js"></script> -->

    <script>

function getXHR() {
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        return new XMLHttpRequest();
    }
    else { // code for IE6, IE5
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
    }

		var totalresponse;
		var totaluniversity;
		var todayresponse;

		var arobj=[];

        var text=[];
        text[1]="How familiar are you with artificial intelligence?";
        text[2]="Have you ever taken the help of any AI tools for your studies? If yes, please mention the name of the tool used.";
        text[3]="Do you think artificial intelligence can improve the quality of your studies? ";
        text[4]="Have you heard about generative AI? ";
        text[5]="Do you believe AI technologies like ChatGPT can provide valuable support for your project/studies research?";
        text[6]="Do you think AI technologies like ChatGPT can help your career?";
        text[7]="Have you felt that AI can provide personalised learning experiences based on your learning styles, interests, and abilities?";
        text[8]="Do you think artificial intelligence can impact the management industry?";
        text[9]="Do you think that the existing business education needs to change with the concept of AI, both in terms of how and what is delivered in the classroom? ";
        text[10]="Do you think that an AI-integrated business school’s curriculum will prepare you for the evolving job market?";
        text[11]="Do you think artificial intelligence can help improve the efficiency and productivity of management professionals?";
        text[12]="Artificial intelligence can provide a more efficient way of managing projects. Do you agree?";
        text[13]="Do you think AI can replace MBA students? ";
        text[14]="Do you think that AI Skills are mandatory for next-generation jobs? ";
        text[15]="Do you think artificial intelligence is likely to have a negative influence on the future of management? ";
        text[16]="Would you be interested in specializing in AI as part of your MBA program?";
        text[17]="Do you think that AI and related technologies will lead to the displacement of current jobs and workers?";
        text[18]="AI-related roles will require workers with a strong skill set and orientation in areas such as ethics, leadership, emotional intelligence, and change management. Are you preparing yourselves for these skill sets?";
        text[19]="Is artificial intelligence posing a threat to management studies?";
        text[20]="Do you trust AI to make significant decisions about your future/career?";

		for (let index = 1; index < text.length; index++) {
			console.log
			$("#text_"+(index)).text( text[index]);
			
			
		}

        // select question_1 as name,count(question_1) as y from surveytb GROUP by question_1;
        $(document).ready(function() {
			

		scount=0;
		var srdata=[];
		var lbdata=[];
		for(var l=1;l<=5;l++){
		var xhttp = getXHR();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
			var ardata = JSON.parse(this.responseText);
			scount++;
			// console.log(ardata);
			arobj.push(ardata)
			console.log(arobj);

		
		if(scount==5){


			for(var r=0;r<5;r++){

				for(var p=0;p<arobj[r].length;p++){

					console.log(r+":"+p);

					console.log(arobj[r][p].test);

					if(arobj[r][p].test==1){

						totalresponse=parseInt(arobj[r][p].totalresponse);

					}
					if(arobj[r][p].test==2){

						totaluniversity=parseInt(arobj[r][p].totaluniversity);

					} 
					if(arobj[r][p].test==3){

						todayresponse=parseInt(arobj[r][p].todayresponse);

					}
					if(arobj[r][p].test==4){

						for(var x=1;x<=5;x++){

							document.getElementById("time_"+x).innerHTML = arobj[r][x-1].taim;
							document.getElementById("word_"+x).innerHTML = arobj[r][x-1].firstname+" responded from "+arobj[r][x-1].universityname;

						}

					}

					if(arobj[r][p].test==5){

						// console.log("hello");

						srdata.push(parseInt(arobj[r][p].y));
						lbdata.push(arobj[r][p].uname);

					}

				}
			
		}
		
		
		var options0 = {
        series: srdata,
        chart: {
          type: 'donut',
			width: '100%',
      		height: 240
        },
		colors:['#4572A7', 
				'#AA4643', 
				'#89A54E', 
				'#80699B', 
				'#3D96AE', 
				'#DB843D', 
				'#92A8CD', 
				'#A47D7C', 
				'#B5CA92'],
		labels: lbdata,
		legend: {
		  show: true,
		  position: 'bottom',
      	  horizontalAlign: 'center', 
		},
		dataLabels: {
			enabled: false,
		  },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
          }
        }]
      };

      var chart = new ApexCharts(document.querySelector("#sales_chart"), options0);
      chart.render();

		var options = {
          series: [totalresponse,0],
          chart: {
          type: 'donut',
			 height: 140,
			  width: 140,
        },
		legend: {
      		show: false,
		},
		dataLabels: {
			enabled: false,
		  },
		plotOptions: {
			pie: {
			  customScale: 0.90,
			  donut: {
				size: '80%',
				  labels: {
					show: true,
					total: {
					  showAlways: true,
					  show: true,
					}
				  }
			  },
			  offsetY: 0,
			},
			stroke: {
			  colors: undefined
			}
		  },
		colors:['#3596f7', '#cce5ff'],
        };
        var chart = new ApexCharts(document.querySelector("#chart_41"), options);
        chart.render();
		var options1 = {
          series: [totaluniversity,0],
          chart: {
          type: 'donut',
			 height: 140,
			  width: 140,
        },
		legend: {
      		show: false,
		},
		dataLabels: {
			enabled: false,
		  },
		plotOptions: {
			pie: {
			  customScale: 0.90,
			  donut: {
				size: '80%',
				  labels: {
					show: true,
					total: {
					  showAlways: true,
					  show: true,
					}
				  }
			  },
			  offsetY: 0,
			},
			stroke: {
			  colors: undefined
			}
		  },
		colors:['#3596f7', '#cce5ff'],
        };
        var chart = new ApexCharts(document.querySelector("#chart_42"), options1);
        chart.render();

		var options2 = {
          series: [todayresponse,0],
          chart: {
          type: 'donut',
			 height: 140,
			  width: 140,
        },
		legend: {
      		show: false,
		},
		dataLabels: {
			enabled: false,
		  },
		plotOptions: {
			pie: {
			  customScale: 0.90,
			  donut: {
				size: '80%',
				  labels: {
					show: true,
					total: {
					  showAlways: true,
					  show: true,
					}
				  }
			  },
			  offsetY: 0,
			},
			stroke: {
			  colors: undefined
			}
		  },
		colors:['#3596f7', '#cce5ff'],
        };
        var chart = new ApexCharts(document.querySelector("#chart_43"), options2);
        chart.render();
		
	}
		
    		}
  		};
				xhttp.open("GET", "Backend/getdata?q=" + l+"&fun=spcharts", true);
				xhttp.send();
				
}


		var data;
            var count=0;
            var xmlhttp=[];
            for(var j=1;j<=20;j++){
            // xmlhttp[j] = new XMLHttpRequest();
            xmlhttp[j] = getXHR();
            xmlhttp[j].onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var ar = JSON.parse(this.responseText);
                //    console.log(ar);  
                    count++;
                    var objects=ar;
                    // console.log(count+":"+text[count]);
                    // console.log(objects);
                    for(var i = 0; i < objects.length; i++){
                    var obj = objects[i];
                    for(var prop in obj){
                        if(obj.hasOwnProperty(prop) && obj[prop] !== null && !isNaN(obj[prop])){
                            obj[prop] = +obj[prop];   
                        }
                    }
                    }
                // console.log(count);
                Highcharts.chart('container'+ar[0].test,{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: null,
                align: 'left'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
			colors: [
'#4572A7', 
'#AA4643', 
'#89A54E', 
'#80699B', 
'#3D96AE', 
'#DB843D', 
'#92A8CD', 
'#A47D7C', 
'#B5CA92'
],
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                },
				column: {
        colorByPoint: true
    }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data:objects
            }]
        });
                }
            };
            xmlhttp[j].open("GET", "Backend/getdata?q=" + j+"&fun=chart", true);
            xmlhttp[j].send();
}
		
		
	});

    </script>

	
</body>

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/crm2/horizontal/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jul 2022 11:16:56 GMT -->
</html>
