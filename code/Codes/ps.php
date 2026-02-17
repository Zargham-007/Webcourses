
<?php

$q=$_GET["q"];
echo $q;

$db_host='cs.gift.edu.pk';
$db_database='db08105006';
$db_username='08105006';
$db_password='08105006';

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
$query = "select * from product where pid=". $q;                                                                                                                                                          
$result = mysql_query($query);
if (!$result)
{
die ("Could not query the database: <br />". mysql_error( ));
}
?>

while ($result_row = mysql_fetch_row(($result)))
{
echo 'id: '.$result_row[0] . '<br />';
echo 'pname: '.$result_row[1] . '<br /> ';
echo 'up: '.$result_row[2] . '<br />';
echo ' pc: '.$result_row[3] . '<br /> ';

}


