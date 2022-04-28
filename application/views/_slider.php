<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						
						<div class="carousel-inner">
						
					 <div class="item active">
								<div class="col-sm-6">
									<h1><?=$veri[0]->malzeme_adi?></h1>
									<h2><?=$veri[0]->malzeme_fiyati?>.TL</h2>
									<p><?=$veri[0]->malzeme_kisaaciklama?></p>
									<a class="btn btn-default get" href="<?=base_url()?>Home/detail/<?=$veri[0]->Id?>">Detay</a>
									
								</div>
								<div class="col-sm-6">
									<img src="<?=base_url()?>uploads/<?=$veri[0]->malzeme_resmi?>" class="girl img-responsive" alt="" />
									
								</div>
							</div> 
							
							<?php 
							$sql="SELECT Id FROM malzemeler";
							$query=$this->db->query($sql);
							//int a =$query->num_rows();
					 //foreach($veri as $rs) {
						 for($i=1 ;$i<$query->num_rows();$i++){
						 ?>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><?=$veri[$i]->malzeme_adi?></h1>
									<h3><?=$veri[$i]->malzeme_fiyati?>.TL</h3>
									<p><?=$veri[$i]->malzeme_kisaaciklama?> </p>
									<a class="btn btn-default get" href="<?=base_url()?>Home/detail/<?=$veri[$i]->Id?>">Detay</a>
								</div>
								<div class="col-sm-6">
									<img src="<?=base_url()?>uploads/<?=$veri[$i]->malzeme_resmi?>" class="girl img-responsive" alt="" />
									
								</div>
							</div>
					 <?php
					 }
					 ?>
							
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->