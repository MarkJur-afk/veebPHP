function showDate() {
    var now = new Date();
    var date = now.getDate() + "." + (now.getMonth() + 1) + "." + now.getFullYear();
    var time = now.getHours() + ":" + "0" +  now.getMinutes();
    let result = document.getElementById("result");
    result.innerHTML = "Kuupأ¤ev: " + date + "<br>Kellaaeg: " + time + "<br>Kuupأ¤ev ja kellaaeg: " + date + " " + time;

    console.log(date);
    console.log(time);
    console.log(date + " " + time);
}

function daysToBirthday() {
    const now = new Date();
    let birthday = new Date(now.getFullYear(), 12, 5);

    if (birthday < now) {
        birthday = new Date(now.getFullYear() + 1, 12, 5);
    }

    const ms = birthday.getTime() - now.getTime();
    const days = ms / (1000 * 60 * 60 * 24);

    const result = document.getElementById("result");
    result.textContent = "Sأ¼nnipأ¤evani: " + days + " pأ¤eva";
}