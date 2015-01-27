<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My first php file</title>
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
				<?php echo "Score and Grade" ?>
				</h1>
			</div>
			<div class="col-md-5"> 
				<table class="table table-bordered">
					<?php
					for ($i=0; $i < 10; $i++) { 
						 $score=rand(50,100);
						?> 
						<tr>
							<td>
								<h2>Score:<?php echo $score;?></h2>
							</td>
							<td>
								<h3>Grade:<?php
										if($score<70){
											echo "D";
										}
										elseif ($score>=70 & $score<=80) {
											echo "C";
										}	
										elseif ($score>=80 & $score<=90) {
											echo "B";
										}
										elseif ($score>=90 & $score<=100) {
											echo "A";
										}
					             }?>
								</h3>
						</td>
					</tr>	
			    </table>
			    </div>		 
		</div>
	</div>
	
</body>
</html>

