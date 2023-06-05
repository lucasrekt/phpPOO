<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>

    <?php 
        require_once 'ControleRemoto.php';

        $c1 = new ControleRemoto;
        $c1->ligar();
        $c1->maisVolume();
        $c1->abrirMenu();
    ?>
    
    </pre>
    
</body>
</html>