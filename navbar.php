<nav class="navbar">
    <a href="#" class="navbar-logo">Imah<span>Ngopi</span></a>

    <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Daftar Menu</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Kontak</a>
        <a href="#info">Sekilas Info</a>
    </div>

    <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <div class="navbar-login">
        <a href="login.php" class="login-button">Login</a>
    </div>
</nav>

<style>
    .navbar-login {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .login-button {
        display: inline-block;
        padding: 6px 12px;
        /* Smaller padding */
        background-color: #7D0A0A;
        color: white;
        border-radius: 4px;
        /* Slightly smaller border-radius */
        text-decoration: none;
        font-size: 12px;
        /* Smaller font size */
        transition: background-color 0.3s ease;
    }

    .login-button:hover {
        background-color: black;
    }
</style>