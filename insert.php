<?php
 require_once 'connect.php';

$sql = "INSERT INTO users
        SET
        full_name = '" . $_POST['uname'] . "', 
        email = '" . $_POST['uemail'] . "', 
        address = '" . $_POST['uaddress'] . "', 
        contact_number = '" . $_POST['unum'] . "' 
        ";

//executing a query in database
$query = mysqli_query($conn, $sql);

if ($query) {
    //success
    echo "Data Inserted Successfully.";
} else {
    echo mysqli_error($conn);
}