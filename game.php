<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Игра</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 67px;
            height: 81px;
            border: 1px solid #ccc;
            text-align: center;
            vertical-align: middle;
            position: relative;
        }

        #modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            display: none;
            justify-content: center;
            align-items: center;
        }

        #buttonStart {
            border: none;
    border-radius: 10px;
    background-color: #e67e22;
    text-align: center;
    color: white;
    font-size: 18px;
    margin-top: 92%;
    padding: 10px;
    margin-left: 35%;
        }

        #buttonStart:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div id="form"></div>

    <button id="buttonStart">Начать игру</button>

    <div id="gameArea" style="display: none; color: white;">
        <div>Время: <span id="timerDisplay">20</span> секунд</div>
        <table id="gameTable"></table>
    </div>

    <script>
        const gameTable = document.getElementById('gameTable');
        const timerDisplay = document.getElementById('timerDisplay');
        let timerInterval;
        let clickedCells = 0;
        const cols = 4;
        const rows = 4;
        const cellCount = 5;
        let cakeIndices = [];


        function setupGame() {
            clickedCells = 0;
            gameTable.innerHTML = '';

            cakeIndices = new Set();
            while (cakeIndices.size < cellCount) {
                const randomIndex = Math.floor(Math.random() * (rows * cols));
                cakeIndices.add(randomIndex);
            }
            cakeIndices = Array.from(cakeIndices);

            for (let i = 0; i < rows; i++) {
                let row = document.createElement('tr');
                for (let j = 0; j < cols; j++) {
                    let cell = document.createElement('td');
                    const cellIndex = i * cols + j;
                    const gif = document.createElement('img');
                    gif.src = 'IMG/glitter-sparkle.gif';
                    gif.alt = 'Гифка';
                    gif.style.width = '100%';
                    gif.style.height = '100%';
                    cell.appendChild(gif);

                    cell.addEventListener('click', function () {
                        if (cakeIndices.includes(cellIndex)) {
                            const cakeImg = document.createElement('img');
                            cakeImg.src = 'IMG/капкейк.png';
                            cakeImg.alt = 'Кекс';
                            cakeImg.style.width = '100%';
                            cakeImg.style.height = '100%';
                            cell.innerHTML = '';
                            cell.appendChild(cakeImg);
                            clickedCells++;
                        } else {
                            const sadFaceImg = document.createElement('img');
                            sadFaceImg.src = 'IMG/tarelka.png';
                            sadFaceImg.alt = 'Грустный сайлик';
                            sadFaceImg.style.width = '100%';
                            sadFaceImg.style.height = '100%';
                            cell.innerHTML = '';
                            cell.appendChild(sadFaceImg);
                        }

                        if (clickedCells === cellCount) {
                            clearInterval(timerInterval); 
                            const message = {
                                type: 'GAME_WIN',
                                text: 'Поздравляем! Вы входите в 3% людей, которые смогли пройти эту мини-игру. Поэтому,получаете возможность записаться на мастер-класс с 5% скидкой в течение 2 дней. Для активации скидки форме регистрации нужно ввести промокод: КОНДИ25' 
                            };
                            window.parent.postMessage(message, '*');
                        }
                    });

                    row.appendChild(cell);
                }
                gameTable.appendChild(row);
            }

            startTimer();
        }
        function startTimer() {
            let timeElapsed = 20;
            timerInterval = setInterval(function () {
                timeElapsed--;
                timerDisplay.textContent = timeElapsed;

                if (timeElapsed <= 0) {
                    gameOver();
                }
            }, 1000);
        }

        function gameOver() {
            clearInterval(timerInterval);
            gameTable.style.display = 'none';
            const message = {
                type: 'GAME_OVER',
                text: 'Время вышло( Не расстраивайтесь, мы 100% гарантируем вам положительные эмоции и приятные воспоминания на нашем мастер-классе! Приходите, ждём именно Вас🤗'
            };
            window.parent.postMessage(message, '*');
        }


        const startButton = document.getElementById('buttonStart');
        startButton.addEventListener('click', function () {
            startButton.style.display = 'none';
            document.getElementById('form').style.display = 'none';
            document.getElementById('gameArea').style.display = 'block';

            window.parent.postMessage({
                type: 'HIDE_BACKGROUND'
            }, '*');

            setupGame();
        });
    </script>
</body>

</html>