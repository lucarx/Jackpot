<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caça Níquel Jackpot</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #111, #333);
            color: white;
            text-align: center;
            padding: 40px;
        }
        .slot-machine {
            background: #222;
            border: 5px solid gold;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 20px gold;
        }
        .reels {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }
        .reel {
            font-size: 48px;
            width: 60px;
            height: 60px;
            background: white;
            color: black;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        button {
            background: gold;
            border: none;
            padding: 15px 30px;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: orange;
        }
        #message {
            margin-top: 20px;
            font-size: 24px;
            color: #0f0;
        }
    </style>
</head>
<body>
    <h1>Jogo de Caça Níquel - Jackpot!</h1>
    <div class="slot-machine">
        <div class="reels">
            <div class="reel" id="reel1">🔴</div>
            <div class="reel" id="reel2">🟡</div>
            <div class="reel" id="reel3">🟢</div>
        </div>
        <button onclick="spin()">Girar!</button>
        <div id="message"></div>
    </div>
    <script>
        const symbols = ['🍒', '🍋', '🍊', '🍉', '⭐', '🍀', '💎'];

        function spin() {
            const reels = [
                document.getElementById('reel1'),
                document.getElementById('reel2'),
                document.getElementById('reel3')
            ];

            const results = reels.map(reel => {
                const symbol = symbols[Math.floor(Math.random() * symbols.length)];
                reel.textContent = symbol;
                return symbol;
            });

            const allEqual = results.every(val => val === results[0]);
            const message = document.getElementById('message');
            
            if (allEqual) {
                message.textContent = "JACKPOT! Você ganhou!";
            } else {
                message.textContent = "Tente novamente!";
            }
        }
    </script>
</body>
</html>
