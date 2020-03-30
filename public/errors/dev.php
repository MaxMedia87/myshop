<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ошибка</title>
</head>
<body>
<div class="wrap">
 <h1>Произошла ошибка</h1>
    <p><b>Код ошибки: </b><?= $errorId; ?></p>
    <p><b>Текст ошибки: </b><?= $errorStr; ?></p>
    <p><b>Файл в котором произошла ошибка: </b><?= $errorFile; ?></p>
    <p><b>Строка ошибки: </b><?= $errorLine; ?></p>
</div>
</body>
</html>