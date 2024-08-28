<!doctype html>
<html>

<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="snow-wrapper">
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
  <span class="snow"></span>
</div>
<div class="page-holder">
  <div class="wrapper" id="wrapper">

    <header class="header" id="header">
      <div class="container">
        <?php if (has_custom_logo()) : ?>
          <div class="logo" itemscope itemtype="http://schema.org/Brand">
            <?php the_custom_logo(); ?>
          </div>
        <?php endif; ?>

        <?php if (has_nav_menu('header-navigation')) : ?>
          <?php wp_nav_menu(array(
            'container' => false,
            'theme_location' => 'header-navigation',
            'menu_id' => 'header-navigation',
            'menu_class' => 'header-navigation',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker' => new Custom_Walker_Nav_Menu
          )); ?>
          <div class="menu-burger"><span></span></div>
        <?php endif; ?>
      </div>
    </header>

    <main class="main" id="main">
      <div class="art-el"></div>