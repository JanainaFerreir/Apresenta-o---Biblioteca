function check(){

    var check = document.getElementsByClassName('chek');

    var inputs = document.getElementsByClassName('inputs');

    var livros = ["Crave a Marca", "Convergente", "Jogos Vorazes", "Perdido em Marte ", "A Rainha Vermelha", "A Escolha", "Moby Dick", "Eu sou Malala", "O Domador de Ventos", "1984"];



   if((check[0].checked == true && check[1].checked == true && check[2].checked == true && check[3].checked == true) || (check[4].checked == true && check[5].checked == true && check[6].checked== true && check[7].checked == true) || (check[8].checked == true && check[9].checked == true && check[0].checked== true && check[1].checked == true) || (check[2].checked == true && check[3].checked == true && check[4].checked== true && check[5].checked == true) || (check[6].checked == true && check[7].checked == true && check[8].checked== true && check[9].checked == true) || (check[2].checked == true && check[3].checked == true && check[4].checked== true && check[5].checked == true) || (check[1].checked == true && check[3].checked == true && check[9].checked== true && check[2].checked == true) )

   {

       alert('você só pode alugar 4 livros por vez')

       check[0].checked = false;

       check[1].checked = false;

       check[2].checked = false;

       check[3].checked = false;

       check[4].checked = false;

       check[5].checked = false;

       check[6].checked = false;

       check[7].checked = false;

       check[8].checked = false;

       check[9].checked = false;

   } 

   else

   {

    if (check[0].checked == true) inputs[0].value = "";

    if (check[1].checked == true) inputs[1].value = livros[1];

    if (check[2].checked == true) inputs[2].value = livros[2];

    if (check[3].checked == true) inputs[3].value = livros[3];

    if (check[4].checked == true) inputs[4].value = livros[4];

    if (check[5].checked == true) inputs[5].value = livros[5];

    if (check[6].checked == true) inputs[6].value = livros[6];

    if (check[7].checked == true) inputs[7].value = livros[7];

    if (check[8].checked == true) inputs[8].value = livros[8];

    if (check[9].checked == true) inputs[9].value = livros[9];

   } 



    

    /*for(var i = 0; i < inputs.length; i++)

        if(inputs[i].value != '')

            alert(inputs[i].value);*/

}

function voltar(){
    alert('a');
}