
      
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
               <H1>KULLANICI LİSTELEME</H1>
			        <?php 
					if($this->session->flashdata("result")){
					?>
                    <div class="alert alert-info text-left">
                      <b>İşlem:<?=$this->session->flashdata("result")?></b> 

                    </div>
                <?php 
					}
					?>
			    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ADI</th>
                                            <th>SOYADI</th>
											<th>MAİL</th>
											  <th> YETKİ</th>
											  <th> DURUM</th>
											  <th>GÖSTER</th>
							                 <th>DÜZENLE</th>
											 <th>SİL</th>
											
											 
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
										<?php
										foreach($veri as $rs)
										{
									?>
										<tr class="odd gradeX">
                                            <td><?=$rs->name?></td>
                                            <td><?=$rs->surname?></td>
                                          <td><?=$rs->email?></td>
										   <td><?=$rs->authority?></td>
										    <td><?=$rs->status?></td>
                                            <td> <a class="btn btn-round btn-success" href="<?=base_url()?>admin/users/preview_action/<?=$rs->Id?>">GÖSTER</a>  </td>
											<td> <a class="btn btn-round btn-info" href="<?=base_url()?>admin/users/edit/<?=$rs->Id?>">DÜZENLE</a></td>
                                           <td> <a class="btn btn-round btn-danger" href="<?=base_url()?>admin/users/delete_action/<?=$rs->Id?>"onclick="return confirm('Silmek istediğinizden eminmisiniz?');">Sil</a></td>
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