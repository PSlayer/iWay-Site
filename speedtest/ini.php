<?php
	include_once('../../config.php');

	$strings = $GLOBALS['strings'];
	
	$setSpeedtest = array();
	
	if (!isset($SpeedTest['SpeedTestName'])){return;}
	
	$sum = count($SpeedTest['SpeedTestName']);
	
	for($q=0; $q <= $sum - 1; $q++) 
	{ 
		$SpeedTestName = $SpeedTest['SpeedTestName'][$q];
		$SpeedTestSize = $SpeedTest['SpeedTestSize'][$q];
		$SpeedTestURL = $SpeedTest['SpeedTestURL'][$q];
		
		$time_dl = 6;
		$time_ul = 4;
		$time_ulGraceTime = 1;
		$time_dlGraceTime = 0.5;
		$overheadCompensationFactor = 1.08;
		$garbagePhp_chunkSize = 20;
		$count_ping = 10;
		
		switch ($SpeedTestSize) {
			case 0:
				$time_dl = 4;
				$time_ul = 4;
				$time_ulGraceTime = 1;
				$time_dlGraceTime = 0.5;
				$overheadCompensationFactor = 1.2;
				$garbagePhp_chunkSize = 1;
				$count_ping = 10;
				break;
			case 1:
				$time_dl = 8;
				$time_ul = 8;
				$time_ulGraceTime = 1;
				$time_dlGraceTime = 0.5;
				$overheadCompensationFactor = 1.15;
				$garbagePhp_chunkSize = 10;
				$count_ping = 10;
				break;
			case 2:
				$time_dl = 16;
				$time_ul = 16;
				$time_ulGraceTime = 0.5;
				$time_dlGraceTime = 0.4;
				$overheadCompensationFactor = 1.1;
				$garbagePhp_chunkSize = 25;
				$count_ping = 20;
				break;
		}
		
		$setSpeedtest[] = array(
							'name' => $SpeedTestName,
							'id' => $q,
							'display' => true,
							'set' => 
								array(
									'time_ulGraceTime' =>  $time_ulGraceTime,
									'time_dlGraceTime' =>  $time_dlGraceTime,
									'garbagePhp_chunkSize' =>  $garbagePhp_chunkSize,
									'url_dl' =>  $SpeedTestURL . 'garbage.php',
									'url_ul' => $SpeedTestURL . 'empty.php',
									'url_ping' => $SpeedTestURL . 'empty.php',
									'time_dl' =>  $time_dl,
									'time_ul' =>  $time_ul,
									'count_ping' =>  $count_ping,
									'xhr_dlMultistream' =>  10,
									'xhr_ulMultistream' =>  10,
									'overheadCompensationFactor' =>  $overheadCompensationFactor
									)
								);
	}

?>