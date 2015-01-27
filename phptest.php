<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My first php file</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 class="page-header"><?php echo "My first php file" ?></h1>
			<?php
				$first_name="Simi";
				$last_name="Raj";
				//echo "hello";
				//echo "name is ".$first_name.$last_name;
				//echo " my DOCUMENT_ROOT is set to ".$_SERVER['DOCUMENT_ROOT'];
				$arr= array("hello","shhh");
				$people=array(
							array("Simi","1122 west was","6578"),
							array("Raj","677 west was","658878"),
							array("title","1122 west was","6578"),
							array("Supety","1122 west was","6578"),
							array("Kalty","1122 west was","6578"),
							array("ree","1122 west was","6578"),
							array("Simi","1122 west was","6578")
							);
				
				//echo $students[2][2];
				//$students= array("first_name"=>"Choi","last_name"=>"Micheal");
				$students=array(
							array("first_name"=>"Choi","last_name"=>"Micheal"),
							array("first_name"=>"John","last_name"=>"Supsupin"),
							array("first_name"=>"KB","last_name"=>"Tonel"),
							array("first_name"=>"Miss","last_name"=>"Sarayu"),
							array("first_name"=>"Poy","last_name"=>"Kim")
							);
				$teachers=array("Name","clas","integer");

				//echo $teachers['first_name'];
				/*for($i=0;$i<count($teachers);$i++)
				{
					echo $teachers[$i]."<br>";
				}
				foreach ($students as $key => $value) {
					 echo $value;
				}*/

				for ($i=0; $i <count($people) ; $i++) { 
					for ($j=0; $j <count($people[$i]) ; $j++) { 
						 echo $people[$i][$j]." ";
					}
					echo "<br>";
				} 

				foreach ($students as $row) {
					foreach ($row as $key => $value) {
						echo $key." = ".$value."<br>";
					}
				}

				 $str="simi tresa antony";
				// echo strlen($str);
				 $replaced_str=str_replace(" ", "_", $str);
				 //echo "replaced string is : ".$replaced_str;
				 $words=explode("_", $replaced_str);

				 foreach ($words as $name) {
				 	//echo $name."<br> ";
				 }

				 
				 if (isset($var)) {
    				echo "This var is empty.";
				}
				else{
					echo "No var is nor set.";
				}
				var_dump($words);
				
				  
			?>
			<?php
				for ($i=0; $i < 10; $i++) { 
					 $toss=rand(0,1);
				
				if($toss=="0"){
					echo "head"."<br>";
				}
				else{
					echo "tail"."<br>";
				}
				}

				var_dump($students);

				$star[]="simi";
				$star[]="raj";
				$star[]="joanna";

				echo $star[0];
				var_dump($star)
			?>
		  	

		   

		</div>
	</div>
	
</body>
</html>

