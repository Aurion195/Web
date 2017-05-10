<?php session_start() ;

	$username = $_POST['pseudo'];
	$password = $_POST['password'];

	$admin = "admin" ; 
	$mdp_admin = "admin" ;

	$returnedCode = -1;

	if($username == $admin && $mdp_admin == $password)
	{
		header('Location: Admin.php') ;
		break ;
	}
	else
	{
		if(!file_exists("accounts/" . $username))
		{
			$returnedCode = 30;
		}
		else
		{
			$fname = "accounts/" . $username . "/username.txt";
			$file = fopen($fname, "r") ;

			if(!file)
			{
				$returnedCode = 31 ;
			}
			else
			{
				$content = fread($file,filesize($fname));

				if($password == $content)
				{
					$returnedCode = 20 ;

					$_SESSION['pseudo'] = $username;
					$_SESSION['connected'] = "1";
				}
				else
				{
					$returnedCode = 21;
				}
		
			fclose($file);
			}
		}
	}

	switch($returnedCode)
	{
		case 20 :
			header("Location: Acceuil.php") ;
			break ;
		case 21 :
			echo 'Il semblerait que votre mot de passe ne soit pas le bon </p>';
			break;
		case 30 :
			echo 'Pas le bon nom de compte <br> <a href="Page d\'acceuil.html"> Voulez-vous revenir ?</a></p>';
			break;
		case 31 ; 
			echo "Pas de compte, inscrivez-vous !" ;
			break;
		default :
			case 30 :
			echo '<p id="welcome">Le code retourné par notre serveur n\'est même pas valable >.<<br>Peut-être va t-il revenir</a> à la normale ?</p>';
			break;
	}
?>