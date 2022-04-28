
      
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
               <H1>Siparişler</H1>
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
                                            <th>Sipariş ID</th>
                                            <th>Tarih</th>
											<th>Tutar</th>
											<th>Ad</th>
												<th>Soyad</th>
													<th>Adress</th>
														<th>Telefon</th>
														<th>Durum</th>
													    <th>Onaylama</th>
													     <th>Kargo</th>
											
											 
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
										<?php
										foreach($veri as $rs)
										{
									?>
										<tr class="odd gradeX">
                                            <td><?=$rs->Id?></td>
                                            <td><?=$rs->history?></td>
                                            <td><?=$rs->total?></td>
											 <td><?=$rs->name?></td>
											 <td><?=$rs->surname?></td>
											  <td><?=$rs->address?></td>
											   <td><?=$rs->phone?></td>
										
										   <td> <?=$rs->order_status?></td>
										   <td><a class="btn btn-round btn-success" href="<?=base_url()?>admin/home/order/<?=$rs->Id?>" >Onayla</a></td>
										     <td><a class="btn btn-round btn-success" href="<?=base_url()?>admin/home/order_cargo/<?=$rs->Id?>" >Kargoya Verildi</a></td>
										  
										  
                                            
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