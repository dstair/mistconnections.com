<?php

session_start();

require 'facebook-php-sdk-master/src/facebook.php';

// Create our Application instance (below is Daniel Stair's Mist app info).
$facebook = new Facebook(array(
  'appId'  => '',
  'secret' => '',
));

// Get User ID
$user = $facebook->getUser();

$facebook->destroySession();

?>


<!DOCTYPE html>
<html>
    <head>

        <!-- Pull CSS files -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>
        
        <title>Mist: Logged out</title>
    </head>

    <body>
        <h1> <img src="img/Fotolia_52138608_XS.jpg" id="img">Mist - Logged Out </h1>
        <h3> You have successfully logged out! </h3>
        
        <ul class="nav nav-pills">
          <li><a href="fbphplogin.php">Continue</a></li>
        </ul>
        
    </body>
</html>
