<?php include 'headers.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form processing</title>
</head>
<body>
<pre>
<?php 

$username = isset($_POST['username'])? $_POST['username'] : "";
$password = isset($_POST['password'])? $_POST['password'] : "";


$loginPage = "form.php";
$stringa = "";

if(isset($_POST['submit']))
{
   if(trim($username) == "mauro" && $password == "123")
   {
      $stringa = "Benvenuto ". $username;
      $_SESSION['username'] = $username;

   }
   else
   {
      // $stringa = "Username e password errati".", ritorna al "."<a href = $loginPage>"."login"."</a>";
      redirect("form.php");
   }
   echo $stringa;

   echo $_SESSION['username'];
}
// print_r($_POST);

?>
</pre>
</body>
</html>