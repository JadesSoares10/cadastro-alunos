<?php
   session_start();

   if((!isset($_SESSION['Nome']) ==true) and (!isset($_SESSION['Matricula']) == true))
{
    unset($_SESSION['Nome']);
    unset($_SESSION['Matrícula']);
    header('location: Login.php');
}
$logado = $_SESSION['Nome'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin = "anonymous"
    <title>Formulário</title>
  <style>
    body{
      background: linear-gradient(to right,rgb(125, 20, 238), rgb(34, 2, 92));
      color: white;
      text-align: center;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container-fluid">
<a class="navbar-brand" href="#">Formulário</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
</div>
<div class = "d-flex">
<a href="sair.php" class="btn btn-danger me-5">Sair</a>
</div>