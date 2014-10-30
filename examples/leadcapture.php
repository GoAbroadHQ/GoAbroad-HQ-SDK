<?php

  require '../vendor/autoload.php';

  $HQ = new GaHqSdk\LeadCapture(require '../src/Config/leadcapture.php',require '../src/Config/config.php');

?>
<html>
  <head>
    <style>
    .input {
      display: block;
      padding: 5px;
      margin-bottom: 10px;
    }
    </style>
  </head>
  <body>
    <form action="submitlead.php" method="post">
      <label> First Name
        <?= $HQ->render('FirstName',array('class'=>'input','name'=>'FirstName')) ?>
      </label>
      <label> Last Name
        <?= $HQ->render('LastName',array('class'=>'input','name'=>'LastName')) ?>
      </label>
      <label> Email
        <?= $HQ->render('Email',array('class'=>'input','name'=>'Email')) ?>
      </label>
      <label> Phone
        <?= $HQ->render('Phone',array('class'=>'input','name'=>'Phone')) ?>
      </label>
      <label> Timezone
        <?= $HQ->render('TimeZoneId',array('class'=>'input','name'=>'TimeZoneId')) ?>
      </label>
      <label> Institution
        <?= $HQ->render('InstitutionProfileId',array('class'=>'input','name'=>'InstitutionProfileId')) ?>
      </label>
      <label> Interest Term
        <?= $HQ->render('InterestTerm',array('class'=>'input','name'=>'InterestTerm')) ?>
      </label>
      <label> Interest Year
        <?= $HQ->render('InterestYear',array('class'=>'input','name'=>'InterestYear')) ?>
      </label>
      <label> Country of Interest
        <?= $HQ->render('CountryOfInterest1Id',array('class'=>'input','name'=>'CountryOfInterest1Id')) ?>
      </label>
      <label> Program of Interest
        <?= $HQ->render('ProgramOfInterest1Id',array('class'=>'input','name'=>'ProgramOfInterest1Id')) ?>
      </label>
      <label> Question?
        <?= $HQ->render('Question',array('class'=>'input','name'=>'Question')) ?>
      </label>
      <input type="submit" value="submit">
    </form>
  </body>
</html>