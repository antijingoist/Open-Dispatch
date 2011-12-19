<?php
   include 'emc_config.php';
/* Grab Data from Smart Phone and place into CSV */
   $location    = _INPUT('loc');
   $ping        = _INPUT('ping');
   $msgOverride = _INPUT('messg');
   
   if (isset($msgOverride)){
      $message = $msgOverride;
   }else{
      $message = $MSG_BODY;
   }

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
      $body = str_replace('%location%', $location, $message);
      $body = str_replace('%map%',$location_map,$body);
      $header = "From:".$FROM;
      mail($SENDTO, $subject, $body, $header);
   }
   echo "done";

?>