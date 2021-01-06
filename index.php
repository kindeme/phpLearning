<?php
	include('db/db.php');
	include('functions/functions.php');
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
	<?php
		include('includes/header.php');

	?>


	<h1>Fome Page</h1>


	<?php
	

		// show data from database on a website
		$sql="SELECT * FROM posts";
		$results = mysqli_query($connection,$sql);
		if($results){
			if(mysqli_num_rows($results)){
				while($row =mysqli_fetch_array($results)){
					echo "Post title :".$row['title']."<br>";
					echo "Post content :".$row['comtent']."<br>";
				}
			}

		}
	?>

</body>
</html>