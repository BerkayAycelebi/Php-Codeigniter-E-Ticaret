<section id="do_action">
		<div class="container">
			<div class="form-one">
			                     <H2>HESABIM</H2>
								<form action ="<?=base_url()?>/Home/account_update" method="post">
									<input type="text" name="name"value="<?=$veri[0]->name?>" placeholder="Adınız">
									<input type="text" name="surname" value="<?=$veri[0]->surname?>" placeholder="Soyadınız">
									<input type="text" name="email" value="<?=$veri[0]->email?>" placeholder="Email">
									<input type="text" name="password" value="<?=$veri[0]->password?>" placeholder="Şifre">
									<input type="text" name="phone" value="<?=$veri[0]->phone?>" placeholder="Telefon ">
									<input type="text" name="status" value="<?=$veri[0]->status?>" placeholder="Durum">
									
									<input class="btn btn-primary"  type="submit" value="GÜNCELLE">
								
								</form>
							</div>
		</div>
	</section><!--/#do_action-->