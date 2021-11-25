<div class="container-fluid">

<hr>
<h4 id="dados_empregado"><b>DADOS DO EMPREGADO</b>

 </h4>


<form action="/SERVIDOR/FINANCEIRO/proc_novo_func.php" method="POST" target="_blank" onsubmit="Carrega_lista_funcionario()">
<hr>
<div class="form-group">
  <label for="sel1">SELECIONE EMPRESA:</label>
  <select class="form-control" name="empresa">
    <option>PROTEFIX</option>
    <option>FICOFIX</option>
  </select>
</div>
<hr>
<div class="input-group mb-1">

    <div class="input-group-prepend">
      <span class="input-group-text">Nome</span>
    </div>
    <input type="text" class="form-control" name="nome">
  </div>
 
 <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Pai</span>
    </div>
    <input type="text" class="form-control" name="nome_pai" >
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Mãe</span>
    </div>
    <input type="text" class="form-control" name="nome_mae" >
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Data Nascimento</span>
    </div>
    <input type="date" class="form-control" name="data_nascimento">
  </div>
  
 <!-- CASCATA ABAIXO -->
 <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Telefone Fixo</span>
    </div>
    <input type="text" class="form-control" name="tel_fixo">
    <div class="input-group-prepend">
      <span class="input-group-text">Telefone Celular</span>
    </div>
    <input type="text" class="form-control" name="tel_celular" >
  </div>

  <!-- FIM CASCATA -->

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Código Funcionário</span>
    </div>
    <input type="text" class="form-control" name="cod_funcionario">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Sexo</span>
    </div>
    <input type="text" class="form-control" name="sexo" >
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Estado Civil</span>
    </div>
    <input type="text" class="form-control" name="estado_civil">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Cor/Raça</span>
    </div>
    <input type="text" class="form-control" name="cor_raca" >
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Nacionalidade</span>
    </div>
    <input type="text" class="form-control" name="nacionalidade" >
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Endereço</span>
    </div>
    <input type="text" class="form-control" name="endereco" >
  </div>
  <!-- CASCATA ABAIXO -->
  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Bairo</span>
    </div>
    <input type="text" class="form-control" name="bairro" >
    
    <div class="input-group-prepend">
      <span class="input-group-text">CEP</span>
    </div>
    <input type="text" class="form-control" name="cep" >
    <div class="input-group-prepend">
      <span class="input-group-text">Municipio</span>
    </div>
    <input type="text" class="form-control" name="municipio" >
    <div class="input-group-prepend">
      <span class="input-group-text">Naturalidade</span>
    </div>
    <input type="text" class="form-control" name="naturalidade">
  </div>
  
<!--FIM DA CASCATA -->
   
  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">CPF</span>
    </div>
    <input type="text" class="form-control" name="cpf">
  </div>

   <!-- CASCATA ABAIXO -->
  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">RG</span>
    </div>
    <input type="text" class="form-control" name="rg" >

    <div class="input-group-prepend">
      <span class="input-group-text">Orgão Expeditor</span>
    </div>
    <input type="text" class="form-control" name="orgao" >
     <div class="input-group-prepend">
      <span class="input-group-text">Estado </span>
    </div>
    <input type="text" class="form-control" name="estado" >
    <div class="input-group-prepend">
      <span class="input-group-text">Emissão RG</span>
    </div>
    <input type="text" class="form-control" name="emissao_rg" >
  </div>

   <!-- FIM CASCATA -->
  

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
   <div class="input-group-prepend">
      <span class="input-group-text">N° CTPS</span>
    </div>
    <input type="text" class="form-control" name="numero_ctps" >
    <div class="input-group-prepend">
      <span class="input-group-text">Série CTPS</span>
    </div>
    <input type="text" class="form-control" name="serie_ctps">
    <div class="input-group-prepend">
      <span class="input-group-text">Estado CTPS</span>
    </div>
    <input type="text" class="form-control" name="estado_ctps">
    <div class="input-group-prepend">
      <span class="input-group-text">Expedição CTPS</span>
    </div>
    <input type="text" class="form-control" name="expedicao_ctps" >
    </div>
   <!-- FIM CASCATA -->


<!-- CASCATA ABAIXO -->
   <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">PIS</span>
    </div>
    <input type="text" class="form-control" name="pis" >
    <div class="input-group-prepend">
      <span class="input-group-text">Cadastro PIS</span>
    </div>
    <input type="text" class="form-control" name="cadastro_pis" >
  </div>

  <!-- FIM CASCATA -->
  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Instrução</span>
    </div>
    <input type="text" class="form-control" name="instrucao">
  </div>


<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">CNH</span>
    </div>
    <input type="text" class="form-control" name="cnh" >
    <div class="input-group-prepend">
      <span class="input-group-text">Categoria CNH</span>
    </div>
    <input type="text" class="form-control" name="categoria_cnh" >
    <div class="input-group-prepend">
      <span class="input-group-text">Validade CNH</span>
    </div>
    <input type="text" class="form-control" name="validade_cnh" >
  </div>

  <!-- FIM CASCATA -->

  <!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Reservista</span>
    </div>
    <input type="text" class="form-control" name="reserva" >
    <div class="input-group-prepend">
      <span class="input-group-text">Categoria</span>
    </div>
    <input type="text" class="form-control" name="categoria" ">
  </div>

  <!-- FIM CASCATA -->

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Titulo Eleitoral</span>
    </div>
    <input type="text" class="form-control" name="titulo_eleitoral" >
    <div class="input-group-prepend">
      <span class="input-group-text">Zona</span>
    </div>
    <input type="text" class="form-control" name="zona" >
    <div class="input-group-prepend">
      <span class="input-group-text">Seção</span>
    </div>
    <input type="text" class="form-control" name="secao" >
  </div>

  <!-- FIM CASCATA -->


<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Banco</span>
    </div>
    <input type="text" class="form-control" name="banco">
    <div class="input-group-prepend">
      <span class="input-group-text">Conta</span>
    </div>
    <input type="text" class="form-control" name="conta">
    <div class="input-group-prepend">
      <span class="input-group-text">Digito</span>
    </div>
    <input type="text" class="form-control" name="digito" >
    <div class="input-group-prepend">
      <span class="input-group-text">Agência</span>
    </div>
    <input type="text" class="form-control" name="agencia" >
  </div>

  <!-- FIM CASCATA -->

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Sindicato</span>
    </div>
    <input type="text" class="form-control" name="sindicato" >
  </div>

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Const. Profis</span>
    </div>
    <input type="text" class="form-control" name="const_profis">
    <div class="input-group-prepend">
      <span class="input-group-text">Registro Profis</span>
    </div>
    <input type="text" class="form-control" name="registro_profis" >
    <div class="input-group-prepend">
      <span class="input-group-text">Data Registro</span>
    </div>
    <input type="text" class="form-control" name="data_registro">
  </div>

  <!-- FIM CASCATA -->


<hr>
<h4 id="cadastro_estrangeiro"><b>CADASTRO DE ESTRANGEIRO</b> <a href="#"><i class="fa fa-arrow-circle-up no-print" style="font-size:24px"></i></a></h4>
<hr>

<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Data Chegada</span>
    </div>
    <input type="text" class="form-control" name="data_chegada">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Tipo Visto</span>
    </div>
    <input type="text" class="form-control" name="tipo_visto" >
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Carteira RNE</span>
    </div>
    <input type="text" class="form-control" name="carteira_rne" >
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Validade RNE</span>
    </div>
    <input type="text" class="form-control" name="validade_rne">
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">N° da Portaria</span>
    </div>
    <input type="text" class="form-control" name="numero_portaria" >
  </div>

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Data da Portaria</span>
    </div>
    <input type="text" class="form-control" name="data_portaria" >
  </div>


  <hr>
<h4 id="contrato_trabalho"><b>CONTRATO DE TRABALHO</b>  <a href="#"><i class="fa fa-arrow-circle-up no-print" style="font-size:24px"></i></a></h4>
<hr>

<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Data Admissão</span>
    </div>
    <input type="text" class="form-control" name="admissao" >
  </div>

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Optante FGTS</span>
    </div>
    <input type="text" class="form-control" name="optante_fgts" >
    <div class="input-group-prepend">
      <span class="input-group-text">Data Opção</span>
    </div>
    <input type="text" class="form-control" name="data_opcao" >
    <div class="input-group-prepend">
      <span class="input-group-text">Conta FGTS</span>
    </div>
    <input type="text" class="form-control" name="conta_fgts" >
  </div>

  <!-- FIM CASCATA -->

  <!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Cargo</span>
    </div>
    <input type="text" class="form-control" name="cargo">
    <div class="input-group-prepend">
      <span class="input-group-text">CBO</span>
    </div>
    <input type="text" class="form-control" name="cbo" >
  </div>

  <!-- FIM CASCATA -->

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Organograma</span>
    </div>
    <input type="text" class="form-control" name="organograma" >
  </div>

<!-- CASCATA ABAIXO -->
<div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Remuneração</span>
    </div>
    <input type="text" class=" mascara form-control" name="remuneracao" >
    <div class="input-group-prepend">
      <span class="input-group-text">Modo Pagamento</span>
    </div>
    <input type="text" class=" form-control"  id="valor" name="modo_pagamento" >
    <div class="input-group-prepend">
      <span class="input-group-text">Periodo</span>
    </div>
    <input type="text" class="form-control" name="periodo" >
  </div>

  <!-- FIM CASCATA -->

  <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text">Escala</span>
    </div>
    <input type="text" class="form-control" name="escala" >
  </div>
<button class="btn btn-sm btn-block btn-success no-print" type="submit" onclick="Carrega_lista_funcionario()"><b>SALVAR</b></button>

</form>
</div>
<br>