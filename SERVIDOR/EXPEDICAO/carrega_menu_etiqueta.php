

<div class="fadein">
    <br>
    <br>
    <br>
    <div class="container">
    <center><h4>ETIQUETAS PARA TRANSPORTADORA</h4></center>
<form  action="/SERVIDOR/EXPEDICAO/labelary.php" method="POST">
      <div class="input-group mb-3">
  <input type="text" name="nfe" class="form-control" placeholder="NF-E" aria-describedby="basic-addon2" autofocus="autofocus" >
  <input type="text" name="destino" class="form-control" placeholder="DESTINO" aria-describedby="basic-addon2" autofocus="autofocus" >
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit"><b><i class="fa fa-plus" style="font-size:20px"></i> </b></button>
  </div>
</div>
</form>


<center><h4>ETIQUETAS PARA CAIXAS DE SEPARACAO</h4></center>
<form method="GET" action="/SERVIDOR/EXPEDICAO/labelary_caixa_preta.php" target="_blank">
      <div class="input-group mb-3">
  <input type="text" name="numero" class="form-control" placeholder="NUMERO ETIQUETA DA CAIXA" aria-describedby="basic-addon2" autofocus="autofocus" >
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit"><b><i class="fa fa-plus" style="font-size:20px"></i> </b></button>
  </div>
</div>
</form>
<center><h4>ETIQUETAS PARA ITEMS MOSTRUARIO LOJA</h4></center>
<form method="GET" action="/SERVIDOR/EXPEDICAO/labelary_preco.php" target="_blank">
      <div class="input-group mb-3">
  <input type="text" name="COD_PROD" class="form-control" placeholder="CODIGO PRODUTO" aria-describedby="basic-addon2" autofocus="autofocus" >
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit"><b><i class="fa fa-plus" style="font-size:20px"></i> </b></button>
  </div>
</div>
</form>
        </div>
      </div>
      </div>