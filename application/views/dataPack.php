<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html>
<head>
	<title>307035513</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (307035513.png) -->
<!-- Save for Web Slices (307035939.png) -->
<div class="page-wrapper">
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
						<a class="js-arrow"  onclick="showDashboard(this);">
							<img width="20px" style="margin-right: 10px;" src="<?php echo base_url(); ?>public/images/icon/Dashboard.svg">DASHBOARD</a>
					</li>
					<li >
						<a href="#">
							<img width="20px" style="margin-right: 10px;" src="<?php echo base_url(); ?>public/images/icon/plans.png">PLANS</a>
					</li>
					<li>
						<a href="#">
							<img width="20px" style="margin-right: 10px;" src="<?php echo base_url(); ?>public/images/icon/con1.svg">CONNECTION</a>
					</li>
					<li>
						<a href="#">
							<img width="20px" style="margin-right: 10px;" src="<?php echo base_url(); ?>public/images/icon/history.svg">HISTORY</a>
					</li>
					<li class="active-navbar">
						<a href="#">
							<img width="20px" style="margin-right: 10px;" src="<?php echo base_url(); ?>public/images/icon/subscribe.svg">SUBSCRIBERS</a>
					</li>
				</ul>
			</nav>
		</div>
	</aside>
	<!-- END MENU SIDEBAR-->
	<!-- PAGE CONTAINER-->
	<div class="page-container">
		<header class="header-desktop">
		</header>
		<!-- MAIN CONTENT-->
		<div class="main-content">
			<div class="section__content section__content--p30">
				<div class="subscribers-view" >
					<table class="table">
						<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Ipaddress</th>
							<th>Create date</th>
							<th>Active date</th>
						</tr>
						</thead>
						<tbody class="body-table">

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT-->
		<!-- END PAGE CONTAINER-->
	</div>
</div>
<style>
	body{
		overflow-x: hidden;
	}
	table{
		margin: 0 auto;
	}
	#Table_login input[type="text"] {
		width: 407px;
		height: 42px;
	}
	#Table_plan_modal #btn-next {
		background: url("<?php echo base_url(); ?>public/images/307035939_38.png") no-repeat scroll 0 0 transparent;
		color: #000000;
		cursor: pointer;
		font-weight: bold;
		height: 43px;
		width: 103px;
		border: none;
	}
	#Table_plan_mai{
		margin: 0 auto;
		width: 100%;
		height: 100%;
	}
	.view-step1{
		background: url("<?php echo base_url(); ?>public/images/step2.png") no-repeat scroll 0 0 transparent;
		width: 100%;
		height: 690px;
	}
	.view-step2{
		background: url("<?php echo base_url(); ?>public/images/step3.png") no-repeat scroll 0 0 transparent;
		width: 100%;
		height: 850px;
	}
</style>
<style>
	.item > .btn-angle-down	{
		position: absolute;
		right: 45px;
		z-index: 100;
		padding: 10px;
	}
	ul {
		list-style-type: none;
	}
	.page-container {
		background: #ffffff;
		padding-left: 201px;
	}
	.navbar-sidebar .navbar__list li a {
		font-size: 14px;
	}
	.menu-sidebar{
		width: 201px;
	}
	.menu-sidebar .logo {
		height: 66px;
	}
	.header-desktop{
		background: url("<?php echo base_url(); ?>public/images/icon/header.jpg") no-repeat scroll 0 0 transparent;
		left: 201px;
		height: 65px;
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
		margin-left: 40px;
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
		top: 55%;
		bottom: 0;
		left:40px;
		height: 3.5em;
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
		padding-left: 20px;
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
		background-color: #f2f2f2;
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
		height: 271px;
	}
	.btn-next-cancel #btn-cencel{
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
	.wrap-codes .form-check .radio:last-child{
		border-bottom: 0;
	}
	.form-control{
		font-size: 0.83em;
	}
	.active-navbar{
		background-color: #00b5e9;
	}
	.isp-code-content{
		display: grid| inline-grid;
		grid-template-columns: repeat(2,1fr);
	}
	.isp-code-content .col-md-6{
		width: 100%;
	}
</style>
<!-- Jquery JS-->
<!-- Jquery JS-->
<script src="<?php echo base_url(); ?>public/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url(); ?>public/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url(); ?>public/vendor/slick/slick.min.js">
</script>
<script src="<?php echo base_url(); ?>public/vendor/wow/wow.min.js"></script>
<!--<script src="--><?php //echo base_url(); ?><!--public/vendor/animsition/animsition.min.js"></script>-->
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
		showSubscriber();
	})
	function showSubscriber() {
		$(".body-table").empty();
		$.ajax({
			ty1e: "GET",
			url: "<?php echo base_url(); ?>index.php/welcome/getall",
			dataType: 'json',
			success : function (res) {
				var data = [];
				$.each(res, function (index, value) {
					var trEl = $('<tr></tr>');
					var liIndexEl = $('<td></td>');
					liIndexEl.text(index+1);
					var liCodeEl = $('<td></td>');
					liCodeEl.text(value.code);
					var liIpEl = $('<td></td>');
					liIpEl.text(value.ipaddress);
					var liCeateEl = $('<td></td>');
					liCeateEl.text(value.createddate);
					var liAdateEl = $('<td></td>');
					liAdateEl.text(value.activedate);
					trEl.append(liIndexEl);
					trEl.append(liCodeEl);
					trEl.append(liIpEl);
					trEl.append(liCeateEl);
					trEl.append(liAdateEl);
					data.push(trEl);
				});
				$(".body-table").append(data);
			}
		});
	}
</script>
</body>
</html>
