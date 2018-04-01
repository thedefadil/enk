<?php 
ini_set('display_errors',0);	
ini_set('memory_limit' , '128M');
date_default_timezone_set('Asia/Jakarta'); 
//$hostname = '172.16.2.4';
$hostname = 'localhost:3307';
$database = 'simrs';
$username = 'root';
//$password = 'adminsimrs';
$password = '';
//$connect = mysql_connect($hostname, $username, $password,true,65536) or die(mysql_error()); 
//mysql_select_db($database,$connect)or die(mysql_error());
define ('_BASE_','http://'.$_SERVER['HTTP_HOST'].'/simrs_sync/');
define ('_POPUPTIME_','50000');



$connect = mysqli_connect($hostname, $username, $password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




$data=mysql_fetch_array(mysql_query("SELECT * FROM profil"));

$rstitle = $data['rstitle'];
$singrstitl = $data['singrstitl'];
$singhead1 = $data['singhead1'];
$singsurat = $data['singsurat'];
$header1 = $data['header1'];
$header2 = $data['header2'];
$header3 = $data['header3'];
$header4 = $data['header4'];
$KDRS = $data['kdrs'];
$KelasRS = $data['KelasRS'];
$NamaRS = $data['NamaRS'];
$KDTarifINACBG = $data['kdtarifnacbg'];
$version = $data['version'];
	