<?php
	$connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
	mysql_select_db('prbset3_prb1') or die('Could not select database');

	$cakeName = $_GET['cakeName'];
	$query = 'SELECT	iName, qty
			  FROM 		ingredient, contains, cake
			  WHERE 	ingredient.ingredID = contains.ingredID AND
						contains.cakeID = cake.cakeID AND
						cake.cakeName=';
	$query .= "'$cakeName'";
	$queryResult = mysql_query($query, $connection);
	
	echo "<table border='1'>
	<tr>
	<th>iName</th>
	<th>qty</th>
	</tr>";
	
	while($row = mysql_fetch_array($queryResult))
	{
		echo "<tr>";
		echo "<td>" . $row['iName'] . "</td>";
		echo "<td>" . $row['qty'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
mysql_free_result($queryResult);
mysql_close($connection);
?> 