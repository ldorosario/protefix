<?php 

/*  
*$dir é o caminho da pasta onde você deseja que os arquivos sejam salvos. 
*Neste exemplo, supondo que esta pagina esteja em public_html/upload/ 
*os arquivos serão salvos em public_html/upload/imagens/ 
*Obs.: Esta pasta de destino dos arquivos deve estar com as permissões de escrita habilitadas. 
*/ 
$id = $_POST['id'];
$dir = $_POST['dir']; 
// recebendo o arquivo multipart 
$file = $_FILES["arquivo"]; 
// Move o arquivo da pasta temporaria de upload para a pasta de destino 

if(move_uploaded_file($file["tmp_name"], "$dir/".$file["name"])) { 
	
	include 'conexaoMysql.php';

	$arquivopdf = "/mobile/financeiro/".$dir.$file["name"]; //local servidor+diretorio+nome do arquivo de upload.
	
	$sql = "UPDATE cadastrocliente SET pdfcnpj ='$arquivopdf' WHERE id like '$id'";
    $resultado = mysqli_query($conn, $sql);
	
	echo"<script>window.close();</script>";
}       
?>