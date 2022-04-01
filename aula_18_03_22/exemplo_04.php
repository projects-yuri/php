<?php

$sigla = "SP";

switch ($sigla) {
    case "SP":
        echo("São Paulo");
        break;
    case 'RJ':
        echo("Rio de Janeiro");
    case 'MG':
        echo("Minas Gerais");
    default:
        echo("Nenhuma sigla encontrada");
        break;
}

?>