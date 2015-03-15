<?php
header("Access-Control-Allow-Origin: *");

	function scheduleMaker($databaseData, $numberOfCredits){

		$schedules = [];
		$curr = 0;



		for($x =- 1; $x < sizeof($databaseData); $x++){
			$numClassOnSchedule = 0;
			$dbD_changing = [];
			for($i = 0; $i < sizeof($databaseData); ++$i) {
				for($j = 0; $j < 14; ++$j){
					$dbD_changing[$i][$j] = $databaseData[$i][$j];
				}
			}

			if($x != -1) {
				for($i = 2; $i < 14; ++$i){
					$dbD_changing[$x][$i] = ""+0;
				}
			}
			$schedule = [];
			for($m = 0; $m < 14; ++$m){
				for($n = 0; $n < 5; ++$n){
					$schedule[$m][$n] = false;
				}
			}

			$accumulatedPriority = [];
			for($fill = 0; $fill < $numberOfCredits + 1; ++$fill){
				$accumulatedPriority[$fill] = 0;
			}
			//var_dump($accumulatedPriority)

			$tookClasses = [];
			for($fill = 0; $fill < $numberOfCredits + 1; ++$fill){
				$tookClasses[$fill] = "";
			}



			for($i = 0; $i < sizeof($databaseData); ++$i){
				for($j = $numberOfCredits; $j >= 0; --$j){

					if($j >= intval($dbD_changing[$i][3])) {
						$canTakeThisClass = true;
						if(canTake($schedule, $dbD_changing[$i][4],$dbD_changing[$i][5],$dbD_changing[$i][6],$dbD_changing[$i][7],$dbD_changing[$i][8],
							$dbD_changing[$i][9],$dbD_changing[$i][10],$dbD_changing[$i][11],$dbD_changing[$i][12],$dbD_changing[$i][13])) {
							if( $canTakeThisClass ) {
								// now add it to your list

								if( $accumulatedPriority[$j] < (($accumulatedPriority[$j- intval($dbD_changing[$i][3])]) + intval($dbD_changing[$i][2])) ) {
									$accumulatedPriority[$j] = $accumulatedPriority[$j- intval($dbD_changing[$i][3])] + intval($dbD_changing[$i][2]);
										$tookClasses[$j] = ($i+1) . " " . $tookClasses[$j- intval($dbD_changing[$i][3])];
										$numClassOnSchedule++;


										try {// update current schedule
											for($f = intval($dbD_changing[$i][4])-1; $f < intval($dbD_changing[$i][5])-1; $f++) {
												$schedule[0][$f] = true;
										}
										for($f = intval($dbD_changing[$i][6])-1; $f < intval($dbD_changing[$i][7])-1; $f++) {
												$schedule[1][$f] = true;
										}
										for($f = intval($dbD_changing[$i][8])-1; $f < intval($dbD_changing[$i][9])-1; $f++) {
												$schedule[2][$f] = true;
										}
										for($f = intval($dbD_changing[$i][10])-1; $f < intval($dbD_changing[$i][11])-1; $f++) {
												$schedule[3][$f] = true;
										}
										for($f = intval($dbD_changing[$i][12])-1; $f < intval($dbD_changing[$i][13])-1; $f++) {
												$schedule[4][$f] = true;
										}
									}catch(Exception $e) {}
									}
								}
						}
					}

				}
			}

			$tt = explode(' ', $tookClasses[$numberOfCredits]);

			if(sizeof($tt) <= 0){
				return $schedule;
			}

			try {
				for($i = 0; $i < sizeOf($tt); ++$i) {
					$a = $databaseData[intval($tt[$i])-1][1];
						$schedules[$curr][$i] = $a;
					}
				}catch(Exception $e) {

			}
			++$curr;
		}
		return $schedules;
	}
	
	function canTake($sch, $mS, $mF, $tS, $tF, $wS, $wF, $rS, $rF, $fS, $fF) {
        //var_dump($sch);
        $ms=0; $mf=0; $ts=0; $tf=0; $ws=0; $wf=0; $rs=0; $rf=0; $fs=0; $ff=0;
		if( $mS != "")
            $ms = intval($mS);
		if( $mF != "")
            $mf = intval($mF);
		if( $tS != "")
            $ts = intval($tS);
		if( $tF != "")
            $tf = intval($tF);
		if( $wS != "")
            $ws = intval($wS);
		if( $wF != "")
            $wf = intval($wF);
		if( $rS != "")
            $rs = intval($tS);
		if( $rF != "")
            $rf = intval($tF);
		if( $fS != "")
            $fs = intval($fS);
		if( $fF != "")
            $ff = intval($fF);
        try{
            for($i = $ms-1; $i<$mf-1; ++$i) {
                if($sch[0][$i])
                        return false;
                }
                for($i = $ts-1; $i<$tf-1; ++$i) {
                if($sch[0][$i])
                        return false;
                }
                for($i = $ws-1; $i<$wf-1; ++$i) {
                if($sch[0][$i])
                        return false;
                }
                for($i = $rs-1; $i<$rf-1; ++$i) {
                if($sch[0][$i])
                        return false;
                }
                for($i = $fs-1; $i<$ff-1; ++$i) {
                if($sch[0][$i])
                        return false;
                }
            } catch(Exception $e) {

        }
		return true;
	}

$test[0] = ["AFS4905", "03A5", "1","3","4","5","","","4","5","","","4","5"];
$test[1] = ["AGR5321", "159F", "3","3","","","5","6","","","6","8","",""];
$test[2] = ["CKJDNKC", "2D45", "2","2","","","7","9","","","7","9","",""];
$test[3] = ["CKDBKCD", "1042", "3","4","","","2","4","","","2","4","",""];




?>