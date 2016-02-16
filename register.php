<!DOCTYPE HTML>
<?php 
	session_start(); 
	if(isset($_SESSION['stuid']))
	{
		header('Location:jssonc_home.php');
	}
?>
<html lang="en">

<head>
  <title>Nibble Online Compiler</title>
  <meta http-equiv="Content-Type" content="text/html;&gt;charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="style/style.css">

</head>

<body>
<CENTER> 
<div id="content">
	<div style="width: 850px; height: 40px; margin:5px;">
		<h3 style="text-align: center;">
		<u><strong><font face="Arial" >Register</font></strong></u> 
		</h3>
	</div> 
        <div style="width:850px;height:15px;font-size:12px;padding:1px">
<?php 
	if(isset($_SESSION['reg_err']))
	{
	 echo $_SESSION['reg_err'];
	 unset($_SESSION['reg_err']);
	}
?>	
	</div>
<div id="regform">
 <form action="common_code/reg_acte.php" method = "POST">
	<table align="center">
		<tr><td> <label for="fname"> <b> Firstname :</b> </label> </td>
			<td><input type = "text" name="fname" placeholder="Enter Your First Name" required onfocus="this.placeholder = ''"> </td></tr>
		<tr><td> </br> </td> </tr>
		<tr><td> <label for="lname"> <b> Lastname :</b> </label> </td>
			<td><input type = "text" name="lname"placeholder="Enter Your Last Name" onfocus="this.placeholder = ''"> </td></tr>
		<tr><td> </br> </td> </tr>
		<tr><td> <label for="admno"> <b> Admission no :</b> </label> </td>
			<td><input type = "text" name="admno" placeholder="eg. 11cse017" required onfocus="this.placeholder = ''" 
				pattern="^([0-9])([0-9])([A-Z]|[a-z])([A-Z]|[a-z])([A-Z]|[a-z])?[0-9][0-9][0-9]$"></td></tr>
		<tr><td> </br> </td></tr>
		<tr><td> <label for="password"> <b> Password :</b> </label> </td>
			<td><input type = "password" name="password" pattern=".{6,20}" placeholder="minimum 6 characters" required onfocus="this.placeholder = ''"></td></tr>
		<tr><td> </br> </td></tr>
		<tr><td> <label for="password2"> <b> Confirm Password :</b> </label> </td>
			<td><input type = "password" name="password2" pattern=".{6,20}" placeholder="re-type password" required onfocus="this.placeholder = ''"></td></tr>
		<tr><td> </br> </td></tr>
		<tr><td> <label for="branch"> <b> Branch :</b> </label> </td>
			<td><input type = "text" name="branch" placeholder="eg. CSE" required onfocus="this.placeholder = ''"></td></tr>
		<tr><td> </br> </td></tr>
		<tr><td> <label for="year"> <b> Year :</b> </label> </td>
			<td><input type = "number" name="year" pattern=[1-4] max="4" placeholder="1,2,3 or 4" required onfocus="this.placeholder = ''"></td></tr>
		<tr><td> </br> </td></tr>
		<tr><td colspan=2> <CENTER> <input type="submit" value ="ENTER"> </CENTER> </td></tr>
			</table>
 </form>
 </div>
 </div>
 </br> </br>
 <div id="foot">&copy; NIBBLE COMPUTER SOCIETY</div> 
 </CENTER>
  </body> 
</html>
