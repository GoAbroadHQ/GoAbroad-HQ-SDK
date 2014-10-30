<?php namespace GaHqSdk;

use GaHqSdk\HqSdk;

class GoAbroadHqSdk extends HqSdk{

  public function getReferences(){
    if(!isset($this->references)){
      $this->get('references');
    }
    return $this->references;
  }
}