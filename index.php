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
    $query = "SELECT * FROM `movieinfo`";
    $result = mysqli_query($con, $query);
    $res = mysqli_query($con, $query)
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
            <form action="index" class="login-form" method = "post">
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
        <div class="description">
            <p>Ever wanted to watch free movies online? Then look no further. Watch movies of various categories only here. Stream HD quality movies on your TV, laptop or mobile. Here you can watch the movies of your choice without any registration or signups - most hassle-free option. Stop visiting terrible sites that promise movies in HD and 4K quality and serve you crap, and waste your time and energy. You can easily search the movies of your choice here- from blockbusters to rare critically- acclaimed gems, we have them all. We promise regular uploads. So, your favorite movie is just a click away! Think no more, start streaming</p>
        </div>





        <div class="movies-shows-container">
            <div class="movies-shows-tiles">
                <div class="section-title">
                    <h3 class="title-name">
                        Trending
                    </h3>
                    <button class="trending-btns btn-active" title="Trending Movies">Movies</button>
                    <button class="trending-btns" title="Trending TV Shows">TV Shows</button>
                </div>
                <div class="trending-movies content-section">
                    <?php
                        while ($row=mysqli_fetch_array($result)) {
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





                <div class="trending-tv-shows content-section">
                    <div class="tile">
                        <a href="series?ID=1" class = "poster-link" title="Stranger Things">
                            <img src="img/stranger-things.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Stranger Things">
                            <a href="series?ID=1" class="show-title-link">
                                Stranger Things
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S4</div>
                            <div class="dot"></div>
                            <div class="episodes">EP9</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="series?ID=2" class = "poster-link" title="The Boys">
                            <img src="img/The-boys.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Boys">
                            <a href="series?ID=2" class="show-title-link">
                                The Boys
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S3</div>
                            <div class="dot"></div>
                            <div class="episodes">EP8</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Better Call Saul">
                            <img src="img/better-call-saul.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Better Call Saul">
                            <a href="#" class="show-title-link">
                                Better Call Saul
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S6</div>
                            <div class="dot"></div>
                            <div class="episodes">EP8</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Westworld">
                            <img src="img/west-world.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Westworld">
                            <a href="#" class="show-title-link">
                                Westworld
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S4</div>
                            <div class="dot"></div>
                            <div class="episodes">EP2</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Black Bird">
                            <img src="img/black-bird.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Black Bird">
                            <a href="#" class="show-title-link">
                                Black Bird
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP2</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="The Longest Night">
                            <img src="img/the-longest-night.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Longest Night">
                            <a href="#" class="show-title-link">
                                The Longest Night
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP6</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Boo, Bitch">
                            <img src="img/boo-bitch.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Boo, Bitch">
                            <a href="#" class="show-title-link">
                                Boo, Bitch
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP8</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="The Terminal List">
                            <img src="img/the-terminal-list.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Terminal List">
                            <a href="#" class="show-title-link">
                                The Terminal List
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s1</div>
                            <div class="dot"></div>
                            <div class="episodes">ep8</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Ms.Marvel">
                            <img src="img/ms.marvel.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Ms.Marvel">
                            <a href="#" class="show-title-link">
                                Ms.Marvel
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP5</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Only Murders in the Building">
                            <img src="img/only-murders.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Only Murders in the Building">
                            <a href="#" class="show-title-link">
                                Only Murders in the Building
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s2</div>
                            <div class="dot"></div>
                            <div class="episodes">ep4</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Dr. Stone">
                            <img src="img/dr-stone.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Dr. Stone">
                            <a href="#" class="show-title-link">
                                Dr. Stone
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S2</div>
                            <div class="dot"></div>
                            <div class="episodes">EP11</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Overlord">
                            <img src="img/overlord.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Overlord">
                            <a href="#" class="show-title-link">
                                Overlord
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s3</div>
                            <div class="dot"></div>
                            <div class="episodes">ep13</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="One Piece">
                            <img src="img/one-piece.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="One Piece">
                            <a href="#" class="show-title-link">
                                One Piece
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s21</div>
                            <div class="dot"></div>
                            <div class="episodes">ep1021</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Star Trek: Strange New Worlds">
                            <img src="img/star-trek.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Star Trek: Strange New Worlds">
                            <a href="#" class="show-title-link">
                                Star Trek: Strange New Worlds
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s1</div>
                            <div class="dot"></div>
                            <div class="episodes">ep10</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Game of Thrones">
                            <img src="img/game-of-thrones.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Game of Thrones">
                            <a href="#" class="show-title-link">
                                Game of Thrones
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S8</div>
                            <div class="dot"></div>
                            <div class="episodes">EP6</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="SPY x FAMILY">
                            <img src="img/spy-family.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="SPY x FAMILY">
                            <a href="#" class="show-title-link">
                                SPY x FAMILY
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s1</div>
                            <div class="dot"></div>
                            <div class="episodes">ep12</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Obi-Wan kenobi">
                            <img src="img/obi-wan.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Obi-Wan kenobi">
                            <a href="#" class="show-title-link">
                                Obi-Wan kenobi
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s1</div>
                            <div class="dot"></div>
                            <div class="episodes">ep6</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Moonhaven">
                            <img src="img/moonhaven.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Moonhaven">
                            <a href="#" class="show-title-link">
                                Moonhaven
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP2</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Riverdale">
                            <img src="img/riverdale.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Riverdale">
                            <a href="#" class="show-title-link">
                                Riverdale
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S6</div>
                            <div class="dot"></div>
                            <div class="episodes">EP19</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="The Anarchists">
                            <img src="img/the-anarchists.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Anarchists">
                            <a href="#" class="show-title-link">
                                The Anarchists
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s1</div>
                            <div class="dot"></div>
                            <div class="episodes">ep1</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Money Heist">
                            <img src="img/money-heist.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Money Heist">
                            <a href="#" class="show-title-link">
                                Money Heist
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s5</div>
                            <div class="dot"></div>
                            <div class="episodes">ep10</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Money Heist: korea - Joint Economic Area">
                            <img src="img/money-heist-korea.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Money Heist: korea - Joint Economic Area">
                            <a href="#" class="show-title-link">
                                Money Heist: korea - Joint Economic Area
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s1</div>
                            <div class="dot"></div>
                            <div class="episodes">ep6</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Sword Art Online">
                            <img src="img/sword-art-online.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Sword Art Online">
                            <a href="#" class="show-title-link">
                                Sword Art Online
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s4</div>
                            <div class="dot"></div>
                            <div class="episodes">ep23</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Moon Knight">
                            <img src="img/moon-knight.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Moon Knight">
                            <a href="#" class="show-title-link">
                                Moon Knight
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">s1</div>
                            <div class="dot"></div>
                            <div class="episodes">ep6</div>
                        </div>
                    </div>
                </div>





                <div class="section-title">
                    <h3 class="title-name">
                        Latest Movies
                    </h3>
                </div>
                <div class="content-section">
                        <?php
                        while ($r=mysqli_fetch_array($res)) {
                            if ($r['S.N']>24) {
                                echo "
                                <div class='tile'>
                                    <a href='movie?ID={$r['S.N']}' class = 'poster-link' title='{$r['title']}'>
                                        <img src='img/{$r['img']}' class = 'poster_img'>
                                        <i class='fa-solid fa-circle-play'></i>
                                    </a>
                                    <div class='show-title' title='{$r['title']}'>
                                        <a href='movie?ID={$r['S.N']}' class='show-title-link'>
                                            {$r['title']}
                                        </a>
                                    </div>
                                    <div class='show-info'>
                                        <div class='show-quality'>{$r['quality']}</div>
                                        <div class='release-date'>{$r['release_year']}</div>
                                        <div class='dot'></div>
                                        <div class='duration'>{$r['Duration']}</div>
                                    </div>
                                </div>";
                            }
                        }
                    ?>
                </div>





                <div class="section-title">
                    <h3 class="title-name">
                        Latest TV Shows
                    </h3>
                </div>
                <div class="content-section">
                    <div class="tile">
                        <a href="#" class = "poster-link" title="The Old Man">
                            <img src="img/The-old-man.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Old Man">
                            <a href="#" class="show-title-link">
                                The Old Man
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP5</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="The Chi">
                            <img src="img/the-chi.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Chi">
                            <a href="#" class="show-title-link">
                                The Chi
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S5</div>
                            <div class="dot"></div>
                            <div class="episodes">EP3</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Good Trouble">
                            <img src="img/Good-trouble.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Good Trouble">
                            <a href="#" class="show-title-link">
                                Good Trouble
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S4</div>
                            <div class="dot"></div>
                            <div class="episodes">EP10</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Flatbush Misdemeanors">
                            <img src="img/flatbush.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Flatbush Misdemeanors">
                            <a href="#" class="show-title-link">
                                Flatbush Misdemeanors
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S2</div>
                            <div class="dot"></div>
                            <div class="episodes">EP4</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Buckhead Shore">
                            <img src="img/buckhead.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Buckhead Shore">
                            <a href="#" class="show-title-link">
                                Buckhead Shore
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP4</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Miss Scarlet and the Duke">
                            <img src="img/miss-scarlet.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Miss Scarlet and the Duke">
                            <a href="#" class="show-title-link">
                                Miss Scarlet and the Duke
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S2</div>
                            <div class="dot"></div>
                            <div class="episodes">EP4</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="The Challenge: USA">
                            <img src="img/the-challenge.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Challenge: USA">
                            <a href="#" class="show-title-link">
                                The Challenge: USA
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP1</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Physical">
                            <img src="img/Physical.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Physical">
                            <a href="#" class="show-title-link">
                                Physical
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S2</div>
                            <div class="dot"></div>
                            <div class="episodes">EP6</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Married at First Sight">
                            <img src="img/Married-at-first-site.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Married at First Sight">
                            <a href="#" class="show-title-link">
                                Married at First Sight
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S15</div>
                            <div class="dot"></div>
                            <div class="episodes">EP1</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Loot">
                            <img src="img/loot.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Loot">
                            <a href="#" class="show-title-link">
                                Loot
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP5</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Hollywood Houselift with Jeff Lewis">
                            <img src="img/hollywood-house-lift.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Hollywood Houselift with Jeff Lewis">
                            <a href="#" class="show-title-link">
                                Hollywood Houselift with Jeff Lewis
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP7</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="For All Mankind">
                            <img src="img/for-all-mankind.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="For All Mankind">
                            <a href="#" class="show-title-link">
                                For All Mankind
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S3</div>
                            <div class="dot"></div>
                            <div class="episodes">EP5</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Forged in Fire">
                            <img src="img/forged-in-fire.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Forged in Fire">
                            <a href="#" class="show-title-link">
                                Forged in Fire
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S9</div>
                            <div class="dot"></div>
                            <div class="episodes">EP13</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="series?ID=2" class = "poster-link" title="The Boys">
                            <img src="img/The-boys.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Boys">
                            <a href="series?ID=2" class="show-title-link">
                                The Boys
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S3</div>
                            <div class="dot"></div>
                            <div class="episodes">EP8</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Ms.Marvel">
                            <img src="img/ms.marvel.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Ms.Marvel">
                            <a href="#" class="show-title-link">
                                Ms.Marvel
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP5</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Westworld">
                            <img src="img/west-world.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Westworld">
                            <a href="#" class="show-title-link">
                                Westworld
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S4</div>
                            <div class="dot"></div>
                            <div class="episodes">EP2</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="series?ID=1" class = "poster-link" title="Stranger Things">
                            <img src="img/stranger-things.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Stranger Things">
                            <a href="series?ID=1" class="show-title-link">
                                Stranger Things
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S4</div>
                            <div class="dot"></div>
                            <div class="episodes">EP9</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Side Hustle">
                            <img src="img/side-hustle.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Side Hustle">
                            <a href="#" class="show-title-link">
                                Side Hustle
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S2</div>
                            <div class="dot"></div>
                            <div class="episodes">EP20</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Impractical Jokers">
                            <img src="img/impractical-jokers.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Impractical Jokers">
                            <a href="#" class="show-title-link">
                                Impractical Jokers
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S9</div>
                            <div class="dot"></div>
                            <div class="episodes">EP23</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="All Rise">
                            <img src="img/all-rise.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="All Rise">
                            <a href="#" class="show-title-link">
                                All Rise
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S3</div>
                            <div class="dot"></div>
                            <div class="episodes">EP5</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="The Real Housewives Ultimate Girls Trip">
                            <img src="img/the-real-house-wives.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Real Housewives Ultimate Girls Trip">
                            <a href="#" class="show-title-link">
                                The Real Housewives Ultimate Girls Trip
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S2</div>
                            <div class="dot"></div>
                            <div class="episodes">EP4</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="The Real Housewives of Beverly Hills">
                            <img src="img/real-house-wives-bearly-hills.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="The Real Housewives of Beverly Hills">
                            <a href="#" class="show-title-link">
                                The Real Housewives of Beverly Hills
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S12</div>
                            <div class="dot"></div>
                            <div class="episodes">EP9</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Ghost Adventures: House Calls">
                            <img src="img/ghost-adventures.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Ghost Adventures: House Calls">
                            <a href="#" class="show-title-link">
                                Ghost Adventures: House Calls
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S1</div>
                            <div class="dot"></div>
                            <div class="episodes">EP8</div>
                        </div>
                    </div>
                    <div class="tile">
                        <a href="#" class = "poster-link" title="Fright Club">
                            <img src="img/fright-club.jpg" class = "poster_img">
                            <i class="fa-solid fa-circle-play"></i>
                        </a>
                        <div class="show-title" title="Fright Club">
                            <a href="#" class="show-title-link">
                                Fright Club
                            </a>
                        </div>
                        <div class="show-info">
                            <div class="show-quality">hd</div>
                            <div class="season">S2</div>
                            <div class="dot"></div>
                            <div class="episodes">EP2</div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="top-imdb-tiles">
                <div class="section-title">
                    <h3 class="title-name">Top IMDB Rating</h3>
                </div>
                <div class="imdb-content-section">
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Bluey">
                            <img src="img/bluey.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Bluey">
                                    Bluey
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S3</div>
                                <div class="dot"></div>
                                <div class="episodes">EP37</div>
                            </div>
                            <h3 class="rating">IMDB: 9.7</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="The Last Drive-in With Jor Bob Briggs">
                            <img src="img/drive-in.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="The Last Drive-in With Jor Bob Briggs">
                                    The Last Drive-in With Jor Bob Briggs
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S3</div>
                                <div class="dot"></div>
                                <div class="episodes">EP4</div>
                            </div>
                            <h3 class="rating">IMDB: 9.6</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Planet Earth II">
                            <img src="img/planet-earth-2.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Planet Earth II">
                                    Planet Earth II
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S1</div>
                                <div class="dot"></div>
                                <div class="episodes">EP6</div>
                            </div>
                            <h3 class="rating">IMDB: 9.5</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Breaking Bad">
                            <img src="img/breaking-bad.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Breaking Bad">
                                    Breaking Bad
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S5</div>
                                <div class="dot"></div>
                                <div class="episodes">EP16</div>
                            </div>
                            <h3 class="rating">IMDB: 9.5</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Planet Earth">
                            <img src="img/planet-earth-1.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Planet Earth">
                                    Planet Earth
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S1</div>
                                <div class="dot"></div>
                                <div class="episodes">EP11</div>
                            </div>
                            <h3 class="rating">IMDB: 9.4</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="The Chosen">
                            <img src="img/the-chosen.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="The Chosen">
                                    The Chosen
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S2</div>
                                <div class="dot"></div>
                                <div class="episodes">EP8</div>
                            </div>
                            <h3 class="rating">IMDB: 9.4</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Rock Solid Builds">
                            <img src="img/rock-solid-builds.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Rock Solid Builds">
                                    Rock Solid Builds
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S2</div>
                                <div class="dot"></div>
                                <div class="episodes">EP10</div>
                            </div>
                            <h3 class="rating">IMDB: 9.4</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Band of Brothers">
                            <img src="img/band-of-brothers.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Band of Brothers">
                                    Band of Brothers
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S1</div>
                                <div class="dot"></div>
                                <div class="episodes">EP10</div>
                            </div>
                            <h3 class="rating">IMDB: 9.4</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Chernobyl">
                        <img src="img/chernobyl.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Chernobyl">
                                Chernobyl
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S1</div>
                                <div class="dot"></div>
                                <div class="episodes">EP5</div>
                            </div>
                            <h3 class="rating">IMDB: 9.4</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Blue Planet II">
                            <img src="img/blue-planet-2.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Blue Planet II">
                                    Blue Planet II
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S1</div>
                                <div class="dot"></div>
                                <div class="episodes">EP7</div>
                            </div>
                            <h3 class="rating">IMDB: 9.3</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="9/11: One Day in America">
                            <img src="img/9-11.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="9/11: One Day in America">
                                    9/11: One Day in America
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S1</div>
                                <div class="dot"></div>
                                <div class="episodes">EP6</div>
                            </div>
                            <h3 class="rating">IMDB: 9.3</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Seven Worlds, One Planet">
                            <img src="img/seven-worlds-one-planet.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Seven Worlds, One Planet">
                                    Seven Worlds, One Planet
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S1</div>
                                <div class="dot"></div>
                                <div class="episodes">EP7</div>
                            </div>
                            <h3 class="rating">IMDB: 9.3</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Cosmos">
                            <img src="img/cosmos.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Cosmos">
                                    Cosmos
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S1</div>
                                <div class="dot"></div>
                                <div class="episodes">EP13</div>
                            </div>
                            <h3 class="rating">IMDB: 9.3</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="The Wire">
                            <img src="img/the-wire.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="The Wire">
                                    The Wire
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S5</div>
                                <div class="dot"></div>
                                <div class="episodes">EP10</div>
                            </div>
                            <h3 class="rating">IMDB: 9.3</h3>
                        </div>
                    </div>
                    <div class="imdb-tile">
                        <a href="#" class="imdb-poster-link" title="Scan 1992 - The Harshad Mehta Story">
                            <img src="img/scam-1992.jpg" alt="" class="imdb-img">
                        </a>
                        <div class="show-detail">
                            <div class="imdb-show-title">
                                <a href="#" class="imdb-show-title-link" title="Scan 1992 - The Harshad Mehta Story">
                                    Scan 1992 - The Harshad Mehta Story
                                </a>
                            </div>
                            <div class="imdb-show-info">
                                <div class="show-quality">hd</div>
                                <div class="season">S1</div>
                                <div class="dot"></div>
                                <div class="episodes">EP10</div>
                            </div>
                            <h3 class="rating">IMDB: 9.3</h3>
                        </div>
                    </div>
                </div>
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
    <script src="index.js"></script>
</body>
</html>