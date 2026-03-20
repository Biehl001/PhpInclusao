<?php
require_once 'config/config.php';
require_once 'funcoes/saudacao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $nomeSistema; ?></title>
</head>
<body>
    <h1><?php echo $nomeSistema; ?></h1>

    <?php include 'includes/menu.php'; ?>

    <main>
        <p><?php saudacao(); ?></p>
    </main>

    <?php include 'includes/rodape.php'; ?>
</body>
</html>
