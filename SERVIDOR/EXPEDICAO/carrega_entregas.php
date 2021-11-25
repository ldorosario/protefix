<div class="container-fluid">
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
  
   <form onsubmit="Carrega_entrega_pedido()">
  <div class="input-group mb-3">
          <input type="text" id="myInput_pedido" class="form-control" placeholder="N° PEDIDO"
            aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
          <div class="input-group-append">
       
            <button class="btn btn-outline-secondary" id="botao_busca" type="submit" name="Submit"><b><i class="fa fa-search"></i> </b></button>
       
          </div>
        </div>
     </form>
        
</div>
 
    <div id="entrega_pedido">

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
<form onsubmit="Carrega_entrega_orcamento()">
  <div class="input-group mb-3">
          <input type="text"  id="myInput_orcamento" class="form-control" placeholder="N° ORÇAMENTO"
            aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" id="botao_busca2" type="submit" name="Submit"><b><i class="fa fa-search"></i> </b></button>
          </div>
        </div>
        <form>
</div>

   
<div id="entrega_orcamento">

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
            aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus onsubmit="Carrega_entrega_vale()">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" id="botao_busca3" type="submit" onclick="Carrega_entrega_vale()"><b><i class="fa fa-search"></i> </b></button>
          </div>
        </div>


        <div id="entrega_vale">

        <!-- Retorno via JS --> 
    
       </div>




</div>


</div> 
</div>
</div>
</div>

