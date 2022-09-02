<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "streaming_site";
        $con = mysqli_connect($server, $username, $password, $dbname);
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $pass = $_POST['pwd'];
        $sql = "INSERT INTO `userinfo` (`email`, `password`) VALUES ('$email', '$pass');";
        if ($email!=null && $pass!=null) {
            $con->query($sql);
        }
    }
    if (isset($_GET['ID'])) {
        $ID = mysqli_real_escape_string($con, $_GET['ID']);
        $query = "SELECT * FROM `movieinfo` WHERE `S.N`='$ID' ";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
    } else {
        header('location: index');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Watch <?php echo $row['title'] ?> <?php echo $row['quality'] ?> for free</title>
        <link  rel = "icon" href="https://cineb.net/images/group_3/theme_3/logo.png?v=0.1">
        <script src="https://kit.fontawesome.com/a3c06e4acc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="movie.css">
</head>
<body>
    <nav>
        <div class="nav-container">
                <a href="index">
                    <img src="https://cineb.net/images/group_3/theme_3/logo.png?v=0.1" class="icon" title="Rmovies">
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
            <form action="" class="login-form" method = "post">
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
            <h1>If you get any error message when trying to stream, please Check your internet connection and Refresh the page.</h1>
        </div>
        <div class="player">
            <iframe src="<?php echo $row['link'] ?>" scrolling="yes" frameborder="0" allowfullscreen="true"></iframe>
        </div>
        <div class="info-section">
                <img src="img/<?php echo $row['img'] ?>" class = "movie-info-poster">
                <div class="movie-info">
                    <h1 class = "movie-title"><?php echo $row['title'] ?></h1>
                        <button><?php echo $row['quality'] ?></button>
                        <button class = "imdb-btn">IMDB <?php echo $row['imdb'] ?> </button>
                    <p>Released: <?php echo $row['Released'] ?> </p>
                    <p>Genre: <?php echo $row['Genre'] ?> </p>
                    <p>Casts: <?php echo $row['Casts'] ?> </p>
                    <p>Duration: <?php echo $row['Duration'] ?> </p>
                    <p>Country: <?php echo $row['Country'] ?> </p>
                    <p>Production: <?php echo $row['Production'] ?> </p>
                </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-contents">
            <a href="index"  title="Rmovies" class="footer-link">
                <img src="https://cineb.net/images/group_3/theme_3/logo.png?v=0.1" class="icon">
            </a>
            <p class="footer-des">Rmovies is a Free Movies streaming site with zero ads. We let you watch movies online without having to register or paying, with over 100 movies and TV-Series. You can also Download full movies from Rmovies.net and watch it later if you want.</p>
            <div class="credits">© Developed by Raaz katwal</div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>