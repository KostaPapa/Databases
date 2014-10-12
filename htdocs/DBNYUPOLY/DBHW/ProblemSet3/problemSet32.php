<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" 
      content="text/html; charset=iso-8859-1">
  <title>Problem Set #3</title>
</head>
<body>
<form action="iNameQty.php" method="GET">
	
	<h2><b><u><center>
	<?php
		print "Problem Set #3 (Due March 31): \n";
	?>
	</h2></b></u></center>
	
	<h3><b><u>
	<?php
		print "Problem 1: \n";
	?>
	</h3></b></u>
	
	<?php	
		$connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
		mysql_select_db('prbset3_prb1') or die('Could not select database');
		
		$distinctQuery = "SELECT DISTINCT cakeName
						  FROM cake";
				
		if (!($resultId = @ mysql_query ($distinctQuery, $connection)))
		{
			showerror( );
		}
		
		print "\nChoose a cake:	";	
		
		print "\n<select name=\"cakeName\">";
			
		while ($row = @ mysql_fetch_array($resultId))
		{
			$result = $row["cakeName"];
				
			if (null != "All" && $result == "All")
			{
				print "\n\t<option selected value=\"{$result}\">{$result}";
			}
			else
			{
				print "\n\t<option value=\"{$result}\">{$result}";
			}
			print "</option>";
		}
		print "\n</select>";	
	?>
<input type = "submit" value = "Show Ingredients and Quantities">
</body>
</html>


