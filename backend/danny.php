<?php
require 'settings/settings.php';


function queryAll() {
    $query = 'DELETE FROM courses_2';
    return pg_query($query);
}

connection();

queryAll();
echo('SUCCESS, I THINK?');
?>