<?
/*
 * template name: order-step1
 */
get_header(); ?>
<? menu(true); ?>
  <div class="form">
    <div class="form__wrapper">
      <div class="form__header">
        <div class="form__title form__title--active">1. Оформление заказа</div>
        <div class="form__title">2. оплата</div>
        <div class="form__title">3. загрузка документов</div>
      </div>
      <div class="form__body">
        <div class="form__spinner"></div>
        <div class="form__error">Заказ не найден</div>
        <div class="form__payment" data-title="<?=__('Payment error title', 'ocenka');?>" data-message="<?=__('Payment error text', 'ocenka');?>"></div>
        <form class="form__form" id="form-order" action="/order_step3" novalidate>
          <div class="form__label">Введите данные объекта <?hint('address');?>
          </div>
          <div class="form__row form__container">
            <div class="form__address">
              <div class="input">
                <input class="input__input" value="" required="" id="form-address" disabled="">
                <label class="input__label">Адрес</label>
                <div class="input__error"></div>
              </div>
            </div>
            <div class="form__apart">
              <div class="input">
                <input class="input__input" value="" required="" id="form-flat" disabled="">
                <label class="input__label">Квартира</label>
                <div class="input__error"></div>
              </div>
            </div>
          </div>
          <div class="form__label">Тип объекта <?hint('type');?></div>
          <div class="form__row">
            <div class="input input--select">
              <select class="input__select" required="" id="form-cost">
              </select>
              <label class="input__label">Выберите тип объекта</label>
              <div class="input__error"></div>
            </div>
          </div>
          <div id="bank">
            <div class="form__label">Выберите банк-кредитор <?hint('bank');?></div>
            <div class="form__row">
              <div class="input input--select">
                <select class="input__select" required="" id="form-bank">
                </select>
                <label class="input__label">Выберите банк</label>
                <div class="input__error"></div>
              </div>
            </div>
          </div>
          <div class="form__label">Выберите оценочную компанию <?hint('appraisalCompany');?></div>
          <div class="form__row">
            <div class="input input--select">
              <select class="input__select" required="" id="form-evaluating-company">
              </select>
              <label class="input__label">Выберите оценочную компанию</label>
              <div class="input__error"></div>
            </div>
          </div>
          <div class="form__label">Данные заказчика оценки <?hint('customer');?></div>
          <div class="form__row form__container">
            <div class="form__x2">
              <div class="input">
                <input class="input__input" value="" required="" id="form-customer-name">
                <label class="input__label">ФИО</label>
                <div class="input__error"></div>
              </div>
            </div>
            <div>
              <div class="input">
                <input class="input__input" value="" required="" id="form-customer-passport">
                <label class="input__label">Серия и номер паспорта</label>
                <div class="input__error"></div>
              </div>
            </div>
          </div>
          <div class="form__label">Данные заемщика <?hint('borrower');?></div>
          <div class="form__row form__container">
            <div class="form__x2">
              <div class="input">
                <input class="input__input" value="" required="" id="form-borrower-name">
                <label class="input__label">ФИО</label>
                <div class="input__error"></div>
              </div>
            </div><span class="form__checkbox">
                    <input type="checkbox" id="form-customer-borrower-same">
                    <label for="form-customer-borrower-same">Заказчик и заемщик одно лицо</label></span>
          </div>
          <div class="form__row form__container">
            <div class="form__time">
              <div class="form__label">Время показа объекта <?hint('time');?></div>
              <div class="form__container">
                <div class="form__half">
                  <div class="input">
                    <input class="input__input" value="" required="" id="form-date">
                    <label class="input__label">Дата</label>
                    <div class="input__error"></div>
                  </div>
                </div>
                <div class="form__half">
                  <div class="input input--select">
                    <select class="input__select" required="" id="form-time">
                      <option value=""></option>
                      <option value="FROM_9_TO_12">С 9 до 12</option>
                      <option value="FROM_12_TO_16">С 12 до 16</option>
                      <option value="FROM_16_TO_19">С 16 до 19</option>
                    </select>
                    <label class="input__label">Время</label>
                    <div class="input__error"></div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="form__label">Комментарий к заказ <?hint('comment');?></div>
              <div class="input input--textarea">
                <textarea class="input__textarea" required="" id="form-comment"></textarea>
                <label class="input__label">Введите ваш коментарий</label>
                <div class="input__error"></div>
              </div>
            </div>
          </div>
          <div class="form__row">
            <div class="form__checkbox">
              <input type="checkbox" id="form-offer">
              <label for="form-offer">Согласен с <a href="<? the_field('offert', 'options'); ?>" target="_blank">Договором оферты</a></label>
            </div>
          </div>
          <div class="form__row form__container">
            <div class="form__price">Стоимость услуги: <span id="price"></span> руб.</div>
            <div class="form__buttons">
              <button class="form__button form__button--primary" id="form-pay">Оплатить картой</button>
              <button class="form__button" id="form-paybank" data-link="/order_step2">Оплатить в отделении банка</button>
            </div>
          </div>
          <div class="form__row">
            <div class="form__response"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
<? include 'blocks/footer.php';
footer(); ?>
<? get_footer(); ?>