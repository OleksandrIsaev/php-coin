<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Coin</title>
</head>

<body>
    <audio controls class="audio">
        <source autoplay="autoplay" src="mp3/lineage.mp3" type="audio/ogg; codecs=vorbis">
        <source autoplay="autoplay" src="mp3/lineage.mp3" type="audio/mpeg">
        <a href="../mp3/lineage.mp3">Скачайте музыку</a>.
    </audio>
    <div class="wrapper">
        <div class="column">
            <form action="coin.php" method="POST">
                <h1>Chose Level</h1>
                <div class="first">
                    <label><input href="#" type="radio" value="easy" name="level" id="1">Easy</label>
                    <label><input href="#" type="radio" value="medium" name="level" id="2">Medium</label>
                    <label><input href="#" type="radio" value="hard" name="level" id="3">Hard</label>
                </div>
                <h1>Your Choice</h1>
                <div class="second">
                    <label><input href="#" type="radio" name="choice" value="0" checked>Orel</label>
                    <label><input href="#" type="radio" name="choice" value="1">Reshka</label>
                </div>
                    <label><input class="bottom" href="#" type="submit" value="START"></label>
            </form>
            <?php
                if($_POST){
                    $level = $_POST ["level"];
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
                    }else if($lvl == "hard"){
                        if($choice != $coin){
                            echo("<h1 class='header'>Lose!</h1>");
                        }
                        else{
                            $coin = rand(0,1);
                            if($choice != $coin){
                                echo("<h1 class='header'>Total lose!</h1>");
                            }else{
                                echo("<h1 class='header'>Grat Victory!</h1>");
                            }
                        }
                    }
                }
            ?>
        </div>
    </div>
</body>

</html>