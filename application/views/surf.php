
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Surf Kamışlar</h2>
						
						<?php
					
						foreach($veri as $rs){
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img height="200" width="100" src="<?=base_url()?>uploads/<?=$rs->malzeme_resmi?>" alt="" />
											<h2><?=$rs->malzeme_fiyati?>.TL</h2>
											<p><?=$rs->malzeme_adi?></p>
											<a href="<?=base_url()?>Home/detail/<?=$rs->Id?>"" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Daha Fazla Bilgi</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?=$rs->malzeme_fiyati?>.TL</h2>
												<p><?=$rs->malzeme_adi?></p>
												<a href="<?=base_url()?>Home/detail/<?=$rs->Id?>"" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Daha Fazla Bilgi</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
									
										<li><a href="<?=base_url()?>Home/detail/<?=$rs->Id?>"><i class="fa fa-plus-square"></i>Detay</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php
						}
						?>
						
						
					</div><!--features_items-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	