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
		   for ($index=0; $index < 1000; $index++) { 
			 	 $number=rand(1,1000);
			 	 array_push($array,  $number) ;
		   }
			echo count($array);
			//var_dump($array);
			$time_before=microtime();
			for ($i=0; $i <count($array) ; $i++) { 
				$smallest=$array[$i];
				$smallest_index=$i;
				for ($j=$i+1; $j < count($array); $j++) { 
					 if($array[$j]<$smallest){
					 	$smallest=$array[$j];
						$smallest_index=$j;
						// echo "smallest".$smallest."<br>";
				         //echo "smallest_index".$smallest_index."<br>";
					 }
				}
				 $temp=$array[$i];
				 $array[$i]=$smallest;
				 $array[$smallest_index]=$temp;	 
			}?>
			<?php 
			$time_after=microtime(); 
			echo "time taken=".($time_after-$time_before)."ms";
			echo "<br>";
			?>

    </div>
	<div> 
	    <h2>Selection Sort</h2>
	    <p><?php
		 // var_dump($array);
		 ?>
		</p>
	</div>	

 
</body>
</html>