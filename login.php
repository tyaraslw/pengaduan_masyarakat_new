<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <?php include "koneksi.php"; ?>
        <?php if (isset($_GET["pesan"])): ?>
            <?php echo $_GET['pesan'] ?>
        <?php endif ?>
        <form action="proses-login.php" method="POST" enctype="multipart/form-data">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
            </div>

            <button type="submit" class="btn btn-light">kirim</button>

            <div class="register-link">
                <p>Tidak punya akun? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>