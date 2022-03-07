<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Bericht van {{ $data['naam'] }} is verzonden</h1>
	<p>E-mailadres: {{ $data['email'] }}</p>
	<hr>
	{{ $data['bericht'] }}
</body>
</html>