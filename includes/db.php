<?php
// Connect to database
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'eduom';

foreach ($db as $key => $value) {
    if(!defined(strtoupper($key))) {
        define(strtoupper($key), $value);
    }
}

// Make connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check connection
// if ($connection){
//     echo "connected";
// }