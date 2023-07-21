<?php


$msg=$this->session->flashdata('msg');

if(isset($msg)){

echo "<script>alert('$msg');</script>";

}



function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    // Update your secret key before use
    $secret_key = '$7PHKqGt$yRlPjyt89rds4ioSDsglpk/';
    // Update your secret iv before use
    $secret_iv = '$QG8$hj7TRE2allPHPlBbrthUtoiu23bKJYi/';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

// if(isset($success)){

// echo "<script>alert('$success')</script>";

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="https://crm-admin-dashboard-template.multipurposethemes.com/images/favicon.ico">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet"> -->

    <!-- Vendors Style-->
	<link rel="stylesheet" href="src/css/vendors_css.css">
	  
      <!-- Style-->    
      <link rel="stylesheet" href="src/css/horizontal-menu.css"> 
      <link rel="stylesheet" href="src/css/style.css">
      <link rel="stylesheet" href="src/css/skin_color.css">

    <title>University</title>

</head>

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

    <div class="content-wrapper">
        <div class="container-fluid">
		    <div class="row">

                <div class="col-xl-6 col-12">
                <div id="wizard_container">
					    <div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form id="wrapped" action="<?=base_url('Backend/insertuniversity')?>" method="POST" enctype="multipart/form-data">
							<!-- <input id="website" name="website" type="text" value=""> -->
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question">Please fill with your details</h3>
									<div class="form-group">
										<input type="text" name="universityname" class="form-control required" placeholder="University Name">
									</div>
									<div class="form-group">
										<textarea  class="form-control required" name="description" placeholder="Description"></textarea>
									</div>
                                    <div class="form-group">
										<input type="file" name="logo" class="form-control required">
									</div>
									
                                    <div class="form-group">
										<input type="submit" name="submit" class="btn btn-success">
									</div>
                                    
								</div>


    						</div>
					    </form>
    			    </div>   
                </div>
                <div class="col-xl-6 col-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>UNIVERSITY</th>
                            <th>DESCRIPTION</th>
                            <th>LOGO</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php  
                
                            // $qry="select * from university";

                            // $res=mysqli_query($mysqli,$qry);
                            // $json = json_encode($res);

                            foreach($university as $value) 
                            {  
									// $original_string = $value['id'];

									$original_string = $value->id;
									
									$encrypted_string = encrypt_decrypt('encrypt', $original_string);  

                            ?>

                                    <tr>
                                        <td><?=$value->universityname?></td>
                                        <td><?=$value->description?></td>
                                        <td><img src="<?=$value->logoupload?>" height=50px; width=50px;></td>
                                        <td><a class="copy_text" href="<?=base_url()?>.?id=<?=$encrypted_string?>">Copy Link</a></td>
                                    </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>
				</div>
			    
			   
                
            </div>
    </div>	
	</div>
	</div>
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

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
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
<script> 
$(document).ready(function(){
  new DataTable('#example');
});
    
</script>
<script>
$('.copy_text').click(function (e) {
   e.preventDefault();
   var copyText = $(this).attr('href');

   document.addEventListener('copy', function(e) {
      e.clipboardData.setData('text/plain', copyText);
      e.preventDefault();
   }, true);

   document.execCommand('copy');  
   console.log('copied text : ', copyText);
   alert('copied text: ' + copyText); 
 });
</script>
</body>
</html>


<?php

// if(isset($_POST['submit'])){


// 	$universityname=$_POST['universityname'];
// 	$description=$_POST['description'];                                    
// 	$folder='images/';
// 	$file=$folder.basename($_FILES['logo']['name']);
// 	move_uploaded_file($_FILES['logo']['tmp_name'],$file);

// 	$qry="insert into university(universityname,description,logoupload)values('$universityname','$description','$file')";



// 	$res=mysqli_query($mysqli,$qry);
	
// 	if($res)
// 	{
		
// 	   echo '<script>alert("success");</script>';
// 	   echo '<script>window.location="./university.php"</script>';

//    }
//    else 
//    {
// 		echo '<script>alert(" Sorry some error occured");</script>';
	   
// 	}

// }


?>