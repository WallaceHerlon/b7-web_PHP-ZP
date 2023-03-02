<?php

$aluno = array(
    "nome" => "Pedro",
    "idade" => 45,
    "estado" => "SP",
    "pais" => "Brasil"
);

foreach($aluno as $chave => $dado) {
    echo $chave. " = ".$dado."<br/>";
}

?>