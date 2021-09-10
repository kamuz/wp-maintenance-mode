<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo esc_url( plugins_url( 'assets/css/style.css', dirname( __FILE__ ) ) ); ?>">
	<title>Down for Maintenance | <?php echo esc_html( get_bloginfo( 'name' ) ); ?></title>
</head>
<body>
	<div id="container">
		<header>
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php endif; ?>
			<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
		</header>
		<main>
			<p>Down for a bit of maintenance &mdash; be back soon!</p>
			<div class="contacts">
				Phone Office: (050) 123-45-68<br>
				Phone Direct: (099) 999-00-99<br>
				<a href="mailto:j.dou@gmail.com">Send Email</a>
			</div>
		</main>
	</div>
</body>
</html>
