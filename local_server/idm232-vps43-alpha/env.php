<?php
  consoleMsg("env.php file LOADED!");

  $domain = $_SERVER['HTTP_HOST'];
  consoleMsg("Domain is: $domain");

  if ($domain == 'localhost:8888'){
    $APP_CONFIG = [
      'environment' => 'local',
      'site_url' => 'http://localhost:8888/',
      'database_host' => 'localhost',
      'database_user' => 'root',
      'database_pass' => 'root',
      'database_name' => 'idm232',
    ];

  }
  else{
    $APP_CONFIG = [
      'environment' => 'live',
      'site_url' => 'http://www.vidhishah.co/',
      'database_host' => 'mysql.vidhishah.co',
      'database_user' => 'vidhicookbook',
      'database_pass' => 'Vidhi0106',
      'database_name' => 'vidhi_idm232',
    ];

  }

?>