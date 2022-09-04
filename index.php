<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "streaming_site";

        $con = mysqli_connect($server, $username, $password, $dbname);
    $query = "SELECT * FROM `movieinfo`";
    $result1 = mysqli_query($con, $query);
    $result2 = mysqli_query($con, $query);
    $result3 = mysqli_query($con, $query);
    $result4 = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rmovies - Watch Full HD Movies Online and Stream Free Movies Online Now</title>
    <link  rel = "icon" href="https://cineb.net/images/group_3/theme_3/logo.png?v=0.1">
    <script src="https://kit.fontawesome.com/a3c06e4acc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php require 'nav.php'?>
    <div class="container">
        <div class="description">
            <p>Ever wanted to watch free movies online? Then look no further. Watch movies of various categories only here. Stream HD quality movies on your TV, laptop or mobile. Here you can watch the movies of your choice without any registration or signups - most hassle-free option. Stop visiting terrible sites that promise movies in HD and 4K quality and serve you crap, and waste your time and energy. You can easily search the movies of your choice here- from blockbusters to rare critically- acclaimed gems, we have them all. We promise regular uploads. So, your favorite movie is just a click away! Think no more, start streaming</p>
        </div>

        
        <div class="movies-shows-container">
            <div class="movies-shows-tiles" id="trending">
                <div class="section-title">
                    <h3 class="title-name">
                        Trending Movies
                    </h3>
                </div>
                <div class="trending-movies content-section">
                    <?php
                        while ($row=mysqli_fetch_array($result1)) {
                            if ($row['S.N']<=24) {
                                echo "
                                <div class='tile'>
                                    <a href='movie?ID={$row['S.N']}' class = 'poster-link' title='{$row['title']}'>
                                        <img src='img/{$row['img']}' class = 'poster_img'>
                                        <i class='fa-solid fa-circle-play'></i>
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
                        }
                    ?>
                </div>


                <div class="section-title" id="latest">
                    <h3 class="title-name">
                        Latest Movies
                    </h3>
                </div>
                <div class="content-section">
                        <?php
                        while ($row=mysqli_fetch_array($result2)) {
                            if ($row['S.N']>=25 && $row['S.N']<=42) {
                                echo "
                                <div class='tile'>
                                    <a href='movie?ID={$row['S.N']}' class = 'poster-link' title='{$row['title']}'>
                                        <img src='img/{$row['img']}' class = 'poster_img'>
                                        <i class='fa-solid fa-circle-play'></i>
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
                        }
                    ?>
                </div>


                <div class="section-title" id="top-rated">
                    <h3 class="title-name">
                        Top imdb Movies
                    </h3>
                </div>
                <div class="content-section">
                <?php
                        while ($row=mysqli_fetch_array($result3)) {
                            if ($row['S.N']>=43) {
                                echo "
                                <div class='tile'>
                                    <a href='movie?ID={$row['S.N']}' class = 'poster-link' title='{$row['title']}'>
                                        <img src='img/{$row['img']}' class = 'poster_img'>
                                        <i class='fa-solid fa-circle-play'></i>
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
                        }
                    ?>
                </div>
            </div>


            <div class="top-imdb-tiles">
                <div class="section-title">
                    <h3 class="title-name">Top IMDB Rating</h3>
                </div>
                <div class="imdb-content-section">
                <?php
                        while ($row=mysqli_fetch_array($result4)) {
                            if ($row['S.N']>=43 && $row['S.N']<=54) {
                                echo "
                                <div class='imdb-tile'>
                                    <a href='movie?ID={$row['S.N']}' class = 'imdb-poster-link' title='{$row['title']}'>
                                        <img src='img/{$row['img']}' class = 'imdb-img'>
                                    </a>
                                    <div class='show-detail'>
                                    <div class='imdb-show-title' title='{$row['title']}'>
                                        <a href='movie?ID={$row['S.N']}' class='imdb-show-title-link'>
                                            {$row['title']}
                                        </a>
                                    </div>
                                    <div class='imdb-show-info'>
                                        <div class='show-quality'>{$row['quality']}</div>
                                        <div class='release'>{$row['release_year']}</div>
                                        <div class='dot'></div>
                                        <div class='duration'>{$row['Duration']}</div>
                                    </div>
                                    <h3 class='rating'>IMDB: {$row['imdb']}</h3>
                                    </div>
                                </div>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <?php require 'footer.php'?>
</body>
</html>