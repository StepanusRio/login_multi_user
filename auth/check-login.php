<?php
session_start();
include '../conf/connection.php';
// Check User password & Role's
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['status'])) {

    // function test_input($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    // $username = test_input($_POST['username']);
    // $password = test_input($_POST['password']);
    // $status = test_input($_POST['status']);

    if (empty($username)) {
        header('location: ../index.php?error=Username is Required');
    } else if (empty($password)) {
        header('location: ../index.php?error=Password is Required');
    } else {
        // Hashing The Password Using MD5
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password' AND status='$status'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] === $password && $row['status'] === $status) {
                $_SESSION['iduser'] = $row['iduser'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['status'] = $row['status'];
                if ($row['status'] === 'admin') {
                    header('location: ../dashboard/admin/index.php');
                }else if ($row['status'] === 'dosen') {
                    header('location: ../dashboard/dosen/index.php');
                }else if($row['status'] === 'mhs') {
                    header('location: ../dashboard/mahasiswa/index.php');
                }
            }
        } else {
            header('location: ../index.php?error=Incorect Username or Password or Role');
        }
    }
} else {
    header('location: ../index.php');
}
