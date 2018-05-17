<div class="entry">

		<?php
			if(isset($_GET['error']))
			{
				echo '<font color="red">'.$_GET['error'].'</font>';
				echo '<br><br>';
			}
			
			if(isset($_GET['ok']))
			{
				echo '<font color="blue">You are successfully Registered..</font>';
				echo '<br><br>';
			}
		
		?>
	</div>