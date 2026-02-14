<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relógio Moderno</title>
    <style>
        body {
            background: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .relogio {
            width: 300px;
            height: 300px;
            border: 8px solid #333;
            border-radius: 50%;
            position: relative;
            background: #1b1b1b;
            box-shadow: 0 0 30px rgba(0,0,0,0.5);
        }

        /* Ponto central */
        .relogio::after {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            background: #ff4757;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .ponteiro {
            position: absolute;
            bottom: 50%;
            left: 50%;
            transform-origin: bottom;
            border-radius: 10px;
            transform: translateX(-50%) rotate(0deg);
        }

        .hora {
            width: 6px;
            height: 70px;
            background: white;
        }

        .minuto {
            width: 4px;
            height: 100px;
            background: #aaa;
        }

        .segundo {
            width: 2px;
            height: 120px;
            background: #ff4757;
        }
    </style>
</head>
<body>

    <div class="relogio">
        <div class="ponteiro hora" id="hora"></div>
        <div class="ponteiro minuto" id="minuto"></div>
        <div class="ponteiro segundo" id="segundo"></div>
    </div>

    <script>
        function atualizarRelogio() {
            const agora = new Date();
            
            const s = agora.getSeconds();
            const m = agora.getMinutes();
            const h = agora.getHours();

            // Cálculos para converter tempo em graus (360° / unidade)
            const degS = s * 6; 
            const degM = m * 6 + (s * 0.1); 
            const degH = (h % 12) * 30 + (m * 0.5);

            document.getElementById('segundo').style.transform = `translateX(-50%) rotate(${degS}deg)`;
            document.getElementById('minuto').style.transform = `translateX(-50%) rotate(${degM}deg)`;
            document.getElementById('hora').style.transform = `translateX(-50%) rotate(${degH}deg)`;
        }

        setInterval(atualizarRelogio, 1000);
        atualizarRelogio(); // Chamada inicial
    </script>
</body>
</html>
