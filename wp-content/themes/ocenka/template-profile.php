<?
/*
 * template name: front-profile
 */
get_header();
?>
  <div class="profile"><a class="profile__logo" href="/"></a>
    <div class="profile__top"><a class="profile__logout" href="/">Выйти</a></div>
    <div class="profile__menu">
      <div class="profile__title">Личный кабинет</div>
      <a class="profile__button" href="/">Заказать</a>
    </div>
    <div class="profile__wrapper">
      <div class="profile__info">
        <div class="profile__profile">
          <div class="profile__name"></div>
          <!--.profile__text Бонусные баллы: #[span.profile__bonus]-->
        </div>
      </div>
      <div class="profile__stats"></div>
    </div>
    <div class="profile-table" id="profile-table">
      <div class="profile-table__header">
        <div class="profile-table__toggle"></div>
        <div class="profile-table__number">№</div>
        <!--.profile-table__date Дата регистрации заказа-->
        <div class="profile-table__address">Адрес объекта недвижимости</div>
        <div class="profile-table__show">Дата и время показа</div>
        <div class="profile-table__status">Статус заказа</div>
        <div class="profile-table__payment">Оплата</div>
        <div class="profile-table__documents">Документы</div>
        <div class="profile-table__cancel"></div>
      </div>
      <div class="profile-table__body"></div>
      <div class="profile-table__template">
        <div class="profile-table__item">
          <div class="profile-table__row">
            <div class="profile-table__cell profile-table__toggle"></div>
            <div class="profile-table__cell profile-table__number">
              <div class="profile-table__label">№</div>
              <div class="profile-table__value">{{index}}</div>
            </div>
            <div class="profile-table__cell profile-table__address">
              <div class="profile-table__label">Адрес объекта недвижимости</div>
              <div class="profile-table__value">{{address}}</div>
            </div>
            <div class="profile-table__cell profile-table__show">
              <div class="profile-table__label">Дата и время показа</div>
              <div class="profile-table__value">{{show}}</div>
            </div>
            <div class="profile-table__cell profile-table__status">
              <div class="profile-table__label">Статус заказа</div>
              <div class="profile-table__value">{{status}}</div>
            </div>
            <div class="profile-table__cell profile-table__payment">
              <div class="profile-table__label">Оплата</div>
              <div class="profile-table__value">{{paid}}</div>
            </div>
            <div class="profile-table__cell profile-table__buttons" data-report-link="<? the_field('report_page', 'options'); ?>">
              <div class="profile-table__value">{{cancel}}</div>
            </div>
          </div>
          <div class="profile-table__info-wrapper">
            <div class="profile-table__info">
              <div class="profile-table__info-col">
                <div class="profile-table__info-row">
                  <div class="profile-table__info-label">Банк:</div>
                  <div class="profile-table__info-value">{{bank}}</div>
                </div>
                <div class="profile-table__info-row">
                  <div class="profile-table__info-label">Оценочная компания:</div>
                  <div class="profile-table__info-value">{{appraisalCompany}}</div>
                </div>
                <div class="profile-table__info-row">
                  <div class="profile-table__info-label">Комментарий:</div>
                  <div class="profile-table__info-value">{{comment}}</div>
                </div>
                <div class="profile-table__info-row">
                  <div class="profile-table__info-label">Документы:</div>
                  <div class="profile-table__info-value">{{documents}}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<? include 'blocks/footer.php';
footer() ?>

<? get_footer(); ?>