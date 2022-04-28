
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
      <section id="main-content">
          <section class="wrapper">
           <title> Kullanıcı Ekleme Sayfası</title>
              <div class="row">
                  <div class="col-lg-9 main-chart">
				  <h1>KULLANICI EKLEME SAYFASI</h1>
                 <form action="<?=base_url()?>admin/users/add_user_action" method="post">
				Kullanıcı Adı:<input type="text" class="form-control" name="name" /><br>
			 Kullanıcı Soyadı:<input type="text" class="form-control" name="surname" /><br>
				  Mail Adresi:<input type="mail" class="form-control" name="mail" /><br>
					    Şifre:<input type="password" class="form-control" name="password" /><br>
					    Yetki: <select class="form-control" name="authority">
						
						<option>admin</option>
						<option>üye</option>
						
						
						
					</select><br>
					Durum: <select class="form-control" name="status">
						
						<option>onaylı</option>
						<option>beklemede</option>
						<option>engelli</option>
						
						
						
					</select><br>
				
				
				
			
				<input type="submit" class="btn btn-primary" value="KAYDET" />
				</form>
                  	<div class="row mtbox">
                  	
                  		
                  		
                  	</div><!-- /row mt -->	
                  
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      
                      	

                      	
					
                      	

                    </div><!-- /row -->
                    
                    				
					<div class="row">
					
						
						
						
					
					</div><!-- /row -->
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
            
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