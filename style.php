<?php

$style = $_REQUEST["style"];
setcookie("coulPreferee", $style);
header("Location: login.php");