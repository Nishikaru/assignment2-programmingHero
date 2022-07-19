<?php

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        echo 'Welcome <b>' .$username. ' </b> your password is <b>'.$pass. '</b>';
    }
?>