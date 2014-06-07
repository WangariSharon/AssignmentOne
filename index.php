<!-- File includes -->
<?php require 'array_list.php'; ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="var/www/Assignment-One/main.css">
 <head>Friends</head>
<body>
<section>
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
		<?php foreach ($friends as $friend): ?>
		<tr>
			<td> <?=$friend['firstname'] ?></td>
			<td> <?=$friend['lastname'] ?></td>
			<td> <?=$friend['age'] ?> </td>
			<td> <?=$friend['phone_number'] ?></td>
		</tr>
	<?php endforeach ?>
	</tbody>
	</table>
	</section>
	</body>
</html>























