<?= css('properties.css') ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h4><?= $title ?></h4>
      <main>
        $this->load->view('fraccionamiento');
      </main>
    </div>
    <div style="text-align: center">
      <?= $this->pagination->create_links() ?>
    </div>
  </div>
</div>
