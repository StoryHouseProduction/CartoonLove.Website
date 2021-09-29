<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="http://cartoonlovepangkung.epizy.com\oem.ico" type="image/x-icon">
    <link rel="shortcut icon" type="http://cartoonlovepangkung.epizy.com\image/x-icon" href="oem.ico">	
    <link rel="stylesheet" href="http://cartoonlovepangkung.epizy.com\style_index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CartoonLovePangKung's Archive Page | CartoonLovePangKung's Website</title>	
</head>
<body bgcolor="#f1d2d4">
    
    <div class="homeheader">
    <img src="oem.bmp" width="200" height="200">	  
            <font size="30"><font color="#FFFFFF">CartoonLovePangKung's Website</font>	
            </font></div><font size="30">
    </div>
<ul>	  
    <li>
        <a href="http://cartoonlovepangkung.epizy.com\index.php">Home</a></li>
        <li class="dropdown">		
            <a href="javascript:void(0)" class="dropbtn cc_pointer">Links</a>		
            <div class="dropdown-content">		  
                <a href="https://krittapath6699.wixsite.com/website">Wix Website!</a>			
            </div>
			</li>
			<li>
			<a href="http://cartoonlovepangkung.epizy.com\archive.php">Archive</a>	
			<a href="#downloads">Downloads</a></li>
<li class="dropdown">
            <?php if (isset($_SESSION['username'])) : ?>
            <div class="username">
                <h>
                         <a href="account.php"><?php echo $_SESSION['username']; ?></a>
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
    <marquee behavior="scrolling">CartoonLovePangKung's Archive</marquee><br>			
	</ul>
    <center>		
       	<br>
        <br><a href="Home.html" button class="button button1">First Website </a>
		<br>
		<br><a href="Text.html" button class="button button1">Text Example [Download TH Saraban New For Full Exprience]</a>
		<br>
		<br><a href="bgcolor.html" button class="button button1">Background Color</a>
		<br>
		<br><a href="background.html" button class="button button1">Background</a>
		<br>
		<br><a href="picture.html" button class="button button1">Image</a>
		<br>
		<br><a href="http://cartoonlovepangkung.epizy.com\resume.html" button class="button button1">My Resume</a>
        <br>		
    </center>
</font>
</body>
</html>