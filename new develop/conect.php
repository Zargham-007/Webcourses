
<html>
<head>

<title>Field test</title>
<?php

$id=$_POST['id'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$address=$_POST['address'];

$db_host="cs.gift.edu.pk";
$db_database="db08205003";
$db_username="08205003";
$db_password="08205003";

$connection = mysql_connect($db_host, $db_username, $db_password);
if (!$connection)
{
die ("Could not connect to the database: <br />". mysql_error( ));
}

$db_select=mysql_select_db($db_database);
if (!$db_select){
die ("Could not select the database: <br />". mysql_error( ));
}

$query = "INSERT INTO student1 values('" . $id ."','".$name ."','" . $fname."','" . $address."') ";
$result = mysql_query( $query );

$query = "SELECT * FROM student1";

$result = mysql_query( $query );


if (!$result){
die ("Could not query the database: <br />". mysql_error( ));
}

while ($result_row = mysql_fetch_row(($result))){
echo "Student ID" . $result_row[1] . "<br />";
echo "Student Name" . $result_row[2] . "<br /> ";
echo "Student Father Name" . $result_row[3] . "<br />";
echo "Address" . $result_row[4] . "<br /><br />";
}

mysql_close($connection);



?>
 
</head>

<body>
</body>
</html>
