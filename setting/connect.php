<?php

    $connect =mysqli_connect('localhost','root','Glory@1234','DBregister');
    if(mysqli_connect_error($connect)){
        echo 'Failed Connect';
    }
    mysqli_query($connect, 'SET CHARACTER SET UTF8');

?>