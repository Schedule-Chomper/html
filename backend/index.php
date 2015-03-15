<?php
	require 'settings/settings.php';
    header("Access-Control-Allow-Origin: *");

    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);
    $url = $_SERVER['REQUEST_URI'];
    //echo($url . "<br />");
    if(isset($_GET['code']) && isset($_GET['sect'])){
        //echo($_GET['code'] . " ");
        //echo($_GET['sect']);
    }else if(isset($_GET['code'])){
        //echo($_GET['code']);
    }else if(isset($_GET['sect'])){
        //echo($_GET['sect']);
    }else {
       // echo("No special");
    }

    function queryAll() {
        $query = 'select * from courses';
        return pg_query($query);
    }

    function getCourse($code) {
        $query = 'select * from courses WHERE code = \''.strtoupper($code).'\'';
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

    function displayAsTable($result) {
        $i = 0;
        echo '<html><body><table><tr>';
        while ($i < pg_num_fields($result))
        {
            $fieldName = pg_field_name($result, $i);
            echo '<td>' . $fieldName . '</td>';
            $i = $i + 1;
        }
        echo '</tr>';
        $i = 0;

        while ($row = pg_fetch_row($result))
        {
            echo '<tr>';
            $count = count($row);
            $y = 0;
            while ($y < $count)
            {
                $c_row = current($row);
                echo '<td>' . $c_row . '</td>';
                next($row);
                $y = $y + 1;
            }
            echo '</tr>';
            $i = $i + 1;
        }
        pg_free_result($result);

        echo '</table></body></html>';
    }
    connection();
    //displayAsTable(queryAll());

    if(isset($_GET['code']) && isset($_GET['sect'])){
        $result = pg_fetch_all(queryAll());
        echo(json_encode($result));
    }else if(isset($_GET['search'])){
        $result = pg_fetch_all(findCourse($_GET['search']));
        echo(json_encode($result));
    }else if(isset($_GET['code'])){
        $result = pg_fetch_all(getCourse($_GET['code']));
        echo(json_encode($result));
    }else if(isset($_GET['sect'])){
        $result = pg_fetch_all(getSection($_GET['sect']));
        echo(json_encode($result));
    }else{
        $result = pg_fetch_all(queryAll());
        echo(json_encode($result));
    }




?>