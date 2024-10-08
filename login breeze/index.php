<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

	<title>Admin Login </title>
	<link rel="stylesheet" href="style.css">

	<!-- Bootstrap core CSS -->
	<link href="/Final HijrahShop v1.0/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="/Final HijrahShop v1.0/assets/css/fontawesome.css">
	<link rel="stylesheet" href="/Final HijrahShop v1.0/assets/css/tooplate-main.css">
	<link rel="stylesheet" href="/Final HijrahShop v1.0/assets/css/css/owl.css">
	<!--Tooplate 2114 Pixiehttps://www.tooplate.com/view/2114-pixie-->

</head>

<body>

<header id="header">
	<nav class="links" style="--items: 5;">
		<a href="../index.php">Home</a>
		<a href="../products.php">Products</a>
		<a href="../about.html">About Us</a>
		<a href="../contact.php">Contact Us</a>
		<span class="line"></span>
	</nav>
</header>


	<!-- partial:index.partial.html -->
	<div class="wrapper">
		<div class="container">
			<h1>Admin Only</h1>

			<form method="post" action="login.php">
				<input type="text" placeholder="Username" name="username">
				<input type="password" placeholder="Password" name="password">
				<button type="submit" id="login">Login</button>
			</form>
		</div>

		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

	<!-- partial -->
	<script src='/cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="/script.js"></script>

	<!-- Bootstrap core JavaScript -->
	<script src="/Final HijrahShop v1.0/vendor/jquery/jquery.js"></script>
	<script src="/Final HijrahShop v1.0vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


	<!-- Additional Scripts -->
	<script src="/Final HijrahShop v1.0/assets/js/custom.js"></script>
	<script src="/Final HijrahShop v1.0/assets/js/owl.js"></script>


	<script language="text/Javascript">
		cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
		function clearField(t) { //declaring the array outside of the
			if (!cleared[t.id]) { // function makes it static and global
				cleared[t.id] = 1; // you could use true and false, but that's more typing
				t.value = ''; // with more chance of typos
				t.style.color = '#fff';
			}
		}
	</script>
</body>

</html>