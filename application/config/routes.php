<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "home";
$route['404_override'] = '';

$property_kinds = 'propiedades|terrenos';
$sell_modes     = 'ventas|rentas';

$route["($property_kinds)/($sell_modes)/pagina/(:num)"] = 'properties/index/$1/$2/$3';
$route["($property_kinds)/($sell_modes)/pagina"]        = 'properties/index/$1/$2/1';
$route["($property_kinds)/($sell_modes)"]               = 'properties/index/$1/$2';
$route['propiedades/(:num)']                            = 'properties/show/$1';
$route['propiedades/nuevos-fraccionamientos']           = 'properties/new_suburbs';
$route['propiedades/buscar']                            = 'properties/search';

$route['areas']                                         = 'areas/index';
$route['areas/(:num)']                                  = 'areas/show/$1';

$route['contacto']        = 'contact/show_form';
$route['contacto/enviar'] = 'contact/send_mail';
