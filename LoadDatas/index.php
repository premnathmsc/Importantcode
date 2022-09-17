<?php 
	include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1>Load More Data using AJAX/jQuery in PHP/MySQLi</h1>
  <div id="board"> 
<?php 
	$lastid='';
	$sql="SELECT * FROM users limit 5";
	$res=$con->query($sql);
	if($res->num_rows>0)
	{
		while($row=$res->fetch_assoc())
		{
			echo "
				<div class='card'>
				  <img src='img/pic.png' alt='Avatar'>
				  <div class='container'>
					   <table> 	
								<tr><th>Name </th><td>{$row["NAME"]}</td></tr>
								<tr><th>Age  </th><td>{$row["AGE"]}</td></tr>
								<tr><th>City </th><td>{$row["CITY"]}</td></tr>
								<tr><th>Email</th><td>{$row["EMAIL"]}</td></tr>
					   </table> 
					<hr>
				  </div>
				</div>
			";
			$lastid=$row["ID"];
		}
	}
?>
<button id="btnLoad" type="button" data-id="<?php echo $lastid; ?>">Load More</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/script.js"></script> 

</body>
</html> 
