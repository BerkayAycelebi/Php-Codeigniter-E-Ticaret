	<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$ayarlar[0]->description?>">
	 <meta name="keywords" content="<?=$ayarlar[0]->keywords?>">
    <meta name="author" content="">
	<?php
	//var_dump($veriler);
	//exit();
	
	?>
    <title><?=$ayarlar[0]->malzeme_adi?></title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +90 555 555 55 55</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> balikmarketim@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=base_url()?>Home"><img src="<?=base_url()?>uploads/balık.png" alt="" /></a>
						</div>
					
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							   <?php 
								if($this->session->logged_in['adsoy']){
								
								?>
							
								<li><a href="<?=base_url()?>Home/account_show"><i class="fa fa-user"></i> <?=$this->session->logged_in['adsoy'];?></a></li>
								<?php }
								else{
								?>
							     <li><a href="<?=base_url()?>Home/login"><i class="fa fa-user"></i>Üye Ol</a></li>
								
								<?php }
								?>
								<?php 
								if($this->session->logged_in['id']){
								$query=$this->db->query("SELECT sum(piece) as cnt FROM basket WHERE customer_id=".$this->session->logged_in['id']);
							    $basket=$query->result();
								?>
								<li><a href="<?=base_url()?>Home/order_show"><i class="fa fa-shopping-cart"></i> Siparişlerim</a></li>
								<li><a href="<?=base_url()?>Home/basket_show">(<?=$basket[0]->cnt?>)Adet Ürün</a></li>
								<?php 
								}
								?>
								 <?php 
								if($this->session->logged_in['adsoy']){
								
								?>
							
								
								<li><a href="<?=base_url()?>/Home/logout"><i class="fa fa-lock"></i> Çıkış</a></li>
								<?php }
								else{
								?>
								<li><a href="<?=base_url()?>/Home/login"><i class="fa fa-lock"></i> Giriş Yap</a></li>
								<?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?=base_url()?>/Home" class="active">Anasayfa</a></li>
							
								<li><a href="<?=base_url()?>/Home/communication">İletişim</a></li>
								<li><a href="<?=base_url()?>/Home/about_us">Hakkımızda</a></li>
								<li><a href="<?=base_url()?>/Home/massage">Bize Yazın</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->


















