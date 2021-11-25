<?php
include 'conexaoMysql.php';

$nome = $_POST['nome'];
$nome_pai = $_POST['nome_pai'];
$nome_mae = $_POST['nome_mae'];
$data_nascimento = $_POST['data_nascimento'];
$tel_fixo = $_POST['tel_fixo'];
$tel_celular = $_POST['tel_celular'];
$cod_funcionario = $_POST['cod_funcionario'];
$sexo = $_POST['sexo'];
$estado_civil = $_POST['estado_civil'];
$cor_raca = $_POST['cor_raca'];
$naturalidade = $_POST['naturalidade'];
$nacionalidade = $_POST['nacionalidade']; 
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$municipio = $_POST['municipio'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg']; 
$orgao = $_POST['orgao'];
$estado = $_POST['estado'];
$emissao_rg = $_POST['emissao_rg'];
$numero_ctps = $_POST['numero_ctps'];
$serie_ctps = $_POST['serie_ctps'];
$estado_ctps = $_POST['estado_ctps'];
$expedicao_ctps = $_POST['expedicao_ctps'];
$pis = $_POST['pis'];
$cadastro_pis = $_POST['cadastro_pis'];
$instrucao = $_POST['instrucao'];
$cnh = $_POST['cnh'];
$categoria_cnh = $_POST['categoria_cnh'];
$validade_cnh = $_POST['validade_cnh'];
$reserva = $_POST['reserva'];
$categoria = $_POST['categoria'];
$titulo_eleitoral = $_POST['titulo_eleitoral'];
$zona = $_POST['zona'];
$secao = $_POST['secao'];
$banco = $_POST['banco'];
$conta = $_POST['conta'];
$digito = $_POST['digito'];
$agencia = $_POST['agencia'];
$sindicato = $_POST['sindicato'];
$const_profis = $_POST['const_profis'];
$registro_profis = $_POST['registro_profis'];
$data_registro = $_POST['data_registro'];
$data_chegada = $_POST['data_chegada'];
$tipo_visto = $_POST['tipo_visto'];
$carteira_rne = $_POST['carteira_rne'];
$validade_rne = $_POST['validade_rne'];
$numero_portaria = $_POST['numero_portaria'];
$data_portaria = $_POST['data_portaria'];
$admissao = $_POST['admissao'];
$optante_fgts = $_POST['optante_fgts'];
$data_opcao = $_POST['data_opcao'];
$conta_fgts = $_POST['conta_fgts'];
$cargo = $_POST['cargo'];
$organograma = $_POST['organograma'];
$remuneracao = $_POST['remuneracao'];
$cbo = $_POST['cbo'];
$modo_pagamento = $_POST['modo_pagamento'];
$periodo = $_POST['periodo'];
$escala = $_POST['escala'];
$empresa  = $_POST['empresa'];



$sql ="INSERT INTO rh_registro_empregado (
    nome,
    nome_pai,
    nome_mae,
    data_nascimento,
    tel_fixo,
    tel_celular,
    cod_funcionario,
    sexo,
    estado_civil,
    cor_raca,
    naturalidade,
    nacionalidade,
    endereco,
    bairro,
    cep,
    municipio,
    cpf,
    rg,
    orgao,
    estado,
    emissao_rg,
    numero_ctps,
    serie_ctps,
    estado_ctps,
    expedicao_ctps,
    pis,
    cadastro_pis,
    instrucao,
    cnh,
    categoria_cnh,
    validade_cnh,
    reserva,
    categoria,
    titulo_eleitoral,
    zona,
    secao,
    banco,
    conta,
    digito,
    agencia,
    sindicato,
    const_profis,
    registro_profis,
    data_registro,
    data_chegada,
    tipo_visto,
    carteira_rne,
    validade_rne,
    numero_portaria,
    data_portaria,
    admissao,
    optante_fgts,
    data_opcao,
    conta_fgts,
    cargo,
    organograma,
    remuneracao,
    cbo,
    modo_pagamento,
    periodo,
    escala,
    empresa
)
VALUES
(
'$nome',
'$nome_pai',
'$nome_mae',
'$data_nascimento',
'$tel_fixo', 
'$tel_celular',    
'$cod_funcionario',
 '$sexo', 
 '$estado_civil', 
 '$cor_raca', 
 '$naturalidade', 
 '$nacionalidade', 
 '$endereco', 
 '$bairro', 
 '$cep', 
 '$municipio', 
 '$cpf', 
 '$rg', 
 '$orgao', 
 '$estado', 
 '$emissao_rg', 
 '$numero_ctps', 
 '$serie_ctps', 
 '$estado_ctps', 
 '$expedicao_ctps', 
 '$pis', 
 '$cadastro_pis', 
 '$instrucao', 
 '$cnh', 
 '$categoria_cnh', 
 '$validade_cnh', 
 '$reserva', 
 '$categoria', 
 '$titulo_eleitoral', 
 '$zona', 
 '$secao', 
 '$banco', 
 '$conta', 
 '$digito', 
 '$agencia', 
 '$sindicato', 
 '$const_profis', 
 '$registro_profis', 
 '$data_registro', 
 '$data_chegada', 
 '$tipo_visto', 
 '$carteira_rne', 
 '$validade_rne', 
 '$numero_portaria', 
 '$data_portaria', 
 '$admissao', 
 '$optante_fgts', 
 '$data_opcao', 
 '$conta_fgts', 
 '$cargo', 
 '$organograma', 
 '$remuneracao', 
 '$cbo', 
 '$modo_pagamento', 
 '$periodo', 
 '$escala',
  '$empresa'
  )";

$resultado = mysqli_query($conn, $sql);

 
    
echo"<script>window.close();</script>";
