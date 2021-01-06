<?php
	include('db/db.php');
	//include('functions/functions.php');
	//include_once('functions/functions.php');
	//require('functions/functions1.php');
	//require_once('functions/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="functions/functions.php" method="post">
<input type="text" name="user_name" placeholder="User_name">
<br><br>
<input type="text" name="email" placeholder="Email">
<br><br>
<input type="password" name="password" placeholder="Password">
<br><br>
<button type="submit">Submit</button>
<br><br>
</form>
<!-- 
	<?php
		include('includes/header.php');

	?> -->


	<?php
	

		// show data from database on a website
		// $sql="SELECT * FROM posts";
		// $results = mysqli_query($connection,$sql);
		// if($results){
		// 	if(mysqli_num_rows($results)){
		// 		while($row =mysqli_fetch_array($results)){
		// 			echo "Post title :".$row['title']."<br>";
		// 			echo "Post content :".$row['comtent']."<br>";
		// 		}
		// 	}

		// }

		//Insert data froma website into a database
	?>

</body>
</html>