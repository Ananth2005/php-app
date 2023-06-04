<?php
$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email_address'];
    $phone = $_POST['phone'];
    $result = signup($username, $password, $email, $phone);
    $signup = true;

    if ($signup) {
        if ($result) {
            ?>
				<main class="container">
					<div class="bg-body-tertiary p-5 rounded mt-3">
						<h1>signup success</h1>
						<p class="lead">Now you can login from <a href="/login.php">here</a></p>

					</div>
				</main>
		<?php
        } else {
        ?>
			<main class="container">
				<div class="bg-body-tertiary p-5 rounded mt-3">
					<h1>signup failed</h1>
					<p class="lead">Something went wrong</p>
				</div>
			</main>
	<?php
		}
	}

}else {
?>
	<main class="form-signup">
		<form method="post" action="signup.php">
			<h1 class="h3 mb-3 fw-normal">signup here</h1>

			<div class="form-floating">
				<input name="username" type="text" class="form-control" id="floatingInputusername"
					placeholder="name@example.com">
				<label for="floatingInput">username</label>
			</div>

			<div class="form-floating">
				<input name="phone" type="number" class="form-control" id="floatingInputphone"
					placeholder="name@example.com">
				<label for="floatingInput">phone</label>
			</div>

			<div class="form-floating">
				<input name="email_address" type="email" class="form-control" id="floatingInputEmail address"
					placeholder="name@example.com">
				<label for="floatingInput">Email address</label>
			</div>

			<div class="form-floating">
				<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>
			<button class="w-100 btn btn-lg btn-primary hvr-float-shadow type=" submit>Signup</button>

		</form>
	</main>
	<?
}
?>