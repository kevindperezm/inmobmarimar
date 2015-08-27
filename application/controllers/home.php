<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__."/application.php";

class Home extends ApplicationController {

  const PROPERTIES_NUM = 3;

  public function __construct() {
    parent::__construct();
    $this->load->library('Picture_repo');
    $this->load->helper('home');
  }

  public function index() {
    $data = array('properties_on_sale'   => $this->get_properties_on('sale'),
                  'properties_on_rent'   => $this->get_properties_on('rent'),
                  'terrains_on_sale'     => $this->get_terrains_on('sale'),
                  'terrains_on_rent'     => $this->get_terrains_on('rent'));
    $this->render('home', $data);
  }

  private function get_terrains_on($sell_mode) {
    return $this->get_properties_on($sell_mode, 'terrain');
  }

  private function get_properties_on($sell_mode, $kind = 'house') {
    $conditions = array('sell_mode' => $sell_mode,
                        'kind'      => $kind);
    return $this->properties_model->find_all($conditions, self::PROPERTIES_NUM);
  }

}
