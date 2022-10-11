<?php
session_start();
include '../../auth/auth-login.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard <?= $_SESSION['status'] ?> | Web SIAKAD</title>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh ;">
        <h1>Dashboard <?= $_SESSION['status'] ?> is comming soon...</h1>
        <div class="card text-center" style="width: 18rem;">
            <h1 class="h2">
                <i class="fa-solid fa-user-shield"></i>
            </h1>
            <div class="card-body">
                <h5 class="card-title"><?= $_SESSION['username'] ?></h5>
                <p class="card-text">you login as <?= $_SESSION['status'] ?></p>
                <a href="../../auth/logout.php" class="btn btn-danger">Log Out</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>