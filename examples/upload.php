<?php
  require '../vendor/autoload.php';

  $HQ = new GaHqSdk\LeadCapture(require '../src/Config/leadcapture.php',require '../src/Config/config.php');

  header('Content-Type: text/xml');
  print_r($HQ->submitLead($_POST));