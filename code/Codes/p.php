<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php

$q=$_GET["prodect-id"];


echo "Assallam-u-alikum " . $q . ", to my Website.";
$query = "select * from product where pid='".q."'";
$result = mysql_query( $query );
if (!$result)
{
die ("Could not query the database: <br />". mysql_error( ));
}
while ($result_row = mysql_fetch_row(($result)))
{
echo 'id: '.$result_row[0] . '<br />';
echo 'pname: '.$result_row[1] . '<br /> ';
echo 'up: '.$result_row[2] . '<br />';
echo ' pc: '.$result_row[3] . '<br /> ';


}

?>
</head>

<body>
</body>
</html>
