
<html>
<head>
	<title>Produtos</title>
</head>
<body>
	<h1>Produtos</h1>
	<ul>
		@foreach($produtos as $prod)
			<li>{{ $prod->nome }}<br>
				{{ $prod->descricao }}
			</li>
			<br>
		@endforeach	
	</ul>
</body>
</html>