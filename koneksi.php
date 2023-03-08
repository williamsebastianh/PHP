<?php
    $connection = new mysqli('localhost','root','','museum');
    if($connection) {
        echo "";
    }
    else {
        die(mysqli_error($connection));
    }


?>