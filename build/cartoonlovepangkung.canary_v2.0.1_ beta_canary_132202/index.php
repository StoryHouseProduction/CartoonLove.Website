<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
ul {	  
    list-style-type: none;	  
    margin: 0;	  
    padding: 0;	  
    overflow: hidden;	  
    background-color: #fcbca4;	  
    position: sticky;	  
    top: 0;	}	
li {	  
    float: left;	
    }	
li a, .dropbtn {	  
    display: 
    inline-block;	  
    color: white;	  
    text-align: center;	  
    padding: 14px 16px;	  
    text-decoration: none;	}	
li a:hover, .dropdown:hover .dropbtn {	  
    background-color: #4CAF50;
    }	
li.dropdown {	  
    display: inline-block;	
    }	
.dropdown-content {	  
    display: none;	  
    position: absolute;	  
    background-color: #f9f9f9;	  
    min-width: 160px;	  
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);	  
    z-index: 1;	
    }	
.dropdown-content a {	  
    color: black;	  
    padding: 12px 16px;	  
    text-decoration: none;	  
    display: block;	  
    text-align: left;	
    }	
.dropdown-content a:hover 
    {background-color: #4CAF50;}	
.dropdown:hover .dropdown-content 
    {	  display: block;	}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | CartoonLovePangKung's Website</title>
    <link rel="icon" href="oem.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="oem.ico">	
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
            <a href="javascript:void(0)" class="dropbtn cc_pointer">Option</a>		
            <div class="dropdown-content">		  
                <a href="http:\\www.cartoonlovepangkung.epizy.com\home_css.html">Switch To Stable</a>			
            </div>
			</li>
            <li>
            <a href="account.php"><p><?php echo $_SESSION['username']; ?></p></a>
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
            echo "Welcome To my Website!" ?>
        <?php endif ?></marquee>
</ul>
<br>
<center>		
        <br>
        <br>
        <br> Annoucement !
        <br> 
        <br> Welcome to betaroom! Enjoy!
        <br> If you want to see our activities you can watch at
        <br> FB : <a href="https://www.facebook.com/Cartoonlovepangkungs-Website-106292101392909">Cartoonlovepangkung's Website</a>		
        <br> IG : <a href="https://www.instagram.com/cartoonlovepangkungwebsite/">@cartoonlovepangkungwebsite</a>
        <br>
        <br><font size="18">Follow our social.</font> 		
        <br>		
        <br>		
        <br>		
        <br><font size="18">Like Our Fanpage.</font>		
        <br><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMissyoupromploy%2F&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flearnitwithcartoon%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPangKungCh%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	<br><font size ="18">Or Just Listen to the music.</font>
	<br><iframe src="https://open.spotify.com/embed/playlist/3cETaBZFQtpkrtZEqtAwo2" width="500" height="500" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
	<iframe src="https://open.spotify.com/embed/playlist/22makAFcjuWhCrFNg3nUfK" width="500" height="500" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
</body>
</html>