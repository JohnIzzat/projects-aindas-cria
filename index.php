<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="formulario.php" method="get"></form>
        <label for="nome">nome</label>
        <input type="text" name="nome" id="idnome">
        <input type="submit" value="Enviar">
    </main>
    <?php
        $nome = $_GET["nome"];

        echo "Prazer $nome seu viadinho";
    ?>
</body>

</html>