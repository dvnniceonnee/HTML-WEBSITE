// alert('Ficheiro externo')
// document.write('aaa')
// let nome = 'Text'; -- variaveis string
// let booleano =  true; -- variaveis booleandas
// let numero = 10; --  booleanda int

function mostrarLista()
{
    document.write("<ul>")
    for (let i = 0; i<=10; i++){
        document.write("<li>" + i + "</li>")
    }
    document.write("</ul>")
}

function corFundo(cor){
    document.body.style.background = cor
}

function mudarCor(){
    cor = document.getElementById("input-cor").value
    document.body.style.background = cor
}

function mudarCorRadio(){
    radioAmarelo = document.getElementById("cor-fundo-amarelo")
    radioVerde = document.getElementById("cor-fundo-verde")

    if (radioAmarelo.checked){
        document.body.style.background = radioAmarelo.value
    }
    else{
        document.body.style.background = radioVerde.value
    }
}

function mudarCorSelect(){
    cor = document.getElementById('cor-select').value

    if (cor != ""){
        document.body.style.background = cor;
        document.getElementById('erro-select').style.display = "none"
    }
    else{
        document.getElementById('erro-select').style.display = "inline"
    }
    
}



// function corFundoAmarelo(){
//     document.body.style.backgroundColor = "yellow"
// }
// 
// function corFundoVerde(){
//     document.body.style.backgroundColor = "green"
// }
// 
// function corFundoLaranja(){
//     document.body.style.backgroundColor = "orange"
// }