<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiplication Table</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">	 
	<style type="text/css">
		.well{
			margin: 2px;
		}
		td{
			border: 2px solid black;
			margin: 2px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12"> 
				<h1 class="page-header">
					<?php echo "Multiplication Table" ?>
				</h1>
			</div>
			<div class="col-md-2"> 
				 <table class="table table-bordered">
				 	  
				 	 		<?php
				 	 		 
				 	 			for ($row=1; $row <10 ; $row++) {?>
				 	 			<tr> 
				 	 				 
				 	 				<?php for ($col=1; $col <10 ; $col++) { ?>
				 	 				<td>  
				 	 					<?php
				 	 					 echo $col*$row;
				 	 					 ?>
				 	 				</td>
				 	 				<?php } 
				 	 			}?>
				 	 			</tr>
				 	 		
				 	 	 
				 </table>
				 
 			</div>
	</div>
	 
</body>
</html>

