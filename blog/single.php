<article>

	<h1><?php echo $post[0]->post_title ?></h1>
	<div class="clearfix">
		<div class="date"><?php Blog::postDate($post[0]->post_id, "d/m/Y") ?> | </div><?php Blog::listCategories($post[0]->cat_id) ?>
	</div>
	<?php echo $post[0]->post_body ?>
	
</article>

<?php Blog::commentForm() ?>