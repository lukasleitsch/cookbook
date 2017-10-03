<div class="tags">
  <h2>Tags</h2>
    <ul>
      <?php foreach($tags as $tag): ?>
      <li>
        <a href="<?php echo $page->url() . '/tag:' . $tag ?>">
          <span class="tag">
            <?php echo html($tag) ?>
          </span>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
</div>