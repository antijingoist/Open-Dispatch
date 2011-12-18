<?php
   include 'emc_config.php';

   if (!($CallList = fopen('./tracking.csv', 'w')))
    return;
    fprintf($CallList, "");
   fclose($CallList);
?>