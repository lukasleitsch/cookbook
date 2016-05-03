<?php snippet('header') ?>
<div class="container rezept">

	<div class="rezept__wrap">
	  <div class="zutaten">
	  		<h2 class="big">Zutaten</h2>
	  		<?php echo $page->zutaten()->kirbytext() ?>
	  	
	  </div>
	  <div class="zubereitung">
	  		<h2 class="big">Zubereitung</h2>
	  		<?php echo $page->zubereitung()->kirbytext() ?>
	  </div>
	</div>
	<div class="edit">
		<a href="<?php echo url('panel/pages/' . $page->uri() . '/edit') ?>">Rezept bearbeiten</a>
	</div>
</div>

<?php snippet('footer') ?>