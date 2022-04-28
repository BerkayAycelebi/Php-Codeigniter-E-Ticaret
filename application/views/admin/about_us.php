
      <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                 <H1>Hakkımızda Ekleme Sayfası</h1>
				    <?php 
					if($this->session->flashdata("result")){
					?>
                    <div class="alert alert-info text-left">
                      <b>İşlem:<?=$this->session->flashdata("result")?></b> 

                    </div>
                <?php 
					}
					?>
				 <form action="<?=base_url()?>admin/home/about_us_action/<?=$veri[0]->Id?>" method="POST" >
			
			<textarea  name="aciklama" id="aciklama"  class="form-control" rows="15"><?=$veri[0]->aboutus?> </textarea><br>
			<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'aciklama' );
            </script>

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