<?= css('properties.css') ?>

<div class="container">
  <div class="row">
    <div class="col-md-6 hidden-xs">
      <div class="col-sm-12" style="padding-bottom: 30px; padding-top: 10px;">
        <center>
          <img src="<?=img_url().'playa4.jpg'?>" class="img-responsive imgindex" name="cube">
        </center>
      </div>
    </div>
    <div class="col-md-6">
      <p><h3>Bienvenido al sitio web de Inmobiliaria Marimar</h3></p>
      <p>
        En este sitio web podrá admirar fotografías y conocer detalles sobre
        las propiedades y terrenos que tenemos en venta y renta en Inmobiliaria
        Marimar.
      </p>
      <p>
        Utilice el menú de navegación en la parte superior de la página para
        desplazarse por el sitio. Cuando vea una propiedad o terreno que le
        agrade, haga clic en su fotografía para acceder a sus detalles.
      </p>
      <p>
        Si encuentra la propiedad que desea comprar, contáctenos usando el
        <?=anchor(site_url('contacto'), 'formulario de contacto')?> o llamando
        a nuestros <?=anchor(site_url('contacto'), 'teléfonos de oficina')?>.
        Atenderle será un placer. También puede usar los mismos medios
        para contactarnos en caso de cualquier duda o aclaración que necesite.
      </p>
    </div>
  </div>

  <hr>

  <div class="row" style="margin-top: 1em">
    <div class="col-sm-12">
      <h3>Algunas de nuestras propiedades</h3>
      <p>
        Aquí podrá ver algunas de las propiedades y terrenos que se encuentran a
        la venta o a la renta con nosotros. Haga clic en la fotografía o en el
        botón "Ver más" de cada propiedad para poder ver los detalles de cada una.
      </p>
    </div>
    <div class="col-sm-12">
      <h4>Propiedades en venta</h4>
      <?= properties_row_for($properties_on_sale) ?>
    </div>
    <div class="col-sm-12">
      <h4>Propiedades en renta</h4>
      <?= properties_row_for($properties_on_rent) ?>
    </div>
    <div class="col-sm-12">
      <h4>Terrenos en venta</h4>
      <?= properties_row_for($terrains_on_sale) ?>
    </div>
    <div class="col-sm-12">
      <h4>Terrenos en renta</h4>
      <?= properties_row_for($terrains_on_rent) ?>
    </div>
  </div>
</div>
