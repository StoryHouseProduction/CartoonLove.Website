<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="oem.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="oem.ico">	
    <link rel="stylesheet" href="style_index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive Page | CartoonLovePangKung's Website</title>	
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
			<a href="#archive">Archive</a>	
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
    <marquee behavior="scrolling">Archive Zone! This just my work that i proudly present to you but! Thai Launguage is not working for now so just download the source code by press CTRL+S on your computer and make sure that you use for educational purposes only!</marquee><br>			
	</ul>
    <center>		
       	<br>
        <br><a href="https://web.archive.org/web/*/pms.ac.th" button class="button button1">PMS Archive</a>
		<br>
		<br><a href="cartoonlovepangkung/" button class="button button1">CartoonLovePangKung's Archive</a>
		<br>
		<br><button class="button button1" onclick="eastereggpopup1()">Promploy's Archive</button>
        <br>
        <br> Use for educational purposes only!	
    </center>

    <script>
function eastereggpopup1() {
  alert("Promploy's Archive is on developement. Come back later!");
}
</script>

</body>
</html>