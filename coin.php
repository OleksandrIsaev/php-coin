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
            <h1>Chose Level</h1>
            <?php
            if (isset($_POST["globallvl"])){
                $globallvl = $_POST["globallvl"];
            } else{
                $globallvl = 0;
            }
            ?>
            <a>
                <form action="coin2.php" method="POST">
                    <div class="first">
                        <label><input name="globallvl" type="hidden" value="<?php echo($globallvl); ?>" ></label>
                        <label><input type="hidden" value="easy" name="level"></label>
                        <label><input class="easy" type="submit" value="Easy" checked></label>
                    </div>
                </form>
            </a>
            <a>
                <form action="coin2.php" method="POST">
                    <div class="first">
                    <label><input name="globallvl" type="hidden" value="<?php echo($globallvl); ?>" ></label>
                    <label><input type="hidden" value="medium" name="level"></label>
                    <label><input class="medium" type="submit" value="Medium" <?php
                        if ($globallvl < 1){
                            echo("disabled");
                        }
                        ?>></label>
                    </div>
                </form>
            </a>
            <a>
                <form action="coin2.php" method="POST">
                    <div class="first">
                    <label><input name="globallvl" type="hidden" value="<?php echo($globallvl); ?>" ></label>
                    <label><input type="hidden" value="hard" name="level"></label>
                    <label><input class="hard" type="submit" value="Hard" <?php 
                        if ($globallvl < 2){
                            echo("disabled");
                        }
                        ?>></label>
                    </div>
                </form>
            </a>
            <label><input type="hidden" name="count" value="1"></label>
            <label><input type="hidden" name="victory" value="1"></label>
        </div>
    </div>
</body>

</html>