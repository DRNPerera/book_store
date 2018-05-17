<?php
	require('inc/dbconfig.php');


	if (isset($_POST['name'])){
		$book = $_POST['name'];
	}else{
		$book = '%';
	}

	if (isset($_POST['author'])){
		$author = $_POST['author'];
	}else{
		$author = '%';
	}


	// echo "</br>";

	$search_query = "SELECT * FROM basic WHERE title LIKE '%$book%' OR 

                        SELECT * FROM isbn_a WHERE author LIKE '%$author%'";



	// echo $search_query;

	$book = mysqli_query($conn,$search_query);

?>

<html>
    <head>
        <title>Browse BookStore</title>    

        <link rel="stylesheet" type="text/css" href="css/mystylesheet.css" />
    </head>
    <body>
    <div id="logo">
        <img src= "img/bookstore.jpg" style="width:100%;height:100px" >
    </div>
      
      <div id="topnav">
        <ul id="nav">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="homepage.php">Home</a></li>
          
          <li class="dropdown"  style="background-color:#EF840C"  >
              <a href="javascript:void(0)" class="dropbtn" >Categories</a>
              <div class="dropdown-content">
                  <a href="sinhala.php">Sinhala</a>
                  <a href="english.php">English</a>
                   
               </div>
          </li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="members.php">Sign In</a></li>
          <li><a href="login.php">Sign Up</a></li>
        </ul>
      

</div>
      <div id="site_content">
        <div id="sidebar">
        <h2>Search by Book</h2>
        <form method="post" action="book_search.php" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="name" />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="img/search.png" alt="Search" title="Search" />
          </p>
        </form>
        <h2>Search by Author</h2>
        <form method="post" action="book_search.php" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="author" />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="img/search.png" alt="Search" title="Search" />
          </p>
        </form>
        </div>
             <div id="content">
              
        <?php
        foreach ($book as $row) {
          $book=$row['isbn'];
          echo "          
          <div id='books'> 
          <p> ". $row['title']."</p>".
           "<img src='" .$row['img']. "'". "class='imgalign' height='226' width='146'>
             <p>". $row['price']." </p>
             <center><a href='buyingform.php'><input type='submit' class='btn' value='BUY'></a></center>
          </div>";

      }
      ?>
        </div>
    </body>
</html>