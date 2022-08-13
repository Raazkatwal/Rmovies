<?php
    if (isset($_POST['email'])) {
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);
        
        $email = $_POST['email'];
        $pass = $_POST['pwd'];
        $sql = "INSERT INTO `streaming_site`.`userinfo` (`email`, `password`) VALUES ('$email', '$pass');";
        if ($email!=null && $pass!=null) {
            $con->query($sql);
        }
        $con->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link  rel = "icon" href="https://cineb.net/images/group_3/theme_3/logo.png?v=0.1">
        <script src="https://kit.fontawesome.com/a3c06e4acc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="movie.css">
</head>
<body>
    <nav>
        <div class="nav-container">
                <a href="index">
                    <img src="https://cineb.net/images/group_3/theme_3/logo.png?v=0.1" class="icon" title="Cineb">
                </a>
        <div class="search-section">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" class="search" placeholder="Enter keywords...">
        </div>
            <button class="login-btn"><i class="fa-solid fa-user"></i>Login</button>
        </div>
    </nav>
    <dialog class="modal">
        <div class="login-section">
            <form action="" class="login-form">
                <h1 class="form-title">Welcome back!</h1>
                <label for="email" class="form-label">Enter your E-mail</label>
                <input type="email" name="email" autocomplete="off" class="form-input" required>
                <label for="pwd" class="form-label">Enter your password</label>
                <input type="password" name="pwd" class="form-input" required>
                <input type="submit" value="Login" class="form-login-btn">
            </form>
            <button class="form-close-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </dialog>
    <div class="container">
        <div class="warning">
            <h1>If you get any error message when trying to stream, please Refresh the page or switch to another streaming server.</h1>
        </div>
        <iframe src="https://slwatch.co/e/WvBgrD8Z8yNlMZ64" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="800" height="600" allowfullscreen></iframe>    </div>
    <div class="footer">
        <div class="footer-contents">
            <a href="index"  title="cineb" class="footer-link">
                <img src="https://cineb.net/images/group_3/theme_3/logo.png?v=0.1" class="icon">
            </a>
            <p class="footer-des">Cineb is a Free Movies streaming site with zero ads. We let you watch movies online without having to register or paying, with over 100 movies and TV-Series. You can also Download full movies from Cineb.net and watch it later if you want.</p>
            <div class="credits">© Developed by Raaz katwal</div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>