<h2>Mobiillimall Projekti Konspekt</h2>
<ol>
    <li>Projekti struktuur
        <pre>
            content/anekdot/
            ├── index.php      (pealeht)
            ├── header.php     (HTML päis + CSS)
            ├── footer.php     (lehe jalus)
            ├── menu.php       (navigeerimismenüü)
            ├── style.css      (Bootstrap-stiilis kujundus)
            ├── message        (tekstifail teadega)
            ├── author         (tekstifail autoriga)
            └── jokes/
                ├── joke1.php  (esimene anekdoot)
                ├── joke2.php  (teine anekdoot)
                ├── joke3.php  (kolmas anekdoot)
                └── menu.php   (menüü jokes kaustas)
        </pre>
    </li>
    <li>Põhilised PHP funktsioonid ja nende tööpõhimõte
        <pre>
            include "header.php";
            // Kaasab header.php faili sisu praegusesse faili
            // Sisaldab HTML struktuuri ja CSS linke
            
            file_get_contents(__DIR__ . '/message');
            // Loeb tekstifaili 'message' sisu
            // __DIR__ tagastab praeguse faili kausta tee
            // Kuvatakse teade kasutajale
            
            echo "Tere tulemast!";
            // Väljastab teksti veebilehele
        </pre>
    </li>
    <li>Kuidas leht töötab (index.php näide)
        <pre>
            1. Kaasatakse header.php (HTML päis, CSS, menüü)
            2. Kuvatakse pealkiri "Tere tulemast!"
            3. Loetakse 'message' faili sisu ja kuvatakse
            4. Loetakse 'author' faili sisu ja kuvatakse
            5. Kaasatakse footer.php (lehe jalus)
            
            Tulemus: Täielik HTML leht koos kujundusega
        </pre>
    </li>
    <li>CSS kujundus (Bootstrap-stiilis)
        <pre>
            .container - peamine konteiner (800px laius, keskel)
            .header - päise stiil (gradient taust, valge tekst)
            .content - sisu ala (30px padding)
            .joke1/.joke2/.joke3 - anekdootide stiilid
            .message-box - teadete kast (roheline gradient)
            .author-info - autori info (oranž gradient)
            
            Kasutab: gradiente, varje, ümardatud nurki, animatsioone
        </pre>
    </li>
    <li>Navigeerimise tööpõhimõte
        <pre>
            Pealeht (index.php):
            - Menüü viitab jokes/joke1.php, joke2.php, joke3.php
            
            Jokes kaustas:
            - Iga anekdoot on eraldi PHP fail
            - Oma menu.php failiga (teised teed)
            - "Avaleht" viib tagasi ../index.php
            
            Tulemus: Töötav navigeerimine kõikide lehekylgede vahel
        </pre>
    </li>
    <li>Miks Bootstrap-stiilis kujundus?
        <pre>
            Bootstrap on populaarne CSS raamistik:
            - Kiire ja lihtne kasutada
            - Responsiivne disain (töötab kõikides seadmetes)
            - Professionaalne välimus
            - Valmis komponendid (nupud, vormid, menüüd)
            
            Meie projektis: kohandatud Bootstrap-stiilis CSS
        </pre>
    </li>
</ol>

<h3 style="text-align: center; margin-top: 30px;">Kuidas telefonis on</h3>
<img src="image/anekdot.png" alt="Anekdoot pilt" style="display: block; margin: 20px auto; max-width: 500px; width: 100%;">