<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de IMC</title>
</head>
<body>

    <div style="text-align: center; color: green;">
    <?php

    function classificarIMC($imc) {
        $indices = array(
            'Magreza' => 18.5,
            'Saudável' => 24.9,
            'Sobrepeso' => 29.9,
            'Obesidade Grau I' => 34.9,
            'Obesidade Grau II' => 39.9,
            'Obesidade Grau III' => PHP_FLOAT_MAX
        );

        foreach ($indices as $classificacao => $limite) {
            if ($imc <= $limite) {
                return "Seu IMC é $imc. Você está classificado como $classificacao.";
            }
        }
        return "Seu IMC é $imc. Você está classificado como Obesidade Grau III.";
    }

    function sanitizeInput($input) {
        return filter_var($input, FILTER_VALIDATE_FLOAT);
    }
    ?>
    </div>

    <h2 style="text-align: center;">Classificação de IMC</h2>

    <form action="" method="post" style="color: blue; text-align: center;">
        <label for="imc">Digite um valor de IMC para ver sua classificação:<br></label>
        <input style="width: 220px;" type="text" name="imc" id="imc" required step="any" placeholder="Valor do IMC com 2 casas decimais"><br>

        <button type="submit">Classificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imcInput = isset($_POST["imc"]) ? $_POST["imc"] : '';

        // Sanitiza a entrada do usuário
        $imc = sanitizeInput($imcInput);

        if ($imc !== false) {
            // Se a entrada for válida, exibe o resultado
            echo "<div style='text-align: center; color: green;'>" . classificarIMC($imc) . "</div>";
        } else {
            // Se a entrada não for válida, exibe uma mensagem de erro
            echo "<div style='text-align: center; color: red;'>Por favor, insira um valor de IMC válido.</div>";
        }
    }
    ?>

</body>
</html>
