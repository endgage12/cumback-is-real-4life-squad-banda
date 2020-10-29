<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/general.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Шифр RSA</title>
</head>
<body>

<div class="content">
    <script>
        function getSecretExp() {
            let module = (document.getElementById("coef_p").value - 1) * (document.getElementById("coef_q").value - 1); //Ошибка, не P * Q, а функция эйлера
            document.getElementById("dialogv5ed36f0f2ef49_m").value = module;
            let secretExp = document.getElementById("dialogv5ed36f0f2ef49_b").innerHTML;
            document.getElementById("secretExp").value = secretExp;
        }
    </script>
    <form id='form' name='secretInfo' method='post' action='handlers/crypt.php'>
        <textarea id="inputMessage" name='inputMessage' cols='20' rows='5' placeholder="Введите сообщение" required></textarea>
        <br>
        <label for='p'>p</label>
        <input type='text' name='p' id="coef_p" value="31" onmouseout="getSecretExp()" required>

        <label for='p'>q</label>
        <input type='text' name='q' id="coef_q" value="5" onmouseout="getSecretExp()" required> <br>

        <label for="dialogv5ed36f0f2ef49_a">e</label>
        <input type="text" size="12" value="11" name="e" id="dialogv5ed36f0f2ef49_a" onmouseout="getSecretExp()"/>

        <input type="hidden" size="12" value="155" name="m" id="dialogv5ed36f0f2ef49_m" onmouseout="getSecretExp()"/>

        <button type="button" id="dialogv5ed36f0f2ef49_calculate">
            <span>Рассчитать</span>
        </button>

        <div id="dialogv5ed36f0f2ef49_b"></div>

        <input type="hidden" name='secretExp' id='secretExp'>

        <br>
        <input type='submit' name='crypt' value='Зашифровать' id="btn">
    </form>

    <script src="secretElem.js"></script>
    <script src="lib/min/3857/pla_m_3857.js"></script>
</body>
</html>
