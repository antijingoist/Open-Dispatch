<?php
   include 'emc_config.php';
/* Grab Data from Smart Phone and place into CSV */
   $location =  $_REQUEST['loc'];
   $ping = $_REQUEST['ping'];
   
   if ($TRACKING){
      if (!($data = fopen('./tracking.csv', 'a')))
         return;
      $dataline = "\"" . date("r") . "\"," . $location . "\n";
      fprintf($data, $dataline);
      fclose($data);
   }
   
   if ($ping==1){
      $subject = $SUBJECT . " Call me: " . $PHONE . $location;
      // include a Google/similar Map service for easy finding
      $location_map = str_replace("%location%", $location, $MAP_API);
      $body = $subject . $location_map;
      $header = "From:".$FROM;
      mail($SENDTO, $subject, $body, $header);
   }
   echo "done";

/*
   if (!($CallList = fopen('./CallList.csv', 'w')))
    return;
    fprintf($CallList, "");
   fclose($CallList);
*/
?>