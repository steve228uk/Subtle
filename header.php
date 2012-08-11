<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php candytitle('-') ?></title>
	<?php candyCss('styles.css') ?>
	<?php candyCss('user.php') ?>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php candyHead() ?>
</head>
<body>
	<div id="container">
		<header id="page-header" class="clearfix">
			<a href="<?php echo URL_PATH ?>" title="Home" class="logo heading"><?php echo $Candy['options']->getOption('site_title') ?></a>
			<?php theNav() ?>
		</header>