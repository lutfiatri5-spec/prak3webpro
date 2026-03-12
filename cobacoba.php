<?php
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username != "" && $password != ""){
        $_SESSION['username'] = $username;
        header("Location: homepage.php");
        exit;
    } else {
        $error = "Username dan password tidak boleh kosong!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <?php 
    if(isset($error)){
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <form method="POST" action="">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>
        </div>

        <button type="submit" name="login">Login</button>
    </form>

    <p class="register-text">Belum punya akun? <a href="#">Daftar</a></p>
</div>

</body>
</html>