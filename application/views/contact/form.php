<?= css('contact.css') ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h3>Háganos saber cómo podemos ayudarle</h3>
    </div>
  </div>

  <?php if ($mail_success): ?>
    <div class="row">
      <div class="col-sm-12">
        <?php if ($mail_success === 'true'): ?>
          <div class="alert alert-success">
            Su mensaje ha sido enviado con éxito. Dentro de poco responderemos
            su mensaje. Siéntase libre de llamar a los teléfonos que aparecen
            al fondo de esta página para cualquier duda o aclaración.
            Es un placer atenderle.
          </div>
        <?php endif; ?>
        <?php if ($mail_success === 'false'): ?>
          <div class="alert alert-danger">
            Lamentablemente, estamos experimentado problemas con nuestro
            formulario de contacto en línea. Lamentamos las molestias.
            Por favor, siéntase libre de llamar a los teléfonos que aparecen en
            esta página, donde con gusto se le atenderá.
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-md-6">
      <p>
        Si encontró en este sitio web alguna propiedad que llamó su interés y
        desea adquirirla, o si tiene alguna duda que desea resolver,
        contacte con alguno de nuestros vendedores o llámenos al teléfono que encontrará debajo.
      </p>
      <br>
      <div id="contacts" class="row">
        <div class="col-xs-6">
          <div class="thumbnail">
            <img src="<?=img_url().'contacts/fotop4.jpg'?>">
            <div class="caption">
              <h6>Dina Armas</h6>
              <a href="mailto:ventasmzo02@gmail.com">ventasmzo02@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="thumbnail">
            <img src="<?=img_url().'contacts/fotop1.jpg'?>">
            <div class="caption">
              <h6>Angela Rocha</h6>
              <a href="mailto:belenizhi19@gmail.com">belenizhi19@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="thumbnail">
            <img src="<?=img_url().'contacts/fotop2.jpg'?>">
            <div class="caption">
              <h6>Jose Luis Aguilar</h6>
              <a href="mailto:joseluis57ventas@gmail.com">joseluis57ventas@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12" style="margin: 2em 0">
        <p style="font-size: 2em"><b>Telefono y horario de oficina</b></p>
          <div class="phone">
          <i class="glyphicon glyphicon-phone"></i>
            <span> 688-1194 </span>
          </div>
           <p style="font-size: 1.5em">10:00 AM - 02:00 PM</p>
           <p>Otros Telefonos</p>
          <div >
            <i class="glyphicon glyphicon-phone"></i>
            <span>314 142-8513</span>
          </div>
          <div >
          <i class="glyphicon glyphicon-phone"></i>
            <span>314 109-3511</span>
          </div>
        </div>
    </div>







    <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
      <p>
        También puede contactarnos usando el formulario de contacto aquí debajo.
        Sólo rellene el formulario con sus datos, escriba su mensaje y haga clic
        en Enviar. Pronto recibirá respuesta en el correo electrónico que nos
        proporcione.
      </p>
      <div class="mail">
        <i class="glyphicon glyphicon-inbox"></i> <?= CONTACT_EMAIL_ADDRESS ?>
      </div>
      <div class="well">
        <?= form_open('contacto/enviar', array('class' => 'contact-form')) ?>
        <?php $attributes = 'class="form-control"' ?>
        <label for="name">Nombre</label>
        <?=form_input('name', null, $attributes)?>
        <label for="phone">Teléfono</label>
        <?=form_input('telefono', null, $attributes)?>
        <label for="email">Email</label>
        <?=form_input('email', null, $attributes)?>
        <label for="text">Texto del mensaje</label>
        <?=form_textarea('text', null, $attributes)?>
      <div class="actions">
        <?=form_reset('', 'Borrar formulario', 'class="btn btn-default"')?>
        <?=form_submit('', 'Enviar', 'class="btn btn-primary"')?>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>
