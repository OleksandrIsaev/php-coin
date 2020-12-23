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
            <h1>Your Choice</h1>
            <?php
                $level = $_POST ["level"];
                if (isset ($_POST["choice"])){
                    if(isset ($_POST ["count"])){
                        $count = $_POST["count"];
                    }else{
                        $count = 1;
                    }
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
                    $count += 1;
                }
            ?>
            <form action="coin2.php" method="POST">
                <div class="second">
                    <a>
                        <label><input readonly type="hiden" placeholder="Кількість спроб" name="count" value="<?php echo ($count);?>"></label>
                    </a>
                    <label><input class="count" type="hidden" name="level" value="<?php echo($level);?>"></label>
                    <a>
                        <input type="radio" name="choice" value="0">Orel
                        <label name="choice"></label>
                    </a>
                    <a>
                        <input type="radio" name="choice" value="1">Reshka
                        <label name="choice"></label>
                    </a>
                </div>
                <label><input class="bottom" type="submit" value="START"></label>
            </form>
        </div>
    </div>
</body>