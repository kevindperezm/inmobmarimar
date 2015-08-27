<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('properties_row_for')) {
  function properties_row_for($properties) {
    $ci = &get_instance();
    if (sizeof($properties) > 0) {
      $html = '';
      foreach ($properties as $property) {
        $data = array('property' => $property);
        $html.= $ci->load->view('partials/property_box', $data, true);
      }
      return $html;
    } else {
      $message = 'Actualmente, no hay nada para mostrar en esta sección.';
      $html = '<div class="alert alert-info">'.$message.'</div>';
      return $html;
    }
  }
}
