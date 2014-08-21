 <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        	
         <ul>
				<li style='margin-bottom:30px;'>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				
				
                	        		
        		<li class="<?php if($pages == 'dashboard') : echo 'start active'; else : echo ""; endif;?>">
        			<a href="<?php echo base_url();?>admin">
						<i class="icon-home"></i> 
						<span class="title">Dashboard</span>
						<span class="selected"></span>
					</a>
				</li>

				
		        	        		
        		<li class="<?php if($pages == 'profilepage' || $pages == 'slide' || $pages == 'news' || $pages == 'training') : echo 'start active'; else : echo ""; endif;?>">
        			<a href="javascript:;">
						<i class="icon-cogs"></i> 
						<span class="title">Content</span>					
							<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li class="<?php if($pages == 'slide'): echo "active"; else : echo ''; endif; ?>">
							<a href="<?php echo base_url(); ?>admin/sliderpage">
								Slider
							</a>
						</li>
						<li class="<?php if($pages == 'profilepage'): echo "active"; else : echo ''; endif; ?>">
							<a href="<?php echo base_url(); ?>admin/profilepage">
								Profile
							</a>
						</li>
						<li class="<?php if($pages == 'news'): echo "active"; else : echo ''; endif; ?>">
							<a href="<?php echo base_url(); ?>admin/news">
								News
							</a>
						</li>
						<li class="<?php if($pages == 'training'): echo "active"; else : echo ''; endif; ?>">
							<a href="<?php echo base_url(); ?>admin/training">
								Training
							</a>
						</li>
					</ul>
				</li>

				
			</ul>
		<!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->