
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
      <section id="main-content">
          <section class="wrapper">
           <title> Resim Ekleme Sayfası</title>
              <div class="row">
                  <div class="col-lg-9 main-chart">
          <div class="alert alert-info"><h4>Resim Ekleme Sayfası</h4></div>
							     
		 <h3  ><?=$veri[0]->malzeme_adi?></h3>
			 <?php
			  if($veri[0]->malzeme_resmi!=NULL){
			  ?>
			  
			  <img src = "<?=base_url()?>uploads/<?=$veri[0]->malzeme_resmi?>"height="100" width="100">
			   <?php
			  }
			  ?>
			  
			  
			 <form action="<?=base_url()?>admin/products/resimekle_action/<?=$Id?>"method="post" enctype="multipart/form-data">
			Yükleyeceğiniz resmi seçiniz:
			<input type="file" name="dosyaadi" id="dosyaadi"> <br>
			<input type="submit" value="Resim Yükle" name="submit">
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