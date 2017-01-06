<?php require 'partials/head.php'; ?>
	<h1>Users</h1>
	<ul>
		<?php foreach ($users as $user): ?>
			<li>
				<?= $user->Name; ?>
			</li>
		<?php endforeach ?>
	</ul>
	<h1>Submit your name</h1>
	<form method="post" action="users">
		<input type="text" name="name">
		<button type="submit">Submit</button>
	</form>
<?php require 'partials/footer.php'; ?>