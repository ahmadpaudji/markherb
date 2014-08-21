		<ol class="breadcrumb">
		  <li class="active">Home</li>
		</ol>
	<div class="header_slide">
			<div class="header_bottom_left">				

				<div class="categories">
					  <ul>
					  	<h3>Categories</h3>
					      <li><a href="#">Mobile Phones</a></li>
					      <li><a href="#">Desktop</a></li>
					      <li><a href="#">Laptop</a></li>
					      <li><a href="#">Accessories</a></li>
					      <li><a href="#">Software</a></li>
					       <li><a href="#">Sports &amp; Fitness</a></li>
					       <li><a href="#">Footwear</a></li>
					       <li><a href="#">Jewellery</a></li>
					       <li><a href="#">Clothing</a></li>
					       <li><a href="#">Home Decor &amp; Kitchen</a></li>
					       <li><a href="#">Beauty &amp; Healthcare</a></li>
					       <li><a href="#">Toys, Kids &amp; Babies</a></li>
					</ul>
				</div>			
				
				<div class="clear"></div>
	  	     </div>
					<div class="header_bottom_right" style="margin-top:20px;">					 
					 	 
						<div id="dashboard-carousel" class="carousel slide" data-ride="carousel" style="height:445px;">
						  <!-- Indicators -->
						  <ol class="carousel-indicators" >
						  	<?php $i = 0; foreach($slides as $slide) : ?>
						  	<?php  if($i == 0) : ?>
						  	<li data-target="#dashboard-carousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
						  	<?php else : ?>
							<li data-target="#dashboard-carousel" data-slide-to="<?php echo $i; ?>" class=""></li>
						  	<?php endif; ?>
						  	
						  	<?php $i++; endforeach; ?>
						    
						    
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" style="">
							<?php $i = 0; foreach($slides as $slide) : ?>
						  	<?php  if($i == 0) : ?>
						  	<div class="item active" style="">

						  		<div class="row">
						  			
						  		</div>
						  		<div class="row" style="">
							  		<div class="col-md-7">
							  			<img src="<?php echo base_url(); ?>assets/slider/<?php echo $slide->img_slide; ?>" class="visible-sm visible-lg visible-md"/>
							  		</div>
							  		<div class="col-md-5">
							  			<h2 style="text-align:left"> <?php echo $slide->head_slide; ?></h2>
							  			<p>
							  				<?php echo $slide->body_slide; ?>
							  			</p>
							  		</div>
						  		</div>
						  	 
						  	</div>
						  	<?php else : ?>
							<div class="item" style="">

						  		<div class="row">
						  			
						  		</div>
						  		<div class="row">
							  		<div class="col-md-7">
							  			<img src="<?php echo base_url(); ?>assets/slider/<?php echo $slide->img_slide; ?>" class="visible-sm visible-lg visible-md"/>
							  		</div>
							  		<div class="col-md-5">
							  			<h2 style="text-align:left"> <?php echo $slide->head_slide; ?></h2>
							  			<p>
							  				<?php echo $slide->body_slide; ?>
							  			</p>
							  			
							  		</div>
						  		</div>
						  		
						  	</div>
						  	<?php endif; ?>
						  	
						  	<?php $i++; endforeach; ?>
						  

						  	


						  <!-- Controls -->
						 
						</div>

		      		</div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    <div class="content">
    	<div class="clear"></div>

		<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>

	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.html"><img src="<?php echo base_url(); ?>images/feature-pic1.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$620.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo base_url(); ?>images/feature-pic2.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$899.75</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo base_url(); ?>images/feature-pic3.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$599.00</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo base_url(); ?>images/feature-pic4.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$679.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>				     
				</div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.html"><img src="<?php echo base_url(); ?>images/new-pic1.jpg" alt="" /></a>					
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$849.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo base_url(); ?>images/new-pic2.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$599.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo base_url(); ?>images/new-pic4.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$799.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <a href="preview.html"><img src="<?php echo base_url(); ?>images/new-pic3.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>					 
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$899.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
			</div>
    </div>
 </div>
</div>
   					 