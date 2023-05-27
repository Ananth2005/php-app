<?php
$username = $_POST['email_address'];
$password = $_POST['password'];

$result = validate_credentials($username, $password);

if ($result) {
    ?>
<main class="container">
	<div class="bg-body-tertiary p-5 rounded mt-3">
		<h1>login success</h1>
		<p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
		<a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>
	</div>
</main>
<?php
} else {
    ?>
<main class="form-signin w-100 m-auto">
	<form method="post" action="login.php">
		<img class="mb-4"
			src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZmg4fA7ZwYx7fB7O3Em3UJzIwJoQwDbDWQw&usqp=CAU"
			alt="" width="155" height="80">

		<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

		<div class="form-floating">
			<input name="email_address" type="email" class="form-control" id="floatingInput"
				placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>

		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<button class="w-100 btn btn-lg btn-primary hvr-float-shadow type=" submit>Sign in</button>

	</form>
</main>
<?php
}
?>