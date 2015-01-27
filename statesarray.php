<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>States Array</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">	 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12"> 
				<h1 class="page-header">
					<?php echo "States Array" ?>
				</h1>
			</div>

			<div class="col-md-5 well"> 
			<h2>Using For Loop</h2>
				<?php
					$states= array('CA','WA','UT','AZ','VA');
				?>	 
				Select a state<select name="states">
				<option value="select">Select </option>	
				<?php
				for ($i=0; $i <count($states) ; $i++) { ?>
					
						<option value="<?php echo $states[$i]; ?>">
							<?php echo $states[$i]; ?>
						</option>							 
				<?php 
				}
				?>
				</select>	
			</div>		
			<div class="col-md-5 well"> 
			<h2>Using For Each</h2>
				<?php
					$states= array('CA','WA','UT','AZ','VA');
				?>	 
				Select a state<select name="states">
				<option value="select">Select </option>	
				<?php
				foreach ($states as $state) {?>
					<option value="<?php echo $state; ?>">
							<?php echo $state; ?>
					</option>							 
				<?php 
				}
				?>
				</select>	
			</div> 
		</div>
		<div class="row">
			<div class="col-md-6 well">
				<h2>Adding more states</h2>
				<?php
					$states= array('CA','WA','UT','AZ','VA');
					$states[]="NY";
					$states[]="NJ";
					$states[]="DE";
					var_dump($states);
				?>
			</div>
		</div>
	</div>
	
</body>
</html>

