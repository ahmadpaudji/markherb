	<div class="main" id="news">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>training">Training</a></li>
		  	<li class="active"><?php echo $news->head_berita; ?></li>
		</ol>
    	<div class="content">
    		

    		
    		<?php if($news->img_berita != NULL) : ?>
    		<div class="image group">
				<div class="grid images_3_of_1">
					<img src="<?php echo base_url(); ?>assets/news/<?php echo $news->img_berita; ?>" alt="" />
				</div>
				<div class="grid news_desc">
					<h3><?php echo $news->head_berita;?> </h3>
					<h4>Posted on Aug 13th, 2013 </h4>
					<p>
						<?php echo substr($news->body_berita,0,500); ?>
					</p>

			   </div>
		   </div>
			<?php else : ?>
			<div class="image group">
				<div class="grid images_3_of_3">
					<a style="text-decoration:none;"href="<?php base_url(); ?>news/<?php echo $news->id_berita; ?>"><h3><?php echo $news->head_berita;?> </h3></a>
					<h4>Posted on Aug 1st, 2013  <span></span></h4>
					<p>
						<?php echo substr($news->body_berita,0,500); ?>
					</p>
					
			   </div>
		   </div>
			<?php endif; ?>
    		
    		

		   

		
         </div> 
    </div>
 </div>