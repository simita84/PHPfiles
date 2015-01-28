<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Minimum and Maximum Of Array</title>
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
					<?php echo "Minimum and Maximum Of Array" ?>
				</h1>
			</div>
			<div class="col-md-5">
				<?php
					function get_max_and_min($sample)
					{
						$max_array=$sample[0];
						$min_array=$sample[0];
						for ($i=0; $i < count($sample); $i++) { 
							if($sample[$i]>$max_array){
								$max_array=$sample[$i];
							}
							if($sample[$i]<$min_array){
								$min_array=$sample[$i];
							}						
						}
						$result_array=array('max_array' => $max_array, 'min_array'=>$min_array);
						return $result_array;
					}
				 	$my_array=array(23,45.90,67,7.78,90,13,789.99,50,899);
				 	$compare_array=get_max_and_min($my_array);
				 	?>
				 	<h5>The array is</h5>
				 	<?php
				 	echo var_dump($my_array)."<br>";?>
				 	<h5>The result is</h5>
				 	<?php
				 	echo var_dump($compare_array);
				 ?>
				 
			 </div>
 </div>
	
</body>
</html>

