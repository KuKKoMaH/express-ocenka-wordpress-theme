<div class="partners-slider">
  <div class="owl-carousel">
    <?foreach (get_field('partners', 'options') as $partner):?>
      <img src="<?=$partner['image']['sizes']['200x90'];?>">
    <?endforeach;?>
  </div>
</div>