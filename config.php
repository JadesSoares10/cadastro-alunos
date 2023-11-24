<?php

$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'alunos';

$conexao = mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno )
{
    echo "erro";
}
else
{
    echo" conexão efetuada com sucesso.";
}
?>