<?php
session_start();
//print_r($_SESSION);
?>
<html>
<head>
<meta charset="utf-8"/>
<title>Main Page</title>
<link rel="stylesheet" href="Main page.css">
</head>
<body class = "backgroundColor" style="color:white">
<div class = "contentBox">
	<div class = "header">
      <div>
      <img  class = "center" src="logo.png" width="1000" height="300" alt=""/>
      </div>
    </div>
 <div>
	  <ul>
  			<li><a href="Intro.php">Home</a></li>
			<li><a href="welcome page.php">Welcome</a></li>
			<li><a href="brandReport.php">Printer brands</a></li>
			<li><a href="printerReport.php">Printers</a></li>
			<li class="dropdown" align = "right">
    			<a href="javascript:void(0)" class="dropbtn">Account</a>
    			<div class="dropdown-content">
      			<a href="login.php">Login</a>
				<a href="logout.php">Logout</a>
      			<a href="register.php">Register</a>
    			</div>
  			</li>
	</ul>
  </div>
  <div class = "facts">10 Interesting facts about printers</div>
<div class = "textBox">
  <h2>1.Fuser rollers get up to about 401 degrees Fahrenheit!</h2>
  <p> Fuser rollers are the two cylinders that heat up to adhere the toner to the page.</p>
  <h2>2.Toner doesn’t need much heat to melt.</h2>
  <p>Even though the rollers get so hot, you could probably melt the toner with just some warm water.</p>
  <h2>3.About a gallon of oil is used to make one printer cartridge.</h2>
  <p>We don’t use a gallon of oil in a cartridge.</p>
  <h2>4.Laser printers use more energy than your computer.</h2>
  <p>A laser printer uses three times more power than a desktop computer while both are being used.</p>
  <h2>5.The world’s smallest printer is 2 x 2 x 11 inches.</h2>
  <p>This is known as the PrintStik, and it’s made by Planon.At a meager 1.5 pounds, it’s quite portable.</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
  <div class = "textBox1">
    <h2>6.The world’s largest printer is almost 40 x 164 feet.</h2>
    <p>This printer is known as Infinitus and is made by Big Image Systems. It can print an image up to almost 2,000 square feet!</p>
    <h2>7.The fastest printers in the world can print 150 pages in a minute.</h2>
    <p>To put that into perspective, most printers today pop out color sheets at a rate of 15 to 30 sheets per minute.</p>
    <h2>8.Three-dimensional printers can print food.</h2>
    <p>Yes, they can print edible food!These printers can also make things like jewelry and clothes, all the way to houses and artificial prosthetics.</p>
    <h2>9.We have too many ink cartridges.</h2>
    <p>If all of the world’s empty ink cartridges from one year were placed end-to-end, it would circle the earth three times!</p>
    <h2>10.Ink is expensive!</h2>
    <p>The retail cost of just black printer ink makes it one of the most expensive liquids in the world!</p>
  </div>
</div>
</body>
</html>
