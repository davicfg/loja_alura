<?php
include("logica-usuario.php");

deslogar();
header("Location: index.php?logout=1");
