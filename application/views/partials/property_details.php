<div class="row-fluid t-detail">
  <div class="span4">
    <span>Sector: <?= $property->sector ?></span>
  </div>
  <div class="span4">
    <div id="ctl00_cphBody_ctl00_Panel1" class="uiHItem">
      <span>Cuota de mantenimiento: <?= maintenance_string_for($property) ?></span>
    </div>
  </div>
</div>
<div class="row-fluid t-detail">
  <?php if ($property->full_bathrooms > 0): ?>
    <div class="span3">
      <span>Baños completos: <?= number_format($property->full_bathrooms) ?></span>
    </div>
  <?php endif; ?>
  <?php if ($property->full_bathrooms > 0): ?>
    <div class="span3">
      <span>Medios baños: <?= number_format($property->half_bathrooms) ?></span>
    </div>
  <?php endif; ?>
  <?php if ($property->rooms_number > 0): ?>
    <div class="span3">
      <span>Habitaciones: <?= number_format($property->rooms_number) ?></span>
    </div>
  <?php endif; ?>
  <?php if ($property->parking_lots > 0): ?>
    <div class="span3">
      <span>Estacionamientos: <?= number_format($property->parking_lots) ?></span>
    </div>
  <?php endif; ?>
</div>
<div class="row-fluid t-detail">
  <?php if ($property->terrain_area > 0): ?>
    <div class="span4">
      <span>Terreno: <?= number_format($property->terrain_area) ?> m<sup>2</sup></span>
    </div>
  <?php endif; ?>
  <?php if ($property->building_area > 0): ?>
    <div class="span4">
      <span>Construcción: <?= number_format($property->building_area) ?> m<sup>2</sup></span>
    </div>
  <?php endif; ?>
  <?php if ($property->building_year > 0): ?>
    <div class="span4">
      <span>Año de construcción: <?= $property->building_year ?></span>
    </div>
  <?php endif; ?>
</div>
