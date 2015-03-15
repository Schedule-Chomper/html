<?php
require 'backend/included.php';
require 'backend/scheduler.php';
$url = $_SERVER['REQUEST_URI'];
$myArray = explode('&classes=', $url);
$myArray[0] = str_replace('/schedule_page.php?classes=', '', $myArray[0]);
$classes = [];
$i = 0;
$pri = 1000;
$arrayValue = 0;
if ($myArray[0] != '') {
    getCourse($myArray[0]);
    $result = pg_fetch_all(getCourse($myArray[0]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
if ($myArray[1] != '') {
    getCourse($myArray[0]);
    $result = pg_fetch_all(getCourse($myArray[1]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
if ($myArray[2] != '') {
    getCourse($myArray[2]);
    $result = pg_fetch_all(getCourse($myArray[2]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
if ($myArray[3] != '') {
    getCourse($myArray[3]);
    $result = pg_fetch_all(getCourse($myArray[3]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
if ($myArray[4] != '') {
    getCourse($myArray[4]);
    $result = pg_fetch_all(getCourse($myArray[4]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
if ($myArray[5] != '') {
    getCourse($myArray[5]);
    $result = pg_fetch_all(getCourse($myArray[5]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
if ($myArray[6] != '') {
    getCourse($myArray[6]);
    $result = pg_fetch_all(getCourse($myArray[6]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
if ($myArray[7] != '') {
    getCourse($myArray[7]);
    $result = pg_fetch_all(getCourse($myArray[7]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
if ($myArray[8] != '') {
    getCourse($myArray[8]);
    $result = pg_fetch_all(getCourse($myArray[8]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
if ($myArray[9] != '') {
    getCourse($myArray[9]);
    $result = pg_fetch_all(getCourse($myArray[9]));
    for ($k = 0; $k < sizeof($result); ++$k) {
        $temp[2] = ($pri);
        array_splice($result[$k], 2, 0, $temp);
        --$pri;
        $result = array_values($result);
        $newArray[0] = $result[$k]['code'];
        $newArray[1] = $result[$k]['section'];
        $newArray[2] = $result[$k][0];
        $newArray[3] = $result[$k]['credits'];
        $newArray[4] = $result[$k]['mstart'];
        $newArray[5] = $result[$k]['mend'];
        $newArray[6] = $result[$k]['tstart'];
        $newArray[7] = $result[$k]['tend'];
        $newArray[8] = $result[$k]['wstart'];
        $newArray[9] = $result[$k]['wend'];
        $newArray[10] = $result[$k]['rstart'];
        $newArray[11] = $result[$k]['rend'];
        $newArray[12] = $result[$k]['fstart'];
        $newArray[13] = $result[$k]['fend'];

        $classes[$i] = $newArray;
        ++$i;
    }
}
$classes = scheduleMaker($classes, 18);
$classes = array_unique($classes, SORT_REGULAR);
$i = 0;
foreach ($classes as $value){
    if($i == 0){
		$classes['schedule1'] = $value;
	}else if ($i == 1) {
		$classes['schedule2'] = $value;
	}else if ($i == 2) {
		$classes['schedule3'] = $value;
	}
	++$i;
}
//var_dump($classes);
//echo($url . "<br />");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <link rel="apple-touch-icon" sizes="57x57" href="Photos/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Photos/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Photos/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Photos/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Photos/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Photos/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Photos/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Photos/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Photos/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="Photos/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Photos/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="Photos/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Photos/favicon-16x16.png">
    <link rel="manifest" href="Photos/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="Photos/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Schedule Chomper</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>

<body>
<script type="text/javascript">
    function StartOver() {
        window.location = 'http://54.84.190.243/class_entry.html';
    }


    function btnHalfDown() {
        document.getElementById('startBtn').className = "btnHalfDowns";
    }

    function btnUp() {
        document.getElementById('startBtn').className = "btnUp";
    }


    function httpGetAll() {
        console.log('clicked')
        $.ajax({
            url: 'http://54.84.190.243/backend/index.php',
            type: 'GET',
            dataType: 'json',
            crossDomain: true,
            success: function (html) {
                console.log('success');
                console.log(html);

                document.getElementById('paraTest').innerHTML = html[0].title;
            }
        });
    }

    function httpGetCourse(course) {
        console.log('clicked')
        $.ajax({
            url: 'http://54.84.190.243/backend/index.php?code=' + course,
            type: 'GET',
            dataType: 'json',
            crossDomain: true,
            success: function (html) {
                console.log('success');
                console.log(html);

                document.getElementById('paraTest').innerHTML = html[0].title;
            }
        });
    }

    function httpGetCourseWSect(section) {
        console.log('clicked')
        $.ajax({
            url: 'http://54.84.190.243/backend/index.php?sect=' + section,
            type: 'GET',
            dataType: 'json',
            crossDomain: true,
            success: function (html) {
                console.log('success');
                console.log(html);

                document.getElementById('paraTest').innerHTML = html[0].title;
            }
        });
    }
</script>

<div class="topBar shadow">
    <div class="container">
        <div class="starter-template">
           <a href="/"> <img class="logoImage" src="Photos/ScheduleChomperLogoNoBlur.png"></a>

            <p class="lead offcenter">Take a byte out of your schedule!</p>
        </div>
    </div>
    <!-- /.container -->
</div>


<div class="steps row-fluid">
    <div class="col col-lg-2"></div>
    <div class="col col-lg-8 col-xs-10 col-xs-offset-1 col-lg-offset-0">
    <span class="step shadow-lite">
      <span class="stepNum">Schedules made for you</span>

    </span>

        <div class="steps row-fluid">


            <div class="col col-lg-3 col-xs-10 col-xs-offset-1 col-lg-offset-0">
    <span class="step shadow-lite">
      <span class="stepNum">1</span>

    </span>

                <div class="instructional_picture"><img class="picture_size" src="Photos/cp.png">
				
				                <div class="thisisclasses">
                    <small><?php 

						echo($classes['schedule1'][0] ."  " . $classes['schedule1'][1] . "  " .$classes['schedule1'][2] . "  " . $classes['schedule1'][3] . "  " . $classes['schedule1'][4] . "  " . $classes['schedule1'][5] . "  " . $classes['schedule1'][6] . "  " . $classes['schedule1'][7] . "  " . $classes['schedule1'][8]); 
					?></small>

                </div>
				
				</div>

            </div>

            <div class="col col-lg-1"></div>

            <div class="col col-lg-3 col-xs-10 col-xs-offset-1 col-lg-offset-0">
    <span class="step shadow-lite">
        <span class="stepNum">2</span>

    </span>
                <span class="instructional_picture"><img class="picture_size"
                                                         src="Photos/cp.png">
														 				                <div class="thisisclasses">
                   <small> <?php 

							echo($classes['schedule2'][0] ."  " . $classes['schedule2'][1] . "  " .$classes['schedule2'][2] . "  " . $classes['schedule2'][3] . "  " . $classes['schedule2'][4] . "  " . $classes['schedule2'][5] . "  " . $classes['schedule2'][6] . "  " . $classes['schedule2'][7] . "  " . $classes['schedule2'][8]); 
					?></small>

                </div>
														 </span>

            </div>

            <div class="col col-lg-1"></div>

            <div class="col col-lg-3 col-xs-10 col-xs-offset-1 col-lg-offset-0">
    <span class="step shadow-lite">
        <span class="stepNum">3</span>

    </span>
                <span class="instructional_picture"><img class="picture_size"
                                                         src="Photos/cp.png">
														 				                <div class="thisisclasses">
                    <small><?php 

						echo($classes['schedule3'][0] ."  " . $classes['schedule3'][1] . "  " .$classes['schedule3'][2] . "  " . $classes['schedule3'][3] . "  " . $classes['schedule3'][4] . "  " . $classes['schedule3'][5] . "  " . $classes['schedule3'][6] . "  " . $classes['schedule3'][7] . "  " . $classes['schedule3'][8]); 
					?></small>

                </div>
														 </span>

            </div>


        </div>

    </div>
</div>

</div>

</div>

<div class="button_holder">
    <button class="startButton1 shadow-lite" onMouseOver="btnHalfDown();" onMouseOut="btnUp();" id="startBtn"
            onClick="StartOver();">Try Again!
    </button>

</div>
<br>
<br>

<div class="spacer"></div>

</body>
</html>
