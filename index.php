<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Planetário CSS</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #050505;
            overflow: hidden;
            color: white;
            font-family: sans-serif;
        }

        .solar-system {
            position: relative;
            width: 600px;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* O Sol */
        .sun {
            position: absolute;
            width: 60px;
            height: 60px;
            background: radial-gradient(circle, #ff0, #f90);
            border-radius: 50%;
            box-shadow: 0 0 40px #f90;
            z-index: 10;
        }

        /* Órbitas Genéricas */
        .orbit {
            position: absolute;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        /* Planetas */
        .planet {
            position: absolute;
            top: 50%;
            left: -10px; /* Ajuste para centralizar na linha da órbita */
            border-radius: 50%;
            transform: translateY(-50%);
        }

        /* Animação de Rotação */
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Configurações Específicas por Planeta */
        .mercury-orbit { width: 100px; height: 100px; animation: rotate 3s linear infinite; }
        .mercury { width: 10px; height: 10px; background: #999; left: 45px; }

        .venus-orbit { width: 160px; height: 160px; animation: rotate 7s linear infinite; }
        .venus { width: 15px; height: 15px; background: #e3bb76; left: 72px; }

        .earth-orbit { width: 230px; height: 230px; animation: rotate 12s linear infinite; }
        .earth { width: 16px; height: 16px; background: #2271b3; left: 107px; }

        .mars-orbit { width: 300px; height: 300px; animation: rotate 20s linear infinite; }
        .mars { width: 12px; height: 12px; background: #e27b58; left: 144px; }

        .jupiter-orbit { width: 420px; height: 420px; animation: rotate 40s linear infinite; }
        .jupiter { width: 30px; height: 30px; background: #d39c7e; left: 195px; }
    </style>
</head>
<body>

    <div class="solar-system">
        <div class="sun"></div>

        <div class="orbit mercury-orbit">
            <div class="planet mercury"></div>
        </div>

        <div class="orbit venus-orbit">
            <div class="planet venus"></div>
        </div>

        <div class="orbit earth-orbit">
            <div class="planet earth"></div>
        </div>

        <div class="orbit mars-orbit">
            <div class="planet mars"></div>
        </div>

        <div class="orbit jupiter-orbit">
            <div class="planet jupiter"></div>
        </div>
    </div>

</body>
</html>