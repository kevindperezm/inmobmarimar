<?= css('properties.css') ?>

<div class="container">
  <div class="row">
    <div class="col-md-2">
      <p>A la derecha puede ver el mapa de áreas en la ciudad de Manzanillo, Colima, México.</p>
      <p>
        Haga clic en alguna de las áreas marcadas para ver las propiedades que tenemos disponibles
        en ella.
      </p>
    </div>

    <div class="col-md-10">
      <img src="<?= img_url() . 'mapa-areas.jpg' ?>" usemap="#map" style="width: 820px; height: 455px;">
        <map name="map">
          <?php foreach ($areas as $area) : ?>
            <?= shape_for_area($area) ?>
          <?php endforeach ?>
        </map>
    </div>

  </div>
</div>
