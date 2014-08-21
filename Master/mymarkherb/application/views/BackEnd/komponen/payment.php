
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
                     Payment <small> Configure Your Payment Page </small>
                  </h3>
                  <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a> 
                                       
                        <i class="icon-angle-right"></i>
                                    </li>
                                 <li><a href="#">Payment</a></li>  
                           
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
                     <div class="span12">
                        <div class="portlet box blue">
                           
                     <div class="portlet-title">
                              <div class="caption"><i class="icon-calendar"></i>Frequently Asked Question</div>
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
                              <span>Change FAQ Page Success </span>
                           </div>
                           <?php else : ?>
                           <div class="alert alert-error">
                              <button class="close" data-dismiss="alert"></button>
                              <span>Change FAQ Page Failed</span>
                           </div>
                           <?php endif; ?>
      
                           <?php endif; ?>
                        <form id="profile-form" class="form-horizontal" action="#" method="POST">
                          <div class="control-group">
                              <label class="control-label">Web Profile</label>
                              <div class="controls">
                                 <textarea class="span12 ckeditor m-wrap" id="profile" name="payment" rows="6" required>
                                    <?php echo $isi->isi; ?>
                                 </textarea>
                              </div>
                           </div>
                           <div class="form-actions">
                              <button type="submit" class="btn blue">Submit</button>
                              <button type="button" class="btn">Cancel</button>
                           </div>


                        </form>
                      </div>


                        </div>
                     </div>
               </div>
                     
                  
         </div>
         <!-- END PAGE CONTAINER-->    
      </div>
      <!-- END PAGE -->
   </div>
</div>

<script type="text/javascript">
   
   $(function(){
      $('#profile-form').validate({
           errorElement: 'label', //default input error message container
            errorClass: 'help-inline', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules : {
               shipping : {
                  required : true,
                  minlength : 10
               }
            },
            messages : {
               profile : {
                  required : "Profile Is Required",
                  minlength : "Your Profile Must Have At Least 10 Characters."
               }
            }

      })

   });

</script>