<!-- Start connect.php -->
<?php 

$dbhost = "db2526.perfora.net";
$db = "db334823716";
$dbpass = "da6rUqeq";
$dbusr = "dbo334823716";
$dbconnect = mysql_connect ($dbhost, $dbusr, $dbpass) or die ("Unable to open database");
mysql_select_db ($db); 

?>