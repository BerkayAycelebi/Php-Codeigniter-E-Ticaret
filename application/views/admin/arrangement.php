
      
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
               
			    <form action="<?=base_url()?>admin/products/duzenle_action/<?=$veri[0]->Id?>" method="POST" >
			Malzeme Adı : 
			<input type="text" name="ad" value="<?=$veri[0]->malzeme_adi?>" class="form-control" placeholder="ürün adı" /><br>
			Malzeme Türü : 
			<select class="form-control" name="tur">
			            <option selected ><?=$veri[0]->malzeme_turu?></option>
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
			Malzeme Fiyatı : 
			<input type="text" name="fiyat"  value="<?=$veri[0]->malzeme_fiyati?>"  class="form-control"  /><br>
			Malzeme Miktarı : 
			<input type="text" name="miktar"  value="<?=$veri[0]->malzeme_miktari?>"  class="form-control" /><br>
			Anahtar Kelime:<input type="text"  class="form-control" name="keywords" value="<?=$veri[0]->keywords?>"/><br>
			Tanım: <input type="text" class="form-control" value="<?=$veri[0]->description?>"name="description" /><br>
			Kısa açıklama:<input type="text" class="form-control" value="<?=$veri[0]->malzeme_kisaaciklama?>"name="malzeme_kisaaciklama" /><br>
			Durumu :<select class="form-control" name="status">
			             <option selected ><?=$veri[0]->status?></option>
						<option>Stokta Var</option>
						<option>Stokta Yok</option>
						
			Açıklama : 
			<textarea  name="aciklama"  class="form-control" rows="3"><?=$veri[0]->malzeme_aciklamasi?> </textarea><br>
			 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'aciklama' );
            </script>

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