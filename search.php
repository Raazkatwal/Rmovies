<?php
require("db.php");
if (!isset($_POST['search'])) {
    header('location:index');
}
if (isset($_POST['search'])) {
    $search_item = $_POST['search'];
    $query = mysqli_query($con, "SELECT * FROM `movieinfo` WHERE `title` LIKE '%$search_item%'");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search results for "<?php echo $search_item ?>" | Rmovies</title>
        <link  rel = "icon" href="img/logo.png">
        <script src="https://kit.fontawesome.com/a3c06e4acc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php require 'nav.php'?>
    <div class="container">
        <div class="movies-shows-container">
            <div class="movies-shows-tiles" id="trending">
                <div class="section-title">
                        <h3 class="title-name">
                            Search results for "<?php echo $search_item ?>"
                        </h3>
                </div>
                <div class="content-section">
                    <?php
                        while ($row=mysqli_fetch_array($query)) {
                            echo "
                            <div class='tile'>
                            <a href='movie?ID={$row['S.N']}' class = 'poster-link' title='{$row['title']}'>
                            <img src='img/{$row['img']}' class = 'poster_img'>
                            <img src='img/logo.png' class = 'fa-circle-play'>
                            </a>
                            <div class='show-title' title='{$row['title']}'>
                            <a href='movie?ID={$row['S.N']}' class='show-title-link'>
                            {$row['title']}
                            </a>
                            </div>
                            <div class='show-info'>
                            <div class='show-quality'>{$row['quality']}</div>
                            <div class='release-date'>{$row['release_year']}</div>
                            <div class='dot'></div>
                            <div class='duration'>{$row['Duration']}</div>
                            </div>
                            </div>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php require 'footer.php'?>
</body>
</html>