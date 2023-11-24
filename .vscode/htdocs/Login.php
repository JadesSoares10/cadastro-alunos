<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
 <style>
 body{
 font-family: Arial, Helvetica, sans-serif;
 background-image: linear-gradient(45deg, purple, black);
 }
 div{
 background-color: rgba(0, 0, 0, 0.6);
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
 padding: 80px;
 border-radius: 15px;
 color: white;
 }
 input{
 padding: 15px;
 border: none;
 outline: none;
 font-size: 15px;
 }
 button{
 background-image: linear-gradient(to right,rgb(125, 20, 238), rgb(34, 2, 92));
 border: none;
 padding: 15px;
 width: 100%;
 border-radius: 10px;
 color: white;
 font-size: 15px;
 }
 button:hover{
 background-image: linear-gradient(to right,rgb(58, 13, 118), rgb(9, 1, 24));
 cursor: pointer;
 }
 
 </style>
</head>
<body>
 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 if($_SESSION["email"] == "adm@gmail.com" && $_SESSION["senha"] == "123"){
 header("Location: teste.php");

 }
 else{
 print "Usuário ou senha incorretos";
 }

 }
 ?>
 <div>
 <h1>Login</h1>
 <form action="teste.php" method="POST">
 <label for="name" ></label>
 <input type="name" placeholder="Nome" id="name" name="name"/> <br><br>
 <label for="senha"></label>
 <input type="password" placeholder="Matrícula"id="senha" name="senha"/>
<br><br>
 <button>Entrar</button>
 </form>
 </div>
</body>
</html>
