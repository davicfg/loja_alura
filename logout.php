<?php
include("logica-usuario.php");

deslogar();
$_SESSION["success"] = "Deslogado com sucesso.";
header("Location: index.php");
