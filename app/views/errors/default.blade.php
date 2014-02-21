<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<title>{{{ Lang::get('app.sitename') }}}</title>
	<style>
		html {
			background: #eee;
			padding: 10px;
			font-family: sans-serif, Helvetica, Arial;
		}
		h1 {
			max-width: 900px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			font-size: 22px;
			color: #333;
			text-align: center;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			border: 1px solid #ccc;
			word-wrap: break-word;
		}
	</style>
</head>
<body>
	<h1>{{{ $message }}}</h1>
</body>
</html>