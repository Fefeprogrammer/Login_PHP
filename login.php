<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $email = isset($_POST["temail"])?$_POST["temail"]:"Valor invalido";
        $senha = isset($_POST["tsenha"])?$_POST["tsenha"]:"Valor invalido";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado - <?php echo $email; ?>></title>
</head>
<body>
    <?php
        require_once 'Conexao.php';
        $conexao = new Conexao($email, $senha);

        require_once 'admin.php';

        
    ?>
</body>
</html>