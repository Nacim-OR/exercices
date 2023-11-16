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
    <form class="degeu" enctype="multipart/form-data" action="../C/loadStudentFromCSV.action.php" method="post">
        <input class="file" name="file" type="file" /> 
        <br>
        <label for="">
            <input type="radio" name = "col" value = "1"> First name
        </label>
        <br>
        <label for="">
            <input type="radio" name = "col" value = "2"> Name
        </label>
        <br>
        <label for="">
            <input type="radio" name = "col" value = "3"> Mail
        </label>
        <div class="wrap">
            <button class="button">Load</button>
        </div>  
    </form>

    <!-- <form action= "../C/displayShuffle.action.php" method = POST>
              
    </form> -->
</body>
</html>

