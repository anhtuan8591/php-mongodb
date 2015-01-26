<table width="700" border="1">
<thead>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Action</th>
</thead>
<tbody>
<?php 
foreach ($aUsers as $user) {   
	$name = $user['name'];
	$email = $user['email'];
	$password = $user['password']  
		?>
		<tr>
		<td><?php echo $name ?></td>
		<td><?php echo $email ?></td>
		<td><?php echo $password ?></td>
		<td><center><a href="manage_user.php?flag=edit&email=<?php echo $email; ?>">Edit</a> | <a href="manage_user.php?flag=delete&email=<?php echo $email; ?>">Delete</a></center></td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
