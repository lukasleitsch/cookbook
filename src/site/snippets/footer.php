<footer class="main">
  <div class="container">
    <hr>
    <p><?php if ($user = $site->user()): ?>
        <a href="<?php echo url('logout') ?>">Logout</a> &bull;
      <?php endif ?>In diesem Kochbuch befinden sich <?php echo page('rezepte')
        ->children()
        ->visible()
        ->count() ?> Rezepte &bull; <a href="<?php echo url() . "/tag:none" ?>">Keine
        Tags</a></p>
  </div>
</footer>

<?php echo js('assets/js/jquery.min.js') ?>
<?php echo js('assets/js/jquery.masonry.min.js') ?>
<?php echo js('assets/js/jquery-ui.min.js') ?>
<?php echo js('assets/js/script.js') ?>

<script>
	var $container = $('#rezepte');
	// initialize
	$container.masonry({
		"columnWidth": ".panel-wrap",
	  	"itemSelector": '.panel-wrap',
	  	percentPosition: true
	});

	var availableTags = [
		<?php 
			$rezepte = new Pages();
			$rezepte->add(page('rezepte')->children()->visible());
			foreach ($rezepte as $rezept) {
				echo "{";
				echo '"value":"'.str_replace('"', '\"', $rezept->title()).'",';
				echo '"url":"'.$rezept->url().'"';
				echo "},";
			}
		 ?>

	];
	$( "#autocomplete" ).autocomplete({
		source: availableTags,
		select: function (event, ui) {
		    window.location = ui.item.url;
		},
		open: function(event, ui) {
		        $('.ui-autocomplete').off('menufocus hover mouseover mouseenter');
		    }
	});
</script>
</body>
</html>
