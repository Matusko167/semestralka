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
        switch(motorkaValue) {
            case "KTM":
                setGood(motorka);
                motorkaBool = true;
                break;
            case "Yamaha":
                setGood(motorka);
                motorkaBool = true;
                break;
            case "Suzuki":
                setGood(motorka);
                motorkaBool = true;
                break;
            case "Honda":
                setGood(motorka);
                motorkaBool = true;
                break;
            case "Kawasaki":
                setGood(motorka);
                motorkaBool = true;
                break;
            case "Husqvarna":
                setGood(motorka);
                motorkaBool = true;
                break;
            case "TM":
                setGood(motorka);
                motorkaBool = true;
                break;
            case "GasGas":
                setGood(motorka);
                motorkaBool = true;
                break;
            case "Beta":
                setGood(motorka);
                motorkaBool = true;
                break;
            default:
                setBad(motorka, "Motorka je zadaná zle. Použi tieto hodnoty" +
                    "|Yamaha|KTM|Suzuki|Honda|Kawasaki|Husqvarna|TM|GasGas|Beta");
        }

    }

    if (cisloBool === true && menoBool === true && priezviskoBool === true && teamBool === true && motorkaBool === true) {
        if (info === "create"){
        $.ajax({
            url: 'http://127.0.0.1:8000/riders',
            type: 'POST',
            data: {
                '_token': $('meta[name=csrf-token]').attr('content'),
                cislo: cisloValue,
                meno: menoValue,
                priezvisko: priezviskoValue,
                team: teamValue,
                motorka: motorkaValue,
            },
            success: function(){
                window.location.href="http://127.0.0.1:8000/riders";
            }
        });

    } else if (info === "edit") {
        $.ajax({
            url: 'http://127.0.0.1:8000/riders/' + riderID,
            type: 'PUT',
            data: {
                '_token': $('meta[name=csrf-token]').attr('content'),
                cislo: cisloValue,
                meno: menoValue,
                priezvisko: priezviskoValue,
                team: teamValue,
                motorka: motorkaValue,
            },
            success: function(){
                window.location.href="http://127.0.0.1:8000/riders";
            }
        });

    } else {
        console.log("error: zla const info")
    }
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
