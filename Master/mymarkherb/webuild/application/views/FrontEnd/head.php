<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url(); ?>css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/jquery.validator/validator.js"></script> 

</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="<?php echo base_url(); ?>login">Register</a></li>
					<li><a href="<?php echo base_url(); ?>login">Login</a></li>
					<li><a href="<?php echo base_url(); ?>delivery">Delivery</a></li>
					<li><a href="<?php echo base_url(); ?>checkout">Checkout</a></li>
					<li><a href="<?php echo base_url(); ?>account">My Account</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="<?php echo base_url(); ?>images/logo.png" alt="" /></a>
			</div>
			<?php if($this->session->userdata('loggedin')) :?>
			  <div class="cart">
			  	   <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
			  </div>
				<?php endif; ?>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
		<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php if($page == "home") : echo "active"; else : echo ""; endif?>"><a href="<?php echo base_url(); ?>">Home</a></li>

        <li class="<?php if($page == "about") : echo "active"; else : echo ""; endif?>"><a href="<?php echo base_url();?>about">Profile</a></li>
        <li class="<?php if($page == "training") : echo "active"; else : echo ""; endif?>"><a href="<?php echo base_url();?>training">Training</a></li>
        <li class="<?php if($page == "news") : echo "active"; else : echo ""; endif?>"><a href="<?php echo base_url();?>news">News</a></li>
        <li class="<?php if($page == "contact") : echo "active"; else : echo ""; endif?>"><a href="<?php echo base_url();?>contact">Contact</a></li>
        
        <li class="dropdown">
          <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>">Action</a></li>
            <li><a href="<?php echo base_url(); ?>">Another action</a></li>
            <li><a href="<?php echo base_url(); ?>">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>">One more separated link</a></li>
          </ul>
        </li>
    	
      </ul>
      <form class="navbar-form navbar-right" role="search" method="get" action="asdas.php">
	     <div class="input-group">
	      <input type="text" class="form-control">
	      <span class="input-group-btn">
	        <button class="btn btn-default" type="submit">Search</button>
	      </span>
	    </div><!-- /input-group -->
      </form>
      
    </div>
  </div>
</nav>