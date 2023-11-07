<?php
    $host = "localhost";
    // $username = "id21514842_tecnum_weblogger";
    // $password = ".Zse4aw3q21";
    // $database = "id21514842_weblogger_crud_uneweb";

    $username = "root";
    $password = "";
    $database = "weblogger_crud_uneweb";

    $link= mysqli_connect ($host, $username, $password);
    mysqli_select_db ($link, $database);

    try {
        $pdo = new PDO("mysql:host=$host;database=$database", $username, $password);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }
?>