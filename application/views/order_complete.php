
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">SİPARİŞ ÖZETİ</h2>
						<?php 
					if($this->session->flashdata("result")){
					?>
                    <div class="alert alert-info text-left">
                      <b>İşlem:<?=$this->session->flashdata("result")?></b> 

                    </div>
                <?php 
					}
					?>
					  Değerli müşterimiz <?=$this->session->logged_in['adsoy']?>
					  Siparişiniz onaylanmıştır ürününüz 
					  enkısa sürede kargoya verilecektir.
					  Teşekkür Ederiz.
						
					</div><!--features_items-->
					
	
					
		
				</div>
			</div>
		</div>
	</section>
	