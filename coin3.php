<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Coin</title>
</head>
<body>
    <div class="wrapper">
        <div class="column">
        <?php
                $level = $_POST ["level"];
                if (isset ($_POST["choice"])){
                    $choice = $_POST["choice"];
                    $coin = rand(0,1);
                    if ($level == "easy"){
                        if($choice == $coin){
                                echo("<h1 class=header>Victory!</h1>");
                        }
                        else{
                        rand(0,1);
                            if($choice == $coin){
                                echo("<h1 class='header'>Hard Victory!</h1>");
                            }else{
                                echo("<h1 class='header'>Lose!</h1>");
                            }
                        }
                    }else if($level == "medium"){
                        if($choice == $coin){
                            echo("<h1 class='header'>Victory!</h1>");
                        }else{
                            echo("<h1 class='header'>Lose!</h1>");
                        }
                    }else if($level == "hard"){
                        if($choice != $coin){
                            echo("<h1 class=header>Lose!</h1>");
                        }
                        else{
                            $coin = rand(0,1);
                            if($choice != $coin){
                                echo("<h1 class='header'>Total lose!</h1>");
                            }else{
                                echo("<h1 class='header'>Great Victory!</h1>");
                            }
                        }
                    }
                }
            ?>
        <form action="coin.php" method="POST">
            <label><input class="bottom" type="submit" value="back"></label>
        </form>
            <p class="bottom">
                <?php echo($level);?>?>
            </p>
    </div>
</body>