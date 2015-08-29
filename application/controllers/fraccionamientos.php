<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Fraccionamientos extends ApplicationController {
 
   public function __construct() {
    parent::__construct();
    $this->load->library('Picture_repo');
    $this->load->helper('inflector');
    $this->load->library('pagination');
  }

  public function index()
  {
    $this->load->view('fraccionamientos/index');
  }
}
 
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */