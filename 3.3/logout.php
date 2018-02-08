<?php
//if you put this page in the url bar, it will log you out (unset session data) and take you back to login.php

session_start();
session_unset();
session_destroy();

require_once('./../includes/functions.php');

redirect('login.php');

 ?>
