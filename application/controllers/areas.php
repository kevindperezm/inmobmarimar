 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__.'/application.php';

class Areas extends ApplicationController {

  const PER_PAGE = 20;

  public function __construct() {
    parent::__construct();
    $this->load->library('Picture_repo');
    $this->load->helper('inflector');
    $this->load->library('pagination');
  }
 private function index(){
     $this->load->view('areas');
  }
}