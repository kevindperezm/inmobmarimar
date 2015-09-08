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
      <img src="assets/img/mapa-areas.jpg" usemap="#Map" style="width: 820px; height: 455px;">
        <map name="MAP">
          <?php foreach ($areas as $area) : ?>
            <area shape="circle" coords="<?= implode(',', [$area->position_1, $area->position_2, $area->position_3]) ?>" href="#" alt="<?= $area->nombre ?>">
          <?php endforeach ?>
        </map>
    </div>

  </div>
</div>
