<?php

if (isset($_GET['logout'])){
    session_start();
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    header('Location: ../index.php');
}


 ?>
