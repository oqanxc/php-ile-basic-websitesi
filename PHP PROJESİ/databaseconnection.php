<?php

$db_host="sql200.infinityfree.com";
$db_user="epiz_34261067";
$db_pass="TtOfjC59eFqs7ds";
$db_name="epiz_34261067_deneme";



$db = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_errno()){
echo "no connection try again";
exit();
}



