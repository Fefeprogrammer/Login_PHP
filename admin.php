<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $user = isset($_POST["usuario"])?$_POST["usuario"]:"Valor não recebido";
        $senha = isset($_POST["tsenha"])?$_POST["tsenha"]:"Valor não recebido";
        
        require_once 'conexao_admin.php';
        $conexao = Conexao($user, $senha);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - <?php $user; ?></title>
</head>
<body>
    <label for="ctexto">Digite alguma coisa:</label>
    <input type="text" name="ttexto" id="ctexto" />
    <?php
        $texto = isset($_POST["ttexto"])?$_POST["ttexto"]:"Valor nao definido";

        function Inserir(){
            echo "<p>$texto</p>";
        }
    ?>
</body>
</html>