<?php
    function getInfoUsuarios($email){
        require_once('BD/mobile/conexao_mobile.php');
        // array de resposta
        $resposta = array();

        $consulta = $db_con->prepare("SELECT * FROM USUARIO WHERE email ='$email'");
        $consulta->execute();

        if ($consulta->execute()) {


            $consulta2 = $db_con->prepare("SELECT * FROM TEM_TIPO_CONTATO_USUARIO WHERE id_usuario = '$id_usuario'");
            $consulta2->execute();
        }
    }
?>