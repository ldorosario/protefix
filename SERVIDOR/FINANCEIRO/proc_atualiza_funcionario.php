     <?php
     include 'conexaoMysql.php';
     $id_funcionario_entrada = $_POST['id_funcionario_entrada'];
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
     $empresa = $_POST['empresa'];


    $sql = "UPDATE rh_registro_empregado SET nome='$nome', nome_pai ='$nome_pai', nome_mae ='$nome_mae', data_nascimento = '$data_nascimento',
    tel_fixo ='$tel_fixo', tel_celular = '$tel_celular' , cod_funcionario = '$cod_funcionario', sexo ='$sexo', estado_civil = '$estado_civil', cor_raca = '$cor_raca',
    naturalidade = '$naturalidade', nacionalidade = '$nacionalidade', endereco ='$endereco', bairro = '$bairro', cep ='$cep', municipio ='$municipio',
    cpf = '$cpf', rg = '$rg', orgao ='$orgao', estado ='$estado', emissao_rg ='$emissao_rg', numero_ctps ='$numero_ctps', serie_ctps='$serie_ctps',
    estado_ctps ='$estado_ctps', expedicao_ctps = '$expedicao_ctps', pis ='$pis', cadastro_pis ='$cadastro_pis', instrucao = '$instrucao',
    cnh = '$cnh', categoria_cnh = '$categoria_cnh', validade_cnh = '$validade_cnh', reserva = '$reserva', categoria = '$categoria', titulo_eleitoral = '$titulo_eleitoral',
    zona = '$zona', secao ='$secao', banco = '$banco', conta='$conta', digito='$digito', agencia = '$agencia', sindicato = '$sindicato', const_profis = '$const_profis',
    registro_profis = '$registro_profis', data_registro = '$data_registro', data_chegada = '$data_chegada', tipo_visto = '$tipo_visto', carteira_rne = '$carteira_rne',
    validade_rne = '$validade_rne', numero_portaria = '$numero_portaria', data_portaria = '$data_portaria', admissao = '$admissao', optante_fgts = '$optante_fgts',
    data_opcao = '$data_opcao', conta_fgts = '$conta_fgts', cargo = '$cargo', organograma = '$organograma', remuneracao = '$remuneracao', cbo ='$cbo', modo_pagamento='$modo_pagamento',
    periodo = '$periodo', escala = '$escala', empresa ='$empresa'  WHERE id = '$id_funcionario_entrada'";

    $resultado = mysqli_query($conn, $sql);

   
    
    echo"<script>window.close();</script>";
     
