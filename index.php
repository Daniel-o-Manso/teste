<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f4f4f9; }
        .calc-card { background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 300px; }
        input, select, button { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; }
        button { background: #007bff; color: white; border: none; cursor: pointer; font-weight: bold; }
        button:hover { background: #0056b3; }
        .result { background: #e7f3ff; padding: 10px; border-radius: 6px; text-align: center; font-weight: bold; color: #0056b3; }
    </style>
</head>
<body>

<div class="calc-card">
    <h2>Calculadora PHP</h2>
    <form method="post">
        <input type="number" name="n1" step="any" placeholder="Primeiro número" required>
        <select name="operacao">
            <option value="soma">+</option>
            <option value="sub">-</option>
            <option value="mult">x</option>
            <option value="div">÷</option>
        </select>
        <input type="number" name="n2" step="any" placeholder="Segundo número" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $n1 = (float)$_POST['n1'];
        $n2 = (float)$_POST['n2'];
        $op = $_POST['operacao'];
        $resultado = 0;

        switch ($op) {
            case 'soma': $resultado = $n1 + $n2; break;
            case 'sub':  $resultado = $n1 - $n2; break;
            case 'mult': $resultado = $n1 * $n2; break;
            case 'div': 
                $resultado = ($n2 != 0) ? $n1 / $n2 : "Erro: Divisão por zero";
                break;
        }

        echo "<div class='result'>Resultado: $resultado</div>";
    }
    ?>
</div>

</body>
</html>