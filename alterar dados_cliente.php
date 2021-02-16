<?php  

$host = "servidor_banco_de_dados.com.br";
$user = "usuario_banco_de_dados";
$pass = "senha_banco_de_dados";
$db   = "banco_de_dados";

$conecta = mysql_connect($host, $user, $pass) or print (mysql_error());

mysql_select_db($db, $conecta);

$nome_cliente  = $_REQUEST['nome_cliente'];
$endereco_cliente = $_REQUEST[' endereco_cliente '];
$idade_cliente = $_REQUEST['idade_cliente'];
$sexo_cliente = $_REQUEST['sexo_cliente'];

	$sql = "UPDATE Cliente SET

EnderecoCliente = $endereco_cliente,
IdadeCliente = $idade_cliente,
SexoCliente = $sexo_cliente,

           WHERE NomeCliente = $nome_cliente.

$query = mysql_query($sql);
$conteudo = mysql_fetch_array($query);
echo($conteudo);

?>