<?php snippet('header') ?>

<div class="container">
	<h1><?php echo $title ?></h1>
	<div id="rezepte">
		<?php foreach($rezepte as $rezept): ?>
			<div class="panel-wrap">
				<div class="panel panel-default">
				  <div class="panel-body">
				   	<a href="<?php echo $rezept->url() ?>">
				   	  <?php echo html($rezept->title()) ?>
				   	</a>
		        <br>
		        <small>
		        <?php snippet('star', array('page' => $rezept)) ?>

		        <?php if($rezept->zubereitet()->bool()): ?>
		          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
		        <?php endif ?>

		        </small>
				  </div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	
</div>


<?php snippet('footer') ?>