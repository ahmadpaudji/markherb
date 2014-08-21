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
         					<a href="">Home</a> 
         										
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
            <div id="berita">
              
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-reorder"></i>Add Training</div>
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
                              <span>Add Training Success </span>
                           </div>
                           <?php else : ?>
                           <div class="alert alert-error">
                              <button class="close" data-dismiss="alert"></button>
                              <span>Add Training Failed</span>
                           </div>
                           <?php endif; ?>
      
                           <?php endif; ?>
                           
                        <?php echo validation_errors(); ?>
                        <!-- BEGIN FORM-->
                        <form id="training-form" action="<?php echo base_url(); ?>admin/training" method="POST" class="form-horizontal"  enctype="multipart/form-data">
                           
                           <div class="control-group">
                              <label class="control-label">Head</label>
                              <div class="controls">
                                 <input type="text" name="head" class="span6 m-wrap popovers" data-trigger="hover" data-content="Insert Your Training Header." />
                              </div>
                           </div>
                             
                           <div class="control-group">
                              <label class="control-label">Body</label>
                              <div class="controls">
                                 <textarea class="span12 ckeditor m-wrap popovers" id="body" name="body" data-trigger="hover" data-content="Insert Your Training Description" rows="6"  required>
                                   
                                 </textarea>
                              </div>
                           </div>
							
							<div class="control-group">
                              <label class="control-label">Duration</label>
                              <div class="controls">
                                 <input type="text" name="durasi" class="span6 m-wrap popovers" data-trigger="hover" data-content="Insert Your Training Duration." />
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

                   <div class="row-fluid">
                  <div class="span12">
                     
                     <div class="portlet box blue">
                        <div class="portlet-title">
                           <div class="caption"><i class="icon-calendar"></i>Training</div>
                           <div class="tools">
                              <a href="javascript:;" class="collapse"></a>
                              <a href="javascript:;" class="remove"></a>
                           </div>
                        </div>
                        <div class="portlet-body">
                           <?php if(count($training) > 0) :?>
                           <?php foreach($training as $t) : ?>
                           <div class="news-blocks">
                              <h3><a href=""><?php echo $t->head_training; ?></a></h3>
                              <div class="news-block-tags">
                              </div>
                              <p>
                                 <?php if(!is_null($t->img_training)) : ?>
                                 <img class="news-block-img pull-right" src="<?php echo base_url(); ?>assets/training/<?php echo $t->img_training; ?>" alt="">
                                 <?php endif;?>
                                 <?php echo $t->body_training; ?> 
                              </p>
                              <a href="<?php base_url(); ?>training/<?php echo $t->id_training; ?>" class="btn btn-primary blue">
                              Detail 
                              <i class="icon-eye-open"></i>                              
                              </a>  
                              <a href="<?php base_url(); ?>training/delete/<?php echo $t->id_training; ?>" class="btn btn-primary red">
                              Delete
                              <i class="icon-ban-circle"></i>                              
                              </a>  
                              <a href="<?php base_url(); ?>training/edit/<?php echo $t->id_training; ?>" class="btn btn-primary yellow">
                              EDIT
                              <i class="icon-ban-circle"></i>                              
                              </a>                                            
                           </div>
                           <?php endforeach; ?>
                           <?php else : ?>
                           
                           <h1 class="text-center"> 
                              No News Available
                           </h1>

                           <?php endif; ?>
                           

                          

                        </div>
                     </div>

                        
                     


                  </div>
               </div>
                  <script type="text/javascript">
                  $(function(){
                     $('#training-form').validate({
                        errorElement: 'label', //default input error message container
                        errorClass: 'help-inline', // default input error message class
                        focusInvalid: false, // do not focus the last invalid input
                        rules : {
                           head : {
                              required : true,
                              minlength : 10,
                              maxlength : 200
                           },
                           body : {
                              required : true,
                              minlength : 100,
                              maxlength : 5000
                           	},
                           	durasi : {
	                           	number : true,
	                           	minlength : 2,
	                           	maxlength : 2
                           	}
                        },
                        messages : {
                           head : {
                              required : "Training Tittle Is Required",
                              minlength : "Your Training tittle must have at least 5 characters",
                              maxlength : "your Training tittle must have maximum 20 characters. "
                           },
                           body : {
                              required : "Training Description Is Required",
                              minlength : "Your Training Description must have at least 10 characters",
                              maxlength : "your Training Description must have maximum 300 characters. "
                           },
                           durasi : {
                           	number : "Your Training Duration Must Be A Number Digits",
                           	minlength : 'Your Training duration must have at least 2 digit number',
                           	maxlength : 'Your Training duration must have maximum 2 digit number'
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