<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<header>
		<div class="logo text-color">LOGO</div>
		<a href="login.php" class="login text-color">Log-in</a>
		<a href="signin.php" class="signin text-color">Sign-in</a>	
	</header>

	<nav>
		<ul>
			<li>
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">About</a>
			</li>
			<li>
				<a href="#">Contact</a>
			</li>
		</ul>
	</nav>
	
	<!-- usiamo dei div container per incapsulare tutto correttamente, evitando che i float right e left per esempio vadano a sporcare la pagina; dentro il container usando il clear pulisco ogni volta il div e poi vado a capo -->
	<div class="container">
		<!-- il div di base ha larghezza tutto lo schermo e altezza 0; l'altezza viene poi adattata a seconda dei contenuti che si inseriscono dentro -->
		<section>
			<h1 class="text-color">HOME</h1>

			<p class="text-color">
				
			</p>
			<!-- <div class="square-section">
				section
			</div>
			<div class="square-page">
				square-page
			</div> -->
		</section>

		<aside>
			<h2>Lorem ipsum dolorismenatibus et magnis dis parturiennibh, eg orum est malesuada.</h2>
		</aside>

	</div>
	<footer>
		<p>Marco Srl - Via Sestriere 67, Rivoli</p>
		<p>P.IVA: 123456789</p>
	</footer>
</body>
</html>