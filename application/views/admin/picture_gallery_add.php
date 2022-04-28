
      
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
          <div class="alert alert-info"><h4>Resim Ekleme Galerisi</h4>
		  
		  </div>
			<?php 
					if($this->session->flashdata("result")){
					?>
                    <div class="alert alert-info text-left">
                      <b>İşlem:<?=$this->session->flashdata("result")?></b> 

                    </div>
                <?php 
					}
					?>				     
		 <h3  ><?=$veri[0]->malzeme_adi?></h3>
			  <?php
			  if($veri[0]->malzeme_resmi!=NULL){
			  ?>
			  
			  <img src = "<?=base_url()?>uploads/<?=$veri[0]->malzeme_resmi?>"height="100" width="100">
			   <?php
			  }
			  ?>
			  
			 <form action="<?=base_url()?>admin/products/add_picture_gallery_action/<?=$veri[0]->Id?>"method="post" enctype="multipart/form-data">
			Yükleyeceğiniz resmi seçiniz:
			<input type="file" name="dosyaadi" id="dosyaadi"> <br>
			<input type="submit" value="Resim Yükle" name="submit">
		    </form>
		   
			   <?php
			  // var_dump($veriler);
	           // exit();
			   ?>
		 <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Gallery</h3>
          	<hr>
				<div class="row mt">
				
									 <?php
			foreach($veriler as $rs) {
				
				
				
			
			  ?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
			  
						<div class="project-wrapper">
						
		                    <div class="project">
			
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="<?=base_url()?>uploads/<?=$rs->picture?>"><img height="200" width="200"src = "<?=base_url()?>uploads/<?=$rs->picture?>"></a>
		                            </div>
		                            <div class="overlay"></div>
									
		                        </div>
							
		                    </div>
		                   <a class="btn btn-danger" href="<?=base_url()?>/admin/products/delete_gallery_picture/<?=$veri[0]->Id?>/<?=$rs->Id?>">Sil</a>
			  
		                </div>
		
					</div><!-- col-lg-4 -->
																					<?php
		}
		?>
				</div><!-- /row -->
			  </section>
			  </section>
		 
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