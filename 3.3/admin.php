<?php
//get access to session data
session_start();

require_once('../includes/config.php');
require_once('../includes/functions.php');

ensure_user_is_authenticated();

//call on session data for email
echo $_SESSION['email'];

 ?>
