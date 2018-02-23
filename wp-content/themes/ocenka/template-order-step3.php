<?
/*
 * template name: order-step3
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
        <div class="form__spinner"></div>
        <div class="form__error">Заказ не найден</div>
        <form class="form__form" id="form-docs" action="/order_done" novalidate>
          <div class="docs__row">
            <div class="docs__wrapper">
              <div class="docs__title"><?=__('Legal documents title', 'ocenka');?></div>
<!--              <div class="docs__subtitle">(Загрузите один из нижеприведенных документов)</div>-->
              <? foreach (get_field('docs1') as $doc): ?>
                <div class="docs__doc<?= $doc ? ' docs__doc--merge' : '' ?>">
                  <div class="docs__name"><?= $doc['title']; ?></div>
                  <div class="docs__desc"><?= $doc['description']; ?></div>
                </div>
              <? endforeach; ?>
            </div>
            <div class="docs__aside" id="LEGAL_DOCUMENT">
              <div class="docs__upload">
                <input class="docs__input" id="file" type="file">Прикрепить<br>документы
              </div>
            </div>
          </div>
          <div class="docs__row">
            <div class="docs__wrapper">
              <div class="docs__title"><?=__('Technical documents title', 'ocenka');?></div>
<!--              <div class="docs__subtitle">(Загрузите Поэтажный план БТИ с Экспликацией или Технический паспорт)</div>-->
              <? foreach (get_field('docs2') as $doc): ?>
                <div class="docs__doc<?= $doc ? ' docs__doc--merge' : '' ?>">
                  <div class="docs__name"><?= $doc['title']; ?></div>
                  <div class="docs__desc"><?= $doc['description']; ?></div>
                </div>
              <? endforeach; ?>
            </div>
            <div class="docs__aside" id="TECHNICAL_DOCUMENT">
              <div class="docs__upload">
                <input class="docs__input" type="file">Прикрепить<br>документы
              </div>
            </div>
          </div>
          <div class="docs__row">
            <div class="docs__wrapper"></div>
            <div class="docs__aside">
              <button class="form__button form__button--primary" id="form-confirm">Готово</button>
              <div class="docs__error"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


<? include 'blocks/footer.php';
footer(); ?>
<? get_footer(); ?>