<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример страницы на JavaScript</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>Добро пожаловать на мою страницу!</h1>
    <button id="myButton">Нажми на меня!</button>

    <script>
        document.getElementById('myButton').addEventListener('click', function() {
            alert('Привет! Спасибо, что нажали на кнопку!');
        });
    </script>

</body>
</html>