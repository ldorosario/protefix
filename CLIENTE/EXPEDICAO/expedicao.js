//CARREGA SNACKBAR
function Carrega_snackbar() { 
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1000);
  } 
  
 
  //CARREGA LISTA DE ENTREGAS
function Carrega_lista_entrega()
{
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando Lista de Entregas... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_lista_entrega.php",
      
            type:'post',
            data:{},
            success: function (retorno_entrega) {
               
                document.getElementById("conteudo_selecionado").innerHTML = retorno_entrega;
                
            }
         }) 
    }, 1000);   
}

//CARREGA LISTA DE TRANSPORTADORA PARA DESPACHO
function Carrega_lista_transportadora() 
{
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_lista_transportadora.php",
      
            type:'post',
            data:{},
            success: function (retorno_entrega) {

                document.getElementById("conteudo_selecionado").innerHTML = retorno_entrega;
                
            }
         }) 
    }, 1000);   
}

//CARREGA DESPACHO
function Carrega_entrega_despacho()
{
    var z = document.getElementById("empresa_pedido").value;
    var y = document.getElementById("myInput_pedido").value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_entrega_despacho.php",
            type:'post',
            data:{'cod_ped':y , 'empresa':z},
            success: function (retorno_envia_despacho) {
                document.getElementById("entrega_despacho").innerHTML = retorno_envia_despacho;
                
            }
         }) 
    }, 1000);

}

//CARREGA LISTA SEPARACAO
function Carrega_lista_separacao() 
{
    
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_lista_separacao.php",
      
            type:'post',
            data:{},
            success: function (retorno_separacao) {
                document.getElementById("conteudo_selecionado").innerHTML = retorno_separacao;
                
            }
         }) 
    }, 1000);   
}

//CARREGA LISTA MOTORISTA
function Carrega_lista_motorista() 
{
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando Lista Motoristas... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_lista_motoristas.php",
      
            type:'post',
            data:{},
            success: function (retorno_motorista) {
                document.getElementById("conteudo_selecionado").innerHTML = retorno_motorista;
                
            }
         }) 
    }, 1000);   
}

//REMOVE MOTORISTA
function Proc_remove_motorista(id_motorista) 
{
    id = id_motorista.value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "red"; 
    x.innerHTML = "Removendo motorista.. <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/proc_remove_motorista.php",
            type:'post',
            data:{'id':id},
            success: function (retorno_motorista) {

                Carrega_lista_motorista();
            }
         }) 
    }, 1000);   
}



//NOVO MOTORISTA
function Proc_novo_motorista() 
{
    novo_motorista = document.getElementById("novo_motorista").value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Adicionando motorista... <div class='spinner-border spinner-border-sm'></div>";
    $("#myModalNovoMotorista").modal('hide');
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/proc_novo_motorista.php",
            type:'post',
            data:{'novo_motorista':novo_motorista},
            success: function (retorno_motorista) {

                Carrega_lista_motorista();
            }
         }) 
    }, 1000);   
}

//CARREGA DETALHES DA ENTREGA
function Carrega_detalhe_entrega(num_ped) {
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando entrega... <div class='spinner-border spinner-border-sm'></div>";
    num_pedido = num_ped.value;
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/detalhe_entrega.php",
      
            type:'post',
            data:{'NUM_PEDIDO':num_pedido},
            success: function (retorno_detalhe_entrega) {
                document.getElementById("conteudo_selecionado").innerHTML = retorno_detalhe_entrega;
                
            }
         }) 
    }, 1000); 
}


function Carrega_nova_entregas()
{
    var e = document.getElementById("select_motorista");

	var strUser = e.options[e.selectedIndex].text; 

     localStorage.setItem("motorista", strUser);
     
     if(localStorage.motorista == "SELECIONAR MOTORISTA"){alert("SELECIONAR UM MOTORISTA VÁLIDO!");}
     else{
    

        var x = document.getElementById("snackbar");
        x.style.backgroundColor = "#333"; 
        x.innerHTML = "Carregando novas entregas... <div class='spinner-border spinner-border-sm'></div>";
        $("#myModalEntrega").modal('hide');
        Carrega_snackbar();
        setTimeout(function(){
            $.ajax({
                url:"/SERVIDOR/EXPEDICAO/carrega_entregas.php",
                type:'post',
                data:{},
                success: function (retorno_carrega_entrega) {
                    document.getElementById("conteudo_selecionado").innerHTML = retorno_carrega_entrega;
                   
                }
             }) 
        }, 1000);

    }
   
}
//CARREGA ENTREGA  PEDIDOS
function Carrega_entrega_pedido()
{
    var z = document.getElementById("empresa_pedido").value;
    var y = document.getElementById("myInput_pedido").value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/entrega_pedido.php",
            type:'post',
            data:{'cod_ped':y , 'empresa':z},
            success: function (retorno_carrega_pedido) {
                document.getElementById("entrega_pedido").innerHTML = retorno_carrega_pedido;
                document.getElementById("botao_envia_motorista").innerHTML = "ENVIAR ENTREGA PARA " + localStorage.motorista;
            }
         }) 
    }, 1000);

}
//ENVIA PEDIDO ENTREGA
function Processo_envia_entrega_pedido()
{
 var nome_cli_for = document.getElementById("NOME_CLI_FOR_PEDIDO").value;
 var num_pedido = document.getElementById("NUM_PEDIDO_PEDIDO").value;
 var num_nota = document.getElementById("NUM_NOTA_PEDIDO").value;
 var empresa = document.getElementById("empresa_pedido").value;
 var chave_acesso = document.getElementById("CHAVE_ACESSO_PEDIDO").value;
 var cod_cli = document.getElementById("COD_CLI_PEDIDO").value;
 var dt_emissao = document.getElementById("DT_EMISSAO_PEDIDO").value;

 var x = document.getElementById("snackbar");
 x.style.backgroundColor = "#333"; 
 x.innerHTML = "Enviando entrega para " + localStorage.motorista + "<div class='spinner-border spinner-border-sm'></div>";
 $("#myModalEntrega").modal('hide');
 Carrega_snackbar();
 setTimeout(function(){
     $.ajax({
         url:"/SERVIDOR/EXPEDICAO/proc_nova_entregaNFE.php",
         type:'post',
         data:{'NUM_NOTA':num_nota, 'NUM_PEDIDO':num_pedido, 'NOME_CLI_FOR':nome_cli_for, 'CHAVE_ACESSO':chave_acesso, 'MOTORISTA':localStorage.motorista,
        'EMPRESA':empresa, 'COD_CLI':cod_cli, 'DT_EMISSAO':dt_emissao},
         success: function (retorno_carrega_entrega) {
             document.getElementById("entrega_pedido").innerHTML = retorno_carrega_entrega;
           
             
         }
      }) 
 }, 1000);


}



//CARREGA ENTREGA  ORÇAMENTO
function Carrega_entrega_orcamento()
{
    var zz = document.getElementById("empresa_orcamento").value;
    var yy = document.getElementById("myInput_orcamento").value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();

        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/entrega_orc.php",
            type:'post',
            data:{'COD_ORC':yy , 'EMPRESA':zz},
            success: function (retorno_carrega_orc) {
                document.getElementById("entrega_orcamento").innerHTML = retorno_carrega_orc;
                document.getElementById("botao_envia_motorista_orc").innerHTML = "ENVIAR ENTREGA PARA " + localStorage.motorista;
            }
         }) 
  


}
//ENVIA ENTREGA ORCAMENTO
function Processo_envia_entrega_orcamento()
{

    var nome_cli_for = document.getElementById("NOME_CLI_FOR_ORC").value;
    var cod_orc = document.getElementById("COD_ORC").value;
    var cod_cli = document.getElementById("COD_CLI_ORC").value;
    var empresa = document.getElementById("COD_EMP_ORC").value;
   
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Enviando entrega para " + localStorage.motorista + "<div class='spinner-border spinner-border-sm'></div>";
    $("#myModalEntrega").modal('hide');
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/proc_nova_entregaORCAMENTO.php",
            type:'post',
            data:{'COD_ORC':cod_orc, 'NOME_CLIENTE':nome_cli_for, 'MOTORISTA':localStorage.motorista,
           'EMPRESA':empresa, 'COD_CLI':cod_cli,},
            success: function (retorno_carrega_orc) {
                document.getElementById("entrega_orcamento").innerHTML = retorno_carrega_orc;
                
                
            }
         }) 
    }, 1000);
   

}


//CARREGA ENTREGA  VALE
function Carrega_entrega_vale()
{

    var zzz = document.getElementById("empresa_vale").value;
    var yyy = document.getElementById("myInput_vale").value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/entrega_vale.php",
            type:'post',
            data:{'COD_VALE':yyy , 'EMPRESA':zzz},
            success: function (retorno_carrega_vale) {
                document.getElementById("entrega_vale").innerHTML = retorno_carrega_vale;
                document.getElementById("botao_envia_motorista_vale").innerHTML = "ENVIAR ENTREGA PARA " + localStorage.motorista;
            }
         }) 
        }, 1000);


}
//ENVIA ENTREGA VALE
function Processo_envia_entrega_vale()
{

    var nome_cli_for = document.getElementById("NOME_CLIENTE_VALE").value;
    var cod_vale = document.getElementById("COD_VALE").value;
    var cod_cli = document.getElementById("COD_CLI").value;
    var empresa = document.getElementById("COD_EMP").value;
   
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Enviando entrega para " + localStorage.motorista + "<div class='spinner-border spinner-border-sm'></div>";
    $("#myModalEntrega").modal('hide');
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/proc_nova_entregaVALE.php",
            type:'post',
            data:{'COD_VALE':cod_vale, 'NOME_CLIENTE':nome_cli_for, 'MOTORISTA':localStorage.motorista,
           'EMPRESA':empresa, 'COD_CLI':cod_cli,},
            success: function (retorno_carrega_orc) {
                document.getElementById("entrega_vale").innerHTML = retorno_carrega_orc;
                
                
            }
         }) 
    }, 1000);


}


//REMOVE ENTREGA
function Processo_remove_entrega(id_entrega)
{
    y = id_entrega.value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "red"; 
    x.innerHTML = "Removendo entrega " + y + " <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/remove_entrega.php",
            type:'post',
            data:{'id':y},
            success: function () {
               Carrega_lista_entrega();
            }
         }) 
 
        }, 1000);

}
//REMOVE DESPACHO
function Processo_remove_despacho(id_entrega)
{
    y = id_entrega.value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "red"; 
    x.innerHTML = "Removendo entrega " + y + " <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/remove_entrega.php",
            type:'post',
            data:{'id':y},
            success: function () {
               Carrega_lista_transportadora();
            }
         }) 
 
        }, 1000);

}

//CARREGA MENU ETIQUETAS
function Carrega_etiquetas() 
{
    
    $("#myModalEtiqueta").modal('show');

}
//CARREGA LISTA SEPARACAO
function Carrega_lista_separacao() 
{

   var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_lista_separacao.php",
            type:'post',
            data:{},
            success: function (retorno_carrega_etiqueta) {
                document.getElementById("conteudo_selecionado").innerHTML = retorno_carrega_etiqueta;
                Cont_separacao();
            }
         }) 
    }, 1000);
    

}

function Carrega_separacao_pedido() 
{
    var numn_ped = document.getElementById("myInput_pedido").value;
    var zzz = document.getElementById("empresa_pedido").value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_separacao_pedido.php",
            type:'post',
            data:{'empresa':zzz, 'cod_ped':numn_ped},
            success: function (retorno_carrega_separacao_pedido) {
                document.getElementById("carrega_pedidos").innerHTML = retorno_carrega_separacao_pedido;
              
            }
         }) 
    }, 1000);


}



function Carrega_separacao_orcamento() 
{
    var numn_ped = document.getElementById("myInput_orcamento").value;
    var zzz = document.getElementById("empresa_orcamento").value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_separacao_orc.php",
            type:'post',
            data:{'EMPRESA':zzz, 'COD_ORC':numn_ped},
            success: function (retorno_carrega_separacao_orcamento) {
                document.getElementById("carrega_orc").innerHTML = retorno_carrega_separacao_orcamento;
              
            }
         }) 
    }, 1000);


}


function Carrega_separacao_vale() 
{
    var numn_ped = document.getElementById("myInput_vale").value;
    var zzz = document.getElementById("empresa_vale").value;
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_separacao_vale.php",
            type:'post',
            data:{'EMPRESA':zzz, 'COD_VALE':numn_ped},
            success: function (retorno_carrega_separacao_orcamento) {
                document.getElementById("carrega_vale").innerHTML = retorno_carrega_separacao_orcamento;
              
            }
         }) 
    }, 1000);


}

function Carrega_consulta_separacao() 
{
    
    var num_separacao = document.getElementById("myInput_consulta").value;

    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Buscando separação... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/carrega_consulta_separacao.php",
            type:'post',
            data:{'COD_PED':num_separacao,},
            success: function (retorno_carrega_consulta_separacao) {
                document.getElementById("carrega_consulta").innerHTML = retorno_carrega_consulta_separacao;          
            }
         }) 
    }, 1000);




}

function Proc_envia_separacao_preferencial() 
{
    
    var num_separacao = document.getElementById("cod_ped_preferencial").value;

    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Atualizando separação... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/proc_envia_separacao_preferencial.php",
            type:'post',
            data:{'COD_PED':num_separacao,},
            success: function (retorno_carrega_consulta_separacao) {
                Carrega_lista_separacao();        
            }
         }) 
    }, 1000);




}



function Proc_envia_pedido() 
{
    
    var NOME_CLI_FOR_PEDIDO = document.getElementById("NOME_CLI_FOR_PEDIDO").value;
    var EMPRESA_PEDIDO = document.getElementById("EMPRESA_PEDIDO").value;
    var COD_CLI_PEDIDO = document.getElementById("COD_CLI_PEDIDO").value;
    var TIPO_TRANSP_PEDIDO = document.getElementById("TIPO_TRANSP_PEDIDO").value;
    var USU_INCLUI_PEDIDO = document.getElementById("USU_INCLUI_PEDIDO").value;
    var DT_EMISSAO_PEDIDO = document.getElementById("DT_EMISSAO_PEDIDO").value;
    var COD_PED_PEDIDO = document.getElementById("COD_PED_PEDIDO").value;

    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Enviando pedido... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/proc_envia_separacao_pedido.php",
            type:'post',
            data:{'NOME_CLI_FOR_PEDIDO':NOME_CLI_FOR_PEDIDO, 'EMPRESA_PEDIDO':EMPRESA_PEDIDO,'COD_CLI_PEDIDO':COD_CLI_PEDIDO,'TIPO_TRANSP_PEDIDO':TIPO_TRANSP_PEDIDO,
           'USU_INCLUI_PEDIDO':USU_INCLUI_PEDIDO, 'DT_EMISSAO_PEDIDO':DT_EMISSAO_PEDIDO,'COD_PED_PEDIDO':COD_PED_PEDIDO },
            success: function (retorno_proc_envia_pedido_separacao) {
                document.getElementById("carrega_pedidos").innerHTML = retorno_proc_envia_pedido_separacao;
                document.getElementById("myInput_pedido").value = "";
                document.getElementById("myInput_orcamento").value = "";
                document.getElementById("myInput_vale").value = "";
                Cont_separacao();
              
            }
         }) 
    }, 1000);
}

function Proc_envia_orc() 
{
    
    var NOME_CLI_FOR_ORC = document.getElementById("NOME_CLI_FOR_ORC").value;
    var COD_ORC = document.getElementById("COD_ORC").value;
    var COD_CLI_ORC = document.getElementById("COD_CLI_ORC").value;
    var COD_EMP_ORC = document.getElementById("COD_EMP_ORC").value;
    var TIPO_TRANSP_ORC = document.getElementById("TIPO_TRANSP_ORC").value;
    var USU_INCLUI_ORC = document.getElementById("USU_INCLUI_ORC").value;
    var DT_EMISSAO_ORC = document.getElementById("DT_EMISSAO_ORC").value;

    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Enviando orçamento... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/proc_envia_separacao_orc.php",
            type:'post',
            data:{'NOME_CLI_FOR_ORC':NOME_CLI_FOR_ORC, 'EMPRESA_ORC':COD_EMP_ORC,'COD_CLI_ORC':COD_CLI_ORC,'TIPO_TRANSP_ORC':TIPO_TRANSP_ORC,
           'USU_INCLUI_ORC':USU_INCLUI_ORC,'COD_ORC':COD_ORC, 'DT_EMISSAO_ORC':DT_EMISSAO_ORC },
            success: function (retorno_proc_envia_orc_separacao) {
                document.getElementById("carrega_orc").innerHTML = retorno_proc_envia_orc_separacao;
                document.getElementById("myInput_pedido").value = "";
                document.getElementById("myInput_orcamento").value = "";
                document.getElementById("myInput_vale").value = "";
                Cont_separacao();
              
              

              
            }
         }) 
    }, 1000);
}


function Proc_envia_vale() 
{
    
    var NOME_CLI_FOR_VALE = document.getElementById("NOME_CLI_FOR_VALE").value;
    var COD_VALE = document.getElementById("COD_VALE").value;
    var COD_CLI_VALE = document.getElementById("COD_CLI_VALE").value;
    var COD_EMP_VALE = document.getElementById("COD_EMP_VALE").value;
    var TIPO_TRANSP_VALE = document.getElementById("TIPO_TRANSP_VALE").value;
    var USU_INCLUI_VALE = document.getElementById("USU_INCLUI_VALE").value;
    var DT_EMISSAO_VALE = document.getElementById("DT_EMISSAO_VALE").value;

    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Enviando vale... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/proc_envia_separacao_vale.php",
            type:'post',
            data:{'NOME_CLI_FOR_VALE':NOME_CLI_FOR_VALE, 'COD_EMP_VALE':COD_EMP_VALE,'COD_CLI_VALE':COD_CLI_VALE,'TIPO_TRANSP_VALE':TIPO_TRANSP_VALE,
           'USU_INCLUI_VALE':USU_INCLUI_VALE,'COD_VALE':COD_VALE, 'DT_EMISSAO_VALE':DT_EMISSAO_VALE },
            success: function (retorno_proc_envia_orc_separacao) {
                document.getElementById("carrega_vale").innerHTML = retorno_proc_envia_orc_separacao;
                document.getElementById("myInput_pedido").value = "";
                document.getElementById("myInput_orcamento").value = "";
                document.getElementById("myInput_vale").value = "";
                Cont_separacao();
              
            }
         }) 
    }, 1000);
}


function Processo_envia_entrega_despacho() {
    
    var nome_cli_for = document.getElementById("NOME_CLI_FOR_PEDIDO").value;
    var num_pedido = document.getElementById("NUM_PEDIDO_PEDIDO").value;
    var num_nota = document.getElementById("NUM_NOTA_PEDIDO").value;
    var empresa = document.getElementById("empresa_pedido").value;
    var chave_acesso = document.getElementById("CHAVE_ACESSO_PEDIDO").value;
    var cod_cli = document.getElementById("COD_CLI_PEDIDO").value;
    var dt_emissao = document.getElementById("DT_EMISSAO_PEDIDO").value;
   
    var x = document.getElementById("snackbar");
    x.style.backgroundColor = "green"; 
    x.innerHTML = "Registrando despacho " + num_pedido + "<div class='spinner-border spinner-border-sm'></div>";
    $("#myModalEntrega").modal('hide');
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/EXPEDICAO/processa_envia_despacho.php",
            type:'post',
            data:{'NUM_NOTA':num_nota, 'NUM_PEDIDO':num_pedido, 'NOME_CLI_FOR':nome_cli_for, 'CHAVE_ACESSO':chave_acesso,
           'EMPRESA':empresa, 'COD_CLI':cod_cli, 'DT_EMISSAO':dt_emissao},
            success: function (retorno_carrega_entrega) {
                document.getElementById("entrega_pedido").innerHTML = retorno_carrega_entrega;
              
                
            }
         }) 
    }, 1000);


}
function Cont_separacao() {
    $.ajax({
        url:"/SERVIDOR/EXPEDICAO/cont_separacao.php",
        type:'post',
        data:{},
        success: function (retorno_carrega_cont_separacao) {
            document.getElementById("cont_separacao").innerHTML = retorno_carrega_cont_separacao;
          
            
        }
     }) 
}
