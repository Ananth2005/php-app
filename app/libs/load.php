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

function signup($user, $pass, $email, $phone)
{

    $servername = "mysql.selfmade.ninja";
    $username = "ananth";
    $password = "ananth12345";
    $dbname = "ananth_auth";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `auth` (`username`, `phone`, `email_address`, `password`, `blocked`, `active`)
    VALUES ('$user', '$password', '$email', '$phone', '0', '1')";
    $result = false;

    // Check if the username already exists
    $duplicateCheckQuery = "SELECT COUNT(*) as count FROM `auth` WHERE `username` = '$user'";
    $duplicateCheckResult = $conn->query($duplicateCheckQuery);
    if ($duplicateCheckResult && $duplicateCheckResult->fetch_assoc()['count'] > 0) {
        $result = false; // Username already exists
    } else {
        if ($conn->query($sql)) {
            $result = true;
        } else {
            $result = false;
        }
    }


    return $result;
}

function login($email, $password)
{
    $servername = "mysql.selfmade.ninja";
    $username = "ananth";
    $password = "ananth12345";
    $dbname = "ananth_auth";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `auth` (`username`, `phone`, `email_address`, `password`, `blocked`, `active`)
    VALUES ('$email', '$password', '0', '1')";
    $result = false;

    $duplicateCheckQuery = "SELECT COUNT(*) as count FROM `login` WHERE `email_address` = '$email'";
    $duplicateCheckResult = $conn->query($duplicateCheckQuery);
    if ($duplicateCheckResult && $duplicateCheckResult->fetch_assoc()['count'] > 0) {
        $result = false; // Username already exists
    } else {
        if ($conn->query($sql)) {
            $result = true;
        } else {
            $result = false;
        }
    }

    return $result;
}
