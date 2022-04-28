<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Resim</td>
							<td class="description"></td>
							<td class="price">Fiyat</td>
							<td class="quantity">Miktar</td>
							<td class="total">Toplam Fiyat</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
					$tot=0;
					foreach($veri as $rs){
					
					?>
						<tr>
							<td class="cart_product">
								<a href=""><img height="100" width="100" src="<?=base_url()?>uploads/<?=$rs->picture?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$rs->malzeme_adi?></a></h4>
								<p> ID: <?=$rs->Id?></p>
							</td>
							<td class="cart_price">
								<p><?=$rs->malzeme_fiyati?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" readonly type="text" name="quantity" value="<?=$rs->piece?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
								<?php 
								$total=$rs->piece*$rs->malzeme_fiyati;
								echo "$total TL";	
                                $tot=$tot+$total;								
								?>
								
								
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?=base_url()?>Home/delete_basket/<?=$rs->Id?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        
					<?php 
					}
					?>
					
					</tbody>
							<?php 
					if($this->session->flashdata("result")){
					?>
                    <div class="alert alert-info text-left">
                      <b>İşlem:<?=$this->session->flashdata("result")?></b> 

                    </div>
                <?php 
					}?>
					
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="form-one">
								<form action ="<?=base_url()?>Home/order_complete" method="post">
									<input type="text" name="email"  value="<?=$veriler[0]->email?>" placeholder="Email">
									<input type="text" name="phone" value="<?=$veriler[0]->phone?>" placeholder="Telefon">
									<input type="text" name="name" value="<?=$veriler[0]->name?>" placeholder="Adınız">
									<input type="text" name="surname" value="<?=$veriler[0]->surname?>" placeholder="Soyadınız">
									<input type="text" placeholder="Kart Numarası ">
									<input type="text" placeholder="Son Kullanma Tarihi">
									<input type="text" placeholder="CVV Kodu">
									<input type="text" name="city" placeholder="İl">
									<input type="text" name="district" placeholder="İlçe">
									<input type="text" name="address"placeholder="Adres">
									<input type="text" name ="total"value=" <?php echo"$tot" ?>.TL">
									<input class="btn btn-primary"  type="submit" value="Sipariş Ver">
								
								</form>
							</div>
		</div>
	</section><!--/#do_action-->
