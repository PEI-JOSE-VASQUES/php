<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunicação HTML e JS com PHP</title>
</head>
<body>
    <h1>Interação HTML, JavaScript e PHP</h1>
    
    <button id="myButton">Clique aqui</button>
    <p id="output"></p>

    <!-- Inclui o JavaScript diretamente dentro do PHP -->
    <script>
        <?php include 'script.js'; ?>
    </script>
</body>
</html>
