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
			$pagesForSearch = $site->pagesForSearch()->split();
			foreach ($pagesForSearch as $pageItem) {
			  $childen = page($pageItem)->children()->visible();
			  foreach ($childen as $child) {
                echo "{";
                echo '"value":"'.str_replace('"', '\"', $child->title()).'",';
                echo '"url":"' . $child->url() . '"';
                echo "},";
              }
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
