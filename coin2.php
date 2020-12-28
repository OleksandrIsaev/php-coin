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
            <h1>Your Choice (you got 10 shots)</h1>
            <?php
                $level = $_POST ["level"];
                if($level == "easy"){
                    echo("<img class='easy1''>");
                }
                if($level == "medium"){
                    echo("<img class='medium1''>");
                }
                if($level == "hard"){
                    echo("<img class='hard1''>");
                }
                if(isset ($_POST ["count"])){
                    $count = $_POST["count"];
                }else{
                    $count = 0;
                }
                if (isset ($_POST["choice"])){
                    $choice = $_POST["choice"];
                    $coin = rand(0,1);
                    if ($level == "easy"){
                        if($choice == $coin){
                                echo("<h1 class='header'>Victory!</h1>");
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
                            echo("<h1 class='header'>Lose!</h1>");
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
            <form action="<?php 
                if ($count != 10){
                    echo ("coin2.php");
                }
                else{
                    echo("coin3.php");
                }
            ?>" method="POST">
                <div class="second">
                    <a>
                        <label><input class="traing" readonly type="text" placeholder="0" name="count" value="<?php echo($count);?>"></label>
                    </a>
                    <label><input class="count" type="hidden" name="level" value="<?php echo($level);?>"></label>
                    <label><input class="count" type="hidden" name="level" value="<?php echo($level);?>"></label>
                    <label><input class="count" type="hidden" name="globallvl" value="<?php echo($globallvl);?>"></label>
                    <a>
                        <input class="ikonka1" type="submit" name="choice" value="Orel">
                        <label name="choice"></label>
                    </a>
                    <a>
                        <input class="ikonka2" type="submit" name="choice" value="Reshka">
                        <label name="choice"></label>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>