<?php namespace GaHqSdk;

class HqReference {

  public function getCountries()
  {
      return $this->Countries;
  }
  public function getInstitutions()
  {
      return $this->Institutions;
  }
  public function getLeadStatuses()
  {
      return $this->LeadStatuses;
  }
  public function getLeadSourceTypes()
  {
      return $this->LeadSourceTypes;
  }
  public function getLeadTypes()
  {
      return $this->LeadTypes;
  }
  public function getOrganizationCountries()
  {
      return $this->OrganizationCountries;
  }
  public function getOrganizationRegions()
  {
      return $this->OrganizationRegions;
  }
  public function getPrograms()
  {
      return $this->Programs;
  }
  public function getProgramStatuses()
  {
      return $this->ProgramStatuses;
  }
  public function getProgramTypes()
  {
      return $this->ProgramTypes;
  }
  public function getStates()
  {
      return $this->States;
  }
  public function getStatuses()
  {
      return $this->Statuses;
  }
  public function getSalutationTypes()
  {
      return $this->SalutationTypes;
  }
  public function getTermTypes()
  {
      return $this->TermTypes;
  }

  /*
   * Setters
   */
  public function setCountries($Countries)
  {
      $this->Countries = $Countries;
  }
  public function setInstitutions($Institutions)
  {
      $this->Institutions = $Institutions;
  }
  public function setLeadStatuses($LeadStatuses)
  {
      $this->LeadStatuses = $LeadStatuses;
  }
  public function setLeadSourceTypes($LeadSourceTypes)
  {
      $this->LeadSourceTypes = $LeadSourceTypes;
  }
  public function setLeadTypes($LeadTypes)
  {
      $this->LeadTypes = $LeadTypes;
  }
  public function setOrganizationCountries($OrganizationCountries)
  {
      $this->OrganizationCountries = $OrganizationCountries;
  }
  public function setOrganizationRegions($OrganizationRegions)
  {
      $this->OrganizationRegions = $OrganizationRegions;
  }
  public function setPrograms($Programs)
  {
      $this->Programs = $Programs;
  }
  public function setProgramStatuses($ProgramStatuses)
  {
      $this->ProgramStatuses = $ProgramStatuses;
  }
  public function setProgramTypes($ProgramTypes)
  {
      $this->ProgramTypes = $ProgramTypes;
  }
  public function setStates($States)
  {
      $this->States = $States;
  }
  public function setStatuses($Statuses)
  {
      $this->Statuses = $Statuses;
  }
  public function setSalutationTypes($SalutationTypes)
  {
      $this->SalutationTypes = $SalutationTypes;
  }
  public function setTermTypes($TermTypes)
  {
      $this->TermTypes = $TermTypes;
  }

  public function __get($name){
    $name = 'get'.ucwords($name);
    if(method_exists($this, $name)){
      return $this->$name();
    }
  }

  public function __set($name,$value){
    $name = 'set'.ucwords($name);
    if(method_exists($this, $name)){
      return $this->$name($value);
    }
  }
}