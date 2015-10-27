<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicationController extends CI_Controller {

  const PER_PAGE = 20;

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

  protected function init_pagination($criteria, $url) {
    $properties_count = $this->properties_model->count($criteria);
    $config = array('base_url'         => site_url("$url/pagina"),
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
