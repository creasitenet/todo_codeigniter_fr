<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<!-- Creasitenet -->
<!-- Edouard Boissel -->
<!-- Réalisation de sites internet -->

<!-- 
/***********************************/
Réalisation du site : Edouard Boissel [Creasitenet] 
URL : http://www.creasitenet.com
Contact: creasitenet.com@gmail.com
/***********************************/
-->

<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Todo - CodeIgniter 3</title>
    <meta name="description" content="Livre d'or sous Codeigniter" />
    <meta name="keywords" content="live d'or" />
    <link href="<?php echo base_url(); ?>assets/img/favicon.ico" rel="icon" type="image/ico" />
    <link href="<?php echo base_url(); ?>assets/img/favicon.ico" rel="shortcut icon" type="image/ico" />  
    <base href="<?php echo base_url(); ?>" />
    
    <!-- CSS -->
    <!-- Bootstrap  -->
    <!--<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" />-->
    <!-- OU Bootstrap Free Theme -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/slate.css" />

    <!-- Plugins -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/growl/jquery.growl.css" />
    
	<!-- Customs -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/profiler.css" />

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/modernizr/modernizr.js"></script>
	    
	<!-- CSS -->
	<!--
	<?php foreach($css as $c): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $c; ?>" />
	<?php endforeach; ?>
	-->
	
	<!-- JAVASCRIPTS -->
	<!--
	<?php foreach($js as $j): ?>
		<script type="text/javascript" src="<?php echo $j; ?>"></script>
	<?php endforeach; ?>
	-->
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
      
</head>

<body>

        <!-- Wrapper-->
        <div class="wrapper">	
        		
		    <a href="https://github.com/creasitenet/todo_codeigniter_fr" target="_blank">
		        <img style="position: absolute; top: 0; right: 0; border: 0; z-index: 1;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png">
		    </a>	
        	
            <div id="loader">
            	<i class="fa fa-cog fa-spin"></i>
            </div> 
                          
			<?php include('_header.php'); ?>  		
			           	              	
			<div class="container content">
				<div class="row">
					<?php include('_notifications.php'); ?> 
					<?php echo $content; ?>
				</div>
			</div>
            
			<?php include('_footer.php'); ?>
				
        </div>
        <!-- // Wrapper-->

		<?php include('_notifications_growl.php'); ?> 

  <!-- JS -->   
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/scrolltotop/jquery.scrolltotop.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/growl/jquery.growl.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>

</body>
</html>