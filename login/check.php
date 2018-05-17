<html>

			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Logout</a></li>';
						echo '<li><a>HELLO       '.$_SESSION['user'].'</a></li';
					}
					else
					{
						echo '<li><a href="members.php">Sign In</a></li>';
          				echo '<li><a href="login.php">Sign Up</a></li>';
					}
			?>
			
</html>