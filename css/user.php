<?php header("Content-type: text/css");
include '../../../core/classes.php';
$colors = Theme::getColors();  ?>

body{
	background: <?php echo $colors->bg ?>;
}

a:link, a:visited{
	color: <?php echo $colors->link ?>;
}

/* Heading Colours */

h1{
	color: <?php echo $colors->heading ?>;
}

h2{
	color: <?php echo $colors->heading ?>;
}

h3{
	color: <?php echo $colors->heading ?>;
}

h4{
	color: <?php echo $colors->heading ?>;
}

h2 a:link, h2 a:visited{
	color: <?php echo $colors->heading ?>;
}

.heading{
	color: <?php echo $colors->heading ?>;
}

blockquote{
	border-color: <?php echo $colors->heading ?>;
}

/* Nav Link Colours */

.nav a:link, .nav a:visited{
	color: <?php echo $colors->inactive ?>;
}

.nav .active-page a:link, .nav .active-page a:visited{
	color: <?php echo $colors->active ?>;
}