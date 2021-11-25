//CARREGA SNACKBAR
function Carrega_snackbar() { 
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 100);
  } 

 //CARREGA LISTA PRODUTOS
 function Carrega_lista_produtos()
 {
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando Lista Produtos.. <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/ESTOQUE/lista_produtos.php",

          contentType: 'Content-type: text/plain; charset=iso-8859-1',
          beforeSend: function(jqXHR) {
              jqXHR.overrideMimeType('text/html;charset=iso-8859-1');
          },

          type:'post',
          data:{},
          success: function (retorno_produtos) {

              document.getElementById("conteudo_selecionado").innerHTML = retorno_produtos;
              
          }
       }) 
  }, 100);
   

 }

//CARREGA DETALHES DO PRODUTO
function Carrega_produto(cod_prod) { 
  
  var x = document.getElementById("snackbar")
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando Produto... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
 var produto = cod_prod.value;
 localStorage.setItem("cod_prod", produto);
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/ESTOQUE/produto_compra.php",
          type:'post',
          data:{'cod_prod' : produto},
          success: function (retorno_produto) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_produto;   
          }
         
       }) 
  }, 100);  
}

 //CONFIRMA CHEGADA MERCADORIA 
 function Proc_envia_mercadoria_estoque()
 {
    var cod_prod = document.getElementById("cod_prod_compra").value;
    var id_compra = document.getElementById("id_compra").value;
    var qtd_compra = document.getElementById("qtd_compra").value;
    
    
    var x = document.getElementById("snackbar");
    var id_compra_remover = id_compra.value;
    x.innerHTML = "Processando envio.. <div class='spinner-border spinner-border-sm'></div>";
    x.style.backgroundColor = "#333";     

    Carrega_snackbar();
    
    
        $.ajax({
            url:"/SERVIDOR/ESTOQUE/proc_envia_mercadoria_estoque.php",
            type:'post',
            data:{'id_compra' : id_compra, 'cod_prod': cod_prod, 'qtd_compra':qtd_compra},
            success: function (retorno_envia_estoque) {
                
                Carrega_lista_compras_efetuadas();

            }
         }) 

 }

//REMOVE DA LISTA DE SOLICITAÇÕES EFETUADAS
function Proc_remove_solicitacao(id_compra){
    var x = document.getElementById("snackbar");
    var id_compra_remover = id_compra.value;
    x.innerHTML = "Removendo item... <div class='spinner-border spinner-border-sm'></div>";
    x.style.backgroundColor = "red"; 
    Carrega_snackbar();
    
    
        $.ajax({
            url:"/SERVIDOR/ESTOQUE/proc_exclui_solicitacao.php",
            type:'post',
            data:{'id_compra' : id_compra_remover},
            success: function (retorno_remover_solicitacao) {
                
                Carrega_lista_compras();

            }
         }) 
    
    
}



  //ENVIA ITEM PARA REMOVER DA TABELA PROTEFIX
  function Carrega_envia_remover()
  {
    var cod_prod = document.getElementById("cod_prod").value;
    var nome_prod = document.getElementById("nome_prod").value;

    var x = document.getElementById("snackbar")
    x.style.backgroundColor = "red"; 
    x.innerHTML = "Processando envio... <div class='spinner-border spinner-border-sm'></div>";
     Carrega_snackbar();
     setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/ESTOQUE/proc_envia_remover.php",
          type:'post',
          data:{'cod_prod' : cod_prod, 'nome_prod': nome_prod},
          success: function (retorno_remover) {
            var x = document.getElementById("snackbar")
            x.style.backgroundColor = "green"; 
            x.innerHTML = "Envio efetuado com sucesso... <div class='spinner-border spinner-border-sm'></div>";
             Carrega_snackbar();
          }
         
       }) 
  }, 100);  

  }


 //ENVIA SOLICITACAO DE COMPRA
 function Processo_envia_solicitacao()
 {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Enviando Solicitação... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    var cod_prod = document.getElementById("cod_prod").value;
    var nome_prod = document.getElementById("nome_prod").value;
    var observacao = document.getElementById("observacao").value;
    $("#myModalSolicitacaoCompra").modal('hide');
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/ESTOQUE/proc_envia_solicitacao.php",
            type:'post',
            data:{'cod_prod':cod_prod, 'nome_prod':nome_prod, 'observacao':observacao},
            success: function () {
               
                $.ajax({
                    url:"/SERVIDOR/ESTOQUE/produto_compra.php",
                    type:'post',
                    data:{'cod_prod' : localStorage.cod_prod},
                    success: function (retorno_produto) {
                        document.getElementById("conteudo_selecionado").innerHTML = retorno_produto;   
                    }
                   
                 }) 
                
               
            }
         }) 
    }, 100);
  }

//CARREGA LISTA DE COMPRAS PENDENTES
function Carrega_lista_compras() {
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando Solicitações Pendentes.. <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/ESTOQUE/lista_compra.php",
    
          type:'post',
          data:{},
          success: function (retorno_compra) {

              document.getElementById("conteudo_selecionado").innerHTML = retorno_compra;
              
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
          url:"/SERVIDOR/ESTOQUE/lista_compras_efetuadas.php",
    
          type:'post',
          data:{},
          success: function (retorno_compra_efetuada) {
            
              document.getElementById("conteudo_selecionado").innerHTML = retorno_compra_efetuada;
              
          }
       }) 
  }, 100);
}


 //CARREGA LISTA DE ITEMS PARA REMOVER DA TABELA PROTEFIX
 
  function Carrega_lista_remover() {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando Lista Para Remover... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/ESTOQUE/lista_remover.php",
            type:'post',
            data:{},
            success: function (retorno_lista_remover) {
                document.getElementById("conteudo_selecionado").innerHTML = retorno_lista_remover; 
            }
         }) 
    }, 100);  
}
  
//ATUALIZA CONTAGEM OU INSERE NOVA CONTAGEM
 function Proc_atualiza_contagem() {
  
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Enviando Solicitação... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    var nova_contagem = document.getElementById("nova_contagem").value;
    var cod_prod = document.getElementById("cod_prod_atualiza").value;
    localStorage.cod_prod = cod_prod;
    $("#myModalContagem").modal('hide');
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/ESTOQUE/proc_atualiza_contagem.php",
            type:'post',
            data:{'cod_prod':cod_prod, 'nova_contagem':nova_contagem},
            success: function () {
               
                $.ajax({
                    url:"/SERVIDOR/ESTOQUE/produto_compra.php",
                    type:'post',
                    data:{'cod_prod' : localStorage.cod_prod},
                    success: function (retorno_produto) {
                        document.getElementById("conteudo_selecionado").innerHTML = retorno_produto;   
                    }
                   
                 }) 
                
               
            }
         }) 
    }, 100);


     
 }
 