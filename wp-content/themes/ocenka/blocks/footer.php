<?
include "menu_walker.php";

function footer($isFull = false)
{
  ?>
  <footer class="footer<?= $isFull ? ' footer--line' : ''; ?>">
    <div class="w">
      <div class="footer__left">
        <?= $isFull ? '<div class="footer__logo"></div>' : '' ?>
        <div class="footer__copyright"><?=__('Copyright', 'ocenka'); ?></div>
      </div>
      <div class="footer__links">
        <? wp_nav_menu(array(
          'container' => '',
          'theme_location' => 'footer_menu',
          'items_wrap' => '%3$s',
          'walker' => new Walker_Menu(),
        )); ?>
      </div>
    </div>
  </footer>
<? } ?>