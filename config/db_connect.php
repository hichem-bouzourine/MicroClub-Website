<?php
// connecter à la base de données
$conn = mysqli_connect('localhost', 'hichem', 'test1234', 'microclub');
// tester la connection
if (!$conn) {
    echo 'Connection denied' . mysqli_connect_error();
}

?>
<!--  -->