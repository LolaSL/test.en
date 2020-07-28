<?php
//include connect file;
//include_once -connnect only one time;
//require -gives total mistake, if file wasnt found;
//require_once -only one time;
 require "config.php";

$connection =mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name'],

);

if( $connection ==false )
{
    echo 'Failed to connect to database!';
    echo mysqli_connect_error();
    exit();
}
?>

