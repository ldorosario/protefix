
<?php header("Content-type: text/html; charset=pwx_intl850"); ?>
<div class="container">

<div class="fadein">

  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">PEDIDOS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">ORÇAMENTOS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">VALES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">CONSULTA SEPARAÇÃO</a>
    </li>
    <li class="nav-item direita">
      <a class="nav-link" data-toggle="tab" href="#menu3"><div id="cont_separacao" class="direita"><!--conteudo via js--><div></a>
    </li>
   
  </ul>
 

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    
    <div class="form-group">
    <label for="sel1">SELECIONE EMPRESA:</label>
  <select class="form-control" id="empresa_pedido">
    <option value="1">PROTEFIX</option>
    <option value="3">FICOFIX</option>
  </select>
  <form  onsubmit="Carrega_separacao_pedido()">
  <div class="input-group mb-3">
          <input type="text" id="myInput_pedido"  class="form-control" placeholder="N° PEDIDO"
            aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" id="botao_busca" type="submit" onclick=""><b><i class="fa fa-search"></i> </b></button>
          </div>
        </div>
</form>
        
</div>
 
    <div id="carrega_pedidos">

      <!-- Retorno via JS --> 

    </div>


    </div>




    <div id="menu1" class="container tab-pane fade"><br>
      
    <div class="form-group">
    <label for="sel1">SELECIONE EMPRESA:</label>
  <select class="form-control" id="empresa_orcamento">
    <option value="1">PROTEFIX</option>
    <option value="3">FICOFIX</option>
  </select>

  <div class="input-group mb-3">
          <input type="text"  id="myInput_orcamento" class="form-control" placeholder="N° ORÇAMENTO"
            aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" id="botao_busca2" type="submit" onclick="Carrega_separacao_orcamento()"><b><i class="fa fa-search"></i> </b></button>
          </div>
        </div>
</div>

   
<div id="carrega_orc">

<!-- Retorno via JS --> 
    
</div>

    </div>

    <div id="menu2" class="container tab-pane fade"><br>
      
    <div class="form-group">
    <label for="sel1">SELECIONE EMPRESA:</label>
  <select class="form-control" id="empresa_vale">
    <option value="1">PROTEFIX</option>
    <option value="3">FICOFIX</option>
  </select>

  <div class="input-group mb-3">
          <input type="text" name="produto" id="myInput_vale" class="form-control" placeholder="N° VALE"
            aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" id="botao_busca3" type="submit" onclick="Carrega_separacao_vale()"><b><i class="fa fa-search"></i> </b></button>
          </div>
        </div>


        <div id="carrega_vale">

        <!-- Retorno via JS --> 
    
       </div>

       
</div>

</div> 

<div id="menu3" class="container tab-pane fade"><br>
    
  
    <div class="input-group mb-3">
            <input type="text" name="produto" id="myInput_consulta" class="form-control" placeholder="N° PEDIDO/ORÇAMENTO/VALE"
              aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" id="botao_busca4" type="submit" onclick="Carrega_consulta_separacao()"><b><i class="fa fa-search"></i> </b></button>
            </div>
          </div>
  
  
          <div id="carrega_consulta">
  
          <!-- Retorno via JS --> 
      
         </div>
  
         
  </div>



</div>
</div>
</div>


