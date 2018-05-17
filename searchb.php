<html>
<head>
	<title>View book</title>

<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
	
</style>
	
</head>
<body>
<?php

$book=$_POST['search_field'];
require 'config.php';

$sql1 = "SELECT * FROM basic where title Like '%$book%'";
$query1= mysqli_query($db,$sql1);

$result1= mysqli_fetch_assoc($query1);





echo "<table border=2>";
echo "<tr> <td>"."ISBN"."</td> <td>".$result1["isbn"]."</td> </tr>";
echo "<tr> <td>"."Title"."</td> <td>".$result1["title"]."</td> </tr>";
echo "<tr> <td>"."Category"."</td>"."<td>".$result1["cat"]."</td> </tr>";
echo "<tr> <td>"."Price"."</td>"."<td>".$result1["price"]."</td> </tr>";
echo "<tr> <td>"."Publisher"."</td>"."<td>".$result1["pub"]."</td> </tr>";
echo "<tr> <td>"."Published Year"."</td>"."<td>".$result1["puby"]."</td> </tr>";
?>
// <td>Image</td>
// 			<td><img src=<?php echo $result1['img']?>></td>
// 		</tr>;

</body>
</html>