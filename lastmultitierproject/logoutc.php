<?php
session_start();

session_destroy();

echo "You have been logged out, <a href='log-in-Customer.php'> Click here <a> to log in";

?>