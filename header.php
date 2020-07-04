<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	<script src="https://kit.fontawesome.com/d321c770b2.js" crossorigin="anonymous"></script>
	<?php wp_head();?>
</head>

<body>
	<header>
		<h1><a href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="<?php echo get_site_icon_url();?>" width="25px" height="25px" class="blog_logo" alt="synackuk icon"/><span class="blog_name"><?php echo get_bloginfo( 'name' ); ?></span></a></h1>
		<nav>
		<span><h2><a href="/blog">Articles</a></h2></span>
		</nav>
	</header>
