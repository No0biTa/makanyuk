<?php
    //Authorization - Acces Control
    //check
    if (isset($_SESSION['user']))
    {
      $_SESSION['no-login-message'] = "div class='error text-center'>Please login to access Admin Panel. </div>";

      header('location:'.HOME.'admin/login.php');
    }
?>