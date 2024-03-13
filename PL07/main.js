function corFundo(cor){
    document.body.style.background = cor
}

function corFundoVerde(){
    document.body.style.background = "#00FA9A"
}

function corFundoRoxo(){
    document.body.style.background = "#4B0082"
}


function showText(){
    par = document.getElementById("p-ex2a")
    button = document.getElementById("b-ex2a")
    if (par.style.display == "none")
    {
        par.style.display = "block"
        button.textContent = "Ocultar"
    }
    else{
        par.style.display = "none"
        button.textContent = "Mostrar"
    }
}

function fillText()
{
    texto = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat tempore maiores sed nesciunt beatae commodi quam eius mollitia, est praesentium nihil vel? Quod veritatis dicta eum eveniet laudantium molestiae accusamus. Odio laudantium provident corporis doloribus repellendus distinctio? Distinctio atque nam, nihil illum qui soluta ipsam quos eaque officiis necessitatibus obcaecati perspiciatis sequi, assumenda, deserunt est ab accusamus ducimus ratione adipisci? Alias, ullam, cum quidem officiis neque officia consequuntur sapiente incidunt exercitationem quo labore corrupti. Fugiat in similique id quam! Magnam quae vel harum similique ea, saepe quidem unde veniam ipsa. Nulla ipsam nisi corrupti ullam natus eligendi, placeat voluptatem. Accusantium doloremque dolorum quasi! Sint architecto dolorum, molestiae accusantium quaerat assumenda quo dolor quae officiis ducimus harum tempora impedit iste unde."
    par = document.getElementById("p-ex2b")
    b = document.getElementById('b-ex2b')
    console.log(par.textContent.length)
    if (par.textContent.length == 0){
        par.innerHTML = texto
        b.textContent = "Apagar"
    }
    else
    {
        par.innerHTML = "";
        b.textContent = "Preencher"
    }
}

function visibilidadeFrase(){
    frase =  document.getElementById("frase")
    frase.style.visibility = 'hidden'
}

function aumentar(){
    document.getElementById('p-ex4').style.fontSize = "40px";
    document.getElementById('p-ex4').style.textAlign = "center"
}

function diminuir(){
    document.getElementById('p-ex4').style.fontSize = "10px";
    document.getElementById('p-ex4').style.textAlign = "right"
}

function alterarTamanho(tamanho, alinhamento){
    document.getElementById('p-ex4').style.fontSize = tamanho
    document.getElementById('p-ex4').style.textAlign = alinhamento
}

function mudarTamanho (tamanho)
{
    par = document.getElementById('p-ex4')
    let tamanhoInicial = parseInt(par.style.fontSize)
    console.log(tamanhoInicial)
    par.style.fontSize = tamanhoInicial + tamanho + "px";
}
let booleana = false;

function criar(){
    if (booleana ==  false)
    {
        let p = document.createElement("p")
        p.innerHTML = "<span id='span'>ahsdgashdgashdghasdgahs</span>   asjdajdajshdjadhasdaddgahsdgahsdgahgsdhasgdhasgdas"
        booleana = true;
        document.body.appendChild(p)
    }

}