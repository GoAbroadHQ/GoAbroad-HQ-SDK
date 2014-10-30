<?php 

return array(
  'fields'=>array(
  //FieldName=>Required
    'FirstName'=>array(
      'required'=>true,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'First Name'
      )
    ),
    'LastName'=>array(
      'required'=>true,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Last Name'
      )
    ),
    'Email'=>array(
      'required'=>true,
      'type'=>'email',
      'options'=>array(
        'placeholder'=>'Email Address'
      )
    ),
    'Phone'=>array(
      'required'=>true,
      'type'=>'tel',
      'options'=>array(
        'placeholder'=>'Contact Number'
      )
    ),
    'TimeZoneId'=>array(
      'required'=>false,
      'type'=>'select',
      'default'=>'(UTC-07:00) Mountain Time (US & Canada)',
      'reference'=>'TimeZones',
      'reference_type'=>'TimeZone'
    ),
    'InstitutionProfileId'=>array(
      'required'=>true,
      'type'=>'select',
      'reference'=>'Institutions',
      'reference_type'=>'Institution'
    ),
    'InterestTerm'=>array(
      'required'=>false,
      'type'=>'text'
    ),
    'InterestYear'=>array(
      'required'=>false,
      'type'=>'text'
    ),
    'CountryOfInterest1Id'=>array(
      'required'=>false,
      'type'=>'select',
      'reference'=>'OrganizationCountries',
      'reference_type'=>'OrganizationCountry'
    ),
    'ProgramOfInterest1Id'=>array(
      'required'=>false,
      'type'=>'select',
      'reference'=>'Programs',
      'reference_type'=>'Program'
    ),
    'Question'=>array(
      'required'=>false,
      'type'=>'textarea'
    ),
  )
);