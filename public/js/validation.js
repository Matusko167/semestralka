const form = document.getElementById('form');
const cislo = document.getElementById('cislo');
const meno = document.getElementById('meno');
const priezvisko = document.getElementById('priezvisko');
const team = document.getElementById('team');
const motorka = document.getElementById('motorka');

form.addEventListener('submit', e => {
    e.preventDefault();

    skontroluj()});

let cisloBool = false;
let menoBool = false;
let priezviskoBool = false;
let teamBool = false;
let motorkaBool = false;

function skontroluj() {
    const cisloValue = cislo.value.trim();
    const menoValue = meno.value.trim();
    const priezviskoValue = priezvisko.value.trim();
    const teamValue = team.value.trim();
    const motorkaValue = motorka.value.trim();

    if (cisloValue === ""){
        setBad(cislo, "Cislo nieje zadané");
    } else {
        setGood(cislo);
        cisloBool = true;
    }

    if (menoValue === ""){
        setBad(meno, "Meno nieje zadané");
    } else {
        setGood(meno);
        menoBool = true;
    }

    if (priezviskoValue === ""){
        setBad(priezvisko, "Priezvisko nieje zadané");
    } else {
        setGood(priezvisko);
        priezviskoBool = true;
    }

    if (teamValue === ""){
        setBad(team, "Team nieje zadané");
    } else {
        setGood(team);
        teamBool = true;
    }

    if (motorkaValue === ""){
        setBad(motorka, "Motorka nieje zadané");
    } else {
        setGood(motorka);
        motorkaBool = true;
    }

    if (cisloBool === true && menoBool === true && priezviskoBool === true && teamBool === true && motorkaBool === true) {
        alert("pohoda");
    }
}

function setBad(input, message){
    const formParent = input.parentElement;
    const form = formParent.parentElement;
    const small = form.querySelector('small');
    small.className = "visible bottom-0 left-0 static";
    small.innerText = message;
}

function setGood(input){
    const formParent = input.parentElement;
    const form = formParent.parentElement;
    const small = form.querySelector('small');
    small.className = "invisible  absolute";
}
