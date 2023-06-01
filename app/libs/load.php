<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/__templates/$name.php"; // NOT CONSISTANT
}

function validate_credentials($username, $password)
{
    /*print("validate_credentials()");*/
    if ($username == "ananth@gmail.com" and $password == "password") {
        return true;
    } else {
        return false;
    }
}
?>
