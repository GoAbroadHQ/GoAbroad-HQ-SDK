#GoAbroad HQ SDK

##Installation

```bash
  composer insall sebmak/goabroadhq-sdk
```
##Configuration

```php
  
 $config = [
 
  'env'=>'prod',
    'credentials'=>[
      'username'=>API_USERNAME,
      'password'=>API_PASSWORD
    ]
  ]
```

##Usage

###Controller
```php
  use GaHqSdk\LeadCapture;
  
  ...
  
  $hq = new LeadCapture($config);
```
###View

`$hq->render` pulls from `/src/config/defaults.php` and generates html input/textarea/select elements

```php
  $hq->render('FirstName',array('class'=>'input','name'=>'FirstName'))
```


##Submitting Leads

```php
    $hq = new LeadCapture($config);
    $response = $hq->submitLead($_POST);
```
