<?php namespace GaHqSdk;

use GaHqSdk\HqSdk;

class LeadCapture extends HqSdk{

  protected $config;
  protected $fields;

  public function __construct($config){
    parent::__construct($config);
    $this->config = require(__DIR__.'/config/defaults.php');
  }

  public function getReferences(){
    if(!isset($this->references)){
      $this->get('references');
    }
    return $this->references;
  }

  public function renderAll($options=array()){
    foreach($config['fields'] as $field){
      $this->render($field,$options);
    }
  }

  protected function isRequired($required,$config){
    if($required==true || (isset($config['required']) && $config['required']==true)){
      return 'required';
    }
    return null;
  }

  public function getOption($field,$option){
    return $this->config['fields'][$field][$option];
  }

  public function getFieldTypes(){
    $array = array();

    foreach ($this->config['fields'] as $key => $value) {
      $array[$key]=$value['title'];
    }
    return $array;
  }

  protected function fieldOptions($options){
    $return = '';
    foreach($options as $option=>$value){
      $return.=$option.'="'.$value.'"';
    }
    return $return;
  }

  protected function generateOptions($array,$selected){
    $return = '<option value=""> -- Select -- </option>';
    if(is_object($array[0])){
      foreach($array as $value){
        $return.='<option value="'.$value['Id'].'" '.(($value['Id']==$selected) ? 'selected="selected"' : null).'>'.$value['value'].'</option>';
      }
    } else {
      $return = '<option value="'.$array['Id'].'" '.(($array['Id']==$selected) ? 'selected="selected"' : null).'>'.$array['value'].'</option>';
    }
    return $return;

  }

  protected function selectOptions($config,$selected){
    if(gettype($config['reference'])=='array') return $this->generateOptions($config['reference']);

    if(array_key_exists('reference_type', $config)){
      try {
        return $this->generateOptions($this->getReferences()->$config['reference']->$config['reference_type'],$selected);
      } catch {
        return null;
      }
    }

    return $this->generateOptions($this->getReferences()->config['reference'],$selected);
  }

  public function renderTel($field,$options,$required){
    return $this->renderText($field,$options,'tel',$required);
  }
  public function renderEmail($field,$options,$required){
    return $this->renderText($field,$options,'email',$required);
  }
  public function renderDate($field,$options,$required){
    return $this->renderText($field,$options,'date',$required);
  }

  public function renderText($field,$options,$type='text',$required=false){
    $config = $this->config['fields'][$field];
    if(array_key_exists('options', $config)){
      $options = $options + $config['options'];
    }
    if(array_key_exists('default', $config) && !array_key_exists('value', $options)){
      $options['value']=$config['default'];
    }
    return '<input type="'.$type.'" '.$this->fieldOptions($options).' '.$this->isRequired($required,$config).'/>';
  }

  public function renderTextarea($field,$options,$required){
    $config = $this->config['fields'][$field];
    if(array_key_exists('options', $config)){
      $options = $options + $config['options'];
    }
    if(array_key_exists('default', $config) && !array_key_exists('value', $options)){
      $options['value']=$config['default'];
    }
    if(!array_key_exists('selected', $options)){
      $options['value']=null;
    }
    return '<textarea '.$this->fieldOptions($options).' '.$this->isRequired($required,$config).'>'.$options['value'].'</textarea>';
  }

  public function renderSelect($field,$options,$required){
    $config = $this->config['fields'][$field];
    if(array_key_exists('options', $config)){
      $options = $options + $config['options'];
    }

    if(array_key_exists('default', $config) && !array_key_exists('selected', $options)){
      $options['selected']=$config['default'];
    }
    if(!array_key_exists('selected', $options)){
      $options['selected']=null;
    }

    return '<select '.$this->fieldOptions($options).' '.$this->isRequired($required,$config).'>'.$this->selectOptions($config,$options['selected']).'</select>';
  }

  public function submitLead($data){
    // return $this->formatLead($data);
    return $this->post('LeadCapture',$this->formatLead($data));
  }

  public function render($field,$options=array(),$required=false){
    //TODO put exception handler here
    if(!array_key_exists($field, $this->config['fields'])) return '';

    if(!array_key_exists('type', $this->config['fields'][$field]) || $this->config['fields'][$field]['type']=='text'){
      $render = $this->renderText($field,$options,'text',$required);
    } else {
      $class = 'render'.ucfirst($this->config['fields'][$field]['type']);
      $render = $this->$class($field,$options,$required);
    }

    return $this->fields[$field] = $render;
  }

  public function __get($name){
    if(isset($this->fields[$name])) return $this->fields[$name];
    
    return $this->render($name);
  }


}