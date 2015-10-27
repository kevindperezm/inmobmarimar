<?= css('properties.css', 'styles.css') ?>

<div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12">
      <p>A la derecha puede ver el mapa de áreas en la ciudad de Manzanillo, Colima, México.</p>
      <p>
        Haga clic en alguna de las áreas marcadas o en los nombres, para ver las propiedades que tenemos disponibles
        en ella.
      </p>
      <ul>
        <li class="list-group-item"><a href="<?=site_url('areas/1')?>">1.- Manzanillo Centro</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/2')?>">2.- San Pedrito</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/3')?>">3.- Tapeixtles</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/4')?>">4.- Valle de las garzas</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/5')?>">5.- Las brisas</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/6')?>">6.- Salagua</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/7')?>">7.- Las Hadas</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/8')?>">8.- La punta</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/9')?>">9.- Santiago</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/10')?>">10.- Miramar</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/11')?>">11.- Club Santiago</a></li>
        <li class="list-group-item"><a href="<?=site_url('areas/12')?>">12.- Vida del mar</a></li>
      </ul>
    </div>

    <div class="col-md-9 col-sm-12 col-xs-12  mapa">
      <img src="<?= img_url() . 'mapa-areas.jpg' ?>" usemap="#map" style="width: 820px; height: 455px;">
        <map name="map">
          <?php foreach ($areas as $area) : ?>
            <?= shape_for_area($area) ?>
          <?php endforeach ?>
        </map>
        <td align="center" class="mapa">Mapa solo visible únicamente en escritorio</td>
    </div>

  </div>
</div>
