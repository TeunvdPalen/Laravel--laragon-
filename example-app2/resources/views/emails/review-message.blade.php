<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Hallo {{ $data['naam'] }}</h1>
	<p>Dankjewel voor een score van {{ $data['score'] }}</p>
	<hr>
	<p>Review bericht</p>
	<p>{{ $data['bericht'] }}</p>
</body>
</html>