<?php  

$host = "servidor_banco_de_dados.com.br";
$user = "usuario_banco_de_dados";
$pass = "senha_banco_de_dados";
$db   = "banco_de_dados";

$conecta = mysql_connect($host, $user, $pass) or print (mysql_error());

mysql_select_db($db, $conecta);

$nome_cliente  = $_REQUEST['nome_cliente'];

$sql = "SELECT * FROM Cliente WHERE NomeCliente =  '$nome_cliente'”;

$query = mysql_query($sql);

$conteudo = mysql_fetch_array($query);

echo($conteudo);

?>