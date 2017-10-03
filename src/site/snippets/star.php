<?php $star = 0; ?>
<?php if($page->bewertung() == '1-stern'): ?>
  <?php $star = 1; ?>
<?php elseif($page->bewertung() == '2-stern'): ?>
  <?php $star = 2 ?>
<?php elseif($page->bewertung() == '3-stern'): ?>
  <?php $star = 3 ?>
<?php endif ?>
<?php for($i = 1; $i <= $star; $i++): ?>
  	<span class="glyphicon glyphicon-star star-<?php echo $i?>" aria-hidden="true"></span>
<?php endfor; ?>