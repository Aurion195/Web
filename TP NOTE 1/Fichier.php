<?php

        // On teste si le fichier envoyé ne contient pas d'erreur

        if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
        {

        // On teste la taille du fichier

            if ($_FILES['monfichier']['size'] <= 1000000000000)
            {

                // On voit si l'extension est bonne

                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // on valide le fichier

                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'Import/' . basename($_FILES['monfichier']['name']));

                        echo "L'envoi a bien été effectué !";
                }
            }
        }
?>