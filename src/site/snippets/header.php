<?php if(!$site->user()) go('/login') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="icon" href="<?php echo url('assets/img/favicon.png') ?>"
        type="image/png"/>
  <link rel="apple-touch-icon"
        href="<?php echo url('assets/img/apple-touch-icon.png') ?>"/>
  <meta name="apple-mobile-web-app-title"
        content="<?php echo html($site->title()) ?>">

  <?php if ($page->isHomePage()): ?>
    <title><?php echo html($site->title()) ?></title>
  <?php else: ?>
    <title><?php echo html($page->title()) ?></title>
  <?php endif ?>

  <?php echo css('assets/css/style.css') ?>

</head>
<body class="<?php echo $page->template() ?>">

<?php
$headimage = NULL;
if ($page->images()->sortBy('sort', 'asc')->first()) {
  $headimage = $page->images()->sortBy('sort', 'asc')->first()->url();
}
else {
  $headimage = url('assets/img/header.jpg');
}
?>

<header class="main" style="background-image: url(<?php echo $headimage ?>)">
  <div class="container">
    <div class="site-header">
      <div class="site-header__title">
        <h1><a
            href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a>
        </h1>
      </div>
      <div class="link-extern">
        <div class="search-button">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </div>
        <a
          href="<?php echo page($site->extern())->url() ?>"><?php echo page($site->extern())->title() ?></a>
      </div>
    </div>
    <form>
      <div class="input-group">
        <input type="search" class="form-control" name="q" id="autocomplete"
               value="<?php echo isset($query) ? esc($query) : '' ?>">
        <span class="input-group-btn">
            <input class="btn btn-default" type="submit" value="Suchen">
          </span>
      </div><!-- /input-group -->
    </form>

    <?php if ($page->isHomePage() || $page->intendedTemplate() == 'rezepte'): ?>
      <?php snippet('tags') ?>
    <?php endif; ?>

    <?php if (!$page->isHomePage() && $page->template() == 'rezept'): ?>
      <div class="title">
      <h1><?php echo $page->title()->html() ?>
        <small>
          <?php snippet('star', array('page' => $page)) ?>

          <?php if ($page->zubereitet()->bool()): ?>
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
          <?php endif ?>

        </small>
      </h1>
      <p class="portionen"><?php echo $page->portionen()->html() ?></p>
      <?php if ($page->tags() != ''): ?>
        <div class="tags">
          <ul>
            <?php $tags = str::split($page->tags()) ?>
            <?php asort($tags, SORT_NATURAL | SORT_FLAG_CASE); ?>
            <?php foreach ($tags as $tag): ?>
              <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>"><span
                    class="tag"><?php echo $tag; ?></span></a></li>
            <?php endforeach ?>
          </ul>
        </div>
        </div>
      <?php endif ?>
    <?php endif ?>
  </div>
</header>
