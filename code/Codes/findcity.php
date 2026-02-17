<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
$q=$_GET["country"];


$db_host="cs.gift.edu.pk";
$db_database="db08105006";
$db_username="08105006";
$db_password="08105006";
$connection = mysql_connect($db_host, $db_username, $db_password);
if (!$connection)
{
die ("Could not connect to the database: <br />". mysql_error( ));

}
$db_select=mysql_select_db($db_database);
if(!$db_select)
{
die ("Could not query the database: <br />". mysql_error( ));
}
die ("Could not query the database: <br />". mysql_error( ));
}
$query = "select * from city where countryid='".q."'";
$result = mysql_query( $query );
if (!$result)
{
die ("Could not query the database: <br />". mysql_error( ));
}

?>
<select >
<?php

while($row=mysql_fetch_assoc($result))
{
?>
<option><?php echo $row['city'] ?></option>
<?php
}
?>
</select>
</head>

<body>
</body>
</html>
