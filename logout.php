<?php
//this logs out anyone by destroying the session.
session_start();
session_destroy();
header("Location: index.php");

?>