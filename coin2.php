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
        <div class="column">
            <h1>Your Choice (you got 10 shots)</h1>
            <?php
                $globallvl = $_POST["globallvl"];
                $count = $_POST["count"];
                $victory = $_POST["victory"];
                $lose = $_POST["lose"];
                $level = $_POST["level"];
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
                            echo("<h2 class='header'>Victory!</h2>");
                            $victory += 1;
                        }
                        else{
                            $coin = rand(0,1);
                            if($choice == $coin){
                                echo("<h2 class='header'>Hard Victory!</h2>");
                                $victory += 1;
                            }else{
                                echo("<h2 class='header'>Lose!</h2>");
                                $lose +=1;
                            }
                        }
                    }else if($level == "medium"){
                        if($choice == $coin){
                            echo("<h2 class='header'>Victory!</h2>");
                            $victory += 1;
                        }else{
                            echo("<h2 class='header'>Lose!</h2>");
                            $lose +=1;
                        }
                    }else if($level == "hard"){
                        if($choice != $coin){
                            echo("<h2 class='header'>Lose!</h2>");
                            $lose +=1;
                        }
                        else{
                            $coin = rand(0,1);
                            if($choice != $coin){
                                echo("<h2 class='header'>Total lose!</h2>");
                                $lose +=1;
                            }else{
                                echo("<h2 class='header'>Great Victory!</h2>");
                                $victory += 1;
                            }
                        }
                    }
                    $count += 1;
                }else{
                    echo("<h2>&nbsp;</h2>");
                }
            ?>
            <div class="kliker">
                <form action="<?php 
                    if ($count < 10){
                        echo ("coin2.php");
                    }
                    else{
                        echo("coin3.php");
                    }
                    ?>" method="POST">
                    <div class="first1">
                    <p>
                        <label name="count"><input class="traing" readonly type="text" placeholder="0" name="count" value="<?php echo($count);?>"></label>
                    </p>
                        <label><input class="count" type="hidden" name="level" value="<?php echo($level);?>"></label>
                        <label><input class="count" type="hidden" name="victory" value="<?php echo($victory);?>"></label>
                        <label><input class="count" type="hidden" name="lose" value="<?php echo($lose);?>"></label>
                        <label><input class="count" type="hidden" name="globallvl" value="<?php echo($globallvl);?>"></label>
                        <p>
                            <input class="ikonka1" type="submit" name="choice" value="Orel">
                            <label name="choice"></label>
                        </p>
                        <p>
                            <input class="ikonka2" type="submit" name="choice" value="Reshka">
                            <label name="choice"></label>
                        </p>
                    </div>
                </form>
                <form action="<?php
                    if ($count < 10){
                        echo ("coin2.php");
                    }
                    else{
                        echo("coin3.php");
                    }
                ?>" method="POST">
                    <div class="second1">
                        <label><input type="hidden" name="count" value="<?php echo($count);?>"></label>
                        <label><input class="count" type="hidden" name="level" value="<?php echo($level);?>"></label>
                        <label><input class="count" type="hidden" name="victory" value="<?php echo($victory);?>"></label>
                        <label><input class="count" type="hidden" name="lose" value="<?php echo($lose);?>"></label>
                        <label><input class="count" type="hidden" name="globallvl" value="<?php echo($globallvl);?>"></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>