<?= css('properties.css') ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h4><?= $title ?></h4>
      <?php if (sizeof($properties) > 0): ?>
        <p>
          En esta página puede conocer la variedad de <?= strtolower($title) ?>
          que podemos ofrecerle. Si ve algo que le guste, haga clic en su
          fotografía o en el botón "Ver más" de su ficha para ver los detalles de
          la propiedad. Utilice nuestros
          <?=anchor(site_url('contacto'), 'teléfonos')?> o nuestro
          <?=anchor(site_url('contacto'), 'formulario de contacto')?> en caso de
          cualquier duda o aclaración.
        </p>
        <?php foreach ($properties as $property): ?>
          <?= $this->load->view('partials/property_box', array('property' => $property), true) ?>
        <?php endforeach; ?>
      <?php else: ?>
        Desafortunadamente, no tenemos <?= lcfirst($title) ?> que mostrarle
        en esta página. Por favor, revise esta página más tarde o contáctenos
        para una atención más personalizada.
      <?php endif; ?>
    </div>
    <div style="text-align: center">
      <?= $this->pagination->create_links() ?>
    </div>
  </div>
</div>
