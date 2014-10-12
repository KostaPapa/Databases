<?php
	$connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
	mysql_select_db('prbset3_prb1') or die('Could not select database');
	
	$custID = $_GET['custID'];
	$query = 'SELECT	cakeName, pricePaid, orderTime, pickupTime 
			  FROM 		cake, orders
			  WHERE 	cake.cakeID = orders.cakeID AND 
						orders.custID= ';
	$query .= "'$custID'";
	$queryResult = mysql_query($query, $connection);
						  
	echo "<table border='1'>
	<tr>
	<th>cakeName</th>
	<th>pricePaid</th>
	<th>orderTime</th>
	<th>pickupTime</th>
	</tr>";

	while($row = mysql_fetch_array($queryResult))
	{
		echo "<tr>";
		echo "<td>" . $row['cakeName'] . "</td>";
		echo "<td>" . $row['pricePaid'] . "</td>";
		echo "<td>" . $row['orderTime'] . "</td>";
		echo "<td>" . $row['pickupTime'] . "</td>";
		echo "</tr>";
	}
echo "</table>";

mysql_free_result($queryResult);
mysql_close($connection);
?> 