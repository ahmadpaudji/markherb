<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mymerkherb.com Under construction, Coming Soon.... ">
    <meta name="author" content="http://bootstraptaste.com">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets2/img/favicon.png">

    <title>Mymarkherb.com Under Construction | Pharmacy ITB | Obat-Obatan</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets2/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets2/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="<?php echo base_url(); ?>assets2/css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<center><img src="assets2/img/logo.png"><center>
					<h2 class="subtitle">We're working hard to improve our website and we'll ready to launch after</h2>
					<div id="countdown"></div>
					
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
						
				</div>
			</div>		
		</div>
	</div>
    <script type="text/javascript" src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets2/js/jquery.countdown.min.js"></script>
	<script type="text/javascript">
  $('#countdown').countdown('2014/09/23', function(event) {
    $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
  });
</script>
  </body>
</html>
