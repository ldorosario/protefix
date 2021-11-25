<?php 
  
      try{
      $hostname = '192.168.1.199:';
      $username = 'sysdba';
      $password = 'masterkey';
      $dbname = '192.168.1.199:C:/Users/administrador.PROTEFIX/Dropbox/Compartilhamentos/Systec/dados/PROTEFIX.FDB';
      $connect = new PDO('firebird:dbname='.$dbname.';host='.$hostname,$username,$password);
      }
      catch(PDOException $e) {

            echo "Falha na conexão. ".$e->getcode();
     }
?>
