<?php namespace GaHqSdk;

use GaHqSdk\HqSdk;

class LeadCapture extends HqSdk{

  protected $config;
  protected $fields;

  public function __construct($config1,$config2){
    parent::__construct($config2);
    $this->config = $config1;
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

  protected function isRequired($config){
    if(array_key_exists('required', $config)){
      if($config['required']){
        return 'required';
      }
    }
    return null;
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
      return $this->generateOptions($this->getReferences()->$config['reference']->$config['reference_type'],$selected);
    }

    return $this->generateOptions($this->getReferences()->config['reference'],$selected);
  }

  public function renderTel($field,$options){
    return $this->renderText($field,$options,'tel');
  }
  public function renderEmail($field,$options){
    return $this->renderText($field,$options,'email');
  }

  public function renderText($field,$options,$type='text'){
    $config = $this->config['fields'][$field];
    if(array_key_exists('options', $config)){
      $options = $options + $config['options'];
    }
    if(array_key_exists('default', $config) && !array_key_exists('value', $options)){
      $options['value']=$config['default'];
    }
    return '<input type="'.$type.'" '.$this->fieldOptions($options).' '.$this->isRequired($config).'/>';
  }

  public function renderTextArea($field,$options){
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
    return '<textarea '.$this->fieldOptions($options).' '.$this->isRequired($config).'>'.$options['value'].'</textarea>';
  }

  public function renderSelect($field,$options){
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

    return '<select '.$this->fieldOptions($options).' '.$this->isRequired($config).'>'.$this->selectOptions($config,$options['selected']).'</select>';
  }

  public function submitLead($data){
    // return $this->formatLead($data);
    return $this->post('LeadCapture',$this->formatLead($data));
  }

  public function render($field,$options=array()){
    //TODO put exception handler here
    if(!array_key_exists($field, $this->config['fields'])) return '';

    if(!array_key_exists('type', $this->config['fields'][$field])){
      $render = $this->renderText($field,$options);
    } else {
      $class = 'render'.ucfirst($this->config['fields'][$field]['type']);
      $render = $this->$class($field,$options);
    }

    return $this->fields[$field] = $render;
  }

  public function __get($name){
    if(isset($this->fields[$name])) return $this->fields[$name];
    
    return $this->render($name);
  }


}