<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>homePage</title>
	
	
<link rel="stylesheet" type="text/css" href="mystylesheet.css" />
	
</head>
<body>
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
          <li><a href="homepage.php">LOGOUT</a></li>
          
        </ul>
      

</div>
      <div id="site_content">
      	<div id="sidebar">
      	<h2>Search by Book</h2>
        <form method="post" action="searchb.php" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Book.." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="search.png" alt="Search" title="Search" />
          </p>
        </form>
        
        </div>
        
        <div id="content">
        <?php
        $sql = "SELECT * FROM basic";
        $res = mysqli_query($db,$sql);
        foreach ($res as $row) {
          echo "          
          <div id='books'> 
          <p> ". $row['title']."</p>".
           "<img src='" .$row['img']. "'". "class='imgalign' height='226' width='146'>
             <p>Price: ". $row['price']."/= </p>
             
             <center><a href='signin.php'><input type='submit' class='btn' value='BUY'></a></center>
          </div>";
         
        } 
        
        
        ?>
  


                


         </div>
     </div>



</body>
</html>
  