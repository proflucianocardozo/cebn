<?php

session_start();
if (isset($_SESSION['MeuLogin'])) {

    $login = $_SESSION['MeuLogin']['login'];
    $hora = $_SESSION['MeuLogin']['hora'];
    $idUsu = $_SESSION['MeuLogin']['idUsu'];
    $categoria_id = $_SESSION['MeuLogin']['categoria_id'];
    $usuario_ativo = $_SESSION['MeuLogin']['usuario_ativo'];
    $chave = "lcmrjita";
    $ip = $_SERVER['REMOTE_ADR'];

    if ($_SESSION['MeuLogin']['chave'] != md5($login . $chave . $ip . $hora)) {
        header("location: index.php?m=2");
    }
    if (( time() - $hora ) > 9000) {
        session_destroy();
        header("location: index.php?m=3");
    } else {
        $hora = time();
        $chave = md5($login . $chave . $ip . $hora);
        $_SESSION['MeuLogin'] = array("login" => $login, "chave" => $chave, "hora" => $hora, "idUsu" => $idUsu, "categoria_id" => $categoria_id);

        $tab_esquerda;
    }
} else {
    header("location: index.php?m=2");
}
//function url_inicio(){
//    $url_inicio = "https://$_SERVER[SERVER_NAME]";
//}
function url_imagem(){
    $URL_ATUAL= "https://$_SERVER[HTTP_HOST]".'/imagem/';
//    echo "<pre>";
//    echo print_r($_SERVER);
//    echo "</pre>";
echo $URL_ATUAL;

}
function url_pasta(){
    $url_pasta = "https://$_SERVER[HTTP_HOST]".'/'; 
}

function url_inicio(){
    $url_inicio = "https://$_SERVER[HTTP_HOST]".'/homologacvo/'; 
}
function url_rua(){
    $url_rua = "https://$_SERVER[HTTP_HOST]".'/cvo/rua/'; 
}

function url_quadra(){
    $url_quadra = "https://$_SERVER[HTTP_HOST]".'/cvo/quadra/'; 
}
function url_jazigo(){
    $url_jazigo = "https://$_SERVER[HTTP_HOST]".'/jazigo/'; 
}
function url_proprietario(){
    $url_proprietario = "https://$_SERVER[HTTP_HOST]".'/proprietario/'; 
}
function url_sepulta(){
    $url_sepulta = "https://$_SERVER[HTTP_HOST]".'/sepultamento/'; 
}
function url_exumacao(){
    $url_exumacao = "https://$_SERVER[HTTP_HOST]".'/exumacao/'; 
}