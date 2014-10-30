<?php

  require '../vendor/autoload.php';

  $HQ = new GaHqSdk\GoAbroadHqSdk(require '../src/Config/config.php');
  $HQ->getReferences();
  echo '<pre>';
  print_r($HQ->references);
  echo '</pre>';
?>