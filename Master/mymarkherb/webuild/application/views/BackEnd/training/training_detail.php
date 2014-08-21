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
         					<a href="<?php echo base_url(); ?>admin">Home</a> 
         					 <i class="icon-angle-right"></i>
         				        </li>
         							<li>
                                 <a href="<?php echo base_url(); ?>admin/training">Training </a>
                                 <i class="icon-angle-right"></i>
                              </li>	
                              <li>
                                 <a href="#"><?php echo $training->head_training;?> </a>
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

                  <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                     <div class="dashboard-stat blue">
                        <div class="visual">
                           <i class="icon-comments"></i>
                        </div>
                        <div class="details">
                           <div class="number">
                              1349
                           </div>
                           <div class="desc">                           
                              Participant
                           </div>
                        </div>
                        <a class="more" href="#">
                        View more <i class="m-icon-swapright m-icon-white"></i>
                        </a>                 
                     </div>
                  </div>

                  <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                     <div class="dashboard-stat green">
                        <div class="visual">
                           <i class="icon-comment"></i>
                        </div>
                        <div class="details">
                           <div class="number">549</div>
                           <div class="desc">Graduated Participant</div>
                        </div>
                        <a class="more" href="#">
                        View more <i class="m-icon-swapright m-icon-white"></i>
                        </a>                 
                     </div>
                  </div>
                  
                 
               </div>
         
               <div class="row-fluid" style="margin-top:100px;">
                  <div class="span12">

                     <div class="row-fluid">
                           
                           <div class="span4 blog-img blog-tag-data">
                              <img src="<?php echo base_url();?>assets/training/<?php echo $training->img_training; ?>" alt="">
                              <ul class="unstyled inline">
                                 <li>
                                    <i class="icon-calendar"></i> 
                                    <a href="#">April 16, 2013</a>
                                 </li>
                                 <li>
                                    <i class="icon-comments"></i> 
                                    <a href="#">38 Participant</a>
                                 </li>
                              </ul>
                           </div>
                           
                           <div class="span8 blog-article">
                              <h2>
                                 <?php echo $training->head_training; ?>
                              </h2>
                              <p>
                                 <?php echo $training->body_training; ?>
                              </p>
                           </div>

                     </div>               
                  </div>
               </div>

               <div class="row-fluid" style="margin-top:50px;">

                  <div class="span8">
                     <div class="portlet box blue">
                        <div class="portlet-title">
                           <div class="caption"><i class="icon-edit"></i>Participant List</div>
                           <div class="tools">
                              <a href="javascript:;" class="collapse"></a>
                              <a href="#portlet-config" data-toggle="modal" class="config"></a>
                              <a href="javascript:;" class="reload"></a>
                              <a href="javascript:;" class="remove"></a>
                           </div>
                        </div>
                        <div class="portlet-body">
                           <div class="clearfix">
                           </div>
                           <?php if(count($participant) >0 ) : ?>
                           <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Contact Number</th>
                                    <th>E-Mail</th>
                                    <th>Status</th>
                                    <th>Sign Date </th>
                                    <th>Edit</th>
                                 </tr>
                              </thead>
                              <tbody>

                                 <?php $i = 0 ;foreach($participant as $p) : ?>
                                 <tr class="">
                                    <td><?php echo $i+1; ?></td>
                                    <td><?php echo $p->nama_peserta; ?></td>
                                    <td><?php echo $p->kontak_peserta; ?></td>
                                    <td class="center">
                                       <?php echo $p->email_peserta; ?>
                                    </td>
                                    <td>
                                       <?php echo $p->status_peserta; ?>
                                    </td>
                                    <td>
                                       <?php echo $p->tanggal_peserta_daftar; ?>
                                    </td>
                                    <td>
                                       <a class="edit" href="javascript:;">      Edit
                                       </a>
                                    </td>
                                 </tr>
                                 <?php $i++; endforeach; ?>
                                 
                              </tbody>
                           </table>
                           <?php else : ?>
                           <h1 class="text-center">
                              Data Peserta Kosong
                           </h1>
                           <?php endif; ?>
                        </div>
                     </div>

                  </div>   
               </div>
               


            </div><!-- END DASHBOARD STATS -->
         </div>
         <!-- END PAGE CONTAINER-->    
      </div>
      <!-- END PAGE -->
   </div>
</div>