<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="oem.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="oem.ico">	
    <link rel="stylesheet" href="style_index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>400 | CartoonLovePangKung's Website</title>
</head>
<body bgcolor="#f1d2d4">
    
    <div class="homeheader">
    <img src="oem.bmp" width="200" height="200">	  
            <font size="30"><font color="#FFFFFF">CartoonLovePangKung's Website</font>	
            </font></div><font size="30">
    </div>
<ul>	  
    <li>
        <a href="index.php">Home</a></li>
        <li class="dropdown">		
            <a href="javascript:void(0)" class="dropbtn cc_pointer">Links</a>		
            <div class="dropdown-content">		  
                <a href="https://krittapath6699.wixsite.com/website">Wix Website!</a>			
            </div>
			</li>
			<li>
			<a href="archive.php">Archive</a>	
			<a href="#downloads">Downloads</a></li>
<li class="dropdown">		
            <a href="javascript:void(0)" class="dropbtn cc_pointer">Option</a>		
            <div class="dropdown-content">		  
                <a href="http:\\www.cartoonlovepangkung.epizy.com\home_css.html">Switch To Stable</a>			
            </div>
			</li>
            <li>
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
    <marquee behavior="scrolling"><font color="red"><br>Error! 400 Bad Request!</marquee></font>
</ul>
<br>
<center>		
        <br>
        <br>
        <br><font size="32">Error !
        <br> 400
        <br> Bad Request</font>
        <br>
        <br> Just check in the url are that correct?
        <br>
        <br>
        <br> <font size="26">Or if you think because of me just contact me at
        <br> FB : <a href="https://www.facebook.com/missyoupromploy13757">Cartoon Kritthapath Yaviraj</a>	
        <br> FB [Page] : <a href="https://www.facebook.com/missyoupromploy">Cartoonlovepangkungofficial</a>		
        <br> IG : <a href="https://www.instagram.com/cartoonlovepangkungchannel/">@cartoonlovepangkungchannel</a></font>
</body>
</html>