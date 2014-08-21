	<div class="main" id="news">
    	<div class="content">
    		

    		<?php foreach($news as $n) : ?>
    		<?php if($n->img_berita != NULL) : ?>
    		<div class="image group">
				<div class="grid images_3_of_1">
					<img src="<?php echo base_url(); ?>assets/news/<?php echo $n->img_berita; ?>" alt="" />
				</div>
				<div class="grid news_desc">
					<a style="text-decoration:none;"href="<?php base_url(); ?>news/<?php echo $n->id_berita; ?>"><h3><?php echo $n->head_berita;?> </h3></a>
					<h4>Posted on Aug 13th, 2013 </h4>
					<p>
						<?php echo substr($n->body_berita,0,500); ?>
					</p>

			   </div>
		   </div>
			<?php else : ?>
			<div class="image group">
				<div class="grid images_3_of_3">
					<a style="text-decoration:none;"href="<?php base_url(); ?>news/<?php echo $n->id_berita; ?>"><h3><?php echo $n->head_berita;?> </h3></a>
					<h4>Posted on Aug 1st, 2013  <span></span></h4>
					<p>
						<?php echo substr($n->body_berita,0,500); ?>
					</p>
					
			   </div>
		   </div>
			<?php endif; ?>
    		<?php endforeach; ?>
    		

		   

		   <div class="content-pagenation">
						<li><a href="#">Frist</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><span>....</span></li>
						<li><a href="#">Last</a></li>
						<div class="clear"> </div>
					</div>	
         </div> 
    </div>
 </div>