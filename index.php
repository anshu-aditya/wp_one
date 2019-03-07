<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<title><?php bloginfo( 'name' ) ?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Lobster|Source+Code+Pro|Bree+Serif|Markazi+Text|Scheherazade" rel="stylesheet">
</head>
<body>
	
	<header>
		<h1 class="logo"><?php bloginfo( 'name' ); ?></h1>
		<span class="description"><?php bloginfo( 'description' ); ?></span>
	</header>

	<div class="main">
		<?php if( have_posts() ): ?>
			<?php while ( have_posts() ): the_post() ?>
	
	<div class="meta">
	Created By <?php the_author() ?> on <?php the_time( 'jS M Y' ) ?>
	</div>
	<div class="content"><?php the_content(); ?></div> 
	<?php endwhile ?>
	<?php else: ?>
	<?php wpautop( "sorry, nothing found!" ) ?>
	<?php endif ?>
	<footer>
		<p>&copy;- <?php the_date( 'Y' ); ?> <?php bloginfo( 'name' ) ?> </p>
	</footer>
	</div>

</body>
</html>