<?php

//Désactiver les messages d'erreur de la page
//error_reporting();

$mysql = new mysqli($dbHost, $dbUser, $dbPwd, $dbName);
//@ devant new permet de sécuriser vos infos d'accès au serveur


/*
if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;

  $mysqli->close();
*/

?>