<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Selection Sort</title>
</head>
<body>
	<?php $array= array(56,77,6,2,4,34,67,1,9);
		var_dump($array);
        $smallest_index;
        $smallest;
 
		for ($i=0; $i <count($array) ; $i++) { 
			 
			 for($j=$i+1;$j<count($array);$j++){
			 	
			 	if($array[$j]<$array[$i]){
			 		$smallest=$array[$j];
			 		//echo "smallest=".$smallest;
			 		$smallest_index=$j;
			 		//echo "index= ".$smallest_index;
			 		 
			 	}

			 }
			// echo "smallest=".$smallest;
			 echo "index= ".$smallest_index;
			 //$temp=$array[$i];
			 //$array[$i]=$smallest;
			 //$array[$smallest_index]=$temp;

			
			 //echo "index=".$smallest_index;
			
		}

		 
	 


		//var_dump($array);
	 ?>

 
</body>
</html>