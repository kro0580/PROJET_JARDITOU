<?php

// On détruit la session avec session_destroy()

session_start();
if(isset($_GET['logout']))
{
    session_destroy();
    header("location:index.php");
}
else{
    header("location:index.php");
}

?>