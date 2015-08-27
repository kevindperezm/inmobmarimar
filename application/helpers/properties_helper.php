<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('full_address_for')) {
  function full_address_for($property) {
    $address = "$property->address_street ".
               "#$property->address_number, ".
               "$property->address_colony, ".
               "$property->address_city, ".
               "$property->address_country.";
    return $address;
  }
}

if (!function_exists('price_string_for')) {
  function price_string_for($property) {
    $price = '$'.number_format($property->price, 2).
             ' '.strtoupper($property->price_currency);
    return $price;
  }
}

if (!function_exists('maintenance_string_for')) {
  function maintenance_string_for($property) {
    $price = '$'.number_format($property->maintenance_cost, 2).
             ' '.strtoupper($property->maintenance_currency);
    return $price;
  }
}

if (!function_exists('details_url_for')) {
  function details_url_for($property) {
    return site_url("propiedades/$property->id");
  }
}

if (!function_exists('sell_string_for')) {
  function sell_string_for($property) {
    $kinds = array('house'   => 'propiedad',
                   'terrain' => 'terreno');
    $sell_modes = array('sale' => 'venta',
                        'rent' => 'renta');
    return ucfirst($kinds[$property->kind]).' en '
           .$sell_modes[$property->sell_mode];
  }
}
