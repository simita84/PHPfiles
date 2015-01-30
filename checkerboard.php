<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checker Board</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style type="text/css">
		 .one,.zero{
		 	width: 50px;
		 	height:50px;
		 }
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			 $('.one').css("background","red");
			 $('.zero').css("background","black");

			 $('.one').hover(function(){
			 	 $(this).css("background","white");
			 },function(){
			 	 $(this).css("background","red");
			 });
			 $('.zero').hover(function(){
			 	 $(this).css("background","white");
			 },function(){
			 	 $(this).css("background","black");
			 });
			 
		});
	</script>
	 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12"> 
				<h1 class="page-header">
				<?php echo "Checker Board" ?>
				</h1>
			</div>
		 
		<div class="col-md-5"> 
				<table class="table table-striped table-bordered">
					<?php
					$value=0;
					$another_value=1;
					 
					for ($i=1; $i <=8; $i++) {
						$temp_val=$value;
						$value=$another_value;
						$another_value=$temp_val;
					 ?>
					<tr>
						<?php for ($j=1; $j <=8 ; $j++) { 
							if($value==0){?>
								<td class="zero"><!--?php echo $value?>--></td>
							<?php }
							else{?>
								<td class="one"><!--?php echo $value ?>--></td>
							<?php }?>
						 	<?php 
							 	$temp_val=$value;
								$value=$another_value;
								$another_value=$temp_val;
						 	 } ?>
						<?php echo "<br>";?>
						</tr>
					<?php } ?>		 
			 
			    </table>
		</div>	 
		 
		</div>
	</div>
	
</body>
</html>

