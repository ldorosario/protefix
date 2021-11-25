
      
      <div class="container-fluid">
<center><form class="form-horizontal" action="proc_novocliente.php" method="post" id="post">
<br>
    <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">CNPJ</span>
    </div>
     <input id="cnpj" required type="text" class="form-control" name="cnpj">
  </div>
   
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">RAZÃO SOCIAL</span>
    </div>
     <input id="nome" type="text"  class="form-control" name="nome">
  </div>
	
     
    <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">NOME FANTASIA</span>
    </div>
  <input id="fantasia" type="text"  class="form-control" name="fantasia">
  </div>
	
	  <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">ATIVIDADE PRINCIPAL</span>
    </div>
      <input id="atividade" type="text"  class="form-control" name="atividade">
  </div>
	
      
    <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">TELEFONE</span>
    </div>
     <input id="telefone" required type="text"  class="form-control" name="telefone">
  </div>
   
	
 <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">EMAIL CONTATO</span>
    </div>
     <input id="email" type="text"  class="form-control" name="email">
  </div>
  
  <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">EMAIL NF-E/BOLETO</span>
    </div>
     <input id="e-mail" type="text"  class="form-control" name="emailnfeboleto">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">CEP</span>
    </div>
 <input id="cep" type="text"  class="form-control" name="cep">
  </div>
  
  <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">LOGRADOURO</span>
    </div>
     <input id="logradouro" type="text"  class="form-control" name="logradouro">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">NUMERO</span>
    </div>
    <input id="numero" type="text"  class="form-control" name="numero">
  </div>
  
  <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">COMPLEMENTO</span>
    </div>
    <input id="complemento" type="text"  class="form-control" name="complemento">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">CIDADE</span>
    </div>
    <input id="cidade" type="text"  class="form-control" name="cidade">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">BAIRRO</span>
    </div>
    <input id="bairro" type="text"  class="form-control" name="bairro">
  </div>
	
	
        <div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">ESTADO</span>
    </div>
        <select id="uf" class="custom-select" name="uf">
		  
	 	<option value="AC">Acre</option>
	    <option value="AL">Alagoas</option>
	    <option value="AP">Amapá</option>
	    <option value="AM">Amazonas</option>
	    <option value="BA">Bahia</option>
	    <option value="CE">Ceará</option>
	    <option value="DF">Distrito Federal</option>
	    <option value="ES">Espírito Santo</option>
	    <option value="GO">Goiás</option>
	    <option value="MA">Maranhão</option>
	    <option value="MT">Mato Grosso</option>
	    <option value="MS">Mato Grosso do Sul</option>
	    <option value="MG">Minas Gerais</option>
	    <option value="PA">Pará</option>
	    <option value="PB">Paraíba</option>
	    <option value="PR">Paraná</option>
	    <option value="PE">Pernambuco</option>
	    <option value="PI">Piauí</option>
	    <option value="RJ">Rio de Janeiro</option>
	    <option value="RN">Rio Grande do Norte</option>
	    <option value="RS">Rio Grande do Sul</option>
	    <option value="RO">Rondônia</option>
	    <option value="RR">Roraima</option>
	    <option value="SC">Santa Catarina</option>
	    <option value="SP">São Paulo</option>
	    <option value="SE">Sergipe</option>
	    <option value="TO">Tocantins</option>
          </select>
        </div>
		
		<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">COMPRA</span>
    </div>
        <select id="compra" class="custom-select"  name="compra">
		  
	 	<option>FATURADO</option>
	    <option>AVISTA</option>
		 </select>
        </div>
	<hr>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">VENDEDOR RESPONSÁVEL</span>
    </div>
    <input  type="text" name="vendedor"  class="form-control" required="required">
  </div>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">CLIENTE NA LOJA</span>
    </div>
        <select id="clienteloja" class="custom-select" name="clienteloja">
		  
	 	<option>NAO</option>
	    <option>SIM</option>
		 </select>
        </div>
		
		
		<hr>
	
	<div class="input-group mb-1 input-group-sm">
     <div class="input-group-prepend">
       <span class="input-group-text">INFO ADICIONAL</span>
    </div>
    <input  type="text" name="infoadicional"  class="form-control">
  </div>
	
	<hr>
	 <center><button  type="submit" class="btn btn-primary btn-block btn-sm" value="Submit" name="submit">ENVIAR PEDIDO <i class="fa fa-user-plus" style="font-size:20px"></i></button></center>
<hr>
	
	</form>

</div>

  <script src="/TESTES/SCRIPTS/vendor/jquery/jquery.min.js"></script>
  <script src="/TESTES/SCRIPTS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
 
 <script type="text/javascript">
  

		$("#cnpj").focusout(function(){
      //
      
      var cnpj = document.getElementById("cnpj").value;
      var cnpjponto = cnpj.replace(".", "");
      var cnpjponto2 = cnpjponto.replace(".", "");
      var cnpjbarra = cnpjponto2.replace("/","");
      var cnpjtraco = cnpjbarra.replace("-","");
     document.getElementById("cnpj").value = cnpjtraco;


			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CNPJ
				url: '/mobile/FINANCEIRO/dados/cnpj.php?cnpj='+$("#cnpj").val(),
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
		});
	</script>


<script>
 var intervalo = setInterval(function() { $('#cont_analise').load('/mobile/financeiro/contadores/cont_analise.php'); }, 3000); //carrega pagina php e solta no title

</script>

<script>
 var intervalo = setInterval(function() { $('#cont_cadastro').load('/mobile/financeiro/contadores/cont_cadastro.php'); }, 3000); //carrega pagina php e solta no title

</script>

</body>

</html>
