<?
/*
 * template name: order-done
 */
get_header();
?>
<? menu(true); ?>
  <div class="form">
    <div class="form__wrapper">
      <div class="form__header">
        <div class="form__title">1. Оформление заказа</div>
        <div class="form__title">2. оплата</div>
        <div class="form__title form__title--active">3. загрузка документов</div>
      </div>
      <div class="form__body">
        <div class="done">
          <div class="done__title">
            <div class="done__logo"></div>
            <?=__('Done title', 'ocenka');?>
          </div>
          <div class="done__text"><?=__('Done text', 'ocenka');?></div>
          <div class="done__buttons">
            <a class="done__button" href="/">на сайт</a>
            <a class="done__button" href="/profile">В личный кабинет</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<? include 'blocks/footer.php'; footer(); ?>
<? get_footer(); ?>