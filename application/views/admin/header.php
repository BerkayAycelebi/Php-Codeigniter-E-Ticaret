<!DOCTYPE html>
<?php
if ($this->session->logged_in['yetki']!='admin')
{ 
	redirect(base_url()."admin/login_action");
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?=$title?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url()?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet">
 <link href="<?=base_url()?>assets/admin/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
 <script src="<?=base_url()?>assets/admin/js/sweetalert.min.js"></script>
										<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/sweetalert.css">

    <script src="<?=base_url()?>assets/admin/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?=base_url()?>admin/home" class="logo"><b>ADMIN PANEL</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                  
                    <!-- settings end -->
					<?php
					$m=$this->db->query("SELECT * FROM massage");
					//$data["query"]=$query->result();
					$veri=$m->num_rows();
					?>
										
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme"><?=$veri?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green"> <?=$veri?> Mesajınız Var</p>
                            </li>
							<?php
							$query=$this->db->query("SELECT * FROM massage ORDER BY Id LIMIT 4");
							$data["mesaj"]=$query->result();
							foreach($data["mesaj"] as $rs){
							?>
                            <li>
                                <a href="<?=base_url()?>admin/home/massage">
                                    <span class="photo"><img alt="avatar" src="<?=base_url()?>assets/admin/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from"><?=$rs->name?></span>
                                    <span class="time"><?=substr($rs->history,0,10)?></span>
                                    </span>
                                    <span class="message">
                                        <?=substr($rs->massage,0,35).'...<br>'?>
                                    </span>
                                </a>
                            </li>
							<?php
							}
							?>
                            <li>
                                <a href="<?=base_url()?>admin/home/massage">Tüm mesajları gör...</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?=base_url()?>admin/login_action/logout">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->