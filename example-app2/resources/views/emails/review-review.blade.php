<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Review van {{ $data['naam'] }}</h1>
	<h2>{{ $data['email'] }}</h2>
	<p>heeft een score gegeven van: {{ $data['score'] }}</p>
	<h2>review bericht</h2>
	<p>{{ $data['bericht'] }}</p>
</body>
</html>