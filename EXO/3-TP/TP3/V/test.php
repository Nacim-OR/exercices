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
        <table >
  <thead >
    <tr>
      <th>Place</th>
      <th >Prènom</th>
    </tr>
  </thead>
  <tbody>
  <?php for ($i=1; $i <= 16 ; $i++) {  ?>
    <tr>
    <td><?php echo "PLACE_$i"?></td>
    <td><?php echo $_SESSION["studentsLocations"]["PLACE_$i"]  ?></td>
    </tr>

    <?php }?>
 
  </tbody>
</table>
        </div>
        <div class = "blood">

        </div>
    </header>
    <main>
        <section>
            <div class = "bloc1">
                <div class = "place1">

                </div>
                <div class = "place2">

                </div>
                <div class = "place3">

                </div>
                <div class = "place4">

                </div>
            </div>
            <div class = "bloc2">
                <div class = "place5">

                </div>
                <div class = "place6">

                </div>
                <div class = "place7">

                </div>
                <div class = "place8">

                </div>
            </div>
        </section>
        <section class = "center">
            <div class = "bureauCentrale">

            </div>
        </section class = "end">
        <section>
            <div class = "bloc3">
                <div class = "place9">

                </div>
                <div class = "place10">

                </div>
                <div class = "place11">

                </div>
                <div class = "place12">

                </div>
            </div>
            <div class = "bloc4">
                <div class = "place13">

                </div>
                <div class = "place14">

                </div>
                <div class = "place15">

                </div>
                <div class = "place16">

                </div>
            </div>
        </section>
    </main>
</body>
</html>