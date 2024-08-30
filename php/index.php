<?php

  if(isset($_POST['connexion']))
  {
    if(isset($_POST['user_email']) AND isset($_POST['user_password']))
    {
        if(!empty($_POST['user_email']) AND !empty($_POST['user_password']))
        {
          $email htmlspecialchars($_POST['user_email']);
          $password htmlspecialchars($_POST['user_password']);
        
    
        }
    }
  }

?>