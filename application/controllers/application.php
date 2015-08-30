<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicationController extends CI_Controller {

  protected function render($view, $data = array()) {
    $data['content'] = $view;
    $this->load->view('layouts/master', $data);
  }

  protected function kind_for($kind) {
    $matches = array('propiedades' => 'house',
                     'terrenos'    => 'terrain');
    return $matches[$kind];
  }

  protected function sell_mode_for($sell_mode) {
    $matches = array('ventas' => 'sale',
                     'rentas' => 'rent');
    return $matches[$sell_mode];
  }

}
