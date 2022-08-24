<?php
 $server = "localhost";
 $username = "root";
 $password = "";

 $con = mysqli_connect($server, $username, $password);
$sql = "SELECT * FROM `streaming_site`.`movieinfo`";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href = 'movie.php?ID={$row['S.N']}'>{$row['Movie_name']}</a><br><br>";
            }
        
        $con->close();
        ?>
    </div>
</body>
</html>