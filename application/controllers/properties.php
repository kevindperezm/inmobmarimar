<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__.'/application.php';

class Properties extends ApplicationController {

  public function __construct() {
    parent::__construct();
    $this->load->library('Picture_repo');
    $this->load->helper('inflector');
    $this->load->library('pagination');
  }

  public function index($kind, $sell_mode, $page = 1) {
    $criteria = array('kind'      => $this->kind_for($kind),
                      'sell_mode' => $this->sell_mode_for($sell_mode));

    $this->init_pagination($criteria, "$kind/$sell_mode");
    $offset = self::PER_PAGE * ($page - 1);

    $properties = $this->properties_model->find_all($criteria, self::PER_PAGE, $offset);

    $data = array('title'      => ucfirst($kind).' en '.singular($sell_mode),
                  'properties' => $properties,
                  'kind'       => $kind,
                  'sell_mode'  => $sell_mode);

    $this->render('properties/index', $data);
  }

  public function show($id) {
    $property = $this->properties_model->find(array('id' => $id));
    if ($property) {
      $data = array('title'     => $property->name,
                    'property'  => $property);
      $this->render('properties/show', $data);
    } else {
      redirect(site_url());
    }
  }

  /**
   * Muestra una página listando las propiedades que se ubican en nuevos fraccionamientos.
   */
  public function new_suburbs($page = 1) {
    $criteria = array('new_suburb' => true);

    $this->init_pagination($criteria, 'propiedades/nuevos-fraccionamientos');
    $offset = self::PER_PAGE * ($page - 1);

    $properties = $this->properties_model->find_all($criteria, self::PER_PAGE, $offset);

    $data = array('title'      => 'Propiedades en fraccionamientos nuevos',
                  'properties' => $properties,
                  'kind'       => 'propiedades',
                  'sell_mode'  => 'venta o en renta');

    $this->render('properties/index', $data);
  }

}
