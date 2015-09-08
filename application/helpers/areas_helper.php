<?php

if ( ! function_exists('shape_for_area')) {
  function shape_for_area($area) {
    $positions = [$area->position_1, $area->position_2, $area->position_3];
    $html = '<area shape="circle" ' .
                   'coords="' . implode(',', $positions) . '" '.
                   'href="#" '.
                   'alt="' . $area->nombre . '">';

    return $html;
  }
}
