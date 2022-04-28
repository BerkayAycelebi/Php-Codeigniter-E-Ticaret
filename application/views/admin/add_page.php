
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
      <section id="main-content">
          <section class="wrapper">
           <title> Ekleme Sayfası</title>
              <div class="row">
                  <div class="col-lg-9 main-chart">
                 <form action="<?=base_url()?>admin/products/ekle_action" method="post">
				Adı:<input type="text" class="form-control" name="ad" /><br>
				Fiyatı:<input type="text" class="form-control" name="fiyat" /><br>
				Miktarı:<input type="text" class="form-control" name="miktar" /><br>
				Anahtar Kelime:<input type="text" class="form-control" name="keywords" /><br>
				Tanım:<input type="text" class="form-control" name="description" /><br>
				Kısa açıklama:<input type="text" class="form-control" name="malzeme_kisaaciklama" /><br>
				Durumu :<select class="form-control" name="status">
						<option>Stokta Var</option>
						<option>Stokta Yok</option>
						
						
						
					</select><br>
				Türü: <select class="form-control" name="tur">
						<optgroup label="Olta Kamışı">
						<option>Göl Kamışı</option>
						<option>Surf Kamış</option>
						<option>Spin Kamış</option>
						<option>Sazan Kamışı</option>
						<optgroup label="Olta Makinesi">
						<option>Jigging Makina</option>
						<option>Spin Makina</option>
						<option>Çıkrık Makina</option>
						<option>Sazan Makinası</option>
						<optgroup label="Suni Yem">
						<option>Lüfer Ve Turna Kaşıkları</option>
						<option>Döner Kaşıklar </option>
						<option>Rapala </option>
						<optgroup label="Diğerleri">
						<option>Kurşunlar </option>
						<option>İğneler </option>
						<option>Misinalar </option>
						
						
					</select><br>
			
			
				Açıklama:<textarea class="form-control" rows="3"name="aciklama"></textarea>
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