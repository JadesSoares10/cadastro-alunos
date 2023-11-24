<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Formulário | GN</title>
 <style>
 body{
 font-family: Arial, Helvetica, sans-serif;
 background-image: linear-gradient(45deg, purple, black);
 }
 .box{
 color: white;
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-50%);
 background-color: rgba(0, 0, 0, 0.6);
 padding: 15px;
 border-radius: 15px;
 width: 20%;
 }
 fieldset{
 border: 3px solid purple;
 }
 legend{
 border: 1px solid purple;
 padding: 10px;
 text-align: center;
 background-color: purple;
 border-radius: 8px;
 }
 .inputBox{
 position: relative;
 }
 .inputUser{
 background: none;
 border: none;
 border-bottom: 1px solid white;
 outline: none;
 color: white;
 font-size: 15px;
 width: 100%;
 letter-spacing: 2px;
 }
 .labelInput{
 position: absolute;
 top: 0px;
 left: 0px;
 pointer-events: none;
 transition: .5s;
 }
 .inputUser:focus ~ .labelInput,
 .inputUser:valid ~ .labelInput{
 top: -20px;
 font-size: 12px;
 color: purple;
 }
 #submit{
 background-image: linear-gradient(to right,rgb(125, 20, 238), rgb(34, 2, 92));
 width: 100%;
 border: none;
 padding: 15px;
 color: white;
 font-size: 15px;
 cursor: pointer;
 border-radius: 10px;
 }
 #submit:hover{
 background-image: linear-gradient(to right,rgb(58, 13, 118), rgb(9, 1, 24));
 }
 </style>
</head>
<body>
 <div class="box">
 <form action="">
 <fieldset>
 <legend><b>Fórmulário de Alunos</b></legend>
 <br>
 <div class="inputBox">
 <input type="text" name="nome" id="nome" class="inputUser" required>
 <label for="nome" class="labelInput">Nome</label>
 </div>
 <br><br>
 <div class="inputBox">
 <input type="text" name="matricula" id="matricula" class="inputUser"
required>
 <label for="matricula" class="labelInput">Matrícula</label>
 </div>
 <br><br>
 <div class="inputBox">
 <input type="text" name="primeira nota" id="primeira nota"
class="inputUser" required>
 <label for="primeira nota" class="labelInput">Primeira nota</label>
 </div>
 <br><br>
 <div class="inputBox">
 <input type="text" name="segunda nota" id="segunda nota"
class="inputUser" required>
 <label for="segunda nota" class="labelInput">Segunda nota</label>
 </div>
 <br><br>
 <input type="submit" name="submit" id="submit">
 </fieldset>
 </form>
 </div>
</body>
</html>