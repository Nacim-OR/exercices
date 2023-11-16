<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>
<body>
    <form class="degeu" enctype="multipart/form-data" action="../C/getCSV.action.php" method="post">
        <input class="file" name="file" type="file" /> 
        <!-- <input class="submit" name="submit" type="submit" value="envoyer" /> -->
        <div class="wrap">
            <button class="button">Shuffle</button>
        </div>  
    </form>

    <!-- <form action= "../C/displayShuffle.action.php" method = POST>
              
    </form> -->
</body>
</html>

