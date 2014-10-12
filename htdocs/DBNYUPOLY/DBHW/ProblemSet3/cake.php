<?php
	$connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
	mysql_select_db('prbset3_prb1') or die('Could not select database');

	$iName = $_GET['iName'];
	$query = 'SELECT	cakeName
			  FROM		cake, ingredient, contains, orders
			  WHERE		cake.cakeID = contains.cakeID AND 
						cake.cakeID = orders.cakeID AND
						ingredient.ingredID = contains.ingredID AND 
						ingredient.iName=';
	$query .= "'$iName'";
	$queryResult = mysql_query($query, $connection);

	echo "<table border='1'>
	<tr>
	<th>cakeName</th>
	</tr>";

	while($row = mysql_fetch_array($queryResult))
	{
		echo "<tr>";
		echo "<td>" . $row['cakeName'] . "</td>";
		echo "</tr>";
	}
echo "</table>";

mysql_free_result($queryResult);
mysql_close($connection);
?> 