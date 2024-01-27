<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Calculadora</title>
    <link rel="stylesheet" href="style.css   ">
</head>

<body>
    <main>
        <h1>Calculadora</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="escolha">
                <h1>Selecione a operação desejada</h1>
            </label>
            <select id="operacao" name="operações">
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <br />
            <input type="number" name="nro1" id="nro1" />
            <br><input type="number" name="nro2" id="nro2" />
            <main>
                <div class="resu">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        $n1 = $_GET["nro1"];
                        $n2 = $_GET["nro2"];
                        $operacao = $_GET["operações"];

                        if (is_numeric($n1) && is_numeric($n2)) {
                            switch ($operacao) {
                                case "adicao":
                                    $resultado = $n1 + $n2;
                                    echo "O resultado de $n1 mais $n2 é igual a $resultado";
                                    break;
                                case "subtracao":
                                    $resultado = $n1 - $n2;
                                    echo "O resultado de $n1 menos $n2 é igual a $resultado";
                                    break;
                                case "multiplicacao":
                                    $resultado = $n1 * $n2;
                                    echo "O resultado de $n1 vezes $n2 é igual a $resultado";
                                    break;
                                case "divisao":
                                    if ($n2 != 0) {
                                        $resultado = $n1 / $n2;
                                        echo "O resultado de $n1 dividido por $n2 é igual a $resultado";
                                    } else {
                                        echo "Erro: Não é possível dividir por zero.";
                                    }
                                    break;
                                default:
                                    echo "Operação inválida.";
                            }
                        } else {
                            echo "Por favor, insira valores numéricos válidos.";
                        }
                    }
                    ?>
                </div>
            </main>

            <input type="submit" value="Calcular" />
        </form>


</body>

</html>