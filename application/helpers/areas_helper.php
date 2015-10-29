<?php

if ( ! function_exists('shape_for_area')) {
  function shape_for_area($area) {
    $positions = array($area->position_1, $area->position_2, $area->position_3);
    $html = '<area shape="circle" ' .
                   'coords="' . implode(',', $positions) . '" '.
                   'href="' . site_url("areas/$area->id") . '" '.
                   'alt="' . $area->nombre . '">';

    return $html;
  }
}
