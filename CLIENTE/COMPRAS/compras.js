
function Carrega_snackbar() { 
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1000);
  } 


//CARREGA LISTA DE COMPRAS PENDENTES
function Carrega_lista_compras() {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando Solicitações Pendentes.. <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/COMPRAS/lista_compra.php",
      
            type:'post',
            data:{},
            success: function (retorno_compra) {

                document.getElementById("conteudo_selecionado").innerHTML = retorno_compra;
                $("#myModalVerProduto").modal('hide');
                $("#myModal").modal('hide');
                $("#myModalNovaCompra").modal('hide');
               
            }
         }) 
    }, 100);
}

//CARREGA LISTA DE COMPRAS EFETUADAS
function Carrega_lista_compras_efetuadas() {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando Já Efetuadas... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/COMPRAS/lista_compras_efetuadas.php",
      
            type:'post',
            data:{},
            success: function (retorno_compra_efetuada) {
              
                document.getElementById("conteudo_selecionado").innerHTML = retorno_compra_efetuada;
                
            }
         }) 
    }, 100);
}


//CARREGA DETALHES DO PRODUTO
function Carrega_produto(cod_prod) { 
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>"; 
    Carrega_snackbar();
    setTimeout(() => {
        $("#myModalVerProduto").modal('show');  
    }, 1200);

    
   var produto = cod_prod.value;
   localStorage.setItem("cod_prod", produto);

        $.ajax({ 
            url:"/SERVIDOR/COMPRAS/produto_compra.php",
            type:'post',
            data:{'cod_prod' : produto},
            success: function (retorno_produto) {
                document.getElementById("produto_selecionado").innerHTML = retorno_produto;   
            }
           
         }) 

}

//CARREGA A LISTA DE ITEMS PARA REMOVER
function Carrega_lista_remover() {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando Lista Para Remover... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/COMPRAS/lista_remover.php",
            type:'post',
            data:{},
            success: function (retorno_lista_remover) {
                document.getElementById("conteudo_selecionado").innerHTML = retorno_lista_remover; 
            }
         }) 
    }, 100);  
}

//CARREGA LISTA PRODUTOS
function Carrega_lista_produtos() {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando Lista Produtos... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/COMPRAS/lista_produtos.php",
            contentType: 'Content-type: text/plain; charset=iso-8859-1',
      beforeSend: function(jqXHR) {
          jqXHR.overrideMimeType('text/html;charset=iso-8859-1');
      },
            type:'post',
            data:{},
            success: function (retorno_lista_produtos) {
                document.getElementById("conteudo_selecionado").innerHTML = retorno_lista_produtos; 
            }
         }) 
    }, 100);  
}




//REMOVE DA LISTA DE COMPRAS EFETUADAS
function Remove_da_lista_compras_efetuadas(id_compra){
    var x = document.getElementById("snackbar");
    var id_compra_remover = id_compra.value;
    x.innerHTML = "Removendo item... <div class='spinner-border spinner-border-sm'></div>";
    x.style.backgroundColor = "red"; 
    Carrega_snackbar();
    setTimeout(function(){
        var x = document.getElementById("snackbar");
        x.style.backgroundColor = "#333"; 
         x.innerHTML = "Carregando Já Efetuadas... <div class='spinner-border spinner-border-sm'></div>";
         Carrega_snackbar();
        $.ajax({
            url:"/SERVIDOR/COMPRAS/proc_exclui_compra.php",
            type:'post',
            data:{'id_compra' : id_compra_remover},
            success: function (retorno_remover_compras) {

                Carrega_lista_compras_efetuadas(); 
            }
         }) 
    }, 100);  
    
}

//REMOVE DA LISTA DE REMOVER
function Remove_da_lista_remover(cod_prod_remover){
    var x = document.getElementById("snackbar");
    var cod_prod_r = cod_prod_remover.value;
    x.innerHTML = "Removendo item... <div class='spinner-border spinner-border-sm'></div>";
    x.style.backgroundColor = "red"; 
    Carrega_snackbar();
    setTimeout(function(){
        var x = document.getElementById("snackbar");
        x.style.backgroundColor = "#333"; 
         x.innerHTML = "Carregando Lista Remover... <div class='spinner-border spinner-border-sm'></div>";
         Carrega_snackbar();
        $.ajax({
            url:"/SERVIDOR/COMPRAS/proc_confirma_remover.php",
            type:'post',
            data:{'id' : cod_prod_r},
            success: function (retorno_remover) {

                Carrega_lista_remover(); 
            }
         }) 
    }, 100);  

    
}

//ATUALIZA SOLICITACAO DE COMPRA
function Processo_atualiza_compra() {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Processando Solicitação... <div class='spinner-border spinner-border-sm'></div>";
    var id_compra = document.getElementById("id_compra").value;
    var qtd_compra = document.getElementById("qtd_compra").value;
    var cod_prod = document.getElementById("cod_prod").value;
    var detalhe = document.getElementById("detalhe").value;

    $("#myModal").modal('hide');
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/COMPRAS/proc_atualiza_compra.php",
            type:'post',
            data:{'id_compra':id_compra, 'qtd_compra':qtd_compra, 'cod_prod':cod_prod, 'detalhe':detalhe},
            success: function () {
                var x = document.getElementById("snackbar");
                x.style.backgroundColor = "#333"; 
                 x.innerHTML = "Carregando Produto... <div class='spinner-border spinner-border-sm'></div>";
                 Carrega_snackbar();
                $.ajax({
                    url:"/SERVIDOR/COMPRAS/produto_compra.php",
                    type:'post',
                    data:{'cod_prod' : localStorage.cod_prod},
                    success: function (retorno_produto) {
                        document.getElementById("produto_selecionado").innerHTML = retorno_produto;   
                        
                    }
                 }) 
            }
         }) 
    }, 10);  
}

//CRIA PEDIDO DE COMPRA
function Processo_compra() {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Processando Solicitação... <div class='spinner-border spinner-border-sm'></div>";
    var qtd_compra_nova = document.getElementById("qtd_compra_nova").value;
    var cod_prod_nova = document.getElementById("cod_prod_nova").value;
    var detalhe_nova = document.getElementById("detalhe_nova").value;
    var nome_prod_nova = document.getElementById("nome_prod_nova").value;

    localStorage.setItem("cod_prod", cod_prod_nova);

    $("#myModalNovaCompra").modal('hide');
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/COMPRAS/proc_executa_nova_compra.php",
            type:'post',
            data:{'qtd_compra_nova':qtd_compra_nova, 'cod_prod_nova':cod_prod_nova, 'detalhe_nova':detalhe_nova ,'nome_prod_nova':nome_prod_nova},
            success: function () {
                var x = document.getElementById("snackbar");
               x.style.backgroundColor = "#333"; 
                x.innerHTML = "Carregando Produto... <div class='spinner-border spinner-border-sm'></div>";
                Carrega_snackbar();
                $.ajax({
                    url:"/SERVIDOR/COMPRAS/produto_compra.php",
                    type:'post',
                    data:{'cod_prod' : localStorage.cod_prod},
                    success: function (retorno_produto) {
                        document.getElementById("produto_selecionado").innerHTML = retorno_produto; 
                         
                    }
                 }) 
            }
         }) 
    }, 10);  
}

function Encerrar_sessao()
{
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Encerrando Sessão... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function() {
               localStorage.sessao = "";
               window.location="/";
    }, 1000);
   
  
}