<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Tekst Funkstsioonid</title>

    <link rel="stylesheet" href="../style/style.css">
</head>
<body>


<div class="flex-container">
    <div>
<?php

function clearVarsExcept($url, $varname)
{
    $url=basename($url);
    if(str_starts_with($url,"?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}

echo "<h2>Tekstfunkstsioonid</h2>";
$tekst= 'PHP on skriptikeel serveripoolne';
echo $tekst;
echo "<br>";
echo "teksti pikkus -strlen() ".strlen($tekst). "tähemärgi" ;
echo "<br>";
echo "Esimesed 6 tähte -substr() = ".substr($tekst,0,6);
echo "<br>";
echo "Alates 6'st tähest = ".substr($tekst,6);
echo "<br>";
echo "Sõnade arv lauses -str_word_count() = ".str_word_count($tekst). " neli sõna lauses ";
echo "<br>";
echo "Teeb sõnad lühikesi - strtoupper()".strtoupper($tekst);
echo "<br>";
echo "Teeb sõnad suured - strtolower".strtolower($tekst);
echo "<br>";
echo "Iga sõna algab suure tähega - ucwords()".ucwords($tekst);
echo "<br>";
echo ucwords(strtolower($tekst));
echo "<br>";
$tekst2 = ' PHP on skriptikeel serveripoolne ';
echo "|".$tekst2."|";
echo "emaldab tekstist tühiluid paremalt ja vasakult - trim() ".trim($tekst2);
echo "<br>";
echo "ltrim() eemaldab tekstist tühikuid vasakult".ltrim($tekst2);
echo "<br>";
echo "rtrim() eemaldab tekstist tühikuid paremalt".rtrim($tekst2);
echo "<br>";
?>
    </div>
    <div>
<?php
echo "<h3>Tekst kui maasiv</h3>";
echo "$tekst[0] - 1.täht massivist";
echo "<br>";
echo $tekst[5]." - 6.täht massivist";
echo "<br>";
print_r(str_word_count($tekst,1));//Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
echo "<br>";
$syna=str_word_count($tekst,1);
echo "massivist teine sõna - ".$syna[2];
echo "<br>";
?>
    </div>

     <div>
<?php
echo "<h2>Teksti asendamine - replace</h2>";
$asendus= 'Javascript';
echo substr_replace($tekst,$asendus,0,3);
//ise vaheta serveripoolne - kliendipoolne
echo "<br>";
$otsi = array('PHP', 'serveripoolne');
$asendav=array('Javascript', 'kliendipoolne');
echo str_replace($otsi, $asendav, $tekst);

echo "<br>";
?>
     </div>

    <div>
<?php
echo"<h2>Mõistatus. Arva ära Eesti linnanimi</h2>";
//tee 5 - 6 tekstfunkstioonid mis aitavad aru saada milinne linnanimi oli.
$linn='Tallinn';
echo "<ol><li> Linna pikkus on - ".strlen($linn)."</li>";
echo "<li> Kolm esimesed tähted on - ".substr($linn, 0, 3)."</li>";
echo "<li> Vimased kaks tähted on - ".substr($linn, -2)."</li>";
$synavah = array("T", "n");
echo "<li> Linn - ".str_replace($synavah, "_", $linn)."</li></ol>";
echo "<br>";
?>
    </div>
    <div>
<form name="tekskkontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method="post">
    <label for="linn">Sisesat Linnanimi: </label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
    </div>
    <div>
<?php
if(isset($_REQUEST["linn"])){
    if ($_REQUEST["linn"] == "Tallinn"){
        echo $_REQUEST["linn"]. " on Õige";
    }else{
        echo $_REQUEST["linn"]." on Vale!";
    }
}
?>
</div>
</div>
</body>
</html>



