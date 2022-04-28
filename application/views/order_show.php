
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Siparişlerim</h2>
						
						<div class="container">
						  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sipariş ID</th>
                                            <th>Tarih</th>
											<th>Tutar</th>
											<th>Sipariş Durumu</th>
											
											 
											 
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
										   <td><?=$rs->order_status?></td>
										    
                                            
									  </tr>
									  
									  <?php
										}
									  ?>
                                    </tbody>
                                </table>
						
						</div>
						
						
						
						
						
						
						
						
						
						
						
						
					</div><!--features_items-->
					
	
					
		
				</div>
			</div>
		</div>
	</section>
	