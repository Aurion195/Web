<?php
    $destinataire = 'mathieuthomas84300@hotmail.fr';     
    $form_action = '';
     
    $message_envoye = "Votre message nous est bien parvenu !";
    $message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";
    $message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";
     

    $nom     = (isset($_POST['nom']))     ? $_POST['nom']     : '';
    $email   = (isset($_POST['email']))   ? $_POST['email']   : '';
    $objet   = (isset($_POST['objet']))   ? $_POST['objet']   : '';
    $message = (isset($_POST['message'])) ? $_POST['message'] : '';
     
     
    if (isset($_POST['envoi']))
    {
      if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
      {
        $headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";

        if ($copie == 'oui')
        {
          $cible = $destinataire.';'.$email;
        }
        else
        {
          $cible = $destinataire;
        };
     
        $message = str_replace("&#039;","'",$message);
        $message = str_replace("&#8217;","'",$message);
        $message = str_replace("&quot;",'"',$message);
        $message = str_replace('&lt;br&gt;','',$message);
        $message = str_replace('&lt;br /&gt;','',$message);
        $message = str_replace("&lt;","&lt;",$message);
        $message = str_replace("&gt;","&gt;",$message);
        $message = str_replace("&amp;","&",$message);
     
        $num_emails = 0;
        $tmp = explode(';', $cible);

        foreach($tmp as $email_destinataire)
        {
          if (mail($email_destinataire, $objet, $message, $headers))
            $num_emails++;
        }
     
        if (isset($email))
        {
          mail($destinataire,$objet,$nom,$email) ;
          echo '<p>'.$message_envoye.'</p>';
        }
        else
        {
          echo '<p>'.$message_non_envoye.'</p>';
        };
      }
      else
      {
        echo '<p>'.$message_formulaire_invalide.'</p>';
        $err_formulaire = true;
      };
    }; 



    ?>