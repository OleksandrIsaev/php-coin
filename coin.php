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
            <h1>Chose Level</h1>
            <a>
                <form action="coin2.php" method="POST">
                    <div class="first">
                        <input type="hidden" value="easy" name="level">
                        <input class="easy" type="submit" value="Easy">
                    </div>
                </form>
            </a>
            <a>
                <form action="coin2.php" method="POST">
                    <div class="first">
                        <input type="hidden" value="medium" name="level">
                        <input class="medium" type="submit" value="Medium">
                    </div>
                </form>
            </a>
            <a>
                <form action="coin2.php" method="POST">
                    <div class="first">
                        <input type="hidden" value="hard" name="level">
                        <input class="hard" type="submit" value="Hard">
                    </div>
                </form>
            </a>
        </div>
    </div>
</body>

</html>