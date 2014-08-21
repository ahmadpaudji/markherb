      <link href="<?php echo base_url(); ?>assets/css/pages/news.css" rel="stylesheet" type="text/css"/>

      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>Widget Settings</h3>
            </div>
            <div class="modal-body">
               Widget settings form goes here
            </div>
         </div>
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
                  <!-- END BEGIN STYLE CUSTOMIZER -->    
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			         <h3 class="page-title">
							Slider<small>Configure your slideshow </small>
						</h3>
			         <ul class="breadcrumb">
				        <li>
         					<i class="icon-home"></i>
         					<a href="index.html">Home</a> 
         										
         					<i class="icon-angle-right"></i>
         									</li>
         								<li><a href="#">Slider</a></li>	
         						
         									<li class="pull-right no-text-shadow">
         						<div id="" class="">
         							<i class="icon-calendar"></i>
         							<span style="margin-right:30px;">16-August-2014</span>
         						</div>
					    </li>
						
			</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <div id="dashboard">
               <div class="row-fluid">
                  <div class="span6">
                     
                     <div class="portlet box blue">
                        <div class="portlet-title">
                           <div class="caption"><i class="icon-calendar"></i>Slide Show</div>
                           <div class="tools">
                              <a href="javascript:;" class="collapse"></a>
                              <a href="javascript:;" class="remove"></a>
                           </div>
                        </div>
                        <div class="portlet-body">
                           
                           <?php foreach($slides as $slide) : ?>
                           <div class="news-blocks">
                              <h3><a href="page_news_item.html"><?php echo $slide->head_slide; ?></a></h3>
                              <div class="news-block-tags">
                              </div>
                              <p>
                                 <?php if(!is_null($slide->img_slide)) : ?>
                                 <img class="news-block-img pull-right" src="<?php echo base_url(); ?>assets/slider/<?php echo $slide->img_slide; ?>" alt="">
                                 <?php endif;?>
                                 <?php echo $slide->body_slide; ?> 
                              </p>
                              <a href="<?php base_url(); ?>sliderpage/delete/<?php echo $slide->id_slide; ?>" class="btn btn-primary red">
                              Delete
                              <i class="icon-ban-circle"></i>                              
                              </a>                          
                           </div>
                           <?php endforeach; ?>
                           

                          

                        </div>
                     </div>

                        
                     


                  </div>

               <div class="span6">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-reorder"></i>Add Slide Show</div>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">  

                           <?php if(isset($confirm)) : ?>
                           
                           <?php if($confirm) : ?>
                           <div class="alert alert-success">
                              <button class="close" data-dismiss="alert"></button>
                              <span>Add Slide Show Success </span>
                           </div>
                           <?php else : ?>
                           <div class="alert alert-error">
                              <button class="close" data-dismiss="alert"></button>
                              <span>Add Slide Show Failed</span>
                           </div>
                           <?php endif; ?>
      
                           <?php endif; ?>
                           
                        
                        <!-- BEGIN FORM-->
                        <form id="slide-form" action="<?php echo base_url(); ?>admin/sliderpage" method="POST" class=""  enctype="multipart/form-data">
                           
                           <div class="control-group">
                              <label class="control-label">Head</label>
                              <div class="controls">
                                 <input type="text" name="head" class="span6 m-wrap popovers" data-trigger="hover" data-content="Insert Your Slide Show Header." />
                              </div>
                           </div>

                           <div class="control-group">
                              <label class="control-label">Body</label>
                              <div class="controls">
                                 <textarea name="body" class="span6 m-wrap popovers" data-trigger="hover" data-content="Insert Your Slide Show Description" rows="3"></textarea>
                              </div>
                           </div>
                           
                           <div class="control-group">
                              <label class="control-label">Image</label>
                              <div class="controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append"><div class="uneditable-input">
                                          <i class="icon-file fileupload-exists"></i> 
                                          <span class="fileupload-preview"></span>
                                       </div><span class="btn btn-file">
                                       <span class="fileupload-new">Select file</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input name="image" type="file" class="default" />
                                       </span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="form-actions">
                              <button type="submit" class="btn blue">Submit</button>
                           </div>
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <script type="text/javascript">
                  $(function(){
                     $('#slide-form').validate({
                        errorElement: 'label', //default input error message container
                        errorClass: 'help-inline', // default input error message class
                        focusInvalid: false, // do not focus the last invalid input
                        rules : {
                           head : {
                              required : true,
                              minlength : 5,
                              maxlength : 20
                           },
                           body : {
                              required : true,
                              minlength : 10,
                              maxlength : 300
                           }
                        },
                        messages : {
                           head : {
                              required : "Slide Show Tittle Is Required",
                              minlength : "Your slide show tittle must have at least 5 characters",
                              maxlength : "your slide show tittle must have maximum 20 characters. "
                           },
                           body : {
                              required : "Slide Show Description Is Required",
                              minlength : "Your slide show Description must have at least 10 characters",
                              maxlength : "your slide show Description must have maximum 300 characters. "
                           }
                        },

                        highlight: function (element) { // hightlight error inputs
                         $(element)
                           .closest('.control-group').addClass('error'); // set error class to the control group
                         },
                        success: function (label) {
                            label.closest('.control-group').removeClass('error');
                            label.remove();
                        },

                     })
                  });
                  </script>
                  
                     
                  
            </div><!-- END DASHBOARD STATS -->
         </div>
         <!-- END PAGE CONTAINER-->    
      </div>
      <!-- END PAGE -->
   </div>
</div>