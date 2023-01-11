<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="/assets/images/logo.png"> 
    
   
	<?php
	wp_head();
	?>


</head> 

<body>
    
    <header class="header text-center">	    
	    <a class="site-title pt-lg-4 mb-0" href="<?php echo site_url('/') ?>"><?php echo get_bloginfo('name'); ?></a>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<?php
				if(function_exists('the_custom_logo')) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);

				}
				?>
				<img class="mb-3 mx-auto logo" src="<?php echo $logo [0] ?>" alt="logo" ><a <?php echo site_url('/') ?>></a> 	
				
				
				<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
						)
					);
				?>

				<hr>
				<ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="https://api.whatsapp.com/send/?phone=543525617882&text&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
					<li class="list-inline-item"><a href="https://www.linkedin.com/in/joaquin-conte-962a3b213" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="https://github.com/JuacoCOnte" target="_blank"><i class="fab fa-github-square"></i></i></a></li>
					<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li> -->
				</ul>
				<?php	
					dynamic_sidebar('sidebar-1');
				?>


			</div>

			

		</nav>
		
    </header>
    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>
</body>