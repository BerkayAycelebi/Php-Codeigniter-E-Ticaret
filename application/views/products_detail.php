<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?=base_url()?>uploads/<?=$veri[0]->malzeme_resmi?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="">
									<?php
						foreach($verilerim as $rs){
						?>
										<div class="col-sm-4">
										<img height="200" width="100" src="<?=base_url()?>uploads/<?=$rs->picture?>">
										</div>
										
										
						<?php
						}
						
						?>		
									</div>

								
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<form action="<?=base_url()?>Home/add_basket/<?=$veri[0]->Id?>" method="post">
								<input type="hidden" name="picture" value="<?=$veri[0]->malzeme_resmi?>">
								<h2><input readonly type="text" name="name" value="<?=$veri[0]->malzeme_adi?>" /></h2>
								
							<label><h2>Fiyat:</h2></label>
								<span>
								
									 <label><h2><?=$veri[0]->malzeme_fiyati?>.TL</h2></label>
									<label>Adet:</label>
									<input type="text" name="piece" value="1" />
									<button type="sumbit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Sepete Ekle
									</button>
									</form>
								</span>
								<p><b>Adet</b> <?=$veri[0]->malzeme_miktari?></p>
								<p><b>Stok Durumu</b> <?=$veri[0]->status?></p>
								
								
							</div><!--/product-information-->
						</div>
						
							<div class="col-sm-12" id="reviews" >
								<div class="col-sm-12">
									<p><b>AÇIKLAMA</b></p>
									<?=$veri[0]->malzeme_aciklamasi?>
									
								</div>
							</div>
					</div><!--/product-details-->