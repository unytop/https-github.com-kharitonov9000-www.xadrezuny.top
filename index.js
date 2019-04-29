function login() {
	window.location.href=("entrar.php");
}
function sumula()
{
window.location.href=("sumula.pdf");
}	

function enviar() 
{
  alert("nescessário está logado!\n Ainda não é parte do membro?\n cadastre-se!")
}
function fale_conosco() {
	alert("O numero para contato é :\n (82) 988284760")
}
function inicio() {
window.location.href="https://www.youtube.com/watch?v=g5pkjbZcgo4";
}
function Download() {
window.open("xadrez");
}

function CADASTRE_SE() {
	window.location.href=("cadastro.php");
}

function play() {
if (navigator.appName == "Microsoft Internet Explorer"  && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1)) 
{
if (document.all)
 {
  document.all.sound.src = "click.mp3";
 }
}

else {
{
var audio = document.getElementsByTagName("audio")[0];
audio.play();
}
}
}
