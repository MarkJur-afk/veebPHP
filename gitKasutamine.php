<?php
    echo "<h2>GIT käsud</h2>";
    echo "<ol>";
    echo "<li>Repo loomine";
    echo "<pre>git init</pre>";
    "</li>";
?>
<li>Konfigureerimine
<pre>
    git config --global user.name "MarkJurgen"
    git config --global user.email "markjurgennn@gmail.com"
    git config --global --list
</pre>
</li>
<li>
    SSH võti loomine
    <pre>
        ssh-keygen -o -t rsa -C "markjurgennn@gmail.com"
        id_rsa.pub võti kopeeritakse githubi nagu deploykey
    </pre>
</li>
<li>
    Jälgimise lisamine ja commit'i tegemine
    <pre>
        git status
        git add .
        git commit -a -m "commiti tekst"
    </pre>
</li>
<?php
echo "<li>GITHUB projektiga sidumine";