<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Image load in database</title>
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
die("Could not connect database:<br/>".mysql_error());
}
$db_select=mysql_select_db($db_database);
if(!$db_select)
{
die("Could not select the database:<br/>".mysql_error());
}
$imag=$id.$_FILES['upload_file']['id'];
If(!is_uploaded_file($_FILES['upload_file']['tmp_name']))
{
$error="You must upload a file";
}


If(!isset($error))
{
move_uploaded_file($_FILES['upload_file']['tmp_name'],"my/".$imag);
echo "Thank You for Uploading the File";
}
else
{
echo $error;
}


$query="insert into product values ('".$id."','".$pname."','".$up."','".$pc."','".$img."')";
$result=mysql_query($query);
if(!$result)
{
die("Could not select the database:<br/>".mysql_error());
}

$query2="select * from product where pid=". $id;
$result1=mysql_query($query2);
$result2=mysql_fetch_assoc($result1);

echo "<img src='my/".$result2['image']."' width='100' height='100'/>";


?>


</head>

<body>
</body>
</html>
