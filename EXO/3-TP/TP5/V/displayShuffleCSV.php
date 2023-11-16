<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleDisplay.css">
</head>
<body>
    <header>
        <div class = "moussa">
          <img src="image/yoda-new.png" alt="" width = "5%" class = "yoda">
          <div class="container">
            <div class="formulaire">   
              <form enctype="multipart/form-data" action="../C/getCSV.action.php" method="post">
                <input class="file" name="file" type="file" /> 
                <input class="submit" name="submit" type="submit" value="envoyer" />
             </form>
    </header>
    <main>
        <section class = "debut">
            <div class = "bloc1">
                <div class = "place1">
                  <img src="image/dark vador.jpg" width = "20%" alt="" class = "pc1">
                  <div class = "echo1"><?php echo $_SESSION["studentsLocations"]["PLACE_1"]  ?></div> 
                </div>
                <div class = "place2">
                  <img src="image/grievous.png" width = "20%" alt="" class = "pc2">
                  <div class = "echo2"><?php echo $_SESSION["studentsLocations"]["PLACE_2"]  ?></div>
                </div>
                <div class = "place3">
                  <img src="image/palpatine.jpg" width = "20%" alt="" class = "pc3">
                  <div class = "echo3"><?php echo $_SESSION["studentsLocations"]["PLACE_3"]  ?></div>
                </div>
                <div class = "place4">
                  <img src="image/darmaul.jpg" width = "20%" alt="" class = "pc4">
                  <div class = "echo4"><?php echo $_SESSION["studentsLocations"]["PLACE_4"]  ?></div>
                </div>
            </div>
            <div class = "bloc2">
                <div class = "place5">
                  <img src="image/bobafett.jpg" width = "20%" alt="" class = "pc5">
                  <div class = "echo5"><?php echo $_SESSION["studentsLocations"]["PLACE_5"]  ?></div>
                </div>
                <div class = "place6">
                  <img src="image/strom trooper.png" width = "20%" alt="" class = "pc6">
                  <div class = "echo6"><?php echo $_SESSION["studentsLocations"]["PLACE_6"]  ?></div>
                </div>
                <div class = "place7">
                  <img src="image/kylo.jpg" width = "20%" alt="" class = "pc7">
                  <div class = "echo7"><?php echo $_SESSION["studentsLocations"]["PLACE_7"]  ?></div>
                </div>
                <div class = "place8">
                  <img src="image/comte doku.jpg" width = "20%" alt="" class = "pc8">
                  <div class = "echo8"></div><?php echo $_SESSION["studentsLocations"]["PLACE_8"]  ?>
                </div>
            </div>
        </section>
        <section class = "center">
            <div class = "bureauCentrale">
            <a href="../C/displayShuffle.action.php"><img src="image/etoile de la mort.png" alt="" width = "10%" class = "etoile"></a>
            </div>
        </section >
        <section class = "end">
            <div class = "bloc3">
                <div class = "place9">
                  <img src="image/luke.png" width = "20%" alt="" class = "pc9">
                  <div class = "echo9"><?php echo $_SESSION["studentsLocations"]["PLACE_9"]  ?></div>
                </div>
                <div class = "place10">
                  <img src="image/obi wan.jpg" width = "20%" alt="" class = "pc10">
                  <div class = "echo10"><?php echo $_SESSION["studentsLocations"]["PLACE_10"]  ?></div>
                </div>
                <div class = "place11">
                  <img src="image/Ahsoka Tano.png" width = "20%" alt="" class = "pc11">
                  <div class = "echo11"><?php echo $_SESSION["studentsLocations"]["PLACE_11"]  ?></div>
                </div>
                <div class = "place12">
                  <img src="image/leia.png" width = "20%" alt="" class = "pc12">
                  <div class = "echo12"><?php echo $_SESSION["studentsLocations"]["PLACE_12"]  ?></div>
                </div>
            </div>
            <div class = "bloc4">
                <div class = "place13">
                  <img src="image/rey.jpg" width = "20%" alt="" class = "pc13">
                  <div class = "echo13"></div><?php echo $_SESSION["studentsLocations"]["PLACE_13"]  ?>
                </div>
                <div class = "place14">
                  <img src="image/han solo.jpg" width = "20%" alt="" class = "pc14">
                  <div class = "echo14"><?php echo $_SESSION["studentsLocations"]["PLACE_14"]  ?></div>
                </div>
                <div class = "place15">
                  <img src="image/padmé.jpg" width = "20%" alt="" class = "pc15">
                  <div class = "echo15"><?php echo $_SESSION["studentsLocations"]["PLACE_15"]  ?></div>
                </div>
                <div class = "place16">
                  <img src="image/r2d2.png" width = "20%" alt="" class = "pc16">
                  <div class = "echo16"><?php echo $_SESSION["studentsLocations"]["PLACE_16"]  ?></div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>