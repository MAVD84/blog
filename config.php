<?php 
 
// Site Settings 
$siteName = 'subscribe'; 
$siteEmail = 'iamexpressed10@gmail.com'; 
 
// Database configuration 
define('DB_HOST', 'sql107.epizy.com'); 
define('DB_USERNAME', 'epiz_32774516'); 
define('DB_PASSWORD', 'I0yXIGtEeqd'); 
define('DB_NAME', 'epiz_32774516_subscribe'); 
 
 
/* Changes are not required, used for internal purpose */ 
$siteURL = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")?'https://':'http://'; 
$siteURL = $siteURL.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']).'/'; 
 
?>
