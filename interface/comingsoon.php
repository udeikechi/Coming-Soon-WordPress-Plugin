<?php
/**
 * Coming soon page template to be seen by all users except the administrator.
 *
 * @package   coming-soon-page
 * @copyright Copyright (c) 2020, Ikechi Ude
 * @license   GPL2+
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo plugins_url( 'assets/css/comingsoon.css', dirname( __FILE__ ) ); ?>">
	<script type="text/javascript" src="<?php echo plugins_url( 'assets/js/js.js', dirname( __FILE__ ) ); ?>"></script>
	<title>Coming Soon | <?php bloginfo('name') ?></title>
</head>

<body>
	<header>
		<div class="hero">
			<p><?php bloginfo('name')?> is currently under construction / maintenance, please check back</p>
		<h1>COMING SOON</h1>
		
		<hr>
			<p id="launch"></p>
		</div>  
	</header>
</body>
</html>