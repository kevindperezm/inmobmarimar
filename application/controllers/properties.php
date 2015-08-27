<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__.'/application.php';

class Properties extends ApplicationController {

  const PER_PAGE = 20;

  public function __construct() {
    parent::__construct();
    $this->load->library('Picture_repo');
    $this->load->helper('inflector');
    $this->load->library('pagination');
  }

  public function index($kind, $sell_mode, $page = 1) {
    $this->init_pagination($kind, $sell_mode);
    $offset = self::PER_PAGE * ($page - 1);
    $criteria = array('kind'      => $this->kind_for($kind),
                      'sell_mode' => $this->sell_mode_for($sell_mode));
    $properties = $this->properties_model
                  ->find_all($criteria, self::PER_PAGE, $offset);
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

  private function init_pagination($kind, $sell_mode) {
    $criteria = array('kind'      => $this->kind_for($kind),
                      'sell_mode' => $this->sell_mode_for($sell_mode));
    $properties_count = $this->properties_model->count($criteria);
    $config = array('base_url'         => site_url("$kind/$sell_mode/pagina"),
                    'total_rows'       => $properties_count,
                    'per_page'         => self::PER_PAGE,
                    'use_page_numbers' => true,
                    'uri_segment'      => 4,
                    'full_tag_open'    => '<div class="pagination">',
                    'full_tag_close'   => '</div>',
                    'first_tag_open'   => '<li>',
                    'first_tag_close'  => '</li>',
                    'prev_tag_open'    => '<li>',
                    'prev_tag_close'   => '</li>',
                    'num_tag_open'     => '<li>',
                    'num_tag_close'    => '</li>',
                    'next_tag_open'    => '<li>',
                    'next_tag_close'   => '</li>',
                    'last_tag_open'    => '<li>',
                    'last_tag_close'   => '</li>',
                    'cur_tag_open'     => '<li class="active"><a href="#">',
                    'cur_tag_close'    => '</a></li>');
    $this->pagination->initialize($config);
  }

}
