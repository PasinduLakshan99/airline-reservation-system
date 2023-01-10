<?php

// configure sql database to use in CRUD operations

$SERVER = "localhost:3306";
$USERNAME = "mohotta";
$PASSWD = "NatGeo50PEO";
$DB_NAME = "airport_mgr";

$conn = new mysqli($SERVER, $USERNAME, $PASSWD, $DB_NAME);

if ($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
}

?>