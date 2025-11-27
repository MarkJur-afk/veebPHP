<style>
.opilane {
    background: linear-gradient(45deg, #667eea, #764ba2);
    color: white;
    padding: 15px;
    margin: 10px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.opilane:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
}

#counter {
    font-size: 1.2em;
    font-weight: bold;
    color: #333;
    margin: 20px 0;
}

#opilased {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    margin: 20px 0;
}
</style>

<h1>TARpv24 rühmaleht</h1>

<p id="counter"></p>

<div id="opilased"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let opilased = [
        { nimi: "Mark Jurgen", link: "markjurgen24.thkit.ee"},
        { nimi: "Nikita Orlenko", link: "nikitaorlenko24.thkit.ee" },
        { nimi: "Mariia Posvystak", link: "mariiaposvystak24.thkit.ee" },
        { nimi: "Khussein Takhmazov", link: "khusseintakhmazov24.thkit.ee" },
        { nimi: "Martin Rossakov", link: "martinrossakov24.thkit.ee" },
        { nimi: "Artem Poldsaar", link: "artjompoldsaar24.thkit.ee" },
        { nimi: "Nikita Gontsarov", link: "nikitagontsarov24.thkit.ee" },
        { nimi: "Illia Blahun", link: "illiablahun24.thkit.ee" },
        { nimi: "Roman Zaitsev", link: "romanzaitsev24.thkit.ee" },
        { nimi: "Marek Lukk", link: "mareklukk24.thkit.ee" },
        { nimi: "Adriana Pikaljov", link: "adrianapikaljov24.thkit.ee" },
        { nimi: "Nikita Nikiforov", link: "nikitanikiforov24.thkit.ee" },
        { nimi: "Milan Petrovski", link: "milanpetrovski24.thkit.ee" },
        { nimi: "Igor Aleksejev", link: "igoraleksejev24.thkit.ee" },
        {  nimi: "Anastasiia Radasheva", link: "anastasiiaradasheva24.thkit.ee" },
        { nimi: "Maksim Tsikvasvili", link: "maksimtsikvasvili24.thkit.ee" },
        { nimi: "Oleksandra Ryshniak", link: "oleksandraryshniak24.thkit.ee" },
        { nimi: "Roman Prikaztsikov", link: "romanprikaztsikov24.thkit.ee" },
        { nimi: "Nikita Litvinenko", link: "nikitalitvinenko24.thkit.ee" }
    ];

    document.getElementById("counter").textContent = `Õpilasi kokku: ${opilased.length}`;

    let tulemus = "";

    opilased.forEach(opilane => {
        tulemus += `
        <div class="opilane" onclick="window.open('https://${opilane.link}', '_blank')">
            ${opilane.nimi}
        </div>
        `;
    });

    document.getElementById("opilased").innerHTML = tulemus;
});
</script>
