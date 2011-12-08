<?php
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
   
   // Servers to ping with your status
   $PING='';
   

	//email settings
   $SENDTO  ='test@abbiecod.es'; //email addresses to send notifies to, comma separated. 
   $FROM    ='test@abbiecod.es';
   $SUBJECT ="Test of emergency broadcast system";
   $BODY    = $SUBJECT;
   $PHONE   ='555-555-5555';
?>