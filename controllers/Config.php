<?php
/*
 * Author(s): Ryu Patterson
 */

class Config {
  public $proj_id;

  public function __construct() {
    //$this->proj_id = "uva_flashcard";
    $this->proj_id = "";
  }

  public function getURL() {
    return "protean-sphinx-347204.ue.r.appspot.com/{$this->proj_id}";
  }
}
