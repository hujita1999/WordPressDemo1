<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/common/favicon.ico')); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <header id="header" class="wrapper">
    <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
    <<?php echo $html_tag; ?> class="site-title">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('img/common/logo.svg')); ?>" alt="logo.svg">
      </a>
    </<?php echo $html_tag; ?>>

    <nav>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/category/about/')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/category/bicycle/')); ?>">Bicycle</a></li>
      </ul>
    </nav>
  </header>
