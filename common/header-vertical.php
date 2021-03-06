<?php $titleLink = link_to_home_page(theme_logo(), array('class' => 'site-title', 'title' => "Logo")); ?>
<div class="title-bar" data-responsive-toggle="primary-nav" data-hide-for="large">
    <button class="menu-toggle" type="button" data-toggle="offCanvas" aria-label="<?php echo $this->translate('Menu'); ?>"><i class="fas fa-bars"></i></button>
    <?php echo $titleLink; ?>
</div>
<div class="desktop">
  <?php echo $titleLink; ?>
  <?php echo use_foundation_navigation('vertical'); ?>
</div>
