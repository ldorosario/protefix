//CARREGA SNACKBAR

document.addEventListener('keydown', function (event) {
  if (event.keyCode === 13 && event.target.nodeName === 'INPUT') {
    var form = event.target.form;
    var index = Array.prototype.indexOf.call(form, event.target);
    form.elements[index + 1].focus();
    event.preventDefault();
  }
});

document.addEventListener('keydown', function (event) {
  if (event.keyCode === 13 && event.target.nodeName === 'SELECT') {
    var form = event.target.form;
    var index = Array.prototype.indexOf.call(form, event.target);
    form.elements[index + 1].focus();
    event.preventDefault();
  }
});

document.addEventListener('keydown', function (event) {
  if (event.keyCode === 13 && event.target.nodeName === 'TEXTAREA') {
    var form = event.target.form;
    var index = Array.prototype.indexOf.call(form, event.target);
    form.elements[index + 1].focus();
    event.preventDefault();
  }
});



function Carrega_snackbar() { 
    var x = document.getElementById("snackbar");
    x.className = "show";
    
} 

function Snackbar_sair() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  x.className = x.className.replace("show", ""); 
}


//FUNCOES ENTRADA E SAIDA 

function Proc_retorno_banco()
{
  if(localStorage.banco == "ITAU PROTEFIX"){Carrega_banco_itau_protefix()}
               if(localStorage.banco == "ITAU FICOFIX"){Carrega_banco_itau_ficofix()}
               if(localStorage.banco == "BANRISUL PROTEFIX"){Carrega_banco_banrisul_protefix()}
               if(localStorage.banco == "BANRISUL FICOFIX"){Carrega_banco_banrisul_ficofix()}
               if(localStorage.banco == "BANCO DO BRASIL PROTEFIX"){Carrega_banco_brasil_protefix()}
               if(localStorage.banco == "SAFRA PROTEFIX"){Carrega_banco_safra_protefix()}
               if(localStorage.banco == "SANTANDER PROTEFIX"){Carrega_banco_santander_protefix()}
               if(localStorage.banco == "SICREDI PROTEFIX"){Carrega_banco_sicredi_protefix()}
               if(localStorage.banco == "SICREDI FICOFIX"){Carrega_banco_sicredi_ficofix()}
               if(localStorage.banco == "CAIXA PROTEFIX"){Carrega_banco_caixa_protefix()}

}

//CARREGA BANCOS 
function Carrega_banco_itau_protefix() {
      var banco = document.getElementById("ITAU_PROTEFIX").value;
      localStorage.setItem("banco", banco);
      var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
            type:'post',
            data:{'BANCO': banco },
            success: function (retorno_banco) {
                document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
              
                Snackbar_sair()
            }
         }) 
    }, 1000);
      
}
  function Carrega_banco_itau_ficofix() {
    var banco = document.getElementById("ITAU_FICOFIX").value;
    localStorage.setItem("banco", banco);
    var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
          type:'post',
          data:{'BANCO': banco },
          success: function (retorno_banco) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
            
              Snackbar_sair()
          }
       }) 
  }, 1000);
    
}
function Carrega_banco_banrisul_protefix() {
    var banco = document.getElementById("BANRISUL_PROTEFIX").value;
    localStorage.setItem("banco", banco);
    var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
          type:'post',
          data:{'BANCO': banco },
          success: function (retorno_banco) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
              Snackbar_sair()
          }
       }) 
  }, 1000);
    
}
function Carrega_banco_banrisul_ficofix() {
    var banco = document.getElementById("BANRISUL_FICOFIX").value;
 localStorage.setItem("banco", banco);
    var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
          type:'post',
          data:{'BANCO': banco },
          success: function (retorno_banco) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
              Snackbar_sair()
          }
       }) 
  }, 1000);
    
}
function Carrega_banco_brasil_protefix() {
    var banco = document.getElementById("BRASIL_PROTEFIX").value;
    localStorage.setItem("banco", banco);
    var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
          type:'post',
          data:{'BANCO': banco },
          success: function (retorno_banco) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
              Snackbar_sair()
          }
       }) 
  }, 1000);
    
}
function Carrega_banco_safra_protefix() {
    var banco = document.getElementById("SAFRA_PROTEFIX").value;
    localStorage.setItem("banco", banco);
    var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
          type:'post',
          data:{'BANCO': banco },
          success: function (retorno_banco) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
              Snackbar_sair()
          }
       }) 
  }, 1000);
    
}
function Carrega_banco_santander_protefix() {
    var banco = document.getElementById("SANTANDER_PROTEFIX").value;
    localStorage.setItem("banco", banco);
    var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
          type:'post',
          data:{'BANCO': banco },
          success: function (retorno_banco) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
              Snackbar_sair()
          }
       }) 
  }, 1000);
    
}
function Carrega_banco_sicredi_protefix() {
    var banco = document.getElementById("SICREDI_PROTEFIX").value;
    localStorage.setItem("banco", banco);
    var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
          type:'post',
          data:{'BANCO': banco },
          success: function (retorno_banco) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
              Snackbar_sair()
          }
       }) 
  }, 1000);
    
}
function Carrega_banco_sicredi_ficofix() {
    var banco = document.getElementById("SICREDI_FICOFIX").value;
    localStorage.setItem("banco", banco);
    var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
          type:'post',
          data:{'BANCO': banco },
          success: function (retorno_banco) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
              Snackbar_sair()
          }
       }) 
  }, 1000);
    
}
function Carrega_banco_caixa_protefix() {
    var banco = document.getElementById("CAIXA_PROTEFIX").value;
    localStorage.setItem("banco", banco);
    var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando banco... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
      $.ajax({
          url:"/SERVIDOR/FINANCEIRO/carrega_banco.php",
          type:'post',
          data:{'BANCO': banco },
          success: function (retorno_banco) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_banco;
              Snackbar_sair()
          }
       }) 
  }, 1000);
    
}
//FIM CARREGA BANCOS

//DELETA REGISTRO BANCO
function Proc_remove_registro(id_registro){
    id = id_registro.value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "red"; 
    x.innerHTML = "Removendo registro... <div class='spinner-border spinner-border-sm'></div>";
    
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/FINANCEIRO/proc_remove_registro.php",
            type:'post',
            data:{'id': id },
            success: function () {
               if(localStorage.banco == "ITAU PROTEFIX"){Carrega_banco_itau_protefix()}
               if(localStorage.banco == "ITAU FICOFIX"){Carrega_banco_itau_ficofix()}
               if(localStorage.banco == "BANRISUL PROTEFIX"){Carrega_banco_banrisul_protefix()}
               if(localStorage.banco == "BANRISUL FICOFIX"){Carrega_banco_banrisul_ficofix()}
               if(localStorage.banco == "BANCO DO BRASIL PROTEFIX"){Carrega_banco_brasil_protefix()}
               if(localStorage.banco == "SAFRA PROTEFIX"){Carrega_banco_safra_protefix()}
               if(localStorage.banco == "SANTANDER PROTEFIX"){Carrega_banco_santander_protefix()}
               if(localStorage.banco == "SICREDI PROTEFIX"){Carrega_banco_sicredi_protefix()}
               if(localStorage.banco == "SICREDI FICOFIX"){Carrega_banco_sicredi_ficofix()}
               if(localStorage.banco == "CAIXA PROTEFIX"){Carrega_banco_caixa_protefix()}
            }
         }) 
    }, 100);
}
//FIM DELETA REGISTRO BANCO


//DELETA REGISTRO BANCO
function Proc_remove_registro_pago(id_registro){
    id = id_registro.value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "red"; 
    x.innerHTML = "Removendo registro... <div class='spinner-border spinner-border-sm'></div>";
    
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/FINANCEIRO/proc_remove_registro.php",
            type:'post',
            data:{'id': id },
            success: function () {
                 Carrega_pagos();
            }
         }) 
    }, 100);
}
//FIM DELETA REGISTRO BANCO

//PROC PAGO
function Proc_pago(i){
    id = i.value;
    $.ajax({
        url:"/SERVIDOR/FINANCEIRO/proc_registro_pago.php",
        type:'post',
        data:{'id':id},
        success: function () {
            if(localStorage.banco == "ITAU PROTEFIX"){Carrega_banco_itau_protefix()}
            if(localStorage.banco == "ITAU FICOFIX"){Carrega_banco_itau_ficofix()}
            if(localStorage.banco == "BANRISUL PROTEFIX"){Carrega_banco_banrisul_protefix()}
            if(localStorage.banco == "BANRISUL FICOFIX"){Carrega_banco_banrisul_ficofix()}
            if(localStorage.banco == "BANCO DO BRASIL PROTEFIX"){Carrega_banco_brasil_protefix()}
            if(localStorage.banco == "SAFRA PROTEFIX"){Carrega_banco_safra_protefix()}
            if(localStorage.banco == "SANTANDER PROTEFIX"){Carrega_banco_santander_protefix()}
            if(localStorage.banco == "SICREDI PROTEFIX"){Carrega_banco_sicredi_protefix()}
            if(localStorage.banco == "SICREDI FICOFIX"){Carrega_banco_sicredi_ficofix()}
            if(localStorage.banco == "CAIXA PROTEFIX"){Carrega_banco_caixa_protefix()}
          
        }
     }) 


}
//FIM PAGO

function Salva_Operacao(i) {

    var operacao = i.value;
     localStorage.setItem("operacao",operacao);
     if(localStorage.operacao == "CHEQUE"){document.getElementById("operacao_selecionada").innerHTML = localStorage.operacao + " " + localStorage.banco;}
     else
     {
         document.getElementById("operacao_selecionada2").innerHTML = localStorage.operacao + " " + localStorage.banco;
     }
}

function Proc_operacao_cheque(){
  var operacao = localStorage.operacao;
  var banco = localStorage.banco;
  var dt_emissao = document.getElementById("data").value;
  var tipo_lanc = document.getElementById("tipo").value;
  var observacao = document.getElementById("observacao").value;
  var ncheque = document.getElementById("ncheque").value;
  var valor = document.getElementById("valor").value;
  var predatado = document.getElementById("predatado").value;
  var situacao = document.getElementById("situacao").value;
  var x = document.getElementById("repetir").checked;
 
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Salvando registro... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/FINANCEIRO/proc_novo_registro.php",
            type:'post',
            data:{'banco':banco, 'operacao':operacao, 'dt_emissao':dt_emissao, 'tipo_lanc':tipo_lanc, 'observacao':observacao,
        'ncheque':ncheque, 'valor':valor, 'predatado':predatado, 'situacao':situacao },
            success: function () {
                document.getElementById("form_cheque").reset();

                if(localStorage.banco == "ITAU PROTEFIX"){Carrega_banco_itau_protefix()}
                if(localStorage.banco == "ITAU FICOFIX"){Carrega_banco_itau_ficofix()}
                if(localStorage.banco == "BANRISUL PROTEFIX"){Carrega_banco_banrisul_protefix()}
                if(localStorage.banco == "BANRISUL FICOFIX"){Carrega_banco_banrisul_ficofix()}
                if(localStorage.banco == "BANCO DO BRASIL PROTEFIX"){Carrega_banco_brasil_protefix()}
                if(localStorage.banco == "SAFRA PROTEFIX"){Carrega_banco_safra_protefix()}
                if(localStorage.banco == "SANTANDER PROTEFIX"){Carrega_banco_santander_protefix()}
                if(localStorage.banco == "SICREDI PROTEFIX"){Carrega_banco_sicredi_protefix()}
                if(localStorage.banco == "SICREDI FICOFIX"){Carrega_banco_sicredi_ficofix()}
                if(localStorage.banco == "CAIXA PROTEFIX"){Carrega_banco_caixa_protefix()}
      
            }
         }) 
    }, 1000);   

    $('#myModalOperacao').modal('hide');
}


function Proc_operacao_cheque2(){
    var operacao = localStorage.operacao;
    var banco = localStorage.banco;
    var dt_emissao = document.getElementById("data2").value;
    var tipo_lanc = document.getElementById("tipo2").value;
    var observacao = document.getElementById("observacao2").value;
    var valor = document.getElementById("valor2").value;
    var situacao = document.getElementById("situacao2").value;
    
      var x = document.getElementById("snackbar");
      x.style.backgroundColor = "green"; 
      x.innerHTML = "Salvando registro... <div class='spinner-border spinner-border-sm'></div>";
      Carrega_snackbar();
      setTimeout(function(){
          $.ajax({
              url:"/SERVIDOR/FINANCEIRO/proc_novo_registro2.php",
              type:'post',
              data:{'banco':banco, 'operacao':operacao, 'dt_emissao':dt_emissao, 'tipo_lanc':tipo_lanc, 'observacao':observacao,
              'valor':valor, 'situacao':situacao },
              success: function () {
                  document.getElementById("form_cheque").reset();
  
                  if(localStorage.banco == "ITAU PROTEFIX"){Carrega_banco_itau_protefix()}
                  if(localStorage.banco == "ITAU FICOFIX"){Carrega_banco_itau_ficofix()}
                  if(localStorage.banco == "BANRISUL PROTEFIX"){Carrega_banco_banrisul_protefix()}
                  if(localStorage.banco == "BANRISUL FICOFIX"){Carrega_banco_banrisul_ficofix()}
                  if(localStorage.banco == "BANCO DO BRASIL PROTEFIX"){Carrega_banco_brasil_protefix()}
                  if(localStorage.banco == "SAFRA PROTEFIX"){Carrega_banco_safra_protefix()}
                  if(localStorage.banco == "SANTANDER PROTEFIX"){Carrega_banco_santander_protefix()}
                  if(localStorage.banco == "SICREDI PROTEFIX"){Carrega_banco_sicredi_protefix()}
                  if(localStorage.banco == "SICREDI FICOFIX"){Carrega_banco_sicredi_ficofix()}
                  if(localStorage.banco == "CAIXA PROTEFIX"){Carrega_banco_caixa_protefix()}
                      
      
              }
           }) 
      }, 1000);
    
    
      $('#myModalOperacao2').modal('hide');
  }

//CARREGA PAGOS
function Carrega_pagos() {
 
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando pagos... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/FINANCEIRO/carrega_pagos.php",
            type:'post',
            data:{'BANCO':localStorage.banco},
            success: function (retorno_pagos) {
              document.getElementById("conteudo_selecionado").innerHTML = retorno_pagos;
              Snackbar_sair();
            }
         }) 
    }, 100);
}
//FIM CARREGA PAGOS





//CORRIG VALOR
function corrigir_valor()
{
    valor = document.getElementById("valor").value;
  
    var formatter = new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL',
      
        // These options are needed to round to whole numbers if that's what you want.
        //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
        //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
      });
      
    document.getElementById("valor").value = formatter.format(valor/100) 
  
}
//FIM

//CORRIG VALOR2
function corrigir_valor2()
{
    valor = document.getElementById("valor2").value;
  
    var formatter = new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL',
      
        // These options are needed to round to whole numbers if that's what you want.
        //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
        //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
      });
      
    document.getElementById("valor2").value = formatter.format(valor/100); 

}
//FIM
//FIM ENTRADA E SAIDAS

//<--------------------------------------------------------------------------------------------------->

//FUNCÇÕES NFE CANCELADAS
//CARREGA TODAS NFE CANCELADA
function Carrega_nfe_cancelada() {
        var x = document.getElementById("snackbar");
     x.style.backgroundColor = "#333"; 
     x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
     Carrega_snackbar();
 setTimeout(function(){
    $.ajax({
        url:"/SERVIDOR/FINANCEIRO/nfe_cancelada.php",
        type:'post',
        data:{},
        success: function (retorno_nfe_cancelada) {
          document.getElementById("conteudo_selecionado").innerHTML = retorno_nfe_cancelada;
          Snackbar_sair()
        }
     }) 
  }, 1000);
}
//FIM CARREGA TODAS NFE

function Carrega_vernfe(i) {
    var NUM_NOTA = i.value;

    var x = document.getElementById("snackbar");
     x.style.backgroundColor = "#333"; 
     x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
     Carrega_snackbar();
 setTimeout(function(){
    $.ajax({
        url:"/SERVIDOR/FINANCEIRO/carrega_vernfe.php",
        type:'post',
        data:{'NUM_NOTA':NUM_NOTA},
        success: function (retorno_vernfe) {
          document.getElementById("conteudo_selecionado").innerHTML = retorno_vernfe;
          Snackbar_sair()
        }
     }) 
  }, 1000);
}

function Carrega_nova_nfe_cancelada() {

    $("#myModalContagem").modal('hide');

  var NUM_NOTA = document.getElementById("NUM_NOTA").value;
  var EMPRESA = document.getElementById("EMPRESA").value;

    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Buscando NFE... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
setTimeout(function(){
   $.ajax({
       url:"/SERVIDOR/FINANCEIRO/carrega_nova_nota_cancelada.php",
       type:'post',
       data:{'NUM_NOTA':NUM_NOTA, 'EMPRESA': EMPRESA},
       success: function (retorno_vernfe) {
         document.getElementById("conteudo_selecionado").innerHTML = retorno_vernfe;
         Snackbar_sair()
       }
    }) 
 }, 1000);

}

function Proc_registra_nfecancelada() 
{
    var NUM_NOTA = document.getElementById("NUM_NOTA").value;
    var NOME_CLI_FOR = document.getElementById("NOME_CLI_FOR").value;
    var INFO_ADC = document.getElementById("INFO_ADC").value;
    var DT_ALTERA = document.getElementById("DT_ALTERA").value;
    var SITUACAO = document.getElementById("SITUACAO").value;
    var DT_EMISSAO = document.getElementById("DT_EMISSAO").value;
  
      var x = document.getElementById("snackbar");
      x.style.backgroundColor = "green"; 
      x.innerHTML = "Registrando NFE... <div class='spinner-border spinner-border-sm'></div>";
      Carrega_snackbar();
  setTimeout(function(){
     $.ajax({
         url:"/SERVIDOR/FINANCEIRO/proc_novo_nfecancelada.php",
         type:'post',
         data:{'NUM_NOTA':NUM_NOTA, 'NOME_CLI_FOR': NOME_CLI_FOR, 'INFO_ADC':INFO_ADC, 'DT_ALTERA':DT_ALTERA, 'SITUACAO':SITUACAO,'DT_EMISSAO':DT_EMISSAO},
         success: function () {
           Carrega_nfe_cancelada();
           Snackbar_sair()
         }
      }) 
   }, 1000); 
    
}

function Proc_remove_nfe_cancelada(i) {
   
      var id = i.value;
      var x = document.getElementById("snackbar");
      x.style.backgroundColor = "red"; 
      x.innerHTML = "Removendo NFE... <div class='spinner-border spinner-border-sm'></div>";
      Carrega_snackbar();
  setTimeout(function(){
     $.ajax({
         url:"/SERVIDOR/FINANCEIRO/proc_remove_nfe_cancelada.php",
         type:'post',
         data:{'id':id},
         success: function () {
           Carrega_nfe_cancelada();
           Snackbar_sair()
         }
      }) 
   }, 1000); 
}


//FIM FUNÇÕES NFE CANCELADAS

//<---------------------------------------------------------------------------------------------------->


//FUNCOES CADASTRO/ANALISE CLIENTES

function Proc_carrega_lista_cliente() {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
setTimeout(function(){
   $.ajax({
       url:"/SERVIDOR/FINANCEIRO/lista_cliente.php",
       type:'post',
       data:{},
       success: function (retorno_lista_cliente) {
         document.getElementById("conteudo_selecionado").innerHTML = retorno_lista_cliente;
         Snackbar_sair()
       }
    }) 
 }, 1000); 
}

function Carrega_cliente(i) {
    id = i.value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando cliente... <div class='spinner-border spinner-border-sm'></div>";
    $("#myModalCNPJ").modal('hide');
    $("#myModalIE").modal('hide');
    $("#myModalSERASA").modal('hide');
    $("#myModalFICHACADASTRAL").modal('hide');
    $("#myModalCONTRATOSOCIAL").modal('hide');
    $("#myModalSERASANOVO").modal('hide');

    Carrega_snackbar();
setTimeout(function(){
   $.ajax({
       url:"/SERVIDOR/FINANCEIRO/proc_carrega_cliente.php",
       type:'post',
       data:{'id':id},
       success: function (retorno_cliente_seleceionado) {
         document.getElementById("conteudo_selecionado").innerHTML = retorno_cliente_seleceionado;
         Snackbar_sair()
       }
    }) 
 }, 1000);


}
function Proc_remove_cliente(i) {

    id = i.value;

    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "red"; 
    x.innerHTML = "Removendo cliente... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
setTimeout(function(){
   $.ajax({
       url:"/SERVIDOR/FINANCEIRO/proc_remove_cliente.php",
       type:'post',
       data:{'id':id},
       success: function () {
        Proc_carrega_lista_cliente();
        Snackbar_sair()
       }
    }) 
 }, 1000);
    
}
function Proc_remove_cliente_cadastro(a) {

  id = a.value;

  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "red"; 
  x.innerHTML = "Removendo cliente... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
setTimeout(function(){
 $.ajax({
     url:"/SERVIDOR/FINANCEIRO/proc_remove_cliente_cadastro.php",
     type:'post',
     data:{'id':id},
     success: function () {
      Carrega_lista_cadastro_cliente();
      Snackbar_sair()
      
     }
  }) 
}, 1000);
}

function Carregar_cnpj() {

   
        //
        
        
    
        //Início do Comando AJAX
        $.ajax({
          //O campo URL diz o caminho de onde virá os dados
          //É importante concatenar o valor digitado no CNPJ
          url: 'http://192.168.1.167/SERVIDOR/FINANCEIRO/dados/cnpj.php?cnpj='+$("#cnpj").val(),
    //Atualização: caso use java, use cnpj.jsp, usando o outro exemplo.
          //Aqui você deve preencher o tipo de dados que será lido,
          //no caso, estamos lendo JSON.
          dataType: 'json',
          //SUCESS é referente a função que será executada caso
          //ele consiga ler a fonte de dados com sucesso.
          //O parâmetro dentro da função se refere ao nome da variável
          //que você vai dar para ler esse objeto.
          success: function(resposta){
            //Confere se houve erro e o imprime
            if(resposta.status == "ERROR"){
              alert(resposta.message + "\nPor favor, digite os dados manualmente.");
              $("#post #nome").focus().select();
              return false;
            }
            //Agora basta definir os valores que você deseja preencher
            //automaticamente nos campos acima.
            $("#post #nome").val(resposta.nome);
            $("#post #fantasia").val(resposta.fantasia);
            $("#post #atividade").val(resposta.atividade_principal[0].text + " (" + resposta.atividade_principal[0].code + ")");
            $("#post #telefone").val(resposta.telefone);
            $("#post #email").val(resposta.email);
            $("#post #logradouro").val(resposta.logradouro);
            $("#post #complemento").val(resposta.complemento);
            $("#post #bairro").val(resposta.bairro);
            $("#post #cidade").val(resposta.municipio);
            $("#post #uf").val(resposta.uf);
            $("#post #cep").val(resposta.cep);
            $("#post #numero").val(resposta.numero);
          }
        });


}
function Proc_libera_cliente(y) {   
  id = y.value;

  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "green"; 
  x.innerHTML = "Liberando cliente... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
setTimeout(function(){
 $.ajax({
     url:"/SERVIDOR/FINANCEIRO/proc_libera_cliente.php",
     type:'post',
     data:{'id':id},
     success: function () {
      Carrega_lista_cadastro_cliente();
      Snackbar_sair()
     }
  }) 
}, 1000);
  
}
function Proc_salva_cliente() {

    var cnpj = document.getElementById("cnpj").value;
    var nome = document.getElementById("nome").value;
    var fantasia = document.getElementById("fantasia").value;
    var atividade = document.getElementById("atividade").value;
    var tele = document.getElementById("telefone").value;
    var email = document.getElementById("email").value;
    var emailnfeboleto = document.getElementById("emailnfeboleto").value;
    var cep = document.getElementById("cep").value;
    var logradouro = document.getElementById("logradouro").value;
    var numero = document.getElementById("numero").value;
    var complemento = document.getElementById("complemento").value;
    var cidade = document.getElementById("cidade").value;
    var bairro = document.getElementById("bairro").value;
    var uf = document.getElementById("uf").value;
    var compra = document.getElementById("compra").value;
    var vendedor = document.getElementById("vendedor").value;
    var clienteloja = document.getElementById("clienteloja").value;
    var infoadicional = document.getElementById("infoadicional").value;
    

    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Registrando cliente... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
setTimeout(function(){
   $.ajax({
       url:"/SERVIDOR/FINANCEIRO/proc_novo_cliente.php",
       type:'post',
       data:{'cnpj':cnpj, 'razaosocial':nome, 'fantasia':fantasia, 'atividade':atividade, 'tele':tele, 'email':email, 'emailnfeboleto':emailnfeboleto, 'cep':cep, 'logradouro':logradouro, 'numero':numero, 'complemento': complemento, 'cidade':cidade
       , 'bairro':bairro, 'uf':uf, 'compra':compra, 'vendedor':vendedor, 'clienteloja':clienteloja, 'infoadicional':infoadicional},
       success: function (retorno_cadastro_cliente) {
         document.getElementById("aviso_cadastro_cliente").innerHTML = retorno_cadastro_cliente;
         Snackbar_sair()
         if(document.getElementById("aviso_cadastro_cliente").innerText == "CLIENTE JÁ CADASTRADO!"){}
         else
         {
          $("#myModalCadastroCliente").modal('hide');
          Proc_carrega_lista_cliente();
          Snackbar_sair()
         }

       }
    }) 
 }, 1000);
    




}
function Carrega_info_canhoto() {
  $("#myModalInfoCanhoto").modal('show');
}
function Carrega_info_ass_canhoto() {
  var NUM_NOTA = document.getElementById("NUM_NOTA").value
  $.ajax({
    url:"/SERVIDOR/FINANCEIRO/carrega_info_nfe.php",
    type:'post',
    data:{'NUM_NOTA':NUM_NOTA},
    success: function (retorno_nfe_info) {
     document.getElementById("nfe_selecionada").innerHTML = retorno_nfe_info;
     Snackbar_sair()
      
    }
 }) 
}
function Proc_atualiza_cliente() {
  var razaosocial = document.getElementById("nome").value;
  var data_cadastro = document.getElementById("data_cadastro").value;
  var limitecredito = document.getElementById("limitecredito").value;
  var status = document.getElementById("status").value;
  var codcliente = document.getElementById("codcliente").value;
  var id  = document.getElementById("id").value;
  var cnpj = document.getElementById("cnpj").value;
  var nome = document.getElementById("nome").value;
  var fantasia = document.getElementById("fantasia").value;
  var tele = document.getElementById("telefone").value;
  var email = document.getElementById("email").value;
  var emailnfeboleto = document.getElementById("emailnfeboleto").value;
  var logradouro = document.getElementById("logradouro").value;
  var numero = document.getElementById("numero").value;
  var complemento = document.getElementById("complemento").value;
  var cidade = document.getElementById("cidade").value;
  var bairro = document.getElementById("bairro").value;
  var uf = document.getElementById("uf").value;
  var compra = document.getElementById("compra").value;
  var vendedor = document.getElementById("vendedor").value;
  var infoadicional = document.getElementById("infoadicional").value;

  

  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Atualizando cliente... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
setTimeout(function(){
 $.ajax({
     url:"/SERVIDOR/FINANCEIRO/proc_atualiza_cliente.php",
     type:'post',
     data:{'data_cadastro':data_cadastro ,'razaosocial':razaosocial ,'limitecredito':limitecredito,'status':status,'codcliente':codcliente,'id':id,'cnpj':cnpj, 'razaosocial':nome, 'fantasia':fantasia,'telefone':tele, 'email':email, 'emailnfeboleto':emailnfeboleto, 'logradouro':logradouro, 'numero':numero, 'complemento': complemento, 'cidade':cidade
     , 'bairro':bairro, 'uf':uf, 'compra':compra, 'vendedor':vendedor, 'infoadicional':infoadicional},
     success: function () {
     
      Proc_carrega_lista_cliente();
      Snackbar_sair()
      
     }
  }) 
}, 1000);
  




}
function Carrega_lista_analise_cliente() {

  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando Analise Clientes... <div class='spinner-border spinner-border-sm'></div>";


  Carrega_snackbar();
setTimeout(function(){
 $.ajax({
     url:"/SERVIDOR/FINANCEIRO/carrega_lista_analise_cliente.php",
     type:'post',
     data:{},
     success: function (retorno_lista_analise_cliente) {
       document.getElementById("conteudo_selecionado").innerHTML = retorno_lista_analise_cliente;
       Snackbar_sair()

     }
  }) 
}, 1000);
}

function Carrega_lista_cadastro_cliente() {
  
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando Cadastro Clientes... <div class='spinner-border spinner-border-sm'></div>";


  Carrega_snackbar();
setTimeout(function(){
 $.ajax({
     url:"/SERVIDOR/FINANCEIRO/carrega_lista_cadastro.php",
     type:'post',
     data:{},
     success: function (retorno_lista_analise_cliente) {
       document.getElementById("conteudo_selecionado").innerHTML = retorno_lista_analise_cliente;
       Carrega_status();
       Snackbar_sair()
     }
  }) 
}, 1000);
}

function Proc_muda_status() {
  var status = document.getElementById("status").value;

  var x = document.getElementById("snackbar");
  var cor = "";
  var texto = "";
  if(status == "2"){cor = "orange"; texto = "OCUPADO"}
  if(status == "1"){cor = "green"; texto = "ONLINE"}
  if(status == "3"){cor = "red"; texto = "OFFLINE"}
  x.style.backgroundColor = cor; 
  x.innerHTML = "VOCÊ MUDOU O STATUS DO FINANCEIRO PARA :  " + texto + " <div class='spinner-border spinner-border-sm'></div>";


  Carrega_snackbar();
setTimeout(function(){
 $.ajax({
     url:"/SERVIDOR/FINANCEIRO/proc_status.php",
     type:'post',
     data:{'status' : status},
     success: function () {
      Carrega_status();

     }
  }) 
}, 1000);

}

function Carrega_status() {
  
  $.ajax({
    url:"/SERVIDOR/FINANCEIRO/carrega_status.php",
    type:'post',
    data:{},
    success: function (retorno_status) {
      document.getElementById("status_selecionado").innerHTML = retorno_status;

    }
 })


}
function Carrega_modal_registro_ass_canhoto() {
  $("#myModalInfoCanhotoAssinatura").modal('show');
}

function Proc_registra_assinatura(){
 
  var NUM_NOTA = document.getElementById("NUM_NOTA").value;
  var ASSINATURA = document.getElementById("ASSINATURA").value;




  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Registrando assinatura... <div class='spinner-border spinner-border-sm'></div>";
  x.style.backgroundColor = "green"; 

  Carrega_snackbar();
setTimeout(function(){
 $.ajax({
     url:"/SERVIDOR/FINANCEIRO/proc_registra_assinatura_canhoto.php",
     type:'post',
     data:{'NUM_NOTA':NUM_NOTA, 'ASSINATURA':ASSINATURA},
     success: function (retorno_registro_assinatura) {
       document.getElementById("canhoto_selecionada").innerHTML = retorno_registro_assinatura;
       document.getElementById("ASSINATURA").value = null;
       Snackbar_sair()
       

       
     }
  }) 
}, 1000);


}


function Soma_local(a) {
 var valor = a.value;
 

}


//------------------------------------------------------RHHH DA TERESINHA---------------------------------------------------------------------------------//


function Carrega_lista_funcionario() 
{

  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando lista funcionário... <div class='spinner-border spinner-border-sm'></div>";
  x.style.backgroundColor = "#333"; 

  Carrega_snackbar();
 setTimeout(function() {
 $.ajax({
     url:"/SERVIDOR/FINANCEIRO/carrega_lista_func.php",
     type:'post',
     data:{},
     success: function (retorno_lista_func) {
       document.getElementById("conteudo_selecionado").innerHTML = retorno_lista_func;
       Snackbar_sair();
     }
  }) 
}, 1000);
}


function Carrega_funcionario(a) {
  var id_entrada_funcionario = a.value;
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando informações funcionário... <div class='spinner-border spinner-border-sm'></div>";
  x.style.backgroundColor = "#333"; 
  localStorage.setItem("id_entrada_funcionario",id_entrada_funcionario);
  Carrega_snackbar();

 $.ajax({
     url:"/SERVIDOR/FINANCEIRO/carrega_funcionario.php",
     type:'post',
     data:{'id_entrada_funcionario':localStorage.id_entrada_funcionario},
     success: function (retorno_func_selecionado) {
     
       document.getElementById("conteudo_selecionado").innerHTML = retorno_func_selecionado;
       Snackbar_sair();
     }
  }) 
}

function Carrega_funcionario_retorno() {
  $("#myModal").modal('hide');
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando informações funcionário... <div class='spinner-border spinner-border-sm'></div>";
  x.style.backgroundColor = "#333"; 
  Carrega_snackbar();

  setTimeout(function() {
    $.ajax({
      url:"/SERVIDOR/FINANCEIRO/carrega_funcionario.php",
      type:'post',
      data:{'id_entrada_funcionario':localStorage.id_entrada_funcionario},
      success: function (retorno_func_selecionado) {
      
        document.getElementById("conteudo_selecionado").innerHTML = retorno_func_selecionado;
        Snackbar_sair();
      }
   }) 
  }, 1000);
 
}

function Proc_remover_parentesco(a) {
  var id_parentesco = a.value;
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#red"; 
  x.innerHTML = "Removendo parentesco... <div class='spinner-border spinner-border-sm'></div>";

  Carrega_snackbar();
 setTimeout(function(){
  $.ajax({
    url:"/SERVIDOR/FINANCEIRO/proc_remover_parentesco.php",
    type:'post',
    data:{'id_parentesco':id_parentesco},
    success: function (retorno_func_selecionado) {
    Carrega_funcionario_retorno();
    }
 })  
 }, 1000);

}

function Proc_adiciona_parentesco() {
  var id = document.getElementById("id_func_adiciona_parentesco").value;
  var nome = document.getElementById("nome").value;
  var nascimento = document.getElementById("nascimento").value;
  var parentesco = document.getElementById("parentesco").value;
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "green"; 
  x.innerHTML = "Adicionando parentesco... <div class='spinner-border spinner-border-sm'></div>";

  Carrega_snackbar();
 setTimeout(function(){
  $.ajax({
    url:"/SERVIDOR/FINANCEIRO/proc_adiciona_parentesco.php",
    type:'post',
    data:{'id':id, 'nome':nome, 'nascimento':nascimento, 'parentesco':parentesco},
    success: function (retorno_parentesco_adicionado) {
    Carrega_funcionario_retorno();
    }
 })  
 }, 1000);

}
function Proc_carrega_doc_funcionario() {
  $("#myModalFuncDocs").modal('show');
  $.ajax({
    url:"/SERVIDOR/FINANCEIRO/carrega_documento_func.php",
    type:'post',
    data:{'id_funcionario':localStorage.id_entrada_funcionario},
    success: function (retorno_func_documento) {
      document.getElementById("documentos_funcionario_selecionado").innerHTML = retorno_func_documento;
    }
 })  

}

function Proc_remove_documento_func(a) {
  var id_documento = a.value;
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "red"; 
  x.innerHTML = "Removendo documento... <div class='spinner-border spinner-border-sm'></div>";

  Carrega_snackbar();
 setTimeout(function(){
  $.ajax({
    url:"/SERVIDOR/FINANCEIRO/proc_remover_documento_func.php",
    type:'post',
    data:{'id_documento':id_documento},
    success: function (retorno_remove_documento){
    
      Proc_carrega_doc_funcionario();
      Snackbar_sair();
    }
 })  
 }, 1000);
}


function Carrega_novo_func() {
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "#333"; 
  x.innerHTML = "Carregando módulo... <div class='spinner-border spinner-border-sm'></div>";
  setTimeout(function(){
  $.ajax({
    url:"/SERVIDOR/FINANCEIRO/carrega_novo_funcionario.php",
    type:'post',
    data:{},
    success: function (retorno_carrega_novo_func){
    document.getElementById("conteudo_selecionado").innerHTML = retorno_carrega_novo_func;
    Snackbar_sair();
    }
 })  
 }, 1000);
}


function  Proc_remover_func(a) {
  var id = a.value;
  var x = document.getElementById("snackbar");
  x.style.backgroundColor = "red"; 
  x.innerHTML = "Removendo... <div class='spinner-border spinner-border-sm'></div>";
  Carrega_snackbar();
  setTimeout(function(){
  $.ajax({
    url:"/SERVIDOR/FINANCEIRO/proc_remover_funcionario.php",
    type:'post',
    data:{'id':id},
    success: function (retorno_remover_funcionario){
    Carrega_lista_funcionario();
    }
 })  
 }, 1000);
}

