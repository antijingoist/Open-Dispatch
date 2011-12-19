<?php
/*
Plugin Name: Open Dispatch Receiver 
Plugin URI: http://opends.co
Description: receives emergency messages sent using an 
             open dispatch compatable client, and notifies others based on
             your preferences.
Version: 0.0.1
Author: Abelardo Gonzalez
Author URI: http://abbiecod.es
License: Copyleft
*/

/* quick docs: 
   Input variables: 
   loc:      coordinate Location
   ping:     are we sending an emergency signal, or just logging location
   message:  message to override default with
   wpi_key:  wordpress install key: user key/password sending update using wordpress
   usr_site: if running as repeater/server, origin site to check valid, get user info from
*/


//Options page

//Set up variables to get signal: 
add_filter('query_vars', 'distress_signalVars' );

function SendSignal ($location, $message, $ping, $){
   include "reciever.php?loc=$location&ping=$ping&message=$message";
}

function distress_signalVars( $qvars )
{
  $qvars[] = 'loc, ping, messg, wpi_key, usr_site';
  return $qvars;
}



?>