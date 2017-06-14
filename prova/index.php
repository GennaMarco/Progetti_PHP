<?php session_start();  ?>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
		<form method="POST" action="processing_form.php">

				<p class="title">
					SCHERMATA DI LOGIN
				</p>
				<p>
					Username: <input type="text" name="user" placeholder="inserisci username">
				</p>
				<p>
					Password: <input type="password" name="pass" placeholder="inserisci password">
				</p>
				<p>
					<button type="submit" name="login">Accedi</button>
				</p>

				<?php 

				if(isset($_SESSION['message'])) 
				{
					$message = $_SESSION['message'];
					unset($_SESSION['message']);
				 	echo "<div class=\"alert\">
  							<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>". 
  							$message.
						  "</div>";
				}
					?>

		</form>

		
	
</body>
</html>