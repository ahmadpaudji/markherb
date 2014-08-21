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
							News <small>Change your Article/News </small>
						</h3>
			         <ul class="breadcrumb">
				        <li>
         					<i class="icon-home"></i>
         					<a href="<?php base_url();?>admin">Home</a> 
         					<i class="icon-angle-right"></i>
         				</li>
         				<li>
                        <a href="<?php base_url();?>admin/news">News </a>
                        <i class="icon-angle-right"></i>
                     </li>	
                     <li>
                        <a href="<?php base_url();?>admin/news"><?php echo $news->head_berita; ?></a>
                     </li> 
         						
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
                        <div class="caption"><i class="icon-reorder"></i>Add Article/News</div>
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
                              <span>Add Article/News Success </span>
                           </div>
                           <?php else : ?>
                           <div class="alert alert-error">
                              <button class="close" data-dismiss="alert"></button>
                              <span>Add Article/News Failed</span>
                           </div>
                           <?php endif; ?>
      
                           <?php endif; ?>
                           
                        <?php echo validation_errors(); ?>
                        <!-- BEGIN FORM-->
                        <form id="news-form" action="<?php echo base_url(); ?>admin/news/edit/<?php echo $id_berita; ?>" method="POST" class="form-horizontal"  enctype="multipart/form-data">
                           
                           <div class="control-group">
                              <label class="control-label">Head</label>
                              <div class="controls">
                                 <input type="text" name="head" class="span6 m-wrap popovers" data-trigger="hover" data-content="Insert Your Article/News Header." value="<?php echo $news->head_berita; ?>"/>
                              </div>
                           </div>
                             
                           <div class="control-group">
                              <label class="control-label">Body</label>
                              <div class="controls">
                                 <textarea class="span12 ckeditor m-wrap popovers" id="body" name="body" data-trigger="hover" data-content="Insert Your Article/News Description" rows="6"  required>
                                   <?php  echo $news->body_berita; ?>
                                 </textarea>
                              </div>
                           </div>
                           
                           <div class="control-group">
                              <label for="" class="control-label">
                                    Current Image
                              </label>
                              <div class="controls">
                                 <div class="fileupload-preview" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                           <img src="<?php echo base_url(); ?>assets/news/<?php echo $news->img_berita; ?>" style="max-height:150px"/>
                                        </div>   
                              </div>
                              
                           </div>
                           
                           
                           <div class="control-group">
                              <label class="control-label">Image</label>
                              <div class="controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">

                                    <div class="input-append"><div class="uneditable-input">
                                          <i class="icon-file fileupload-exists"></i> 
                                          <span class="fileupload-preview"></span>
                                       </div>
                                        

                                          <span class="btn btn-file">
                                          <span class="fileupload-new">Select file</span>
                                          <span class="fileupload-exists">Change</span>
                                          <input name="image" type="file" class="default" />
                                          </span>
                                          <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
<!--
                           <div class="control-group">
                              <label class="control-label">Image Upload</label>
                              <div class="controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                 </div>
                                 <span class="label label-important">NOTE!</span>
                                 <span>
                                 Attached image thumbnail is
                                 supported in Latest Firefox, Chrome, Opera, 
                                 Safari and Internet Explorer 10 only
                                 </span>
                              </div>
                           </div>-->


                           <div class="form-actions">
                              <button type="submit" class="btn blue">Submit</button>
                           </div>
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <script type="text/javascript">
                  $(function(){
                     $('#news-form').validate({
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
                           }
                        },
                        messages : {
                           head : {
                              required : "Article/News Tittle Is Required",
                              minlength : "Your Article/News tittle must have at least 5 characters",
                              maxlength : "your Article/News tittle must have maximum 20 characters. "
                           },
                           body : {
                              required : "Article/News Description Is Required",
                              minlength : "Your Article/News Description must have at least 10 characters",
                              maxlength : "your Article/News Description must have maximum 300 characters. "
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