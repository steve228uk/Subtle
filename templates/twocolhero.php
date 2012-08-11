<?php 
/**
 * @template Two Col w/Hero
 * @fields sidebar-wysi-Sidebar-Right Column Content, bottom-wysi-Bottom-Bottom Content
 * @author Cocoon Design
 * @copyright 2012 (c) Cocoon Design
 */
?>

<?php
	$images = array('chess.png', 'fred.png', 'barnicle.png', 'leaves.png');
	$captions = array('Tactics At Work', 'Hello Fred', 'Barnicle', 'Falling Leaves');
	$count = count($images)-1;
	$i = rand(0, $count);
?>

<div class="hero-images">
	<?php candyImg($images[$i], $captions[$i]) ?>
	<div class="caption">
		"<?php echo $captions[$i] ?>"
	</div>
</div>

<div class="content clearfix">
	<div class="left-col">
		<?php theContent() ?>
	</div>
	<div class="right-col">
		<?php theField('sidebar') ?>
	</div>
</div>

<div class="bottom">
	<?php theField('bottom') ?>
</div> 