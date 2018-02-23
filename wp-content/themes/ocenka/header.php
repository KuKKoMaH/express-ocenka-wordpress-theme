<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?wp_head();?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&amp;amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
</head>
<body <?=is_page_template('template-front.php') ? 'class="front-page"' : ''?>>
<?if (have_posts()) the_post(); ?>

