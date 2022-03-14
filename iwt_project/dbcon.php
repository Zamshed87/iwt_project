<?php

$server= 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';
$con= mysql_connect($server, $user, $password , $db);

if($con)

{
    ?>
    <script> alert("connection successful"); </script>
    <?php  

}

else{
    ?>
    <script>
        alert("No connection ");
    </script>

    <?php
}


?>