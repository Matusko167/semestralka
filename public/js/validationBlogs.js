const form = document.getElementById('form');
const title = document.getElementById('title');
const popis = document.getElementById('popis');
const text = document.querySelector('textarea[name="text"]');
const url = document.getElementById('url');

form.addEventListener('submit', e => {
    e.preventDefault();

    skontroluj()});
let titleBool = false;
let popisBool = false;
let textBool = false;

function skontroluj() {
    const titleValue = title.value.trim();
    const popisValue = popis.value.trim();
    const textValue = text.value.trim();
    const urlValue = url.value.trim();

    if (titleValue === ""){
        setBad(title, "Názov nieje zadaný");
    } else {
        setGood(title);
        titleBool = true;
    }

    if (popisValue === ""){
        setBad(popis, "Popis nieje zadaný");
    } else {
        setGood(popis);
        popisBool = true;
    }

    if (textValue === ""){
        setBad(text, "Text nieje zadaný");
    } else {
        setGood(text);
        textBool = true;
    }

    if (isValidURL(urlValue) === true){
        setGood(url);
        urlBool = true;
    } else {
        setBad(url, "Zle zadaná URL adresa obrázka");
    }



    if (titleBool === true && popisBool === true && textBool === true && urlBool === true) {
        if (info === "create"){
        $.ajax({
            url: 'http://127.0.0.1:8000/blogs',
            type: 'POST',
            data: {
                '_token': $('meta[name=csrf-token]').attr('content'),
                title: titleValue,
                popis: popisValue,
                text: textValue,
                url: urlValue,
            },
            success: function(){
                window.location.href="http://127.0.0.1:8000/blogs";
            }
        });

    } else if (info === "edit") {
        $.ajax({
            url: 'http://127.0.0.1:8000/blogs/' + postID,
            type: 'PUT',
            data: {
                '_token': $('meta[name=csrf-token]').attr('content'),
                title: titleValue,
                popis: popisValue,
                text: textValue,
                url: urlValue,
            },
            success: function(){
                window.location.href="http://127.0.0.1:8000/blogs";
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


function isValidURL(str)
{
     if (str.match(/\.(jpeg|jpg|gif|png)$/))
    {
        return true;
    }
    else
    {
        return false;
    }
}
