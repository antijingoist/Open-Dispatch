<?php

/* Grab Data from Smart Phone and place into CSV to be parsed by Yahoo! */

   $coordinatepair =  $_REQUEST['coordinate'];
   if (!($CallList = fopen('./CallList.csv', 'a')))
    return;
    $coordinatepair = "\"" . date("r") . "\"," . $coordinatepair . "\n";
    fprintf($CallList, $coordinatepair);
    fclose($CallList);
    echo "done";
    $to = "abbie.gonzalez@gmail.com, t68v3z-yx5964@twittermail.com, joe140scamp@m.facebook.com";

    $subject = $SUBJECT . "Call me: " . $PHONE . $coordinatepair;
    $body = "";
    $header = "From:".$FROM;
    mail($SENDTO, $subject, $body, $header);

/*
   if (!($CallList = fopen('./CallList.csv', 'w')))
    return;
    fprintf($CallList, "");
   fclose($CallList);
*/
?>