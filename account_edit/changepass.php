<?php 
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: http://cartoonlovepangkung.epizy.com/login/');
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="http://cartoonlovepangkung.epizy.com\oem.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="http://cartoonlovepangkung.epizy.com\oem.ico">	
    <link rel="stylesheet" href="http://cartoonlovepangkung.epizy.com\style_index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account Infomation Page | Lobby | CartoonLovePangKung's Website</title>	
</head>
<body bgcolor="#f1d2d4">
    
    <div class="homeheader">
    <img src="http://cartoonlovepangkung.epizy.com\oem.bmp" width="200" height="200">	  
            <font size="30"><font color="#FFFFFF">CartoonLovePangKung's Website</font>	
            </font></div><font size="30">
    </div>
<ul>	
	<li><marquee>Change Password Page!</marquee></li>
</ul>
<br>
<br>
<center>
	<form>
	<table width="700" border="1">
  <tbody>
    <tr>
      <td width="120">Old Password</td>
      <td width="564"><input type="old_password" name="password" id="password" width="564"></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><input type="password" name="new_password1" id="password" width="564"></td>
    </tr>
    <tr>
      <td>Repeat Password</td>
      <td><input type="password" name="new_password2" id="password" width="564"></td>
    </tr>
    <tr>
      <td colspan="2"><button type="submit" name="change_pass" class="button button1">Change Password!</button></td>
    </tr>
  </tbody>
</table>
</form>
	</center>

