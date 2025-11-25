<h2>Pildifunktsioonid</h2>

<?php

$pildid = [
    "Gragas" => "../veebPHP/image/gragas.png",
    "Akali" => "../veebPHP/image/akali.jpg",
    "Mundo" => "../veebPHP/image/mundo.jpg",
];
?>

<form method="post" action="">
    <select name="image">
        <option value="">Vali pilt</option>

        <?php
        foreach ($pildid as $key => $fail) {
            echo "<option value='$key'>$key</option>";
        }
        ?>
    </select>

    <br><br>
    <input type="submit" value="Vaata">
</form>

<?php
// ---------------------
// Kui pilt on valitud
// ---------------------
if (!empty($_POST['image'])) {

    $valik = $_POST['image'];

    // kontrollime, kas fail on olemas
    if (isset($pildid[$valik])) {

        $pildi_aadress = $pildid[$valik];

        // KONTROLLI, kas fail eksisteerib
        if (!file_exists($pildi_aadress)) {
            echo "<p style='color: red;'><strong>Viga:</strong> Faili ei leitud: $pildi_aadress</p>";
            echo "<p>Kontrolli, et:</p>";
            echo "<ul>";
            echo "<li>Kaust 'image' eksisteerib</li>";
            echo "<li>Pildifailid on õiges kaustas</li>";
            echo "<li>Failinimed on õiged</li>";
            echo "</ul>";
        } else {
            // saame pildi andmed
            $pildi_andmed = getimagesize($pildi_aadress);

            if ($pildi_andmed === false) {
                echo "<p style='color: red;'>Viga pildi lugemisel!</p>";
            } else {
                $laius = $pildi_andmed[0];
                $korgus = $pildi_andmed[1];
                $formaat = $pildi_andmed[2];

                echo "<h3>Originaal pildi andmed</h3>";
                echo "Laius: $laius px<br>";
                echo "Kõrgus: $korgus px<br>";
                echo "Formaat: $formaat (2 = JPG)<br>";

                // ---------------------
                // Suuruse muutmine
                // ---------------------

                $max_laius = 120;
                $max_korgus = 90;

                // suhtearvu leidmine
                if ($laius <= $max_laius && $korgus <= $max_korgus) {
                    $ratio = 1;
                } elseif ($laius > $korgus) {
                    $ratio = $max_laius / $laius;
                } else {
                    $ratio = $max_korgus / $korgus;
                }

                // uued mõõtmed
                $pisi_laius = round($laius * $ratio);
                $pisi_korgus = round($korgus * $ratio);

                echo "<h3>Uue pildi andmed</h3>";
                echo "Arvutatud suhe: $ratio<br>";
                echo "Laius: $pisi_laius px<br>";
                echo "Kõrgus: $pisi_korgus px<br>";

                // pisipildi kuvamine
                echo "<img src='$pildi_aadress' width='$pisi_laius' height='$pisi_korgus'>";
            }
        }
    }
}
?>