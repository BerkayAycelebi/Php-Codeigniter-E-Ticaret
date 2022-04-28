
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                 	 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                <th data-field="id" >Adı Soyadı</th>
						        <th data-field="name">Email</th>
						        <th data-field="price">Telefonu </th>
								<th data-field="price">Mesaj</th>
								<th data-field="price">Tarih</th>
								<th data-field="price">Durum</th>
								<th data-field="price">Oku</th>
								<th data-field="price">Sil</th>	
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
										<?php
										foreach($veri as $rs)
										{
									?>
								<td><?=$rs->name?></td>
						        <td><?=$rs->email?></td>
								<td><?=$rs->phone?></td>
						        <td><?php
							echo substr("$rs->massage",0,10)."...<br>"
												?></td>
								
								
								<td><?=$rs->history?></td>
								<td><?=$rs->status?></td>
								
								
								<td><a class="btn btn-round btn-success" onclick="swal('Mesaj','<?=$rs->massage?>','success');"   >Oku</a></td>
								<td><a class="btn btn-round btn-danger" href="<?=base_url()?>admin/home/massage_delete/<?=$rs->Id?>" onclick="return confirm('Silmek İstediğinizden Eminmisiniz?');">Sil</a></td>						
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