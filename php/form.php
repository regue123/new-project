<?php

  if(isset($_POST['next']))
  {
    if(isset($_POST['user_email']) AND isset($_POST['user_password']) AND isset($_POST['user_confirm_password']))
    {
        if(!empty($_POST['user_email']) AND !empty($_POST['user_password']) AND !empty($_POST['user_confirm_password']))
        {
          $email htmlspecialchars($_POST['user_email']);
          $password htmlspecialchars($_POST['user_password']);
          $confirm_password htmlspecialchars($_POST['user_confirm_password']);
    
        }
    }
  }

?>