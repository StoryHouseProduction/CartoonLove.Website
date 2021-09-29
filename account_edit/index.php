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
    <li>
        <a href="http://cartoonlovepangkung.epizy.com\">Home</a></li>
        <li class="dropdown">		
            <a href="javascript:void(0)" class="dropbtn cc_pointer">Links</a>		
            <div class="dropdown-content">		  
                <a href="https://krittapath6699.wixsite.com/website">Wix Website!</a>			
            </div>
			</li>
			<li>
			<a href="#archive">Archive</a>	
			<a href="#downloads">Downloads</a></li>
<li class="dropdown">		
            <?php if (isset($_SESSION['username'])) : ?>
            <div class="username">
                <h>
                    <?php echo $_SESSION['username']; ?>
                </h>
            </div>
        <?php endif ?>
        <?php if (!isset($_SESSION['username'])) : ?>
            <div class="username">
                <h>
                         <a href="login\">Login</a>
                </h>
            </div>
        <?php endif ?>
            </li>
    </div>
    <marquee behavior="scrolling">Edit Account Infomation Page | Lobby | Please select what you want to edit.</marquee><br>			
	</ul>
    <center>		
       	<br>
        <br><a href="personalinfo.php" button class="button button1">Personal Info</a>
		<br>
		<br><a href="changepass.php" button class="button button1">Change Password</a>
		<br>
		<br><a href="http://cartoonlovepangkung.epizy.com\account.php" button class="button button1">Back to Account Infomation</a>
    </center>

</body>
</html>