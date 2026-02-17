<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript">
function sl(countryid)
{
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
    xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("c").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","findcity.php?country="+countryid,true);
xmlhttp.send();
}
</script>


</head>

<body>
<table>
<tr>
<td>
<h1>Country  :  
  <select  name="country" onchange="sl(this.value)">
    
    <option> select country</option>
    <option value="1"> pakistan</option>
    <option value="2"> indian</option>
  </select>
</h1>
</td>
</tr>
<tr>
<td>
<div id="c">
<h1>Cities  :  
  <select name="city">
    
    <option> select country first</option>
  </select>
</h1>
</div>
</td>
</tr>
</table>
</body>
</html>
