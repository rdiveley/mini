<div class="container">
	<h1>User Details - this came from my feature branch</h1>

	<table width="100%" >
		<tr>
			<td><h3>First Name</h3></td>
			<td><h3>Last Name</h3></td>
			
		</tr>

		<?php foreach($users as $user){ ?>
			<tr>
				<td><?php echo $user->fname ?></td>
				<td><?php echo $user->lname ?></td>
				
			</tr>		
		<?php } ?>	
	</table>


	
</div>