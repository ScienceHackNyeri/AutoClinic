<?php
if(isset($_POST['names']))
{
include 'Db_connector.php';
mysql_select_db('hospital');
$names=$_POST['names'];
$id=$_POST['id'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$location=$_POST['location'];
$contact=$_POST['contact'];
$query = "INSERT INTO Population (Person_Name,IdNumber,Gender,DOB,Location,Contact) VALUES ('$names',$id,'$gender','$dob','$location',$contact)";
if(!mysql_query($query)){
die('error inserting new record');
}
else{
echo "1 record added to the database!";
exit();
}
}
?>
<html>
<head>
<title>Hospital Database System</title>
</head>
<body >
<fieldset style="margin-left:520px; margin-top:50px; border-radius:5px; width:300px" >
<div id="content">
<legend>Register Personnel</legend>
<form action="insertform.php" method="post" align="center"> 
<table border="0" align="center" cellspacing="5">
<tr>
<td>
Full Names:  
</td>
<td>
<input type="text" name="names" placeholder="e.g John">
</td>
</tr>
<tr>
<td>
Id Number: 
<td>
<input type="text" name="id">
</td>
</tr>
<tr>
<td>
Date of Birth:
</td>
<td>
<input type="text" name="dob">
</td>
</tr>
<tr>
<td>
Place of Birth:
</td>
<td>
<input type="text" name="location">
</td>
</tr>
<tr>
<td>
Gender:
</td>
<td>
<input type="text" name="gender">
</td>
</tr>
<tr>
<td>
Contact:
</td>
<td>
<input type="text" name="contact" >
</td>
</tr>
<tr>
<td>
<input type="reset" value="CLEAR">
</td>
<td>
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>
</div>
</fieldset>
</body>
</html>

