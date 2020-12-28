<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Coin</title>
</head>
<body>
   <?php
    $globallvl = $_POST["globallvl"];
    $level = $_POST["level"];
    $countVictory = $_POST["countVic"];
    $countLose = $_POST["countLos"];
    if ($countVictory >= 5){
        $globallvl += 1;
        echo ("YOU ONE");
    } else{
        echo ("YOU LOSE");
    }
    echo ("Your level:" .$level. "<br>YOU ONE: " .$countVictory. "<br>YOU LOSE:" .$countLose);?>
        <div class="wrapper">
            <div class="column">
            <div class="finish">
            <p>Victory<label for=""><input type="hiden" name="globallvl" value="<?php echo($globallvl); ?>"></label></p>
            <p>Loose<label for=""><input type="text"></label></p>
            </div>
        </div>
    </form>
</body>