<?= doctype('html5') ?>
<html>
<head>
  <title><?= isset($title) ? "$title | " : '' ?>Inmobiliaria Marimar</title>
  <meta charset="utf-8">
  <?= link_tag(img_url().'favicon.jpg', 'shortcut icon') ?>
  <?= css('bootstrap.min.css') ?>
  <?= css('grand-container.css') ?>
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
                <a class="navbar-brand">Inmobiliaria Marimar</a>
              </div>

              <div class="collapse navbar-collapse dropdown" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?=site_url()?>"><button class="btn btn-success">Inicio</button></a></li>
                    <li><a href="<?=site_url('contacto')?>"><button class="btn btn-success">Contacto</button></a></li>
                    <li class="a">
                      <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Propiedades en Venta
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="<?=site_url('propiedades/ventas')?>">Por Precio</a></li>
                        <li><a href="#">Por Área</a></li>
                        <li><a href="#">Departamentos por Precio</a></li>
                        <li><a href="#">Departamentos por Área</a></li>
                      </ul>
                    </li>
                    <li class="a">
                      <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Propiedades en Renta
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="<?=site_url('propiedades/rentas')?>">Por Precio</a></li>
                        <li><a href="#">Por Área</a></li>
                        <li><a href="#">Departamentos por Precio</a></li>
                        <li><a href="#">Departamentos por Área</a></li>
                      </ul>
                    </li>
                    <li class="a">
                      <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Terrenos en Venta
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="<?=site_url('terrenos/ventas')?>">Terrenos por Precio</a></li>
                        <li><a href="#">Terrenos por Área</a></li>
                      </ul>
                    </li>
                    <li class="a">
                      <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Terrenos en Renta
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="<?=site_url('terrenos/rentas')?>">Terrenos por Precio</a></li>
                        <li><a href="#">Terrenos por Área</a></li>
                      </ul>
                    </li>
                </ul>
              </div>

            </div>
          </nav>
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
