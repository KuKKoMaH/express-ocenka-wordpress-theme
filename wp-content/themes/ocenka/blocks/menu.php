<?
function menu($full = false)
{
  ?>
  <div class="menu">
    <div class="w">
      <a class="menu__logo" href="/"></a>
      <button class="menu__hamburger"></button>
      <div class="menu__wrapper">
        <button class="menu__close"></button>
        <? wp_nav_menu(array(
          'container' => false,
          'theme_location' => 'menu',
        )); ?>
        <a href="/profile" class="menu__cabinet"><?= __('Profile', 'ocenka'); ?></a>
      </div>
    </div>
  </div>
  <?
}
