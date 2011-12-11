<?php
   include 'emc_config.php';
/* Grab Data from Smart Phone and place into CSV */
   $location =  _INPUT('loc');
   $ping = _INPUT('ping');
   
   if ($TRACKING == 1){
      if (!($data = fopen('./tracking.csv', 'a')))
         return;
      $dataline = "\"" . date("r") . "\"," . $location . "\n";
      fprintf($data, $dataline);
      fclose($data);
   }
   
   if ($ping==1){
      $location_map = str_replace("%location%", $location, $MAP_API);
      $subject = $SUBJECT . " " . $PHONE . ' ' . $location_map;
      // include a Google/similar Map service for easy finding
      $body = $subject;
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