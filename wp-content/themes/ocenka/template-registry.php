<?
/*
 * template name: registry-page
 */
get_header();
?>
<? menu(true); ?>

  <div class="search">
    <div class="w">
      <div class="input input--search">
        <input class="input__input" value="" required="" id="registry-search">
        <label class="input__label">Поиск по адресу или сертификату</label>
        <div class="input__error"></div>
      </div>
    </div>
  </div>

  <div class="registry">
    <div class="w">
      <div class="table__container" id="registry-table">
        <div class="table__title">
          <div class="table__number">№</div>
          <div class="table__address">Адрес квартиры</div>
          <div class="table__date">Срок действия</div>
          <div class="table__certificate">№ Сертификата</div>
        </div>
        <div class="table__rows"></div>
        <div class="table__template">
          <div class="table__row">
            <div class="table__cell table__number">
              <div class="table__label">№</div>
              <div class="table__value">{{i}}</div>
            </div>
            <div class="table__cell table__address">
              <div class="table__label">Адрес квартиры</div>
              <div class="table__value">{{address}}</div>
            </div>
            <div class="table__cell table__date">
              <div class="table__label">Срок действия</div>
              <div class="table__value">{{validUntil}}</div>
            </div>
            <div class="table__cell table__certificate">
              <div class="table__label">№ Сертификата</div>
              <div class="table__value"><a href="/certificate/?id={{id}}" target="_blank">{{number}}</a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="pagination"></div>
    </div>
  </div>

<? include 'blocks/footer.php'; footer() ?>
<? get_footer(); ?>