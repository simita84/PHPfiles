<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read CSV</title>
	<link rel="stylesheet" type="text/css"
	 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style type="text/css">
	.style{
		font-size: 20px;
		font-weight:bold;	
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		 $('tr:first').addClass("style");
		 $('tr:even').css("background","#ccc");

	});
</script>
</head>
<body class="container">
	<h1 class="page-header">Read CSV</h1>
	<table class="table table-bordered table-hovered"> 
	 <?php
		 ini_set("auto_detect_line_endings", true);
		$file = fopen("us-500.csv","r");
	 
		while(!feof($file)) 
			{  
		 
		    $array[]=fgetcsv($file);
		 
		  }

		    fclose($file);
		 ?>
		<?php
		foreach ($array as $row) {?>
			<tr>
				<?php 
			foreach ($row as $key => $value) {?>
				<td>
				<?php echo $value."<br>";?>
			    </td>
			<?php } ?>
		 </tr>
		<?php } ?>
		 
	</table>
	 
</body>
</html>