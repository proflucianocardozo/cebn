<?php

function cabecalho() {

    echo ' <html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <!-- CSS only -->

        <title>Gestão de Alunos</title>
    </head>
    <body>
        <header>
            <div>
<h3>Sistema de Gestão de Alunos</h3>
</td>
<td>
<img src = "imagem/logo_transp_sem_escrita.png" class = "myDiv3"/>
</td>
</div>
</header>
<div class = "conteudo">
';
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function rodape($user) {
    echo"            <footer id='footer'>
        <p>Gestão de Alunos</p>
        <p>Copyright &copy; 2022 - by Professor Luciano Cardozo Magalhães<br/>
            <a href=''>Facebook</a> | <a href=''>Twitter</a></p>";
    echo "Usuário: " . $user;
    echo"</footer>
</body>
</html>";
}

function bcon($conecta) {

//    $link = mysql_select_db($banco, mysql_connect('localhost', 'root', 'lcmrjit@'));
    $conn = mysqli_connect('br1016.hostgator.com.br', 'lucama33_luciano', 'Lcm75330466@', 'lucama33_buarque');

//    if (!$link) {
//        echo "Erro: NÃ£o Foi feita a conexÃ£o com o banco de dados. Tente novamente.";
//    }
//    return $link;
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $conecta = $conn;

    return $conecta;
}

function revisao($categoria_id, $usuario_ativo) {
    if (($categoria_id == '3') || ($usuario_ativo == 0)) {

        echo "<script>"
        . "alert('Você não tem Permissão para Revisar Cards ou Usuário Inativado!');"
        . "history.go(-1);"
        . "</script> ";
        exit;
    }
}

function publicar($categoria_id, $usuario_ativo) {
    if (($categoria_id == '3') || ($usuario_ativo == 0)) {

        echo "<script>"
        . "alert('Você não tem Permissão para Revisar/Publicar Cards ou Usuário Inativado!');"
        . "history.go(-1);"
        . "</script> ";
        exit;
    }
}

function usuariocat($categoria_id, $usuario_ativo) {
    if (($categoria_id == '3') || ($usuario_ativo == 0)) {

        echo "<script>"
        . "alert('Você não tem Permissão para Incluir/Excluir Usuários, ou Usuário Inativado!');"
        . "history.go(-1);"
        . "</script> ";
        exit;
    }
}

function usuarioativo($usuario_ativo) {
    if ($usuario_ativo == 0) {

        echo "<script>"
        . "alert('Usuário Inativado!');"
        . "history.go(-1);"
        . "</script> ";
        exit;
    }
}

function cardvazio() {

    echo "<script>"
    . "alert('Não há Ilustração/Link de Texto para esse card!');"
    . "history.go(-1);"
    . "</script> ";
    exit;
}

function textovazio() {

    echo "<script>"
    . "alert('Não há Ilustração para esse card!');"
    . "history.go(-1);"
    . "</script> ";
    exit;
}
