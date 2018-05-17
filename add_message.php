<?php
include('config.php');
if(isset($_POST['submit'])){  
    
    $Customer_Name=$_POST['Name'];
    $Customer_Email=$_POST['Email'];
    $Message = $_POST['Message'];
	
	
	//query
    $sql1="INSERT INTO customer_messages (Customer_Name,Customer_Email,Message) VALUES ('$Customer_Name','$Customer_Email','$Message')";
    $Records =$db->query($sql1);
	
	 if($Records){
        echo'<script>';
        echo"alert('SUCCESS | Your message has been recorded')";
        echo'</script>';
        header("location:contactus.php");
    }
    else{
        echo'<script>';
        echo"alert('FAILED | Message not Sent')";
        echo'</script>';
    }
}



?>