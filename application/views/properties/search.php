<?= css('properties.css') ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h4>Buscando "<?= $keywords ?>"</h4>
      <?php if (sizeof($properties) > 0): ?>
        <?php foreach ($properties as $property): ?>
          <?= $this->load->view('partials/property_box', array('property' => $property), true) ?>
        <?php endforeach; ?>
      <?php else: ?>
        Desafortunadamente, no encontramos propiedades que coincidan con su búsqueda.
        Por favor, revise esta página más tarde o contáctenos para una atención más personalizada.
      <?php endif; ?>
    </div>
    <div style="text-align: center">
      <?= $this->pagination->create_links() ?>
    </div>
  </div>
</div>
