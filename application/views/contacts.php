
<!--content -->
 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">İLETİŞİM </h2>    			    				    				
					
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Mesaj Formu</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" action="<?=base_url()?>Home/massage_action" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="isim" class="form-control" required="required" placeholder="Adınız">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="tel" class="form-control" required="required" placeholder="Telefon">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="mesaj" required="required" class="form-control" rows="8" placeholder="Mesajınız"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Mesaj Gönder">
								 <h3><?=$this->session->flashdata("mesaj_sent")?></h3>
				            </div>
				        </form>
	    			</div>
	    		</div>
	    	
    	</div>	
    </div><!--/#contact-page-->
			
				
				