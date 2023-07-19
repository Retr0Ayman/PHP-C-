<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname'])  & & isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = striplashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}

$uname = validate($_POST['uname']);
$uname = validate($_POST['password']);

if(empty($uname)) {
    header ("Location:  index.php?erro=User Name is required");
    exit();
}
else if(empty($pass)) {
    header("Location: index.php?error=Password is required");
    exit();
}

$sql= "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

$result = mysqli_query($conn, $sq1);

if(mysqli_num_row($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] === $uname && $row['password'] === $pass) {
        echo "Logged In!";
        $_SESSION['user_name']
    }
}

