<?php
//header('Cache-Control: no-cache, must-revalidate');
//header('Content-type: application/json');
 
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
  $LocalIP=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
  $LocalIP=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
  $LocalIP=$_SERVER['REMOTE_ADDR'];
}
print $LocalIP;

?>