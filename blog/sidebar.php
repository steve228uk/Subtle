<form method="get" action="<?php echo URL_PATH.$_GET['page'] ?>/search" id="search-form">
	<input type="text" name="q" placeholder="Search" />
</form>

<h3>Categories</h3>
<div class="categories">
	<?php Blog::theCategories() ?>
</div>