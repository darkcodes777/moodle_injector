
var f = document.getElementById("page-footer");
f.insertAdjacentHTML('beforeEnd',"<iframe style='overflow:hidden;height:80%;width:100%' height='80%' width='100%' frameBorder='0' scrolling='no' src='http://answer.altervista.org/search-form.php'></iframe>");

var domanda = document.getElementsByClassName("qtext");
var domandacompleta = domanda[0].innerText;

var g1 = document.getElementsByClassName("ablock");

var b = document.getElementById("responseform");
var b1 = document.getElementsByClassName("submitbtns");

var button = document.createElement("BUTTON");
button.innerText = "";
button.setAttribute("style", "border: none; background-color: transparent; outline: none;");

b1[0].insertAdjacentElement("afterEnd",button);
button.onclick = (function () {
    var x = document.getElementById("risposta");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }

});

const Http = new XMLHttpRequest();
const url='http://sitename.tld/t.php?t='+domandacompleta;
Http.open("GET", url);
Http.send();
Http.onreadystatechange = (e) => {
    if(Http.readyState == 4) {
        var risposta = Http.responseText;
        g1[0].insertAdjacentHTML("beforeEnd","<br>");
        g1[0].insertAdjacentHTML("beforeEnd",risposta);
        document.getElementById("risposta").style.color = '#def2f8';
    }
}










