<?php
session_start();
function usuarioEstaLogado() {
    return isset($_["usuario_logado"]);
}

function verificaUsuario() {
    if(!usuarioEstaLogado()) {
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    }
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email) {
    $_SESSION['usuario_logado'] = $email;
}

function deslogar(){
    session_destroy();
}