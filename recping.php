<?

/* RPing

Pull in another users ping, with info, and add to updates list 
Format: user, key, location, message
Key and message will be optionally required on the server side, either configured by host, or user.
Not gonna worry about key security here. Just getting the information from the user's server and 
shoving it into a csv or DB for now. 

Format: 
"user","date/time","location","message","contact info"

*/
   include 'emc_config.php';

   $usr = $_REQUEST['usr'];
   $location = $REQUEST['location'];

   $usr_message = $REQUEST['msg'];
   $usr_key = $REQUEST['key'];
   $usr_contact = $REQUEST['contact'];

   $date = date("r");

      if (!($data = fopen($DISPATCH_CSV, 'a')))
         return;
      
      $dispatch = "\"$usr\",\"$date\",\"$location\",\"$usr_message\",\"$usr_contact\", \n";

      //"\"" . date("r") . "\"," . $location . "\n";
      fprintf($data, $dataline);
      fclose($data);
?>