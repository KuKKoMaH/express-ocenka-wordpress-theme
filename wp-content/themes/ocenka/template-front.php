<?
/*
 * template name: front-page
 */
get_header();
?>
  <header class="header" id="header">
    <? menu(); ?>
    <div class="w">
      <div class="header__content">
        <h1><?=__('Header title', 'ocenka'); ?></h1>
        <h2 class="line"><?=__('Header subtitle', 'ocenka'); ?></h2>
        <h3><?=__('Header text', 'ocenka'); ?></h3>
      </div>
      <div class="header__form-wrapper">
        <div class="header__form-title"><?=__('Order form title', 'ocenka'); ?></div>
        <form class="header__form" novalidate="" action="/order_step1">
          <div class="header__row">
            <div class="header__form-input header__address">
              <div class="input">
                <input class="input__input" value="" required="">
                <label class="input__label"><?=__('Order form address label', 'ocenka'); ?></label>
                <div class="input__error"></div>
              </div>
            </div>
            <div class="header__form-input header__flat">
              <div class="input">
                <input class="input__input" value="" required="">
                <label class="input__label"><?=__('Order form apartment label', 'ocenka'); ?></label>
                <div class="input__error"></div>
              </div>
            </div>
          </div>
          <div class="header__row">
            <div class="header__form-input header__phone">
              <div class="input">
                <input class="input__input" value="" required="" type="phone">
                <label class="input__label"><?=__('Order form phone label', 'ocenka'); ?></label>
                <div class="input__error"></div>
              </div>
            </div>
            <div class="header__form-input header__submit">
              <button class="header__submit-button"><?=__('Order form action label', 'ocenka'); ?></button>
            </div>
          </div>
        </form>
        <div class="header__form-error"></div>
      </div>
    </div>
  </header>

  <section class="works" id="works">
    <div class="title"><?=__('How it works title', 'ocenka'); ?></div>
    <div class="w works__items">
      <? foreach (get_field('works') as $work): ?>
        <div class="c c4 works__item">
          <div class="works__image"><img src="<?= $work['image']['url']; ?>"></div>
          <div class="works__name"><?= $work['title']; ?></div>
          <div class="works__text"><?= $work['text']; ?></div>
        </div>
      <? endforeach; ?>
    </div>
    <a class="button" href="#header" type="submit"><?=__('How it works button', 'ocenka'); ?></a>
  </section>

  <?if(get_field('show_video')):?>
  <section class="video">
    <div class="w">
      <div class="video__content">
        <h2 class="title video__title"><?=__('Video title', 'ocenka'); ?></h2>
        <div class="video__text"><?=__('Video text', 'ocenka'); ?></div>
      </div>
      <div class="video__video">
        <div class="video__container">
          <?=__('Video iframe', 'ocenka');?>
        </div>
      </div>
    </div>
  </section>
  <?endif;?>

  <section class="advantages" id="advantages">
    <h3 class="title advantages__title"><?=__('Advantages title', 'ocenka'); ?></h3>
    <div class="w advantages__items">
      <? foreach (get_field('advantages') as $advantage): ?>
        <div class="c c4 advantages__item">
          <div class="advantages__image"><img src="<?= $advantage['image']['url']; ?>"></div>
          <div class="advantages__name"><?= $advantage['title']; ?></div>
          <div class="advantages__text"><?= $advantage['text']; ?></div>
        </div>
      <? endforeach; ?>
    </div>
    <a class="button" href="#header" type="submit"><?=__('Advantages action', 'ocenka'); ?></a>
  </section>

  <div class="partners-slider">
    <div class="w">
      <div class="owl-carousel">
        <? foreach (get_field('partners', 'options') as $partner): ?>
          <img src="<?= $partner['image']['sizes']['200x90']; ?>">
        <? endforeach; ?>
      </div>
    </div>
  </div>

<? include 'blocks/footer.php'; footer(true); ?>
<? get_footer(); ?>