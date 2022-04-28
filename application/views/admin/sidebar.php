
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="<?=base_url()?>assets/admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
				 
              	  <h5 class="centered">Hoş Geldiniz  <?=$this->session->logged_in['adsoy'];?></h5>
              	  	
                  <li class="mt">
                      <a class="" href="<?=base_url()?>admin/products/ekle">
                          <i class="fa fa-dashboard"></i>
                          <span>Malzeme Ekle</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?=base_url()?>admin/products/show" >
                          <i class="fa fa-desktop"></i>
                          <span>Malzemeleri Göster</span>
                      </a>
                  
                  </li>
				   <li class="sub-menu">
                      <a href="<?=base_url()?>admin/users/add_user" >
                          <i class="fa fa-desktop"></i>
                          <span>Kullanıcı Ekle</span>
                      </a>
                  
                  </li>
					<li class="sub-menu">
                      <a href="<?=base_url()?>admin/users/users_show" >
                          <i class="fa fa-desktop"></i>
                          <span>Kullanıcıları Göster</span>
                      </a>
                  
                  </li>
                  <li class="sub-menu">
                      <a href="<?=base_url()?>admin/home/about_us" >
                          <i class="fa fa-cogs"></i>
                          <span>Hakkımızda</span>
                      </a>
                   
                  </li>
                  <li class="sub-menu">
                      <a href="<?=base_url()?>admin/home/massage" >
                          <i class="fa fa-book"></i>
                          <span>Mesajlar</span>
                      </a>
                     
                  </li>
				  <li class="sub-menu">
                      <a href="<?=base_url()?>admin/home/communication" >
                          <i class="fa fa-book"></i>
                          <span>İletişim</span>
                      </a>
                     
                  </li>
				    <li class="sub-menu">
                      <a href="<?=base_url()?>admin/home/settings" >
                          <i class="fa fa-book"></i>
                          <span>Ayarlar</span>
                      </a>
                     
                  </li>
				  <li class="sub-menu">
                      <a href="<?=base_url()?>admin/home/show_order" >
                          <i class="fa fa-book"></i>
                          <span>Siparişler</span>
                      </a>
                     
                  </li>
                 
                
               
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->