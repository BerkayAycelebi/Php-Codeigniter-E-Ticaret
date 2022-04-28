
      
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
                <?php 
					if($this->session->flashdata("result")){
					?>
                    <div class="alert alert-info text-left">
                      <b>İşlem:<?=$this->session->flashdata("result")?></b> 

                    </div>
                <?php 
					}
					?>dz
			    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th> Malzeme ID</th>
                                            <th>Malzeme Adı</th>
											<th>Malzeme Türü</th>
											  <th> Malzeme Miktarı</th>
											  <th>Malzeme Fiyatı</th>
											
											 
											
											
											 
											 
                                            
											 <th>Malzeme Resmi</th>
											  
											 <th>Galeri</th>
											 <th>Düzenle</th>
											 <th>Sil</th>
											 
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
										<?php
										foreach($veri as $rs)
										{
									?>
										<tr class="odd gradeX">
                                            <td><?=$rs->Id?></td>
                                            <td><?=$rs->malzeme_adi?></td>
                                          <td><?=$rs->malzeme_turu?></td>
										   <td><?=$rs->malzeme_miktari?></td>
										    <td><?=$rs->malzeme_fiyati?></td>
											
										
                                          <td>  
										  <a href="<?=base_url()?>admin/products/resimekle/<?=$rs->Id?>">
										  	<?php
											if($rs->malzeme_resmi==NULL){
											?>
											
										  <span  class="btn btn-round btn-success">Resim Ekle</span>
										  <?php
										}
										if($rs->malzeme_resmi!=NULL){
										  ?>
										  <img src = "<?=base_url()?>uploads/<?=$rs->malzeme_resmi?>"height="40" width="40">
										 <?php
										}
										 ?>
										 </a>
										  </td>
										  
										   <td> <a href="<?=base_url()?>admin/products/add_picture_gallery/<?=$rs->Id?>"><img "height="40" width="40" src = "<?=base_url()?>assets/admin/img/gallery.png"></a></td>
										  
											<td> <a class="btn btn-round btn-info" href="<?=base_url()?>admin/products/duzenle/<?=$rs->Id?>">Düzenle</a></td>
                                            <td> <a class="btn btn-round btn-danger" href="<?=base_url()?>admin/products/sil/<?=$rs->Id?>"onclick="return confirm('Silmek istediğinizden eminmisiniz?');">Sil</a></td>
									  </tr>
									  
									  <?php
										}
									  ?>
                                    </tbody>
                                </table>
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
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