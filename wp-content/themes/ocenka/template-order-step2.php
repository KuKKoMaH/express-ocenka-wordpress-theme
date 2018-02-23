<?
/*
 * template name: order-step2
 */
get_header(); ?>
  <div class="invoice">
    <img class="invoice__image" src="/invoice?id=<?= $_GET['order']; ?>">
  </div>
  <div class="form invoice__form" id="invoice">
    <a class="form__button form__button--primary" href="/invoice?id=<?= $_GET['order']; ?>" target="_blank">Скачать квитанцию</a>
    <a class="form__button" id="toDocs" href="/order_step3">К загрузке документов</a>
  </div>
<? // include 'blocks/footer.php'; footer(); ?>
<? get_footer(); ?>