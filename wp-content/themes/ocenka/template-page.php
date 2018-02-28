<?
/*
 * template name: page
 */
get_header();
?>
<? menu(true); ?>
  <div class="registry">
    <div class="w">
      <div class="table__container">

        <? the_content(); ?>
      </div>
    </div>
  </div>
<? include 'blocks/footer.php';
footer(); ?>
<? get_footer(); ?>