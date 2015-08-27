<?= css('properties.css') ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <p class="name"><?= $property->name ?></p>
      <p>
        A continuación, se muestran los detalles de la propiedad. Si le interesa
        adquirir esta propiedad o desea más información,
        <?= anchor(site_url('contacto'), 'contáctenos') ?>.
      </p>
    </div>
    <div class="col-md-4">
      <span class='st_sharethis_large' displayText='ShareThis'></span>
      <span class='st_facebook_large' displayText='Facebook'></span>
      <span class='st_googleplus_large' displayText='Google +'></span>
      <span class='st_linkedin_large' displayText='LinkedIn'></span>
      <span class='st_twitter_large' displayText='Tweet'></span>
      <span class='st_whatsapp_large' displayText='WhatsApp'></span>
      <span class='st_email_large' displayText='Email'></span>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
      <div class="price">
        <div class="direccionprecio">
          <p>
            <b>Código:</b><br>
            <?= $property->code ?>
          </p>
          <p>
            <b>Dirección:</b><br>
            <?= full_address_for($property) ?>
          </p>
          <p>
            <b>Precio:</b><br>
            <?= price_string_for($property) ?>
          </p>
        </div>
      </div>

      <hr>

      <h3>Descripción</h3>
      <div class="descripcion">
        <?= $property->description ?>
      </div>

      <?php if ($this->picture_repo->has_pics_for($property)): ?>
        <hr>
        <h3>Detalles</h3>
        <div class="details">
          <?= $this->load->view('partials/property_details', true) ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($property->map)): ?>
        <hr>
        <h3>Ubicación</h3>
        <iframe class="map" src="<?=$property->map?>"></iframe>
      <?php endif; ?>
    </div>

    <?php if (!$this->picture_repo->has_pics_for($property)): ?>
    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
      <?= $this->load->view('partials/property_details', true) ?>
    </div>
    <?php endif; ?>

    <?php if ($this->picture_repo->has_pics_for($property)): ?>
    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 visor">
      <h3>Galería</h3>
      <div id="gallery">
        <div id="panel">
          <?php if ($pic = $this->picture_repo->main_pic_for($property)): ?>
            <img id="largeImage" src="<?= $pic->get_url() ?>" class="img-responsive"/>
          <?php endif; ?>
          <div id="description"><?= $property->name ?></div>
        </div>
        <div id="thumbs">
          <?php foreach ($this->picture_repo->pics_for($property) as $picture): ?>
          <img src="<?= $picture->get_url() ?>" class="img-responsive"/>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
<script>
  $('#thumbs').delegate('img','click', function(){
    $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
    $('#description').html($(this).attr('alt'));
  });
</script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-2cdebee3-5585-7f9e-44b6-a68bbad27d62", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
