
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
      <section id="main-content">
          <section class="wrapper">
           <title> Düzenleme Sayfası</title>
              <div class="row">
                  <div class="col-lg-9 main-chart">
               <?php 
					if($this->session->flashdata("result")){
					?>
                    <div class="alert alert-info text-left">
                      <b>İşlem:<?=$this->session->flashdata("result")?></b> 

                    </div>
                <?php 
					}
					?>
			    <form action="<?=base_url()?>admin/home/settings_action/<?=$veri[0]->Id?>" method="POST" >
			Malzeme Adı : <input type="text" name="malzeme_adi" value="<?=$veri[0]->malzeme_adi?>" class="form-control" /><br>
		Anahtar Kelimeler : <input type="text" name="keywords" value="<?=$veri[0]->keywords?>" class="form-control" /><br>
		Tanım : <input type="text" name="description" value="<?=$veri[0]->description?>" class="form-control" /><br>
		SmtpServer : <input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>" class="form-control" /><br>
		Smtppoint : <input type="text" name="smtppoint" value="<?=$veri[0]->smtppoint?>" class="form-control" /><br>
		SmtpMail : <input type="text" name="smtpmail" value="<?=$veri[0]->smtpmail?>" class="form-control" /><br>
		Şifre: <input type="password" name="password" value="<?=$veri[0]->password?>" class="form-control" /><br>
		Şehir : <input type="text" name="city" value="<?=$veri[0]->city?>" class="form-control" /><br>
		Adress : <input type="text" name="address" value="<?=$veri[0]->address?>" class="form-control" /><br>
		Telefon : <input type="text" name="tel" value="<?=$veri[0]->tel?>" class="form-control" /><br>
		Fax : <input type="text" name="fax" value="<?=$veri[0]->fax?>" class="form-control" /><br>
		Facebook : <input type="text" name="facebook" value="<?=$veri[0]->facebook?>" class="form-control" /><br>
	
			
			<input type="submit" class="btn btn-primary" value="KAYDET" />
		</form>
			   
			   
                  	<div class="row mtbox">
                  	
                  		ggg
                  		
                  		
                  	</div><!-- /row mt -->	
                  
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      
                      	

                      	
					
                      	

                    </div><!-- /row -->
                    
                    				
					<div class="row">
					
						
						
						
					
					</div><!-- /row -->
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
              aaaaaaaaa
                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
  
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->