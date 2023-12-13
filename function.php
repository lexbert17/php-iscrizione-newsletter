<?php

if (isset ($_POST['email']) && str_contains($_POST['email'], '@') && str_contains($_POST['email'], '.')){
$your_email = $_POST['email'];
header('Location: ./success.php');
} else {
    header('Location: ./danger.php');
}



?>