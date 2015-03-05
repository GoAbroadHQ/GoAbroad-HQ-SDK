<?php 

return array(
  'fields'=>array(
    'SalutationTypeId'=>array(
      'title'=>'Salutation',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Salutation'
      )
    ),
    'FirstName'=>array(
      'title'=>'First Name',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'First Name'
      )
    ),
    'LastName'=>array(
      'title'=>'Last Name',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Last Name'
      )
    ),
    'PreferredName'=>array(
      'title'=>'Preferred Name',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Preferred Name'
      )
    ),
    'Email'=>array(
      'title'=>'Email Address',
      'required'=>true,
      'type'=>'email',
      'options'=>array(
        'placeholder'=>'Email Address'
      )
    ),
    'AlternateEmail'=>array(
      'title'=>'Alternate Email',
      'required'=>false,
      'type'=>'email',
      'options'=>array(
        'placeholder'=>'Alternate Email'
      )
    ),
    'Phone'=>array(
      'title'=>'Phone Number',
      'required'=>false,
      'type'=>'tel',
      'options'=>array(
        'placeholder'=>'Contact Number'
      )
    ),
    'PhoneExtension'=>array(
      'title'=>'Phone Extension',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Extension'
      )
    ),
    'Mobile'=>array(
      'title'=>'Mobile',
      'required'=>false,
      'type'=>'tel',
      'options'=>array(
        'placeholder'=>'Mobile'
      )
    ),
    'Skype'=>array(
      'title'=>'Skype',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Skype'
      )
    ),
    'Address1'=>array(
      'title'=>'Address',
      'required'=>false,
      'type'=>'textarea',
      'options'=>array(
        'placeholder'=>'Address'
      )
    ),
    'Address2'=>array(
      'title'=>'Address Continued',
      'required'=>false,
      'type'=>'textarea',
      'options'=>array(
        'placeholder'=>'Address Continued'
      )
    ),
    'City'=>array(
      'title'=>'City',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'City'
      )
    ),
    'StateId'=>array(
      'title'=>'State',
      'required'=>false,
      'type'=>'select',
      'reference'=>'States',
      'reference_type'=>'State'
    ),
    'State'=>array(
      'title'=>'State (Manual Input)',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'State (Manual Input)'
      )
    ),
    'Zipcode'=>array(
      'title'=>'Zipcode',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Zipcode'
      )
    ),
    'CountryId'=>array(
      'title'=>'Country',
      'required'=>false,
      'type'=>'select',
      'reference'=>'Countries',
      'reference_type'=>'Country'
    ),
    'Note'=>array(
      'title'=>'Note',
      'required'=>false,
      'type'=>'textarea',
      'options'=>array(
        'placeholder'=>'Note'
      )
    ),
    'TimeZoneId'=>array(
      'title'=>'Time Zone',
      'required'=>true,
      'type'=>'select',
      'default'=>'Mountain Standard Time',
      'reference'=>'TimeZones',
      'reference_type'=>'TimeZone'
    ),
    'Gender'=>array(
      'title'=>'Gender',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Gender'
      )
    ),
    'BirthDate'=>array(
      'title'=>'Birth Date',
      'required'=>false,
      'type'=>'date',
      'options'=>array(
        'placeholder'=>'Birth Date'
      )
    ),
    'PermanentAddress1'=>array(
      'title'=>'Permanent Address',
      'required'=>false,
      'type'=>'textarea',
      'options'=>array(
        'placeholder'=>'Permanent Address'
      )
    ),
    'PermanentAddress2'=>array(
      'title'=>'Permanent Address Continued',
      'required'=>false,
      'type'=>'textarea',
      'options'=>array(
        'placeholder'=>'Permanent Address Continued'
      )
    ),
    'PermanentCity'=>array(
      'title'=>'Permanent City',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Permanent City'
      )
    ),
    'PermanentStateId'=>array(
      'title'=>'Permanent State',
      'required'=>false,
      'type'=>'select',
      'options'=>array(
        'placeholder'=>'Permanent State'
      ),
      'reference'=>'States',
      'reference_type'=>'State'
    ),
    'PermanentState'=>array(
      'title'=>'Permanent State (Manual Input)',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Permanent State (Manual Input)'
      )
    ),
    'PermanentZipcode'=>array(
      'title'=>'Permanent Zipcode',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Permanent Zipcode'
      )
    ),
    'PermanentCountryId'=>array(
      'title'=>'Permanent Country',
      'required'=>false,
      'type'=>'select',
      'reference'=>'Countries',
      'reference_type'=>'Country'
    ),
    'CitizenshipCountryId'=>array(
      'title'=>'Citizenship Country',
      'required'=>false,
      'type'=>'select',
      'reference'=>'Countries',
      'reference_type'=>'Country'
    ),
    'InstitutionProfileId'=>array(
      'title'=>'University',
      'type'=>'select',
      'reference'=>'Institutions',
      'reference_type'=>'Institution'
    ),
    'InstitutionName'=>array(
      'title'=>'University (Manual Input)',
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'University (Manual Input)'
      )
    ),
    'TermTypeId'=>array(
      'title'=>'Term of Interest',
      'required'=>false,
      'type'=>'select',
      'reference'=>'TermTypes',
      'reference_type'=>'TermType'
    ),
    'InterestYear'=>array(
      'title'=>'Interest Year',
      'required'=>false,
      'type'=>'text'
    ),
    'InterestProgram'=>array(
      'title'=>'Interest Program',
      'required'=>false,
      'type'=>'text'
    ),
    'ProgramOfInterest1Id'=>array(
      'title'=>'Program Of Interest',
      'required'=>false,
      'type'=>'select',
      'reference'=>'Programs',
      'reference_type'=>'Program'
    ),
    'ProgramOfInterest2Id'=>array(
      'title'=>'Program Of Interest 2',
      'required'=>false,
      'type'=>'select',
      'reference'=>'Programs',
      'reference_type'=>'Program'
    ),
    'FieldOfInterest1'=>array(
      'title'=>'Field Of Interest',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Field Of Interest'
      )
    ),
    'FieldOfInterest2'=>array(
      'title'=>'Field Of Interest 2',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Field Of Interest 2'
      )
    ),
    'CountryOfInterest1Id'=>array(
      'title'=>'Country of Interest',
      'required'=>false,
      'type'=>'select',
      'reference'=>'OrganizationCountries',
      'reference_type'=>'OrganizationCountry'
    ),
    'CountryOfInterest2Id'=>array(
      'title'=>'Country of Interest 2',
      'required'=>false,
      'type'=>'select',
      'reference'=>'OrganizationCountries',
      'reference_type'=>'OrganizationCountry'
    ),
    'Question'=>array(
      'title'=>'Question',
      'required'=>false,
      'type'=>'textarea'
    ),
    'LeadSourceTypeId'=>array(
      'title'=>'Lead Source Interest',
      'required'=>false,
      'type'=>'select',
      'reference'=>'LeadSourceTypes',
      'reference_type'=>'LeadSourceType'
    ),
    'LeadSourceDetail'=>array(
      'title'=>'Lead Source Detail',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Lead Source Detail'
      )
    ),
    'GenerationListing'=>array(
      'title'=>'Generation Listing',
      'required'=>false,
      'type'=>'text',
      'options'=>array(
        'placeholder'=>'Generation Listing'
      )
    ),
    'LeadStatus1Id'=>array(
      'title'=>'Country of Interest',
      'required'=>false,
      'type'=>'select',
      'reference'=>'LeadStatuses',
      'reference_type'=>'LeadStatus1'
    ),
    'LeadStatus2Id'=>array(
      'title'=>'Country of Interest 2',
      'required'=>false,
      'type'=>'select',
      'reference'=>'LeadStatuses',
      'reference_type'=>'LeadStatus2'
    ),
    'LeadType'=>array(
      'title'=>'Lead Type',
      'required'=>false,
      'type'=>'select',
      'reference'=>'LeadTypes',
      'reference_type'=>'LeadType'
    ),
    'ApplicationDate'=>array(
      'title'=>'Application Date',
      'required'=>false,
      'type'=>'date',
      'default'=>date("m-d-Y"),
    ),
    'ExpirationDate'=>array(
      'title'=>'Expiration Date',
      'required'=>false,
      'type'=>'date',
    ),
    'WithdrawalReason'=>array(
      'title'=>'Withdrawal Reason',
      'required'=>false,
      'type'=>'textarea',
    ),
    'MarketingCampaign'=>array(
      'title'=>'Marketing Campaign',
      'required'=>false,
      'type'=>'text',
    ),
    'Major'=>array(
      'title'=>'Major',
      'required'=>false,
      'type'=>'text',
    ),
    'CurrentYearInSchoolId'=>array(
      'title'=>'Current Year In School',
      'required'=>false,
      'type'=>'select',
      'reference'=>'SchoolYears',
      'reference_type'=>'CurrentYearInSchool'
    ),
  )
);