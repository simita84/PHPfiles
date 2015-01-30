<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Selection Sort</title>
	<link rel="stylesheet" 
		  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body class="container">
	<h1 class="page-header">Selection Sort</h1>
	<div> 
		<h2>Initial Array</h2>
		<?php  
		  $array=array();
		   for ($index=0; $index < 100; $index++) { 
			 	 $number=rand(1,1000);
			 	 array_push($array,  $number) ;
		   }
			echo count($array);
			var_dump($array);

			$time_before=microtime();
			for ($i=0; $i < count($array); $i++) { 
				for ($j=0; $j <count($array)-1 ; $j++) { 
					 if($array[$j]>$array[$j+1]){
					 	$temp=$array[$j];
					 	$array[$j]=$array[$j+1];
					 	$array[$j+1]=$temp;
					 }
				}
			}
			$time_after=microtime();

			echo ($time_after-$time_before);
		 ?>

 
    </div>
	<div> 
	    <h2>Bubble Sort</h2>
	    <p><?php
		 var_dump($array);
		 ?>
		</p>
	</div>	

 
</body>
</html>