<?php
echo "<h2>Matemaatilised tehted</h2>";
$arv = 1.45;
$arv2 = 2;
echo "Esimine arv on .$arv, teine arv on .$arv2";
echo "<br>";
echo "+ Liitmine tulemus: ".($arv+$arv2);
echo "<br>";
echo "- Lahutamine tulemus: ".($arv-$arv2);
echo "<br>";
echo "* Korrutise tulemus:  ".($arv*$arv2);
echo "<br>";
echo "/ Jagamise tulemus: ".($arv/$arv2);
echo "<br>";
echo "<h3>Matemaatilised funktsioonid</h3>>";
echo "Vaiksem arv: ".min($arv,$arv);
echo "<br>";
echo "Suurem arv: ".max($arv,$arv);
echo "<br>";
echo "Umerdamine tulemus - round(arv): ".round($arv);
echo "<br>";
echo "ceil(arv) - Ümardab jargmise arvuni: ".ceil($arv);
echo "<br>";
echo "floor(arv) - Ümardab alla poole täisarvuni: ".floor($arv);
echo "<br>";
echo "round (arv, 1) - Ümardab ühe kmomma kohtani ".round($arv, 1);
echo "<br>";
echo "rand(1, 100) - Ühuslik arv: ".rand(1, 100);
echo "<br>";
echo "pow(arv, 2) - astendamine: ".pow($arv, 2);
echo "<br>";
echo "sqrt - ruutjuur: ".sqrt($arv);
echo "<br>";
echo pi();
echo "<br>";

echo "<h2>Omistamise operaatorit</h2>";
$x = 10;
$y = 20;

echo "Suurendamine ühe võrra: ";
$x ++; //$x = $x+1
echo $x;
echo "<br>";
echo "Vahendamine ühe võrra: ";
$x --;
echo $x;
echo "<br>";
$x *= $y;//x = x*y
echo $x;
echo "<br>";
$x /= $y;//x = x/y
echo $x;
echo "<br>";

$nimi = "Mark";
$perenimi = "Jurgen";
//$nimi .=$perenimi;
echo $nimi;
echo "<br>";
$format = 'Tere %s %s, arv x: %d';
printf ($format, $perenimi, $nimi, $x);

echo"<h2>Arv Mõistatus. Arva ära kaks arvu(1, 10) </h2>";
$arv3 = 3;
$arv4 = 5;
echo "Need arvad on Korritused: ".($arv3*$arv4);
echo "<br>";
echo "Need arvad on jaagund: ".($arv3/$arv4);
echo "<br>";
echo "Need numbrid ruudus: ".($arv3*$arv3)." ja ".($arv4*$arv4);
echo "<br>";
echo "Nende liitmine tulemus: ".($arv3+$arv4);
echo "<br>";
echo "Nende lahutamine tulemus: ".($arv4-$arv3);
?>

    <form method="post">
        <label>Esimene arv: </label>
        <input type="number" name="arv1">
        <br><br>

        <label>Teine arv: </label>
        <input type="number" name="arv2">
        <br><br>

        <input type="submit" value="Kontrolli">
    </form>

<?php
$oige1 = 3;
$oige2 = 5;

if(isset($_POST["arv1"]) && isset($_POST["arv2"])) {

    $arv1 = $_POST["arv1"];
    $arv2 = $_POST["arv2"];

    echo "<h3>Tulemus:</h3>";

    if ($arv1 == $oige1) {
        echo "Esimene arv ($arv1) on Õige<br>";
    } else {
        echo "Esimene arv ($arv1) on Vale!<br>";
    }

    if ($arv2 == $oige2) {
        echo "Teine arv ($arv2) on Õige<br>";
    } else {
        echo "Teine arv ($arv2) on Vale!<br>";
    }
}
?>