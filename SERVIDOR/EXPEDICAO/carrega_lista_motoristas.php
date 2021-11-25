<div class="fadein">
    <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#myModalNovoMotorista"><b>NOVO MOTORISTA +</b></button>
    <br>
    <br>
<table id="myTable" class="table table-hover" >
<?php

    echo"<thead>";
    echo" <tr>";
    
    echo" <th class='text-center'>NOME</th>";
    echo" <th class=></th>";
    echo" </tr>";
    echo" </thead>";
    echo" <tbody>";

include 'conexaoMysql.php';

$sql = "SELECT*FROM motoristas ORDER BY nome ASC";
 
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0){ 
 
while($row = mysqli_fetch_assoc($result)){
  
  echo"<tr>";
  
    echo"<td class='text-center'>".$row['nome']."</td>";
    echo"<input type='hidden' id='id' value=".$row['id'].">";
    echo"<td class='x'><button class='btn btn-danger btn-sm' value=".$row['id']." onclick='Proc_remove_motorista(this)'><b>X</b></button></td>";
    echo"</tr>";
  
   
}
}
?>
</div>


<!-- The Modal -->
<div class="modal fade" id="myModalNovoMotorista">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><i>NOVO MOTORISTA</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                         
       
      <div class="input-group mb-3">
  <input type="text" id="novo_motorista" class="form-control" placeholder="NOME NOVO MOTORISTA" aria-describedby="basic-addon2" autofocus="autofocus" required="required" >
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit" onclick="Proc_novo_motorista()"><b><i class="fa fa-plus" style="font-size:20px"></i> </b></button>
  
  </div>
</div>
</form>
        </div>
      </div>
    </div>
  </div>
  
</div>