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

				<li class="<?php if($pages == 'news') : echo 'start active'; else : echo ""; endif;?>">
        			<a href="<?php echo base_url();?>admin/news">
						<i class="icon-home"></i> 
						<span class="title">Article</span>
						<span class="selected"></span>
					</a>
				</li>

				<li class="<?php if($pages == 'training') : echo 'start active'; else : echo ""; endif;?>">
        			<a href="<?php echo base_url();?>admin/training">
						<i class="icon-home"></i> 
						<span class="title">Training</span>
						<span class="selected"></span>
					</a>
				</li>

				
		        	        		
        		<li class="<?php if($pages == 'profilepage' || $pages == 'slide' || $pages == 'testimony' || $pages == 'question' || $pages == 'shipping' || $pages == 'payment') : echo 'start active'; else : echo ""; endif;?>">
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
						<li class="<?php if($pages == 'question'): echo "active"; else : echo ''; endif; ?>">
							<a href="<?php echo base_url(); ?>admin/question">
								FAQ
							</a>
						</li>
						<li class="<?php if($pages == 'shipping'): echo "active"; else : echo ''; endif; ?>">
							<a href="<?php echo base_url(); ?>admin/shipping">
								Shipping
							</a>
						</li>
						<li class="<?php if($pages == 'payment'): echo "active"; else : echo ''; endif; ?>">
							<a href="<?php echo base_url(); ?>admin/payment">
								Payment
							</a>
						</li>

					</ul>
				</li>

				
			</ul>
		<!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->