<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Dashboard</title>

	<!-- Fontfaces CSS-->
	<link href="<?php echo base_url(); ?>public/css/font-face.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="<?php echo base_url(); ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="<?php echo base_url(); ?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="<?php echo base_url(); ?>public/css/theme.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/src/ipInput.css">
</head>

<body class="animsition">
<div class="page-wrapper">
	<!-- HEADER MOBILE-->
	<header class="header-mobile d-block d-lg-none">
		<div class="header-mobile__bar">
			<div class="container-fluid">
				<div class="header-mobile-inner">
					<a class="logo" href="index.html">
						<img src="<?php echo base_url(); ?>public/images/icon/logo.png" alt="CoolAdmin" />
					</a>
					<button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
					</button>
				</div>
			</div>
		</div>
		<nav class="navbar-mobile">
			<div class="container-fluid">
				<ul class="navbar-mobile__list list-unstyled">
					<li class="has-sub">
						<a class="js-arrow" href="#">
							<i class="fas fa-tachometer-alt"></i>DASHBOARD</a>
					</li>
					<li>
						<a href="#">
							<i class="fas fa-chart-bar"></i>PLANS</a>
					</li>
					<li>
						<a href="#">
							<i class="fas fa-table"></i>CONNECTION</a>
					</li>
					<li>
						<a href="#">
							<i class="far fa-check-square"></i>HISTORY</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- END HEADER MOBILE-->

	<!-- MENU SIDEBAR-->
	<aside class="menu-sidebar d-none d-lg-block">
		<div class="logo">
			<a href="#">
				<img src="<?php echo base_url(); ?>public/images/icon/logo.png" alt="Cool Admin" />
			</a>
		</div>
		<div class="menu-sidebar__content js-scrollbar1">
			<nav class="navbar-sidebar">
				<ul class="list-unstyled navbar__list">
					<li >
						<a class="js-arrow" href="#">
							<i class="fas fa-tachometer-alt"></i>DASHBOARD</a>
					</li>
					<li class="active-navbar">
						<a href="#">
							<i class="fas fa-chart-bar"></i>PLANS</a>
					</li>
					<li>
						<a href="#">
							<i class="fas fa-table"></i>CONNECTION</a>
					</li>
					<li>
						<a href="#">
							<i class="far fa-check-square"></i>HISTORY</a>
					</li>
				</ul>
			</nav>
		</div>
	</aside>
	<!-- END MENU SIDEBAR-->

	<!-- PAGE CONTAINER-->
	<div class="page-container">
		<!-- HEADER DESKTOP-->
		<header class="header-desktop">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="header-wrap">
						<form class="form-header" action="" method="POST">
							<input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
							<button class="au-btn--submit" type="submit">
								<i class="zmdi zmdi-search"></i>
							</button>
						</form>
						<div class="header-button">
							<div class="noti-wrap">
								<div class="noti__item js-item-menu">
									<i class="zmdi zmdi-notifications"></i>
									<span class="quantity">3</span>
									<div class="notifi-dropdown js-dropdown">
										<div class="notifi__title">
											<p>You have 3 Notifications</p>
										</div>
										<div class="notifi__item">
											<div class="bg-c1 img-cir img-40">
												<i class="zmdi zmdi-email-open"></i>
											</div>
											<div class="content">
												<p>You got a email notification</p>
												<span class="date">April 12, 2018 06:50</span>
											</div>
										</div>
										<div class="notifi__item">
											<div class="bg-c2 img-cir img-40">
												<i class="zmdi zmdi-account-box"></i>
											</div>
											<div class="content">
												<p>Your account has been blocked</p>
												<span class="date">April 12, 2018 06:50</span>
											</div>
										</div>
										<div class="notifi__item">
											<div class="bg-c3 img-cir img-40">
												<i class="zmdi zmdi-file-text"></i>
											</div>
											<div class="content">
												<p>You got a new file</p>
												<span class="date">April 12, 2018 06:50</span>
											</div>
										</div>
										<div class="notifi__footer">
											<a href="#">All notifications</a>
										</div>
									</div>
								</div>
							</div>
							<div class="account-wrap">
								<div class="account-item clearfix js-item-menu">
									<div class="image">
										<img src="<?php echo base_url(); ?>public/images/icon/avatar-01.jpg" alt="John Doe" />
									</div>
									<div class="content">
										<a class="js-acc-btn" href="#">Ban Vien</a>
									</div>
									<div class="account-dropdown js-dropdown">
										<div class="info clearfix">
											<div class="image">
												<a href="#">
													<img src="<?php echo base_url(); ?>public/images/icon/avatar-01.jpg" alt="John Doe" />
												</a>
											</div>
											<div class="content">
												<h5 class="name">
													<a href="#">Ban Vien</a>
												</h5>
												<span class="email">banvien@banvien.com</span>
											</div>
										</div>
										<div class="account-dropdown__body">
											<div class="account-dropdown__item">
												<a href="#">
													<i class="zmdi zmdi-account"></i>Account</a>
											</div>
											<div class="account-dropdown__item">
												<a href="#">
													<i class="zmdi zmdi-settings"></i>Setting</a>
											</div>
											<div class="account-dropdown__item">
												<a href="#">
													<i class="zmdi zmdi-money-box"></i>Billing</a>
											</div>
										</div>
										<div class="account-dropdown__footer">
											<a href="#">
												<i class="zmdi zmdi-power"></i>Logout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- HEADER DESKTOP-->

		<!-- MAIN CONTENT-->
		<div class="main-content">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="message">
								<?php
								if($this->session->flashdata('message')) echo '<div class="alert alert-success" >'.$this->session->flashdata('message').'</div>';
								?>
							</div>
							<div class="card">
								<div class="card-header">
									<strong class="card-title" v-if="headerText">Plans</strong>
									<button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#mediumModal">
										<i class="zmdi zmdi-plus"></i>add plan</button>
								</div>
								<div class="card-body">
									<ul>
										<li class="item">
												<div class="btn-angle-down"><i class="fa fa-angle-down"></i></div>
												<div class="div-alt-content none">
													<div class="item-icon-none">
														<img src="https://www.computerhouse.com/wp-content/uploads/2017/04/servers-icon.png" alt="">
													</div>
													<div class="item-text">
														<div class="plan-name">HA NOI CAMPUS</div>
														<div class="plan-info-txt">Insert QoS bash script with input params from plan data
														</div>
														<div class="connction-added">1 connection added</div>
													</div>
													<div class="item-btn">
														<a href=""><i class="fa fa-plus-square"></i>Connection</a>
														<a href=""><i class="fa fa-trash"></i>Delete</a>
													</div>
												</div>
												<ul class="item-sub-plan">
													<li>
														<div class="div-alt">
															<div class="div-alt-content">
																<div class="item-icon">
																	<img src="https://www.timg.com/wp-content/uploads/2015/12/cloud-connect-icon.png" alt="">
																</div>
																<div class="item-text">
																	<div class="plan-name">S1 SYDNEY</div>
																	<div class="plan-info-txt">Insert QoS bash script with input params from plan data
																	</div>

																</div>
																<div class="item-btn">
																	<a href=""><i class="fa fa-trash"></i>Delete</a>
																</div>
															</div>
														</div>
													</li>
													<li>
														<div class="div-alt">
															<div class="div-alt-content">
																<div class="item-icon">
																	<img src="https://www.timg.com/wp-content/uploads/2015/12/cloud-connect-icon.png" alt="">
																</div>
																<div class="item-text">
																	<div class="plan-name">S2 SYDNEY</div>
																	<div class="plan-info-txt">Insert QoS bash script with input params from plan data
																	</div>
																</div>
																<div class="item-btn">
																	<a href=""><i class="fa fa-trash"></i>Delete</a>
																</div>
															</div>
														</div>
													</li>
												</ul>
										</li>
										<li class="item">
											<div class="btn-angle-down"><i class="fa fa-angle-down"></i></div>
											<div class="div-alt-content none">
												<div class="item-icon-none">
													<img src="https://www.computerhouse.com/wp-content/uploads/2017/04/servers-icon.png" alt="">
												</div>
												<div class="item-text">
													<div class="plan-name">BINH PHUOC CAMPUS</div>
													<div class="plan-info-txt">Insert QoS bash script with input params from plan data
													</div>
													<div class="connction-added">1 connection added</div>
												</div>
												<div class="item-btn">
													<a href=""><i class="fa fa-plus-square"></i>Connection</a>
													<a href=""><i class="fa fa-trash"></i>Delete</a>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="btn-angle-down"><i class="fa fa-angle-down"></i></div>
											<div class="div-alt-content none">
												<div class="item-icon-none">
													<img src="https://www.computerhouse.com/wp-content/uploads/2017/04/servers-icon.png" alt="">
												</div>
												<div class="item-text">
													<div class="plan-name">HO CHI MINH CAMPUS</div>
													<div class="plan-info-txt">Insert QoS bash script with input params from plan data
													</div>
													<div class="connction-added">1 connection added</div>
												</div>
												<div class="item-btn">
													<a href=""><i class="fa fa-plus-square"></i>Connection</a>
													<a href=""><i class="fa fa-trash"></i>Delete</a>
												</div>
											</div>
											<ul class="item-sub-plan">
												<li>
													<div class="div-alt">
														<div class="div-alt-content">
															<div class="item-icon">
																<img src="https://www.timg.com/wp-content/uploads/2015/12/cloud-connect-icon.png" alt="">
															</div>
															<div class="item-text">
																<div class="plan-name">T1 SYDNEY</div>
																<div class="plan-info-txt">Insert QoS bash script with input params from plan data
																</div>
															</div>
															<div class="item-btn">
																<a href=""><i class="fa fa-trash"></i>Delete</a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="copyright">
								<p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT-->
		<!-- END PAGE CONTAINER-->
	</div>

	<!-- modal medium -->
	<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="mediumModalLabel">ADD NEW PLANS</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<form action="<?php echo base_url(); ?>" method="post" class="row m-t-25" id="formsubmit">
							<input type="text" hidden="hidden" name="crudaction" value="insert">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-6">
										<label for="location" class="control-label mb-1">Location</label>
										<select name="location" id="location" class="form-control" disabled = "disabled">
											<option value="0">Please select</option>
											<option value="1">HCM</option>
											<option value="2">Hà Nội</option>
											<option value="3">Bình Phước</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label for="form-check" class="control-label mb-1">ISP</label>
										<div class="wrap-isps col-md-12 row">
											<div class="form-check" >
												<div class="radio">
													<img width="40%" src="http://congtrinhviettel.com.vn/images/viettel.png" alt="">
													<span>Viettel</span>
													<input type="radio" checked id="Viettel" name="isps" value="Viettel" disabled = "disabled">
												</span>
												</div>
												<div class="radio">
													<img width="40%" src="https://fpt.vn/assets/frontend/img/icon/logo.png">
													<span>FPT Telecom</span>
													<input type="radio" id="FPT" name="isps" value="FPT" disabled = "disabled">
												</div>
												<div class="radio">
													<img width="40%" src="http://nhasachgiaoduc.vn/images/hinhanhchung/brasol.vn-logo-mobifone-brasol.vn-logo-mobifone-mobifone-logo.svg-.png">
													<span>Mobifone</span>
													<input type="radio" id="Mobifone" name="isps" value="Mobifone" disabled = "disabled">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 container">
										<label for="form-check" class="control-label mb-1">Deicated Bandwidth</label>
										<div class="wrap-codes col-md-12 row">
											<div class="col-md-6">
												<div class="form-check">
													<div class="radio">
														<label for="code0.5">1/1Mbps</label>
														<input type="radio" id="code0.5" name="code" value="1/1Mbps">
													</div>
													<div class="radio">
														<label for="code0.5">2/2Mbps</label>
														<input type="radio" id="code0.6" name="code" value="2/2Mbps">
													</div>
													<div class="radio">
														<label for="code0.5">3/3Mbps</label>
														<input type="radio" id="code0.7" name="code" value="3/3Mbps">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check">
													<div class="radio">
														<label for="code1.5">4/4Mbps</label>
														<input type="radio" id="code1.5" name="code" value="4/4Mbps">
													</div>
													<div class="radio">
														<label for="code1.5">5/5Mbps</label>
														<input type="radio" id="code1.6" name="code" value="5/5Mbps">
													</div>
													<div class="radio">
														<label for="code1.5">6/6Mbps</label>
														<input type="radio" id="code1.7" name="code" value="6/6Mbps">
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="plan-name" class="control-label mb-1">Plan name</label>
											<input id="plan-name" disabled = "disabled" placeholder="Enter plan name" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
											<span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group ">
													<label for="date-active" class="control-label mb-1">Date Active</label>
													<input id="date-active" name="date-active"
														   type="date" class="form-control cc-number identified visa">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="option-item" class="control-label mb-1">Choose item</label>
													<select name="option-item" id="option-item" class="form-control" disabled = "disabled">
														<option value="0">Please select</option>
														<option value="1">3 Months</option>
														<option value="2">6 Months</option>
														<option value="3">12 Months</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="ipaddress" class="control-label mb-1">Ip</label>
											<div id="ip"></div>
											<input id="ipaddress" name="ipaddress" pattern="" hidden="hidden"
												   type="tel" >
											<span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
										</div>

									</div>
									<div class="col-md-2">

									</div>

								</div>
								<div class="row plan-info">
									<div class="col-md-1 plan-info-icon">
										<i class="zmdi zmdi-view-agenda"></i>
									</div>
									<div class="col-md-10">
										<h5 id="title-plan-end">Plan name</h5> <p id="refix-end">unknown</p>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
						<div class="col-md-8 ">
							<div class="monthly-rate">
								<h5>MONTHLY RATE: 420.00 USD</h5> <span>(Price Excludes Tax)</span>
							</div>
						</div>
						<div class="col-md-4 btn-next-cancel">
							<button class="btn btn-primary" id="btn-next">
								NEXT
							</button>
							<button class="btn btn-warning" data-dismiss="modal" id="btn-cencel">
								CANCEL
							</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal medium -->
</div>
<style>
	.item {
		padding: 10px 0;
	}
	.item > .btn-angle-down	{
		position: absolute;
		right: 45px;
		z-index: 100;
	}
	ul {
		list-style-type: none;
	}
	.item ul {
		padding: 0;
		margin: 0;
		list-style-type: none;
		position: relative;
	}
	.item li {
		list-style-type: none;
		border-left: 2px solid #00b5e9;
		margin-left: 4%;
	}
	.item li .div-alt {
		padding: 0.2em 0.5em 0.2em 3em;
		position: relative;
	}
	.item li .div-alt::before {
		content:'';
		position: absolute;
		top: 0;
		left: -2px;
		bottom: 50%;
		width: 3.2em;
		border: 2px solid #00b5e9;
		border-top: 0 none transparent;
		border-right: 0 none transparent;
	}
	.item ul > li:last-child {
		border-left: 2px solid transparent;
	}
	.div-alt-content{
		border: 1px solid #00b5e9;
		border-radius: 5px;
		display: flex;
		background-color: white;
	}
	.div-alt-content.none{
		border: 0;
		display: flex;
		background-color: transparent;
		position: relative;
	}

	.div-alt-content .item-icon-none{
		padding: 10px 1px;
		text-align: center;
		flex: 0.4;
		position: relative;
	}
	.div-alt-content .item-icon-none img{
		width: 50px;
	}
	.div-alt-content .item-icon-none.active-tree::before {
		content:'';
		position: absolute;
		top: 70%;
		bottom: 0;
		left:40px;
		height: 3em;
		border: 2px solid #00b5e9;
		border-top: 0 none transparent;
		border-right: 0 none transparent;
		border-bottom: 0 none transparent;
	}
	.div-alt-content .item-icon{
		padding: 10px 1px;
		text-align: center;
		flex: 0.4;
	}
	.div-alt-content .item-icon img{
		width: 40px;
	}
	.div-alt-content .item-text{
		padding: 10px;
		flex: 3;
	}
	.div-alt-content .item-text .plan-name{
		font-weight: bold;
	}
	.div-alt-content .item-text .plan-info-txt{
		font-size: 12px;
	}
	.div-alt-content .item-text .connction-added{
		font-size: 12px;
		color: #00a2e3;
	}
	.div-alt-content .item-btn{
		padding: 20px;
		flex: 1.5;
	}
	.div-alt-content .item-btn i{
		padding: 5px;
	}
	.div-alt .div-alt-content .item-btn a{
		padding-left: 90px;
	}
	.item-sub-plan{
		display: none;
	}

	strong {
		font-size: 2em;
	}
	.js-scrollbar1{
		background-color: #003B74;
	}
	.navbar-sidebar{
		padding: 0 !important;
	}
	.navbar-sidebar .navbar__list li a {
		color: white !important;
		padding: 15px 25px;
	}
	.navbar-mobile-sub__list {
		display: none;
		padding-left: 30px;
		background: #00a2e3;
	}
	.item i.zmdi-chevron-down {
		float: right;
		font-size: 25px;
		padding: 0 10px;
	}
	.btn-down{
		overflow: auto;
	}
	.item{
		background-color: gainsboro;
		margin-bottom: 10px;
	}
	.item-content-icon-left{
		text-align: center;
		font-size: 2.5em;
	}
	.btn-conn-del i{
		font-size: 1.7em;
		padding-right: 5px;
	}
	.btn-conn-del a{
		padding: 5px;
	}
	.sub-items{
		overflow: auto;
		padding: 10px;
	}
	.sub-items .item-content-icon-left{
		display: inline-block;
		padding: 10px;
	}
	.sub-items .item-content-center{
		display: inline-block;
		padding: 10px;
	}
	.sub-items .btn-conn-del{
		display: inline-block;
		padding: 10px;
		float: right;
	}
	.sub-item-content{
		background-color: white;
		border: 2px solid green;
		float: right;
		border-radius: 10px;
	}
	.card-header button{
		float: right;
	}
	.ip-input-container {
		width: 100%;
	}
	.ip-input-container .ip-input-item {
		width: 24%;
		font-size: 15px;
	}
	.plan-info{
		padding: 15px 0;
	}
	.plan-info-icon i{
		font-size: 2.5em;
	}
	.monthly-rate h5{
		display: inline-block;
		color: #00ad5f;
	}
	.wrap-codes, .wrap-isps{
		border: 1px solid grey;
	}
	.wrap-codes.row {
		margin-left: 0;
	}
	.wrap-isps.row{
		margin-left: 0;
	}
	.btn-next-cancel #btn-next, #btn-cencel{
		float: right;
		margin-left: 10px;
	}
	.form-check{
		padding-left : 0;
		vertical-align: middle;
	}
	.form-check img{
		margin-right : 15px;
	}
	.form-check input[type="radio"]{
		margin: 5px;
		float: right;
	}
	.form-check .radio{
		vertical-align: middle;
		 padding: 5px;
		border-bottom: 1px solid grey;
	}
	.form-check .radio:last-child{
		border-bottom: 0;
	}
	.form-control{
		font-size: 0.83em;
	}
	.active-navbar{
		background-color: #00b5e9;
	}
</style>
<!-- Jquery JS-->
<script src="<?php echo base_url(); ?>public/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url(); ?>public/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url(); ?>public/vendor/slick/slick.min.js">
</script>
<script src="<?php echo base_url(); ?>public/vendor/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/animsition/animsition.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?php echo base_url(); ?>public/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?php echo base_url(); ?>public/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/select2/select2.min.js">
</script>

<script src="<?php echo base_url(); ?>public/src/ipInput.js"></script>
<!-- Main JS-->
<script src="<?php echo base_url(); ?>public/js/main.js"></script>

<script>
	$(document).ready(function () {
		var data = [];
		var ipInput = $('#ip').ipInput();
		$('#btn-next').click(function () {
			$('#ipaddress').val(ipInput.getIp());
			var model = validateform();
			console.log(model);
			if(!model['error']){
				$('#formsubmit').submit();
			}else{
				alert(model['message'].join('\n'));
			}
		});
		function validateform() {
			var model = [];
			model['error'] = false;
			model['message'] = [];
			if(data['code'] === undefined || data['code'] === ''){
				model['error'] = true;
				model['message'].push('Code is empty');
			}if($('#ipaddress').val() === undefined || $('#ipaddress').val() === ''){
				model['error'] = true;
				model['message'].push('Ip address is empty');
			}if($('#date-active').val() === undefined || $('#date-active').val() === ''){
				model['error'] = true;
				model['message'].push('Date active is empty');
			}
			return model;
		}
		$('#location').change(function () {
			data['location'] = $(this).find('option:selected').text();
			changeObject(data);
		});
		$('#option-item').change(function () {
			data['option-item'] = $(this).find('option:selected').text();
			changeObject(data);
		});
		$('input:radio[name=code]').change(function () {
			data['code'] = $(this).val();
			changeObject(data);
		});
		$('input:radio[name=isps]').change(function () {
			data['isps'] = $(this).val();
			changeObject(data);
		});
		$('#plan-name').on('input',function () {
			data['plan-name'] = $(this).val();
			changeObject(data);
		});
		$('#ipaddress').on('input',function () {
			data['ipaddress'] = $(this).val();
			changeObject(data);
		});
		function changeObject(data) {
			$('#title-plan-end').text(data['plan-name']);
			$('#refix-end').text(data['code']);
			// $('#refix-end').text(data['code'] + ', ' + data['option-item'] + ', ' + data['isps'] + ', ' + data['location'] );
		}
		$('.btn-angle-down').click(function () {
			var parrent = $(this).parent();
			var icon = $(this).find('i');
			if(parrent.find('.item-sub-plan').length > 0){
				var img_none = parrent.find('.item-icon-none');
				if(img_none.hasClass('active-tree')){
					img_none.removeClass('active-tree');
					icon.removeClass('fa-angle-up');
					icon.addClass('fa-angle-down');
				}else{
					img_none.addClass('active-tree');
					icon.addClass('fa-angle-up');
					icon.removeClass('fa-angle-down')
				}
				parrent.find('.item-sub-plan').toggle();
			}
			return;
		});
	})

</script>
</body>

</html>
<!-- end document-->

