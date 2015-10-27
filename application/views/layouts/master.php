<?= doctype('html5') ?>
<html>
<head>
  <title><?= isset($title) ? "$title - " : '' ?>Inmobiliaria Marimar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= link_tag(img_url().'favicon.jpg', 'shortcut icon') ?>
  <?= css('bootstrap.min.css') ?>
  <?= css('grand-container.css') ?>
  <?= css('navbar.css') ?>
  <?= css('styles.css') ?>
  <?= js('jquery-1.11.1.min.js') ?>
  <?= js('bootstrap.min.js') ?>
  <?= js('cubeimage.js') ?>
</head>
<body>
  <div class="grand-container">
    <header>
      <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="padding-bottom: 10px; padding-top: 10px;">
        <center>
          <img class="img-responsive imglogo" src="<?=img_url().'marimar-logo.jpg'?>">
        </center>
      </div>

      <div class="container-fluid cf1">
        <div class="col-md-12 col-sm-12 col-xl-12 col1">
          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">
                  <img alt="Brand" src="<?=img_url().'favicon.jpg'?>" style="height: 100%">
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse dropdown" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <?php $this->load->view('layouts/menu') ?>
                </ul>
                <?= form_open(site_url('propiedades/buscar'), 'class="navbar-form navbar-right"') ?>
                  <div class="input-group">
                    <?= form_input('keywords', set_value('keywords', null), 'class="form-control" placeholder="Buscar propiedades"') ?>
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                      </button>
                    </span>
                  </div>
                <?= form_close() ?>
              </div>

            </div>
          </nav>
        </div>
      </div>
      </header>

      <main>
        <?= $this->load->view($content, null, true) ?>
      </main>

      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <i class="glyphicon glyphicon-phone"> 314 142-8513</i><br>
              <i class="glyphicon glyphicon-phone"> 314 109-3511</i><br>
              <i class="glyphicon glyphicon-inbox"></i> <?= CONTACT_EMAIL_ADDRESS ?>
            </div>
            <div class="col-md-4 text-center">
              <p>Inmobiliaria Marimar &#169;</p>
            </div>
            <div class="col-md-4 text-right">
              <a href="//mundovirtual.com.mx/mv2014/" target="_blank">
                <p>Desarrollado por Mundo virtual</p>
              </a>
            </div>
          </div>
        </div>
      </footer>
    </div>
</body>
</html>
