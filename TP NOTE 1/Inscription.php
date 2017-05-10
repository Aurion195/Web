
		<?php

			$username = $_POST['pseudo'] ;
			$mail = $_POST['email'] ;

			if(!file_exists("accounts/" . $username))
			{
				mkdir("accounts/" . $username) ;
			}
	
			$file = fopen("accounts/" . $username. "/username.txt", "x") or die("Le compte existe deja");

			if(!$file)
			{
				echo 'Ce compte existe déjà ...';
				echo '<a href="Page d\'acceuil\'.html">Retour à l\'index</a>';
			}
			else
			{
				if(isset($_POST['pass']))
				{
					fwrite($file, $_POST['pass']) ;
				}
				else
				{
					echo '<a href="Inscription.html>Erreur ! </a>' ;
				}
			}
				
			fclose($file) ;
			header("Location: Page d'acceuil.html");
		?>
