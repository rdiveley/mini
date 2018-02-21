<div class="container">
	<h1>Users</h1>

	<table width="100%">
		<tr>
			<td><h3>First Name</h3></td>
			<td><h3>Last Name</h3></td>
			<td><h3>Edit</h3></td>
		</tr>

		<?php foreach($users as $user){ ?>
			<tr>
				<td><?php echo $user->fname ?></td>
				<td><?php echo $user->lname ?></td>
				<td><a href="<?php echo URL ?>users/getUser/<?php echo $user->id ?>">Edit</a></td>
			</tr>		
		<?php } ?>	
	</table>
</div>

