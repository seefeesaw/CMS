<?php

$db['db_host']="localhost";
$db['db_user']="root";
$db['db_password']="seefeesaw1";
$db['db_name']="cms";

foreach($db as $key=>$value)
{
    define(strtoupper($key),$value);
}
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($con)
{
    echo "Connected";
}
else
{
    echo "Not Connected";
}


?>