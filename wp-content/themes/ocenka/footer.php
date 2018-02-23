<div class="popups">
  <div class="popup" id="popup-register">
    <div class="popup__close"></div>
    <div class="popup__text"><?=__('Login title', 'ocenka'); ?></div>
    <form novalidate="" action="/profile">
      <div class="popup__input">
        <div class="input">
          <input class="input__input" value="" required="" type="phone" id="auth-phone">
          <label class="input__label"><?=__('Login phone label', 'ocenka'); ?></label>
          <div class="input__error"></div>
        </div>
      </div>
      <input class="button button--block" type="submit" value="<?=__('Login action label', 'ocenka'); ?>">

      <div class="popup__error"></div>
    </form>
  </div>
  <div class="popup" id="popup-confirm">
    <div class="popup__close"></div>
    <div class="popup__text"><?=__('Confirm title', 'ocenka'); ?></div>
    <div class="popup__desc not_activated"><?=__('Confirm text not activated', 'ocenka'); ?></div>
    <div class="popup__desc activated"><?=__('Confirm text activated', 'ocenka'); ?></div>
    <form novalidate="">
      <div class="popup__input">
        <div class="input">
          <input class="input__input" value="" required="" id="auth-password">
          <label class="input__label"><?=__('Confirm password label', 'ocenka'); ?></label>
          <div class="input__error"></div>
        </div>
      </div>
      <input class="button button--block" type="submit" value="<?=__('Confirm action label', 'ocenka'); ?>">

      <div class="popup__error"></div>
    </form>
    <div class="popup__footer">
      <a class="popup__resend not_activated"><?=__('Confirm reset not activated', 'ocenka'); ?></a>
      <a class="popup__resend activated"><?=__('Confirm reset activated', 'ocenka'); ?></a>
    </div>
  </div>
</div>
<script>
  var JS_PUBLIC_PATH = '<?= get_template_directory_uri() ?>/js/';
  var SUGGEST_KEY = "fdd27007fe8069d376aa269885162a16ef0e55d4";
  var API_URL = '<?the_field('api_domain', 'options');?>';
  var ITEMS_PER_PAGE = 20;
</script>
<?php wp_footer(); ?>
</body>
</html>
