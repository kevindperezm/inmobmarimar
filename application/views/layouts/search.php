<?= form_open(site_url('propiedades/buscar'), 'class="navbar-form navbar-right"') ?>
  <div class="input-group">
    <?= form_input('keywords',
                   set_value('keywords', null),
                   'class="form-control" placeholder="Buscar propiedades"') ?>
    <span class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </span>
  </div>
<?= form_close() ?>
