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
	<tbody>
		<tr>
			<?php foreach ($friends as $friend): ?>

				<td><?=$friend->firstname?></td>
				<td><?=$friend->lastname?></td>
				<td><?=$friend->age?></td>
				<td><?=$friend->phoneNumber?></td>

			<?php endforeach ?>
		<tr>
	</tbody>
</table>
</body>
</html>
