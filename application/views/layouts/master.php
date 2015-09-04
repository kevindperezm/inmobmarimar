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
                <a class="navbar-brand">Inmobiliaria Marimar</a>
              </div>
              <div class="collapse navbar-collapse dropdown" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="<?=site_url()?>">Inicio</a></li>
                  <li><a href="<?=site_url('contacto')?>">Contacto</a></li>
                  <li class="dropdown">
                    <a href="#"class="dropdown-toggle" data-toggle="dropdown">Propiedades <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?=site_url('propiedades/ventas')?>">En venta</a></li>
                      <li><a href="<?=site_url('propiedades/rentas')?>">En renta</a></li>
                      <li><a href="<?=site_url('propiedades/areas')?>">Por áreas</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#"class="dropdown-toggle" data-toggle="dropdown">Terrenos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?=site_url('terrenos/ventas')?>">En venta</a></li>
                      <li><a href="<?=site_url('terrenos/rentas')?>">En renta</a></li>
                      <li><a href="<?=site_url('terrenos/areas')?>">Por áreas</a></li>
                    </ul>
                  </li>
                  <li><a href="<?=site_url('propiedades/nuevos-fraccionamientos')?>">Fraccionamientos nuevos</a></li>
                </ul>
                  <!--<div class="input-group">
                    <input type="text" class="form-control busqueda" placeholder="Buscar" name="name">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle buscar2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="">Por áreas</a></li>
                      </ul>
                      <button class="btn btn-default buscar" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                  </div>-->
                <form class="navbar-form navbar-left" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control busqueda" placeholder="Buscar" name="name">
                    <span class="input-group-btn">
                      <button class="btn btn-default buscar" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </span>
                  </div>
                </form>
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
