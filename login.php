<?php
session_start();
if (isset($_POST['btn_login'])) {
    // echo "<div class='center-text'>Processing login...</div><hr>";
    if (
        $_POST['username'] == 'admin' &&
        $_POST['password'] == 'rahasia'
    ) {
        // echo "<div class='center-text'>Login Berhasil</div><hr>";

        // set session
        $_SESSION['username'] = 'admin';
        echo "<script>location.replace('menu.php')</script>";
    } else {
        // echo "<div class='center-text'>Login Gagal</div><hr>";
    }
}





?>



<form action="" method="post">
    <h1>Silahkan Login Disini</h1>
    <input required minlength=3 maxlength=20 type="text" name="username" placeholder="username">
    <input required minlength=3 maxlength=20 type="password" name="password" placeholder="password">
    <button name=btn_login>Login</button>
</form>
<style>
    .center-text {
        text-align: center;
        margin-top: 20px;
        /* Atur jarak vertikal dari atas */
        font-weight: bold;
        /* Buat teks lebih tebal */
        color: #333;
        /* Sesuaikan warna teks */
    }

    form h1 {
        text-align: center;
    }

    body {
        background: linear-gradient(135deg, #7D0A0A, #A03D3D);
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        width: 350px;
        text-align: center;
    }

    form h1 {
        font-size: 28px;
        margin-bottom: 20px;
        color: #333;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 15px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        background-color: #f7f7f7;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        outline: none;
        background-color: #eaeaea;
    }

    button {
        width: 100%;
        padding: 15px;
        background-color: #7D0A0A;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 20px;
    }

    button:hover {
        background-color: black;
    }

    ::placeholder {
        color: #999;
        opacity: 1;
    }

    hr {
        margin: 20px 0;
        border: 0;
        border-top: 1px solid #eee;
    }
</style>