<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read CSV</title>
	<link rel="stylesheet" type="text/css"
	 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	 
</head>
<body class="container">
	<h1 class="page-header">Read CSV</h1>
	<table> 
	 <?php
		$file = fopen("us-500.csv","r");
	 
		while(!feof($file)) 
			{ ?>
		<li>
		  
		 <?php  print_r(fgetcsv($file));?>
		 </li>
		 <?php }

		   ?>
		
		 
		 fclose($file);
		 ?>
		 
	</table>
	 
</body>
</html>