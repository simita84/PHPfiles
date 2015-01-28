<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>States Array</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">	 
	<style type="text/css">
		.well{
			margin: 2px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12"> 
				<h1 class="page-header">
					<?php echo "States Array" ?>
				</h1>
			</div>
			<div class="col-md-12"> 
				<?php
				$head_count=0;
				$tail_count=0;
				for ($i=1; $i <=5000; $i++) { 
					$toss=rand(0,1);
					if($toss==0){
						$coin="tail";
						$tail_count++;
					}
					else{
						$coin="head";
						$head_count++;
					}
					?>
					<div class="well col-md-2">
						<p><?php echo "Attempt no <h4>".$i."</h4>"."It is a ".$coin.".....".
									  " Got "."<b>".$tail_count."</b>"." tails so far & "."<b>".$head_count."</b>"." heads so far";?>
						</p>
					</div>
				<?php
					}
				?>
 			</div>
	</div>
	<div class="row">
		<h5>Ending the Program, Thank you</h5>
	</div>
	
</body>
</html>

