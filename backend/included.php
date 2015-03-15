<?php
require 'settings/settings.php';


function queryAll() {
    $query = 'select * from courses';
    return pg_query($query);
}

function getCourse($code) {
    $test[0] = ["AFS4905", "03A5", "1","3","4","5","","","4","5","","","4","5"];

    $query = 'select DISTINCT code, section, credits, mstart, mend, tstart, tend, wstart, wend, rstart, rend, fstart, fend from courses WHERE code = \''.strtoupper($code).'\' AND section != \'DEPT\'';
    //$query = 'select * from courses WHERE code = \'CAP3027\'';
    return pg_query($query);
}

function getSection($sect) {
    $query = 'select * from courses WHERE section = \''.strtoupper($sect).'\'';
    //$query = 'select * from courses WHERE code = \'CAP3027\'';
    return pg_query($query);
}

function findCourse($code) {
    $query = 'select DISTINCT title, code from courses WHERE code LIKE \''.strtoupper($code).'%\' ORDER BY code ASC';
    //$query = 'select * from courses WHERE code = \'CAP3027\'';
    return pg_query($query);
}


connection();


?>