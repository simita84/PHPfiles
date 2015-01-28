<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML TABLE</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style type="text/css">
		.table_style{
			background: black;
			color: white;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$('tbody tr:nth-child(5n)').css("background","grey");
		});
	</script>
	 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12"> 
				<h1 class="page-header">
				<?php echo "HTML TABLE" ?>
				</h1>
			</div>
			<div class="col-md-8"> 
				<?php
				$index=4;
					$users=array(
								array('user_id'=>1,'first_name' => 'Micheal','last_name'=>'Choi' ),
								array('user_id'=>2,'first_name' => 'John','last_name'=>'Supsupin' ),
								array('user_id'=>3,'first_name' => 'Mark','last_name'=>'Gullian' )
								);
				   
				?>
				<?php
					//var_dump($users);
					$users[]= array('user_id'=>4,	'first_name' => 'Sierra','last_name'=>'Kate' );
					$users[]= array('user_id'=>5,	'first_name' => 'Zakin','last_name'=>'Chapman' );
					$users[]= array('user_id'=>6,	'first_name' => 'Koy','last_name'=>'Gullian' );
					$users[]= array('user_id'=>7,	'first_name' => 'Kim','last_name'=>'Masan' );
					$users[]= array('user_id'=>8,	'first_name' => 'Roy','last_name'=>'Cataser' );
					$users[]= array('user_id'=>9,	'first_name' => 'Mendo','last_name'=>'Tria' );
					$users[]= array('user_id'=>10,'first_name' => 'Maria','last_name'=>'Jo' );
						
				?>
				
				<table class="table table-striped table-bordered">
					<thead>
						<th>User#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Full Name</th>	
						<th>Full Name in uppercase</th>
						<th>Length of full name w/o spaces</th>
					</thead>
					<tbody class="names_display">
					<?php foreach ($users as $user) {?>
						<tr> 
							<td>
								<?php echo $user['user_id'];?>
							</td>
							<td>
								<?php echo $user['first_name'];?>
							</td>
							<td>
								<?php echo $user['last_name'];?>
							</td>
							<td>
								<?php echo $user['first_name']." ".$user['last_name'];?>
							</td>
							<td>
								<?php echo strtoupper($user['first_name']." ".$user['last_name']);?>
							</td>
							<td>
								<?php echo strlen(trim($user['first_name'].$user['last_name']));?>
							</td>
						</tr>	
					<?php } ?>					 
					</tbody>
			    </table>
			    </div>		 
		</div>
	</div>
	
</body>
</html>

