<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="http://cartoonlovepangkung.epizy.com\oem.ico" type="image/x-icon">
    <link rel="shortcut icon" type="http://cartoonlovepangkung.epizy.com\image/x-icon" href="oem.ico">	
    <link rel="stylesheet" href="http://cartoonlovepangkung.epizy.com\style_index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Home Page | CartoonLovePangKung's Website</title>
</head>
<body bgcolor="#f1d2d4" >
    
<img src="http://cartoonlovepangkung.epizy.com\oem.bmp" width="200" height="200">	  
            <font size="30"><font color="#FFFFFF">CartoonLovePangKung's Website</font>	
            </font></div><font size="30">
    </div>
<ul>	  
    <li>
        <a href="http://cartoonlovepangkung.epizy.com\index.php">Home</a>
    </li>
        <li class="dropdown">		
            <a href="javascript:void(0)" class="dropbtn cc_pointer">Links</a>		
            <div class="dropdown-content">		  
                <a href="https://krittapath6699.wixsite.com/website">Wix Website!</a>			
            </div>
			</li>
			<li>
			<a href="archive.php">Archive</a>	
			<a href="#downloads">Downloads</a></li>	
            <?php if (isset($_SESSION['username'])) : ?>
            <div class="username">
            <li>
                <h>
                         <a href="account.php"><?php echo $_SESSION['username']; ?></a>
                </h>
            </div>
            </li>
        <?php endif ?>
        <?php if (!isset($_SESSION['username'])) : ?>
            <div class="username">
            <li>
            <h>
                         <a href="login\">Login</a>
                </h>
            </div>
        <?php endif ?>
            </li>
    </div>
    <marquee behavior="scrolling"><br>
           <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php else : 
            echo "Welcome To My Website!" ?>
        <?php endif ?></marquee>
</ul>
<br>
    <center>
        <br>
        <br>
        <br> Download Page!
        <br> <p id="roundcorners">Rounded corners!</p>