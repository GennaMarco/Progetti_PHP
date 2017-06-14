<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="logo text-color">LOGO</div>
		<a href="login.php" class="login text-color">Login</a>
		<a href="signin.php" class="signin text-color">Sign-in</a>	
	</header>

	<nav>
		<ul>
			<li>
				<a href="index.php">Home</a>
			</li>
			<li>
				<a href="#">About</a>
			</li>
			<li>
				<a href="#">Contact</a>
			</li>
		</ul>
	</nav>
	

	
	<div class="container-login">

		<div class="container-form">

			<p class="title">SCHERMATA DI LOG-IN</p>
		
		    <form action="action1.php" method="POST">

		        <p>Username: <input name="username" type="text" placeholder="inserisci username"></p>
		        <p>Password: <input name="password" type="password" placeholder="inserisci password"></p>
		        <div class="login">
		        	<button name="login" type="submit">LOGIN</button>
		        </div>

            </form>



	    </div>

    </div>


	<footer>
		<p>Marco Srl - Via Sestriere 67, Rivoli</p>
		<p>P.IVA: 123456789</p>
	</footer>
</body>
</html>



