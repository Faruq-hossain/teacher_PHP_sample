<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <style type="text/css">
    	#header{
    		height: 10%;
    		width: 100%;
    		top: 2%;
    		
    		position: fixed;
    		color: black;

    	}
    	#left_side_bar{
    		height: 75%;
    		width: 15%;
    		top: 10%;
    		position: fixed;

    	}
    	#right_side_bar{
    		height: 75%;
    		width: 80%;
    		
    		position: fixed;
    		left: 17%;
    		top: 21%;
    		color: black;
    		border: solid 1px black;
    	}
    	#top_span{
    		top: 15%;
    		width: 80%;
    		left: 17%;
    		position: fixed;
    	} 
    	#td{
    		border: solid 1px black;
    		padding-left: 2px;
    		text-align: left;
    		width: 200%;
    		 

    	}

    </style>
    <?php
        session_start();#ata holo email name database fatch kore dekhabe tar jonno nice email er okhane php use korbo dynamic vabe dekhabe email name

        #query onnect
        $connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");

        #6 no logout er kaj korbo logout korar por admin e cole jabe#
    ?>
</head>
<body>
	
	<div id="header">
		<center><br><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teacher Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Email: <?php  echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <?php  echo $_SESSION['name'];?>
			
		</center>
	</div>
	
	<div id="left_side_bar"><br><br><br><br>
		
		<form action="" method="post">
			<table>
				
				<tr>
					<td>
						<input type="submit" name="search_teacher" value="Search Teacher">
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" name="add_new_teacher" value="Add New Teacher">
					</td>
				</tr>

				
				
			</table>
		</form>
	</div>
	<div id="right_side_bar"><br><br>
		<div id="demo">
			<?php
			    #search button er kar korbo tr code korbo
			#same if isset use kore or vitor post korbo Search Student click korbe tokon jabe
			    if(isset($_POST['search_teacher'])){
			    	#search box lagbe tar jonno html lagbe tai php off kore dibo ata dis
			    	?>
			    	<center>
			    		<form action="" method="post">
			    			Enter Roll No:
			    			<input type="text" name="roll_no">
			    			<input type="submit" name="search_by_id_no_for_teacher" value="Search">
			    			
			    		</form>
			    	</center>
			    	<?php
			    }
			    	#akhane search button er kaj korbo roll number click korar por search hobe tr kaj korbo

			    	    if(isset($_POST['search_by_id_no_for_search']))
			    	    {
			    	    	#ata click hole ki hobe abar database er sathe connect hoa tr por oi roll number er student  er detail fatch kora lagbe tar jonno database connictivity korbo

			    	    	#1st connection er jonno tar jonno top e akber e define kore dibo connectionjate bar bar na kora lage
			    	    	$query = "select * from teachers where roll_no = '$_POST[roll_no]'";
		                    $query_run = mysqli_query($connection,$query);
		    	#datbase theke query fatch er maddhome asbe array er vitore dibe .$query_run ai parameter nibe
		                    while ($row = mysqli_fetch_assoc($query_run)){
		                    	#search korar jonno detail show korar jonno 2 bar form creat korbo<form action="" method="post"></form> ata dorkar lage akhane amra aia nibona karon simple table er from nibo
		                    	?>
		                    	<table>
		                    		<tr>
		                    			<td><b>ID No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
		                    			<td>
		                    				<input type="tect" value="<?php echo $row['roll_no'];?>"disabled>
		                    			</td>
		                    		</tr>
		                    		<tr>
		                    			<td><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
		                    			<td>
		                    				<input type="tect" value="<?php echo $row['name'];?>"disabled>
		                    			</td>
		                    		</tr>
		                    		
		                    		<tr>
		                    			<td><b>Department:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
		                    			<td>
		                    				<input type="tect" value="<?php echo $row['class'];?>"disabled>
		                    			</td>
		                    		</tr>
		                    		<tr>
		                    			<td><b>Mobile:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
		                    			<td>
		                    				<input type="tect" value="<?php echo $row['mobile'];?>"disabled>
		                    			</td>
		                    		</tr>
		                    		<tr>
		                    			<td><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
		                    			<td>
		                    				<input type="tect" value="<?php echo $row['email'];?>"disabled>
		                    			</td>
		                    		</tr>
		                    		<tr>
		                    			<td><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
		                    			<td>
		                    				<input type="tect" value="<?php echo $row['password'];?>"disabled>
		                    			</td>
		                    		</tr>
		                    		
		                    	
		                    	</table>
		                    	<?php
		                    	#edit button er kaj korbo akhane search er moto s aki
		                    }
		                }
			?>
			
			
			<?php
                if(isset($_POST['add_new_teacher'])){
                	?>
                	<center><h4>File the given details:</h4></center>
                	<form action="add_teacher.php" method="post">
                		<table>
                			<tr>
                				<td>Id No:</td>
                				<td>
                					<input type="text" name="id_no" required>
                				</td>
                			</tr>
                			<tr>
                				<td>Name:</td>
                				<td>
                					<input type="text" name="name" required>
                				</td>
                			</tr>
                	
                			<tr>
                				<td>Department:</td>
                				<td>
                					<input type="text" name="class" required>
                				</td>
                			</tr>
                			<tr>
                				<td>Mobile:</td>
                				<td>
                					<input type="text" name="mobile" required>
                				</td>
                			</tr>
                			<tr>
                				<td>Email:</td>
                				<td>
                					<input type="text" name="email" required>
                				</td>
                			</tr>
                			<tr>
                				<td>Password:</td>
                				<td>
                					<input type="text" nam  e="password" required>
                				</td>
                			</tr>
                			
                			
                			<td></td>
                			<td><input type="submit" name="add" value="Add Teacher"></td>
                		</table>
                	</form>
                	<?php
                }
			?>

			

			<?php
			    if(isset($_POST['show_teachers'])){
			    	?>
			    	<center>
			    		<h5>Teacher's Details</h5>
			    		<table style="border-collapse: collapse; border: 1px solid black;">
			    			<tr>
			    				<td id="id"><b>ID</b></td>
			    				<td id="id"><b>Name</b></td>
			    				<td id="id"><b>Mobile</b></td>
			    				<td id="id"><b>Course</b></td>
			    				<td id="id"><b>View Detail</b></td>
			    			</tr>
			    		</table>
			    	</center>
			    	<?php
			    	    $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,"sms");
                        $query = "select * from teachers";
                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_assoc($query_run)){


                        	?>
                        	<center>
                        		<table style="border-collapse: collapse; border: 1px solid black;">

                        			<tr>
                        				<td id="td"><?php echo $row['t_id'];?></td>
                        				<td id="td"><?php echo $row['name'];?></td>

                        				<td id="td"><?php echo $row['mobile'];?></td>

                        				<td id="td"><?php echo $row['course'];?></td>

                        				<td id="td"><a href="#">View Detail</a></td>

                        			</tr>

                        		</table>

                        	</center>

                        	<?php

                        }

                    }

                    ?>
                    

		</div>
		
	</div>

</body>
</html>
