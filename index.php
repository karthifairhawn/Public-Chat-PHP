

<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Sign Up</title>
    <link rel="stylesheet" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    <h2>Strange Meet</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="php/login.php" method="post">
			<h1>Create Account</h1>
			<input name="name" type="text" placeholder="Name" />
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="php/login.php" method="post">
			<h1>Sign in</h1>			
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Thanks for Joining!</h1>
				<p>We hash your passwords but although we recommend you to use diffirent password. Thanks</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<p>Don't have an account, create one now.</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Strange Meet Copyright 2020-2021. All rights reserved
		<span class="end"> Login page credits : <a href="https://www.florin-pop.com/">Florin Pop</a></span>
	</p>
</footer>
<script src="js/main.js"></script>

</body>
</html>