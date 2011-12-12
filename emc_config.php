<?php
   include 'functions.php';
   
//std settings. You can remove the ones you are not using. just make sure you know what you are doing.
$GOOGLE_MAP_API = 'http://maps.googleapis.com/maps/api/staticmap?center=%location%&zoom=11&size=200x200&sensor=false';
$BING_MAP_API   = '';
$YAHOO_MAP_API  = '';

//configs

// Site Plugin Settings
// Banner: 1= Display banner, 2=redirect, 0= none
   $BANNER=0;
   $REDIRECT_PAGE='';
   $BANNER_PAGE='';
    
//Server settings

   // Should this act as a fowarding/display node?
   $NODEMODE=0;
   // Token notifies that you've pulled your trigger
   $TOKEN_FILE='tok.en';
   // dispatch file name
   $DISPATCH_CSV = './dispatch.csv';
   $HISTORY_DAYS = '7';
   
   // Servers to ping with your status
   $PING='';
   
   //Track your location
   $TRACKING = 1;
   
   //Creating a message: use variables: %location%, %phone%, %map%
   $MSG_BODY    = "I need help! You can call me at %phone%, and I am at %location%.\nHere is a map of where I am: %map%";

   //email/message settings
   $SENDTO  = 'test@abbiecod.es'; //email addresses to send notifies to, comma separated. 
   $FROM    = 'test@abbiecod.es';
   $SUBJECT = "Test of emergency broadcast system";
   $PHONE   = '555-555-5555';
   $MAP_API  = $GOOGLE_MAP_API;

/*********************************************************************
 *      DO NOT EDIT BELOW THIS -generally speaking
 *********************************************************************/
 
   $MSG_BODY = str_replace('%phone%',$PHONE,$MSG_BODY);
?>