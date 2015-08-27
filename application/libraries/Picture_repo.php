<?php

require_once __DIR__.'/Picture.php';

class Picture_repo {

  public function main_pic_for($property) {
    $pics = $this->pics_for($property);
    if (sizeof($pics) > 0) {
      return $pics[0];
    } else {
      return null;
    }
  }

  public function has_pics_for($property) {
    return (sizeof($this->pics_for($property)) > 0 );
  }

  public function pics_for($property) {
    return $this->get_pics_from_dir(PICTURES_DIR."/$property->id");
  }

  public function get_pics_from_dir($path) {
    $pics = array();
    foreach ($this->get_files_in($path) as $file) {
      if (preg_match('/\.[jpg|JPG|JPEG|png|PNG|gif|GIF|svg|SVG]/', $file)) {
        $pics[] = new Picture("$path/$file");
      }
    }
    return $pics;
  }

  private function get_files_in($path) {
    $files = file_exists($path) ? scandir($path) : array();
    return array_slice($files, 2);
  }

}
