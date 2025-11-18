<?php
echo "<h2>AjaFunktsioonid</h2>";
//time zone, juhul kui time zone ei määratud, siis php näitab localhost'i aeg
date_default_timezone_set('Europe/Tallinn');
echo "<div class = flex>";
echo "<div>";
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone list</a>";
echo "<br>";
echo "time() - aeg sekundides - ".time();
echo "<br>";
echo "date() - ".date("d.m.Y G:i:s", time());
echo "</div>";

echo "<br>";

echo "<div>";
echo ".date('d.m.Y G:i:s' , time())";
echo "<br>";
echo "<pre> 
d - päev 01 ... 31
m - kuu 01 ... 12
Y - aasta - nelja kohane arv
G - 24h format
i - minutid 0..59
s - sekundid 0...59
";
echo "</div>";

echo "<div>";
echo "</pre>";
echo "<br>";
echo "<strong>Tehtud kuupäevaga</strong>";
echo "<br>";
echo "+1 min= time()+60 -- ".date("d.m.Y G:i:s", time()+60);
echo "<br>";
echo "+1 tund= time()+60*60 -- ".date("d.m.Y G:i:s", time()+60*60);
echo "<br>";
echo "+1 päev= time()+60*60*24 -- ".date("d.m.Y G:i:s", time()+60*60*24);
echo "</div>";


echo "<br>";
echo "<br>";

echo "<div>";
echo "<strong>Kuupäeva genireerimine</strong>";
echo "<br>";
echo"mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
$synd=mktime(3,35,25,11,5,5);
echo "<br>minu sünnipäev:".date("d.m.Y G:i:s", $synd);
echo "</div>";
echo "<br>";

echo "<div>";
echo "Massiivi abil näidata tänase kuu nimega ";
echo "<br>";
$kuud=array(1=>'jaanuar', 'veebruar', 'märts', 'april', 'mai', 'juni', 'juuli', 'august', 'september', 'oktoober', 'november', 'december');
$aasta=date("Y");
$paev=date("d");
$kuu=$kuud[date("m")];
echo "Täna on: ".$paev.".".$kuu." ".$aasta."a.";
echo "</div>";
echo "</div>";