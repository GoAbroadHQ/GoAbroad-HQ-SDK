<?php namespace GaHqSdk;

class ReferenceObject implements \ArrayAccess{

  public function offsetSet($offset, $value) {
      $this->$offset = $value;
  }

  public function offsetExists($offset) {
      return isset($this->$offset);
  }

  public function offsetUnset($offset) {
      unset($this->$offset);
  }

  public function offsetGet($offset) {
      return isset($this->$offset) ? $this->$offset : null;
  }

  public function __get($data){
    if(isset($this->$data)){
      return $this->$data;
    }
    return null;
  }

  public function __set($data,$value){
    $this->$data = $value;
  }
}