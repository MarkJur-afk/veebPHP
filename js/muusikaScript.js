function Vali(){
    let queen = document.getElementById("queen");
    let imag=document.getElementById("imag");
    let bts = document.getElementById("bts");
    let metal = document.getElementById("metal");
    let v1 = document.getElementById("vastu1");

    let valik="";
    if(queen.checked){
        valik+=queen.value+", ";
    }
    if(imag.checked){
        valik+=imag.value+", ";
    }
    if(bts.checked){
        valik+=bts.value+", ";
    }
    if(metal.checked){
        valik+=metal.value+", ";
    }
    v1.innerText ="Sa valisid: " +valik;
}

function Kirjuta(){
    let arvus = document.getElementById("arvus");
    let v2 = document.getElementById("vastu2");

    v2.innerText = arvus.value;
}

function slider(){
    let v3 = document.getElementById("vastu3");
    let slide = document.getElementById("slide");

    v3.innerText = slide.value + "punkti";
}

function valiVastus(){
    let v4 = document.getElementById("vastu4");
    let jah = document.getElementById("jah");
    let ei = document.getElementById("ei");

    if(jah.checked){
        v4.innerHTML = jah.value;
    }
    else if(ei.checked){
        v4.innerHTML = ei.value;
    }
    else{
        v4.innerHTML = "Palun vali oma vastus!";
    }
}

function Raadio (){
    let v5 = document.getElementById("vastus5");
    let k5 = document.getElementById("kusimus5");
    let valik = "";

    valik += k5.value;

    v5.innerHTML = "Sinu nimetatud jaamad: " + valik;
}

function muusikaLiikValik(){
    let v6 = document.getElementById("vastus6");
    let select = document.getElementById("muusikaliik");

    if(select.value){
        v6.innerHTML = "Sa kuulad kأµige rohkem: " + select.value;
    } else {
        v6.innerHTML = "";
    }
}

function puhasta(){

    let v1 = document.getElementById("vastu1");
    let v2 = document.getElementById("vastu2");
    let v3 = document.getElementById("vastu3");
    let v4 = document.getElementById("vastu4");
    let v5 = document.getElementById("vastus5");
    let v6 = document.getElementById("vastus6");
    let form = document.getElementById("musicForm");
    form.reset();


    v1.innerText = "";
    v2.innerText = "";
    v3.innerText = "";
    v4.innerText = "";
    v5.innerText = "";
    v6.innerText = "";


}



