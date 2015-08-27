<div class="property col-sm-12 col-md-6 col-lg-4 col-xl-3">
  <div class="thumbnail">
    <?php if ($pic = $this->picture_repo->main_pic_for($property)): ?>
      <a href="<?= details_url_for($property) ?>">
        <img src="<?= $pic->get_url() ?>">
      </a>
    <?php endif; ?>
    <div class="caption">
      <h3><?= ucfirst(strtolower($property->name)) ?></h3>
      <p class="address"><?= full_address_for($property) ?></p>
      <p class="price"><?= price_string_for($property) ?></p>
      <p class="actions"><?= anchor(details_url_for($property), 'Ver más', array('class' => 'btn btn-default')) ?></p>
    </div>
  </div>
</div>
