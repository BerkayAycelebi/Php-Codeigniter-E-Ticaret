	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				
				
				
				<div class="col-sm-4" >
					<div class="login-form"><!--login form-->
						<h2>Giriş yapın</h2>
						<form action="<?=base_url()?>Home/login_action" method="post">
						    <input type="email" name ="email" placeholder="Email Adres" />
							<input type="password" name="password" placeholder="Şifre"/>
							
							<span>
								<input type="checkbox" class="checkbox"> 
								Beni Hatırla
							</span>
						  <input type="submit" class="btn btn-primary" value="Giriş" />
					
						</form>
					</div><!--/login form-->
				</div>
				
				
				
				<div class="col-sm-1">
					<h2 class="or">Ya da</h2>
				</div>
				
							
				
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->
						<h2>Yeni Üye!</h2>
						<form action="<?=base_url()?>/Home/register_action" method="post">
							<input type="text" name ="name" placeholder="İsim"/>
							<input type="text" name ="surname"  placeholder="soyisim"/>
							<input type="text" name ="phone"  placeholder="Telefon"/>
							<input type="email" name ="email"  placeholder="Email Adresi"/>
							<input type="password"name ="password"  placeholder="Şifre"/>
						    <input type="submit" class="btn btn-primary" value="KAYDET" />
							<?php 
					if($this->session->flashdata("result")){
					?>
                    <div class="alert alert-info text-left">
                      <b>İşlem:<?=$this->session->flashdata("result")?></b> 

                    </div>
                <?php 
					}?>
						</form>
					</div><!--/sign up form-->
				</div>
				
								
			</div>
		</div>
	</section><!--/form-->
	































