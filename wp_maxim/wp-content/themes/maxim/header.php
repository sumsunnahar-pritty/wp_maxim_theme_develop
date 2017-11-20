<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Maxim - Modern One Page Bootstrap Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href="" rel="stylesheet">
<link href="" rel="stylesheet">
<link href="" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico">
<?php wp_head(); global $maxim_opt; ?>
</head>
<body>
<!-- navbar -->
<div class="navbar-wrapper">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!-- Responsive navbar -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
				<h1 class="brand"><a href="<?php echo site_url();?>"><?php echo $maxim_opt['text_logo'];?></a></h1>
				<!-- navigation -->
				
				<?php wp_nav_menu(array(
				    'theme_location'=> 'main_menu',
                    'container_class'=> 'pull-right nav-collapse collapse',
                    'menu_class'=> 'nav',
                    'menu_id'=> 'menu-main',
    
				));?>
				
				

			</div>
		</div>
	</div>
</div>