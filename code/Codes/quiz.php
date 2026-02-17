<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$db_host='cs.gift.edu.pk';
$db_database='db08105006';
$db_username='08105006';
$db_password='08105006';

$id=$_POST['id'];
$pname=$_POST['pname'];
$up=$_POST['up'];
$pc=$_POST['pc'];


$connection = mysql_connect($db_host, $db_username, $db_password);
if (!$connection)
{
die ("Could not connect to the database: <br />". mysql_error( ));
}

$db_select = mysql_select_db($db_database);
if (!$db_select)
{
die ("Could not select the database: <br />". mysql_error( ));
}

$query1 = "INSERT INTO product VALUES ('". $id ."', '". $pname ."', '". $up ."','". $pc ."')";

$result = mysql_query( $query1);
if (!$result)
{
die ("Could not query the database: <br />". mysql_error( ));
}
else 
{
echo "Record Saved ";

}

?>

<body>
</body>
</html>
