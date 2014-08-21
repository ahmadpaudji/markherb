<div class="main">
	<ol class="breadcrumb">
		  <li class="active">Contact Us</li>
		</ol>
    <div class="content">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Guest Book</h2>
				  	<?php echo validation_errors(); ?>
					    <form id="contact-form"method="POST" action="<?php echo base_url();?>contact">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="name" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="email" type="text" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>Phone Number</label></span>
						    	<span><input name="phone" type="text" class="textbox" ></span>
						    </div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><textarea name="msg" required> </textarea></span>
						    </div>
						   <div>
						   		<span><input style="background-color:#2ecc71;" type="submit" value="Submit"  class="myButton"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h3>Find Us Here</h3>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				 </div>
			  </div>		
         </div> 
    </div>
 </div>

 <script type="text/javascript">

$(function(){



 	$("#contact-form").validate({
 		rules : {
 			name : {
 				required: true,
 				minlength: 8,
 				maxlength : 30
 			},
 			email : {
 				required : true,
 				email: true,
 				maxlength : 50
 			},
 			msg : {
 				required :true,
 				minlength : 5,
 				maxlength : 2000
 			},
 			phone : {
 				number : true,
 				minlength : 5,
 				maxlength : 20
 			}
 		},
 		messages : {
 			name : {
 				required : "Your name is required.",
 				minlength : "Your name must have at least 2 characters."
 			},
 			phone : {
 				minlength : "Your Phone Number must have at least 5 digits",
 				maxlength : "Your Phone Number must have at least 20 digits"
 			}
 		}
 	});

});
 </script>