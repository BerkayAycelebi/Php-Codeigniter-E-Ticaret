
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
      <section id="main-content">
          <section class="wrapper">
           <title> Kullanıcı Bilgileri</title>
              <div class="row">
                  <div class="col-lg-9 main-chart">
               <h2 class="title text-center">Kullanıcı Bilgileri</h2>
			      
					
			   

			   
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ADI</th>
											<td><?=$veri[0]->name?></td>
										</tr>	
										<tr>
                                            <th>SOYADI</th>
											<td><?=$veri[0]->surname?></td>
										</tr>	
										<tr>
											<th>MAİL</th>
											<td><?=$veri[0]->email?></td>
										</tr>
										<tr>
											 <th> YETKİ</th>
											 <td><?=$veri[0]->authority?> </td>
										</tr>
										<tr>
											 <th> DURUM</th>
											 <td><?=$veri[0]->status?></td>
										</tr>	
                                        
                                    </thead>
                                    <tbody>
                                        
									
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