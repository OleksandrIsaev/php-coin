<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Coin</title>
</head>

<body>
    <div class="wrapper">
        <div class="column1">
        <?php
            $globallvl = $_POST["globallvl"];
            $victory = $_POST["victory"];
            $level = $_POST["level"];
            if ($victory > 5){
                echo ("<h3 class='header'>Victory!</h3>");
                if($level == "easy"){
                    echo("<h3>You open level \"Medium\"!</h3>");
                    $globallvl = 1;
                }else if ($level == "medium"){
                    echo("<h3>You open level \"Hard\"!</h3>");
                    $globallvl = 2;
                }
            }echo ("<h4> Your level: $level <br>You've won: $victory times.</h4>");
            ?>
            <div class="finish">
                <form action="coin.php" method="POST">
                    <label><input type="hidden" name="globallvl" value="<?php echo($globallvl); ?>"></label>
                    <p class="back">
                        <input type="submit" value="<?php
                        if($victory > 5){
                            echo("Next level");
                        }else{
                            echo("Try once more");
                        }
                        ?>">
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>