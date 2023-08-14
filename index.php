
<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contagem inteligente</title>

<link rel="stylesheet" href="estilo.css">

</head>

<body>

<h1>Contagem "inteligente"</h1>

<p>Use qualquer valor nas caixas, simule contagens crescentes e regressivas. Use também valores negativos.</p>

<section id="entrada">

<form action="#" method="get">

<p>

<label for="fn1">Valor final: </label>

<input type="number" name="n1" id="fn1" placeholder="Início da contagem">

</p>

<p>

<label for="fn1">Valor final: </label>

<input type="number" name="n2" id="fn2" placeholder="Fim da contagem">

</p>

<p>

<input type="submit" value="Contar" formaction="javascript:contagem()">

</p>

</form>

</section>

<section id="saida">

<p>Preencha os dados acima e aperte o botão.</p>

</section>

<script src="script.js"></script>

</body>

</html>