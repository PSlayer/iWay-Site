<?php
	session_start ();
	include_once ("../../config.php");	

	if ($_SESSION['auth'] && /* $_SESSION['shortguid'] && */ isset($_GET['speedtest'])) {
		$guid = preg_replace('/[^0-9]/', '', $_SESSION['shortguid']);
		if (isset($_POST['json']) && json_decode($json = $_POST['json'])) {
			$sql = "SELECT `otherinfo` FROM stat WHERE `shortguid` = $guid;";
			$result = mysql_query($sql, $mysql);
			$row = mysql_fetch_array($result);
			$otherinfo=explode('||',$row[0]);
			$sql = "INSERT INTO `speedtest` (`time`, `guid`, `ip`, `spdlim`, `json`) VALUES('".time()."', '$guid', '".$_SERVER['REMOTE_ADDR']."', '".$otherinfo[127].'|'.$otherinfo[128]."', '$json');";
			mysql_query($sql, $mysql);
		} else {
			$sql = "SELECT * FROM `speedtest` WHERE `guid` = $guid ORDER BY `time` DESC LIMIT 1;";
			$result = mysql_query($sql, $mysql);
			$row = mysql_fetch_array($result, MYSQL_ASSOC);
			header("Content-Type: application/json");
			echo json_encode($row);
		}		
	}

?>