<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Template for Bootstrap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_enqueue_script('slideshow', get_template_directory_uri() .'/js/slideshow.js', array('jquery'), null, true); ?>
	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead">
		<div class="container-fluid">
			<div class="row justify-content-md-center">
				<div class="col-md-auto">

					<nav class="navbar navbar-expand-lg blog-nav">
						<a href="<?php echo get_bloginfo( 'wpurl' );?>"><img width="200" class="nav-logo" src="<?php echo get_template_directory_uri() . '/images/logo/logo.png'; ?>" alt=""></a>
						<?php wp_list_pages( '&title_li=' ); ?>
						<button class="btn btn-sm btn-outline-primary btn-outline-getfitness">(727) 595-4505</button>
					</nav>

				</div>
			</div>
		</div>
	</div>