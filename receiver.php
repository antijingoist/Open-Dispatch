<?php

include 'emc_config.php';
/* Grab Data from Smart Phone and place into CSV to be parsed by Yahoo! */
   $coordinatepair =  $_REQUEST['coordinate'];
   //if (!($CallList = fopen('./CallList.csv', 'a')))
   // return;
   // $coordinatepair = "\"" . date("r") . "\"," . $coordinatepair . "\n";
   // fprintf($CallList, $coordinatepair);
   // fclose($CallList);
    echo "done";

    $subject = $SUBJECT . " Call me: " . $PHONE . $coordinatepair;
    $body = $subject;
    $header = "From:".$FROM;
    mail($SENDTO, $subject, $body, $header);

/*
   if (!($CallList = fopen('./CallList.csv', 'w')))
    return;
    fprintf($CallList, "");
   fclose($CallList);
*/
?>