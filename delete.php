<?php
   if(isset($_POST["delete"])){
    include('config.php');
    $isbn = $_POST['isbn'];
    $sql1 = "DELETE FROM basic WHERE isbn='$isbn'";
    $sql2 = "DELETE FROM isbn_a WHERE isbn='$isbn'";
    $result1 = $db->query($sql1);
    $result2 = $db->query($sql2);
    if($result1||$result2){
        echo'<script>';
        echo"alert('SUCCESS | Book records deleted')";
        echo'</script>';
        
    }
    else{
        echo'<script>';
        echo"alert('FAILED | Unable to delete')";
        echo'</script>';
    }
}
?>