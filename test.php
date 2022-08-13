<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    
        $sql = "SELECT * FROM `streaming_site`.`userinfo`;";
        $result = mysqli_query($sql);
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
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                    echo "{$row['title']}<br>\n";
                }
            } else {
                echo "<h1>vayena vayena</h1>";
            }
            $con->close();
        ?>
    </div>
</body>
</html>