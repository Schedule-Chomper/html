<?php

header("Access-Control-Allow-Origin: *");


function connection() {
    $host = 'scheduler.cwpq74z9wjqf.us-east-1.rds.amazonaws.com';
    $port = '5432';
    $user = 'scheduler';
    $password = 'fireplace';

    $connectString = 'host=' . $host . ' port=' . $port . ' user=' . $user . ' password=' . $password;


    $link = pg_connect ($connectString);
    if (!$link)
    {
        die('Error: Could not connect: ' . pg_last_error());
    }
    return $link;
}

?>