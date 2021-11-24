<?php
$adicao = 2 + 5;
$subtracao = 5 - 2;
$multiplicacao = 5 * 2;
$divisao = 5 / 2;

?>

<html>

<head>
  <title>Operadores matemáticos</title>
  <meta charset="utf-8" />
</head>

<body>
  <p>2 + 5 = <?= $adicao ?></p>
  <p>5 - 2 = <?= $subtracao ?></p>
  <p>5 * 2 = <?= $multiplicacao ?></p>
  <p>5 / 2 = <? $divisao ?></p>
  <hr />
  <p><?= ($adicao * $divisao); ?></p>
</body>

</html>