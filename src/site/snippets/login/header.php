<?php if(!$site->user() && $page->uri() != 'login') go('/login') ?>

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

