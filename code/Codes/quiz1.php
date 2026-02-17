<?php

$q=$_GET["q"];

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

$query="select * from product where id=" . $q;
$result=mysql_query($query);
?>
<table border="1">
<tr>
<td>id</td>
<td>description</td>
<td>price</td>
<td>category</td>
</tr>
<?php
while($row=mysql_fetch_assoc($result))
echo "<tr><td>" . $row['id'] . "</td><td>" . $row['pname'] . "</td><td>" . $row['up'] . "</td><td>" . $row['pc'] . "</td></tr>";

?>

</table>