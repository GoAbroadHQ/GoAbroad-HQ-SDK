<?php namespace GaHqSdk;

use mjohnson\utility\TypeConverter;
use GaHqSdk\ReferenceObject;
use GaHqSdk\Array2XML;

abstract class HqSdk {

  const PROD_URL = 'https://api.goabroadhq.com/GoAbroadHQ.svc';
  const DEV_URL = 'http://dev-api.goabroadhq.com/GoAbroadHQ.svc';

  /*
   * The Environment Url that is to be used for requests.
   * 
   */
  protected $environment;

  /*
   * The credentials to access the api.
   * 
   */
  protected $username;
  protected $password;

  public function __construct($config){
    $this->setEnv($config['env']);
    $this->setCredentials($config['credentials']);
  }

  protected function setCredentials($credentials){
    $this->username = $credentials['username'];
    $this->password = $credentials['password'];
  }

  protected function setEnv($env){
    $this->environment = $env=='prod' ? self::PROD_URL : self::DEV_URL;
  }

  protected function toObject($data){
    $object = new ReferenceObject;
    foreach($data as $key=>$value){
      if(is_array($value)){
        $object->$key = $this->toObject($value);
      }
      else {
        $object->$key = $value;
      }
    }
    return $object;
  }

  protected function get($to){
    $get = array(
      'userName'=>$this->username,
      'password'=>$this->password
    );

    // Open the file using the HTTP headers set above
    // 
    
    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );  
    $file = utf8_encode ( (string) file_get_contents($this->environment.'/'.ucwords($to).'?'.urldecode(http_build_query($get)), false, stream_context_create($arrContextOptions)) );


    $file = $this->toObject(TypeConverter::xmlToArray($file, TypeConverter::XML_MERGE));
    return $this->$to = $file;

  }

  protected function formatLead($post){

    $leads = array();
    foreach($post as $key=>$val){
      $temp = array();
      $temp['@attributes']=array(
        'Name'=>$key
      );
      if(preg_match('/[^\d \w\-]/ui', $val)){  
       $temp['@cdata']=$val;
      } else {
        $temp['@value']=$val;
      }

      $leads[]=$temp;
    }

    $data = array(
      'Lead'=>array(
        'Field'=>$leads
      )
    );

    $xml = (string) Array2XML::createXML('Leads',$data)->saveXML();
    $xml = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $xml);

    return array('leads'=>urlencode($xml));
  }

  protected function post($to,$fields){
    $get = array(
      'userName'=>$this->username,
      'password'=>$this->password
    );

    $headers = array(
      "Content-type: application/x-www-form-urlencoded;charset=\"utf-8\"",
      "Accept: text/xml",
      "Cache-Control: no-cache",
      "Pragma: no-cache",
    );
    //set POST variables

    // $fields_string = '';

    //url-ify the data for the POST
    // foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    // $fields_string = rtrim($fields_string, '&');

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $this->environment.'/'.ucwords($to).'?'.urldecode(http_build_query($get)),
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => http_build_query($fields),
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_HTTPHEADER => array(
        "accept: text/xml",
        "cache-control: no-cache",
        "pragma: no-cache"
      ),
    ));

    $result = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      throw new \Exception("cURL Error #:" . $err);
    }

    // return $result;

    // Open the file using the HTTP headers set above
    // 
    $file = utf8_encode ( (string) $result );
    $file = $this->toObject(TypeConverter::xmlToArray($file, TypeConverter::XML_MERGE));

    if($file->GAHQResponses->GAHQResponse && $file->GAHQResponses->GAHQResponse->Type === 'Exception') {
      throw new \Exception(
          'There was an error submitting your request. Please check your data before trying again.',
          0,
          new \Exception($file->GAHQResponses->GAHQResponse->value)
      );
    }

    return $file;

  }
}
