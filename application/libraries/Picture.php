<?php

class Picture {

  private $path;

  public function __construct($path) {
    $this->path = $path;
  }

  public function get_url() {
    $url = str_replace(FCPATH, '', $this->path);
    return base_url($url);
  }

  public function get_html() {
    $url = $this->get_url();
    return "<img src='$url'>";
  }

  public function get_path() {
    return $this->path;
  }

  public function set_path($path) {
    $this->path = $path;
  }

}
