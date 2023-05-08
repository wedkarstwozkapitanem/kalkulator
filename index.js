
let pamiec = [];

ostatnialiczba = [];
let liczba_o = parseFloat(0);
let znak;
let czy_wpisana = false;
let w;
let czescidziesite = 1;

function wpisz_liczbe_0() {
    document.getElementById('tytul').innerHTML = '';
    liczba_o = parseFloat("" + (liczba_o) + (czescidziesite * (this.dataset.liczba)));
    ostatnialiczba.length == 0 ? document.getElementById('liczba1').innerHTML = liczba_o : document.getElementById('liczba2').innerHTML = liczba_o;
    czescidziesite !== 1 ? czescidziesite *= 10 : czescidziesite = 1;
}
function wpisz_kropke() {
    czescidziesite /= parseInt(10);
    liczba_o = parseFloat("" + (liczba_o) + ('.'));
    ostatnialiczba.length == 0 ? document.getElementById('liczba1').innerHTML = liczba_o : document.getElementById('liczba2').innerHTML = liczba_o;
}

function DEL() {
    ostatnialiczba.splice(0,ostatnialiczba.length);
    document.getElementById('liczba2').innerHTML = "";
    document.getElementById('liczba1').innerHTML = "";
    document.getElementById('wynik').innerHTML = 0;
    document.getElementById('dzialania1').innerHTML = "";
    liczba_o = parseFloat(0);
    znak = "";
    czy_wpisana = false;
    document.getElementById('row').style.display = "none";
}


function d() {
    return parseFloat(ostatnialiczba[0]) + parseFloat(ostatnialiczba[1]);
}
function o() {
    return parseFloat(ostatnialiczba[0]) - parseFloat(ostatnialiczba[1]);
}
function p() {
    return parseFloat(ostatnialiczba[0]) * parseFloat(ostatnialiczba[1]);
}
function r() {
    return parseFloat(ostatnialiczba[0]) / parseFloat(ostatnialiczba[1]);
}

function wynik() {
    ostatnialiczba[1] = liczba_o;
    ostatnialiczba.length == 1 ? ostatnialiczba[1] == ostatnialiczba[0] : "";
    liczba_o = 0;
    switch(znak) {
        case '+':
            w = d();
            break;
        case '-':
            w = o();
            break;
        case 'X':
            w = p();
            break;
        case '/':
            w = r();
            break;
        default:
            w = "Nie poprawna";
    }
    document.getElementById('row').style.display = "inline";
    document.getElementById("wynik").innerHTML = `${w}`;
   
    liczba_0 = w;
  
    ostatnialiczba[0] = liczba_0;
   
    document.querySelector('.okno').style.fontSize = "34px";
    document.querySelector('.okno').style.color = "silver";
    document.getElementById("wynik").style.fontSize = "68px";
    document.getElementById("wynik").style.color = "white";
}




function wpisz_znak() {
    if (ostatnialiczba[0] && liczba_o !== 0) {
        wynik();
    } else {
    ostatnialiczba.push(liczba_o);
    if (w) {
        document.getElementById('liczba1').innerHTML = ostatnialiczba[0];
        document.getElementById('liczba2').innerHTML = "";
        document.getElementById('wynik').innerHTML = "";
        document.querySelector(".okno").style.fontSize = "68px";
        document.querySelector(".okno").style.color = "white";
    }
    liczba_o = 0;
    znak = this.dataset.znak;
    let czyliczono = document.getElementById('dzialania1').innerHTML == " " ? true : false;
    document.getElementById('dzialania1').innerHTML = znak;
    czy_wpisana = true;
    }
}




function czekaj() {
    return;
}

function wpisz_liczbe() {
    ostatnialiczba.length == 0 ? czekaj() : wynik();
    return;
}




function nowe_liczby(jaka,p) {
    let liczba = document.createElement('button');
    liczba.innerHTML = jaka;
    liczba.dataset.liczba = jaka;
    p ? liczba.addEventListener('click', wpisz_liczbe_0) : jaka == "=" ? liczba.addEventListener('click', wpisz_liczbe) : liczba.addEventListener('click', wpisz_kropke);
    liczby.appendChild(liczba); 
}


symbol = ["DEL","+","-","X","/"];

function renderowanie() {
const kalkulator = document.querySelector('body').appendChild(document.createElement('div'));
kalkulator.className = 'kalkulator';
const okno = kalkulator.appendChild(document.createElement('div'));
okno.className = 'okno';
okno.innerHTML = "<span id='tytul'>Liczmy<span>";
liczba1 = okno.appendChild(document.createElement('span'));
liczba1.id = 'liczba1';
dzialania1 = okno.appendChild(document.createElement('span'));
dzialania1.id = 'dzialania1';
liczba2 = okno.appendChild(document.createElement('span'));
liczba2.id = 'liczba2';
row = okno.appendChild(document.createElement('span'));
row.id = 'row';
row.innerText = "=";
row.style.display = 'none';
wyn = okno.appendChild(document.createElement('span'));
wyn.id = "wynik";
liczba3 = okno.appendChild(document.createElement('span'));
liczba3.id = 'liczba3';

const zadania = kalkulator.appendChild(document.createElement('div'));
zadania.className = 'zadania';
const liczby = zadania.appendChild(document.createElement('div'));
liczby.id = 'liczby';


for (let i = 1; i <= 9; i++) {
 nowe_liczby(i,true);
}
nowe_liczby(0,true);
nowe_liczby(".",false);
nowe_liczby("=",false);

const dzialania = zadania.appendChild(document.createElement("div"));
dzialania.id = "dzialania";

symbol.forEach(dzialanie => {
    let e = document.createElement("button");
    e.dataset.znak = dzialanie;
    dzialanie != "DEL" ? e.addEventListener("click",wpisz_znak) :  e.addEventListener("click",DEL);
    let p = dzialania.appendChild(e);
    p.innerHTML = dzialanie;
});


}

renderowanie();


