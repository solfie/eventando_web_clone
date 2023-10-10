<?php
 
/*
 * O código abaixo registra um novo usuário.
 * Método do tipo POST.
 */

require_once('BD/mobile/conexao_mobile.php');

// array de resposta
$resposta = array();
 
// verifica se todos os campos necessários foram enviados ao servidor
if (isset($_POST['novo_nome']) && isset($_POST['nova_data_nasc']) && isset($_POST['novo_estado']) && isset($_POST['novo_telefone']) && isset($_POST['novo_email']) 
&& isset($_POST['nova_senha'])) {
 
    // o método trim elimina caracteres especiais/ocultos da string
    $novo_nome= trim($_POST['novo_nome']);
	$nova_data_nasc = trim($_POST['nova_data_nasc']);
    $novo_estado = trim($_POST['novo_estado']);
    $novo_telefone = trim($_POST['novo_telefone']);
	$novo_email = trim($_POST['novo_email']);
	$nova_senha = trim($_POST['nova_senha']);
	
	// o bd não armazena diretamente a senha do usuário, mas sim 
	// um código hash que é gerado a partir da senha.
	$token = password_hash($nova_senha, PASSWORD_DEFAULT);
	
	// antes de registrar o novo usuário, verificamos se ele já
	// não existe.
	$consulta_usuario_existe = $db_con->prepare("SELECT descricao FROM TEM_TIPO_CONTATO_USUARIO WHERE descricao='$novo_email'");
	$consulta_usuario_existe->execute();
	if ($consulta_usuario_existe->rowCount() > 0) { 
		// se já existe um usuario para login
		// indicamos que a operação não teve sucesso e o motivo
		// no campo de erro.
		$resposta["sucesso"] = 0;
		$resposta["erro"] = "Usuario ja cadastrado";
	}
	else {
		// se o usuário ainda não existe, inserimos ele no bd.
        $consulta = $db_con->prepare("INSERT INTO USUARIO(nome) VALUES('$novo_nome')");
        $consulta2 = $db_con->prepare("INSERT INTO USUARIO(data_nasc) VALUES('$nova_data_nasc')");
        $consulta3 = $db_con->prepare("INSERT INTO USUARIO(FK_ESTADO_id_estado) VALUES('$novo_estado')");
		$consulta4 = $db_con->prepare("INSERT INTO TEM_TIPO_CONTATO_USUARIO(descricao) VALUES('$novo_telefone')");
        $consulta5 = $db_con->prepare("INSERT INTO TEM_TIPO_CONTATO_USUARIO(descricao) VALUES('$novo_email')");
        $consulta6 = $db_con->prepare("INSERT INTO USUARIO(senha) VALUES('$token')");
	 
		if ($consulta->execute() && $consulta2->execute() && $consulta3->execute() && $consulta4->execute() && $consulta5->execute() && $consulta6->execute()) {
			// se a consulta deu certo, indicamos sucesso na operação.
			$resposta["sucesso"] = 1;
		}
		else {
			// se houve erro na consulta, indicamos que não houve sucesso
			// na operação e o motivo no campo de erro.
			$resposta["sucesso"] = 0;
			$resposta["erro"] = "erro BD: " . $consulta->error .$consulta2->error;
		}
	}
}
else {
	// se não foram enviados todos os parâmetros para o servidor, 
	// indicamos que não houve sucesso
	// na operação e o motivo no campo de erro.
    $resposta["sucesso"] = 0;
	$resposta["erro"] = "faltam parametros";
}

// A conexão com o bd sempre tem que ser fechada
$db_con = null;

// converte o array de resposta em uma string no formato JSON e 
// imprime na tela.
echo json_encode($resposta);
?>