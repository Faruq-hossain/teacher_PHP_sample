<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</head>
<body>
	<center><br><br>
		<h3>Admin Login Page</h3><br>
		<form action="" method="post">
			Email: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit">
		</form><br>
		<?php
		    session_start();
		    if(isset($_POST['submit'])){
		    	$connection = mysqli_connect("localhost","root","");
		    	$db = mysqli_select_db($connection,"sms");
		    	$query = "select * from login where email = '$_POST[email]'";
		    	$query_run = mysqli_query($connection,$query);
		    	
		    	while ($row = mysqli_fetch_assoc($query_run)){
		    		
		    		if($row['email'] == $_POST['email']){
		    			if($row['password'] == $_POST['password']){
		    				
		    				$_SESSION['email'] = $row['email'];
		    				$_SESSION['name'] = $row['name'];
		    				
		    				header("Location: admin_dashboard.php");
		    			}
		    			else{
		    				echo "Wrong Password";
		    			}
		    		}
		    		else{
		    			echo "Wrong Emial ID";
		    		}
		    		
		    	}
		    }
		?>
	</center>

</body>
</html>
