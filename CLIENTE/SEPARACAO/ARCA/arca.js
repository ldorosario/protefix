//CARREGA SNACKBAR
function Carrega_snackbar() { 
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1000);
  } 

function Carrega_concluir(a) {
    cod_ped = a.value;
    x = document.getElementById("snackbar");
    x.style.backgroundColor = "#333"; 
    x.innerHTML = "Carregando separação... <div class='spinner-border spinner-border-sm'></div>";
    Carrega_snackbar();
    setTimeout(function(){
        $.ajax({
            url:"/SERVIDOR/SEPARACAO/ARCA/carrega_separacao.php",
            type:'post',
            data:{'cod_ped': cod_ped },
            success: function (retorno_banco) {
                $("#myModalConcluir").modal('show');
                document.getElementById("concluir_selecionado").innerHTML = retorno_banco;
               
              
            }
         }) 
    }, 1000);
    
}