	<div class="main" id="news">
    	<div class="content">
    		

    		
    		<?php if($training->img_training != NULL) : ?>
    		<div class="image group">
				<div class="grid images_3_of_1">
					<img src="<?php echo base_url(); ?>assets/training/<?php echo $training->img_training; ?>" alt="" />
				</div>
				<div class="grid news_desc">
					<h3><?php echo $training->head_training;?> </h3>
					<h4>Training Duration : <?php echo $training->durasi_training;?> </h4>
					<p>
						<?php echo $training->body_training; ?>
					</p>

			   </div>
		   </div>
			<?php else : ?>
			<div class="image group">
				<div class="grid images_3_of_3">
					<a style="text-decoration:none;"href="<?php base_url(); ?>news/<?php echo $training->id_training; ?>"><h3><?php echo $training->head_training;?> </h3></a>
					<h4>Training Duration : <?php echo $training->durasi_training;?>  <span></span></h4>
					<p>
						<?php echo $training->body_training; ?>
					</p>
					
			   </div>
		   </div>
			<?php endif; ?>
    		
    		

		   

		
         </div> 
    </div>
 </div>