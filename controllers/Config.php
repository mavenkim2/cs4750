<?php
/*
 * Author(s): Ryu Patterson
 */

class Config {
  public $proj_id;
  public $computing_id;

  public function __construct() {
    $this->computing_id="~rjp5cc";
    $this->proj_id = "uva_flashcard";
  }

  public function getURL() {
    return "/{$this->computing_id}/{$this->proj_id}";
  }
}
