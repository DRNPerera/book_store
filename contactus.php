<!DOCTYPE html>
<html>
<head>
	<title>Contact_Us</title>
	
	
<link rel="stylesheet" type="text/css" href="stylesheet0.css" />
	
</head>
<body>
<?php
include("config.php");
?>

	<div id="logo">
		<img src= "bookstore.jpg" style="width:100%;height:100px" >
	</div>
      
      <div id="topnav">
        <ul id="nav">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="homepage.php">Home</a></li>
          <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Categories</a>
              <div class="dropdown-content">
                  <a href="sinhala.php">Sinhala</a>
                  <a href="english.php">English</a>
                   
               </div>
          </li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="login/members.php">Sign In</a></li>
          <li><a href="login/login.php">Sign Up</a></li>
        </ul>
      </div>
	  <div>
	  
	  </div>
		
		<table style="float:left; color:black; width:100%; ">
		
		<td width="60%"  >
		<form method="post" action="add_message.php">
				
				<table style="float:right" border="0" width="100%" >
				<tr >
					<td ><h2>Your Message</h2></td>
				</tr>
				<tr >
					<td ><h3>Your Name</h3></td>
					<td ><h3>:</h3></td>
					<td ><input type="text" name="Name" size="30" maxlength="80" placeholder="Vinu Perera"></td>
				</tr>
				
				<tr >
					<td ><h3>Your Email</h3></td>
					<td ><h3>:</h3></td>
					<td ><input type="text" name="Email" size="30" maxlength="80" placeholder="Eg:vinu9821as@gmail.com"></td>
				
				<tr><td height="5px" ></td></tr>	
				<tr >
					<td ><h3>Your Message</h3></td>
					<td ><h3>:</h3></td>
					<td ><input type="text" name="Message" size="30"  rows="40"  placeholder="Your message..."></td>
				</tr>
				<tr><td height="5px" colspan="2" rowspan="2"></td></tr>
				<tr><td height="5px" colspan="2"></td></tr>
				<tr>
					
					
					<td ><center></center></td>
					<td width="50px"></td>
					
					<td><center><button name="submit" type="submit" value="submit" >Send</button>   
					<button type="Reset" value="Reset">Cancel</button></center></td>
				</tr>
				</table>
			    </form>
		</td>
		
		<td width="20%" style="color:black; float:right " >
		
			<table frame="box"  style="font-size:150%; color:black; border: 2px solid #dddd; border-color:white">
				<tr>
					<td >Address</td>
					<td>:</td>
					<td >No:29/8,<br>
						Galle Road,<br>
						Colombo8</td>
				</tr>
				<tr>
					<td height="20px" colspan="2"></td></tr>
				<tr>
					<td colspan="4"></td>
				</tr>
				<tr >
					<td >Hotline</td>
					<td >:</td>
					<td >0112338899<br>
						0755666644</td>
				</tr>
				<tr>
					<td height="20px" colspan="2"></td></tr>
				<tr>
					<td colspan="4"></td>
				</tr>
				<tr >
					<td >Email</td>
					<td>:</td>
					<td >Bookstore44@gmail.com</td>.
					
					
				</tr>
				<tr>
					<td height="20px" colspan="2"></td></tr>
				
				<tr >
					<td >Facebook</td>
					<td>:</td>
					<td >Online Bookstore</td>
				</tr>
				</table>
		</td>
		<td width="45%">
		<div id="follow" style="color:black">
				<h3>Follow Us</h3><br>
					<a href="https://www.facebook.com/Bookstorelk/" target="_blank">
					<img src="facebook-logo.png" alt="Facebook" width="60px" height="60px" >
					<a href="https://www.instagram.com/strandbookstore/" target="_blank">
					<img src="insterlogo.png" alt="Instergram" width="60px" height="60px">
					<a href="https://twitter.com/twitterbooks" target="_blank">
					<img src="twitterlogo.png" alt="Twitter" width="60px" height="60px">
					<a href="https://www.pinterest.com/search/pins/?rs=ac&len=2&q=bookstore&eq=bookst&etslf=7977&term_meta[]=bookstore%7Cautocomplete%7Cundefined" target="_blank">
					<img src="Pinterest-logo.png" alt="Pinterest" width="60px" height="60px">
			</div>
		</td>
		</tr>
		
		</table>
     
	</div>
</body>
</html>