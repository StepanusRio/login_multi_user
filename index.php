<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Login | Web SIAKAD</title>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh ;">
        <form class="border shadow-lg p-3 rounded-3" style="width: 450px;" method="POST" action="auth/check-login.php">
            <?php
            if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="text-center">
                <h1>
                    <i class="bi bi-shield-lock"></i>
                </h1>
                <h1 class="text-center">Login</h1>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Select user type :</label>
                <select name="status" class="form-select mb-3" aria-label="Default select example">
                    <option value="admin">Admin</option>
                    <option value="dosen">Dosen</option>
                    <option value="mhs">Mahasiswa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>