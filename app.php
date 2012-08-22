<?
require_once('mobile_device_detect.php');
mobile_device_detect('http://itunes.apple.com/us/app/date-night-challenge-palm/id488858659','http://itunes.apple.com/us/app/date-night-challenge-palm/id488858659','https://market.android.com/details?id=com.gloo.dnc.palmbeach&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5nbG9vLmRuYy5wYWxtYmVhY2giXQ',true,true,true,true,false,false); 
header( 'Location: http://www.datenightpdx.org/' );
?>