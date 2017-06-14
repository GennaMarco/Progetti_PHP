<html>
<head>
	<title>Processing capi d'abbigliamento</title>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="logo text-color">LOGO</div>
		<a href="login.php" class="login text-color">Logout</a>	
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
	
	<!-- usiamo dei div container per incapsulare tutto correttamente, evitando che i float right e left per esempio vadano a sporcare la pagina; dentro il container usando il clear pulisco ogni volta il div e poi vado a capo -->
	<div class="container">
		<!-- il div di base ha larghezza tutto lo schermo e altezza 0; l'altezza viene poi adattata a seconda dei contenuti che si inseriscono dentro -->
		<section>
			<div class="form-container">
			    <form action="action2.php" method="POST">
			        
					<ul class ="checkboxes">

					    <li>
					        <input type="checkbox" name="categorie[]" value="cappelli">Cappelli</input>
					    </li>
					    <li>
					        <input type="checkbox" name="categorie[]" value="sciarpe">Sciarpe</input>
					    </li>
					    <li>
					        <input type="checkbox" name="categorie[]" value="tshirt">T-shirt</input>
					    </li>
					    <li>
					       <input type="checkbox" name="categorie[]" value="felpe">Felpe</input>
					    </li>
					    <li>
					       <input type="checkbox" name="categorie[]" value="jeans">Jeans</input>
					    </li>
					    <li>
					       <input type="checkbox" name="categorie[]" value="mutande">Mutande</input>
					    </li>
					    <li>
					       <input type="checkbox" name="categorie[]" value="calzini">Calzini</input>
					    </li>

					</ul>

				    <ul class="radiobuttons">

						<li>
					        <input type="radio" name="sesso" value="uomo">Uomo</input>
					    </li>
			            <li>
					        <input type="radio" name="sesso" value="donna">Donna</input>
					    </li>

			        </ul>
                    <div class="cerca">
			            <button name="cerca" type="submit">Ricerca abbigliamento</button>
			        </div>

			    </form>
			</div>
		</section>

		<aside>
            <?php include 'stampaRisultati.php'; ?>
		</aside>

	</div>
	<footer>
		<p>Marco Srl - Via Sestriere 67, Rivoli</p>
		<p>P.IVA: 123456789</p>
	</footer>
</body>
</html>