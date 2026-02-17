
<html>
<head>

<title>Untitled Document</title>
<?php

$fname=$_POST['fname'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password']; 
$cpassword=$_POST['cpassword'];
$birth_month=$_POST['birth_month'];
$birth_day=$_POST['birth_day'];
$birth_year=$_POST['birth_year'];
$gender=$_POST['gender'];
$interest=$_POST['interest'];
$hobbies=$_POST['hobbies'];

?>
</head>

<body>
<center>
<table width="554" height="643" border="1">
  <tr>
    <td width="269">Full name </td>
    <td width="269">&nbsp;<?php echo $fname;  ?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td>&nbsp;<?php echo $address;  ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>&nbsp;<?php echo $email;  ?></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>&nbsp;<?php echo $password;  ?></td>
  </tr>
  <tr>
    <td>Confirm Password </td>
    <td>&nbsp;<?php echo $cpassword;  ?></td>
  </tr>
  <tr>
    <td>Date of Birth </td>
    <td>&nbsp;<?php echo $birth_month."/";  
	           echo $birth_day."/";  
			   echo $birth_year;  
			   ?>
			  </td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>&nbsp;<?php echo $gender;  ?></td>
  </tr>
  <tr>
    <td>Please choose topic of intereset </td>
    <td>&nbsp;
	
	<?php 
	$n=count($interest);
	$i=0;
	while($i<$n)
	{
	echo $interest[$i]."<br/>";
	$i++;
	}
	?>
	
	
	</td>
  </tr>
  <tr>
    <td><p>select hobbies</p>
      <p>(Select multiple choices by holding the strl key and clicing on them one by one</p></td>
    <td>&nbsp;
	
		<?php 
	$n=count($hobbies);
	$i=0;
	while($i<$n)
	{
	echo $hobbies[$i]."<br/>";
	$i++;
	}
	?>
	
	
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="conform"></td>
  </tr>
</table>
</center>
</body>
</html>
