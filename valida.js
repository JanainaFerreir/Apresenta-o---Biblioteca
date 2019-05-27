var x = 0;
var cont = 0;

var Nome = "no";
var Email = "no";
var Cpf = "no";
var Senha = "no";
var Senha2 = "no";
var Data = "no";
var sexo = "no";

function valida(){
    var nome = document.getElementsByClassName('user');

    for (var i=0; i<nome.length; i++){
        if (nome[i].value.length < 3){
            i = nome.length+1;
            alert("Preencha todos os campos!");
        }
    }
    if (sexo[0].checked == false && sexo[1].checked == false) Sexo="ok";
    if (x != 0) alert("Preencha todos os campos corretamente!");
}
function vnome(){
    var nome = document.getElementById('nome');

    if (nome.value.length < 3 && cont == 0){
        alert ("Insira um nome válido");
        Nome = "ok";
        cont = 1;
    }
    else cont = 0;
}
function vemail(){
    var email = document.getElementById('email');

    if (email.value.length < 8 && cont == 0){
        alert ("Insira um e-mail válido");
        Email = "ok";
        cont = 1;
    }
    else cont = 0;
}
function vcpf(){
    var cpf = document.getElementById('cpf');

    if (cpf.value.length < 11 && cont == 0){
        alert ("Insira um CPF válido");
        Cpf = "ok";
        cont = 1;
    }
    else cont = 0;
}
function vsenha(){
    var senha = document.getElementById('senha');

    if (senha.value.length < 6 && cont == 0){
        alert ("Senha muito curta");
        Senha = "ok";
        cont = 1;
    }
    else cont = 0;
}
function vsenha2(){
    var senha = document.getElementById('senha');
    var senha2 = document.getElementById('senha2');

    if (senha2.value != senha.value && cont == 0){
        alert ("As senhas não conferem");
        Senha2 = "ok";
        cont = 1;
    }
    else cont = 0;
}
function vidade(){
    var idade = document.getElementById('idade');

    if (idade.value == "" && cont == 0){
    alert("Insira sua data de nascimento");
    Data = "ok";
    cont = 1;
    }
    else cont = 0;
}
