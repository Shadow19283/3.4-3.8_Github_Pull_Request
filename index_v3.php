<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');
@import url('https://fonts.google.com/specimen/Playfair+Display');
</style>
<!DOCTYPE html> 
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="Keywords" content="Video, Games, Video Games, History"/>
	<meta name="author" content="Trent Swaine"/>
	<meta name="Description" content="WEbsite about the History of Video Games"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<!-- import the webpage's stylesheet goes here -->
	<link rel="stylesheet" href="css/style_V3.css">
	<link href="https://fonts.googleapis.com/css?family=Sriracha" rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Permanent Marker" rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Roboto Condensed" rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel='stylesheet'>
  </head>
	
	<!-- main webpage content starts here -->
  <body>
  	  
		<div class="grid-container">
			
			<div class="sub1">
				
			</div>
			<div class="nav">
		
			<ul>
				<li><a href="index_v3.php"><h10>Home</h10></a></li>
				<li><a href><h10>1958 - 1999</h10></a>
					<ul>
					<li><a class="active" href="1958_v2.php"><h10>1958's</h10></a></li>
					<li><a href="1960_v2.php"><h10>1960's</h10></a></li>
					<li><a href="1970_v2.php"><h10>1970's</h10></a></li>
					<li><a href="1980_v2.php"><h10>1980's</h10></a></li>
					<li><a href="1990_v2.php"><h10>1990's</h10></a></li>
					</ul>
				<li><a href><h10>2000 - 2025</h10></a>
					<ul>
					<li><a class="active" href="2000_v2.php"><h10>2000's</h10></a></li>
					<li><a href="2010_v2.php"><h10>2010's</h10></a></li>
					<li><a href="2020_v2.php"><h10>2020's</h10></a></li>
					</ul>
				
			</ul>
			<ul>
				
				<button onclick="document.getElementById('id01').style.display='block'" id="loginbtn" style="width:auto;">Login</button>
				
<div id="id01" class="modal">
 			
  <form class="modal-content animate" action="connect.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/PersonIcon.png" alt="Avatar" class="avatar" style="width:300px; height:300px;">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required class="uname">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
		
	  <!--<button type="submit">Login</button>-->
        <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
				<li2><a href="Contact_v2.php" class="split"><h12>Contact</h12></a></li2>
			</ul>
		</div>
		
		<div class="header"></div>
		
		
		<!--This class is for my Navigation/Menu-->
		<div class="subheading1">
			<h2><center>What are Video Games?</center></h2>
			
			<div class="w3-contentw3-section">

  <img class="mySlides w3-animate-right" src="images/Red Dead Redemption 2.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="images/Grand Thieft Auto 5.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="images/M.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="images/Elden Ring.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="images/Super Mario Bros.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000);    
}
</script>
	</div>
			
			

		<div class="content"> <!-- This the main content on the website that tells you about Jazz-->
			<div class="">
				<div class="Tetris">
				<img src="images/Tetris.png" alt="Tetris" style="width:400px; height:400px;">
	
				<p style="font-size:1vw;">A video game or computer game is an electronic game that involves interaction with a user interface or input device (such as a joystick, controller, keyboard, or motion sensing device) to generate visual feedback from a display device, most commonly shown in a video format on a television set, computer monitor, flat-panel display or touchscreen on handheld devices, or a virtual reality headset. Most modern video games are audiovisual, with audio complement delivered through speakers or headphones, and sometimes also with other types of sensory feedback (e.g., haptic technology that provides tactile sensations). Some video games also allow microphone and webcam inputs for in-game chatting and livestreaming.</p>
				
				
				<p style="font-size:1vw;">Video games are typically categorized according to their hardware platform, which traditionally includes arcade video games, console games, and computer games (which includes LAN games, online games, and browser games). More recently, the video game industry has expanded onto mobile gaming through mobile devices (such as smartphones and tablet computers), virtual and augmented reality systems, and remote cloud gaming. Video games are also classified into a wide range of genres based on their style of gameplay and target audience.</p>
			
	<button1 onclick="topFunction()" id="myBtn" title="Go to top"><p2>↑</p2></button1>
	
					</div>
			</div>
			</div>
	
		<div class="content2">
				<div class="Doom">
				
			<p1 style="font-size:1vw;"> In the twenty-first century, the video-game industry grew into a multibillion-dollar business. Much of this growth can be attributed to hardware improvements that allow for increased graphical fidelity and gameplay complexity, as well as improvements in communications technologies that allow for online game play. Video games have become hugely popular, with major influence in pop culture and beyond. Many gamers play casually, but highly organized competitions have also gained a strong following, giving rise to the lucrative esports industry. Aside from entertainment, video games have also been used as aids in education, science, medicine, art, and business. The various elements of video-game production and development have also become popular educational and professional pursuits, significantly shaping trends in academia, the workforce, and the economy as a whole.</p1>
				<img src="images/DoomDarkAges.jpg" alt="Doom" style="width:450px; height:400px;">
				</div>
	
	</div>
	<div class="footer2"> <h4>Trent Swaine Copyright 2025 THOVG, all rights reserved.</h4>
			</div>
			<div class="footer2">
			</div>
		</div>
	<script type="text/javascript" src="js/backtotop.js"></script>
  </body>
 </html>