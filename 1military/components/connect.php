<?php
$con = new mysqli('mysql', 'root', 'password', 'military');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
