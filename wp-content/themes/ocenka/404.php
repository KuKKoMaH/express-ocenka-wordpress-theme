<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="not-found">
  <div class="not-found__title">
    <div class="not-found__title-text">404</div>
    <div class="not-found__title-subtext">страница не найдена</div>
  </div>
  <div class="not-found__separator"></div>
  <div class="not-found__content">
    <p>Страница, которую вы искали, не существует.<br>
      Возможно вы ввели неправильный адрес или страница была удалена.
    </p><a href="/">Перейти на главную страницу</a>
  </div>
</div>
<?php get_footer(); ?>
