<?php
	$connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
	mysql_select_db('prbset3_prb1') or die('Could not select database');

	//$input_topic = $_GET["cakeName"];

	$query = mysql_query($connection, "SELECT * FROM cake") ;
	//$query .="\"$input_topic\";";
	//$result = mysql_query($query) or die('Query failed: ' . mysql_error());

	echo "<table border = \"1\">\n";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";

	mysql_free_result($result);
	mysql_close($connection);
?> 