<?php

$_server = "localhost";
$username = "root";
$password = "";
$dname   = "hospital";

$con = mysqli_connect($server,$username,$dbname);


if(!$con)

{
   echo "not connected";
}

else
{
    echo "connect";
}
?>