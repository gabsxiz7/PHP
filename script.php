<?php

$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$media = ($nota1+$nota2+$nota3+$nota4) / 4;
 
echo "Meu nome é $nome e Minha nota final é $media";

if ($media>=6) {
    echo ". O aluno(a) $nome, está Aprovado!";

}



else{
    echo ". O aluno(a) $nome está Reprovado!";
}



?>