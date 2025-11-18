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

document.getElementById("counter").textContent = `أ•pilasi kokku: ${opilased.length}`;

let tulemus = "";

opilased.forEach(opilane => {
    tulemus += `
    <div class="opilane" onclick="avaaLeht('${opilane.link}')">
        ${opilane.nimi}
    </div>
    `;
});

document.getElementById("opilased").innerHTML = tulemus;

function avaaLeht(link) {
    let url = link.startsWith("http") ? link : "https://" + link;
    window.open(url, "_blank");
}