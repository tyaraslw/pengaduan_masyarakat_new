<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="wrapper">
        <form action="proses-register.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="NIK" name="nik" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="No Telp" name="notelp" required>
            </div>

            <button type="submit" class="btn btn-light">Register</button> <a class="btn btn-secondary" href="login.php"><font color="white">back</font></a>
             
        </form>
    </div>
</body>
</html>