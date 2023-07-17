<?php

echo "iyi günler";
session_start();

$_SESSION["kullanicigirisi"]="0";
session_destroy();

header("location:index.php");
?>