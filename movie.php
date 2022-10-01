<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "streaming_site";
        $con = mysqli_connect($server, $username, $password, $dbname);
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
        <link  rel = "icon" href="img/logo.png">
        <script src="https://kit.fontawesome.com/a3c06e4acc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="movie.css">
</head>
<body>
    <?php require 'nav.php'?>
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
    <?php require 'footer.php'?>
</body>
</html>