 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__.'/application.php';

class Areas extends ApplicationController {

  public function __construct() {
    parent::__construct();

    $this->load->library('pagination');
  }

  public function index() {
    $data = array(
      'areas' => $this->db->from('areas')->order_by('nombre')->get()->result()
    );

    $this->render('areas/index', $data);
  }

}
