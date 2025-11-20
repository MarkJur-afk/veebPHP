<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Mark Jurgen PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="js/muusikaScript.js"></script>
    <link rel="stylesheet" href="style/muusikaStyle.css">
    <script src="js/opilasedJS.js"></script>
    <link rel="stylesheet" href="style/opilaseStyle.css">
    <script src="js/js.js"></script>
</head>
<body>
<?php
//päis
    include("header.php");
?>

<?php
//navigeerimismenüü
include("nav.php");
?>
<div class="flex-container"> 

    <div>
        <?php
        if(isset($_GET["link"])){
            include("content/".$_GET["link"]);
        }
        else{
            include("content/avaleht.php");
        }
        ?>
    </div>
    <br>
    <div>
        <img src="image/gragas.png" alt="pilt"> <br>
        <input type="button" value="TÄNA ON" onclick="showDate()"> <br>
        <input type="button" value="Minu sünnipäevani" onclick="daysToBirthday()">
    </div>
</div>





<?php
//jalus
include("footer.php");
?>

</body>
</html>

