<html>
<head>
	<title>Sample PHP Assignment</title>
</head>
<body>
<?php
require 'database.php';
$database_name = 'akirachix';
$password      = '';
$username      = 'root';
$server        = 'localhost';

$db = new Database($database_name, $password, $username, $server);
$friends = $db->db_query('SELECT * FROM friends');
?>
<table>
		<thead>
			<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Phone Number</th>
		</tr>
		</thead>
	<tbody>";





		


		while ( $count< $size) {
			$table .= "<tr>";
			$table .= "<td>". $friends[$count]->firstname."</td>";
			$table .= "<td>". $friends[$count]->lastname."</td>";
			$table .= "<td>". $friends[$count]->age."</td>";
			$table .= "<td>". $friends[$count]->phoneNumber."</td>";
			$table .= "<tr>";
			$count++;
		}
$table.="</tbody>
	</table>";
	echo $table;

?>


</body>
</html>