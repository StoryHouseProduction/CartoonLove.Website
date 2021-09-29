<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style_index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Infomation | CartoonLovePangKung's Website</title>
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
            <a href="logout.php">Logout</a>
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
            echo "Account Infomation." ?>
        <?php endif ?></marquee>
</ul>
<center>	
<?php
    include('server.php');
    $user_info = "SELECT username, name , email, avatar FROM user_final"; 
    $result = mysqli_query($conn, $user_info);
    $row = $result->fetch_assoc();
?>

<table width="700" border="1">
  <tbody>
    <tr>
      <td colspan="2"><h1>Personal Infomation</h1></td>
      </tr>
    <tr>
      <td colspan="2">Avatar</td>
      </tr>
    <tr>
      <td colspan="2"><?php echo "<img src='".$row['avatar']."'>" ?></td>
      </tr>
    <tr>
      <td width="69">Name</td>
      <td width="615"><?php echo "<div class='userlist'><span>".$row['name']."</span>" ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?php echo "<div class='userlist'><span>".$row['username']."</span>" ?></td>
    </tr>
    <tr>
      <td>E-Mail</td>
      <td><?php echo "<div class='userlist'><span>".$row['email']."</span>" ?></td>
    </tr>
    <tr>
      <td>Edit Profile</td>
      <td><a href="account_edit\" button class="button button1">Edit Here!</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
</center>
</body>
</html>