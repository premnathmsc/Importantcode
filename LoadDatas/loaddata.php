<?php  
sleep(1);
     include('config.php');
     if(isset($_POST['lastid'])){
          $lastid=$_POST['lastid'];		
				
			     $s="select * from users where id> $lastid order by id asc limit 5";
				$res=$con->query($s);
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
								?>
<button id="btnLoad" type="button" data-id="<?php echo $lastid; ?>">Load More</button>
<?php
				}

            
     }
?>