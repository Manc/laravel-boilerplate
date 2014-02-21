<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" class="no-js">
<head>
	<title>{{{ (empty($title) ? '' : $title . ' | ') . Lang::get('app.sitename') }}}</title>
@if (App::environment('local'))
	<link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('assets-dev/css/frontend.css') }}">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="{{ URL::to('assets-dev/js/main.js') }}"></script>
@else
	<link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('assets/css/frontend.css') }}">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="{{ URL::to('assets/js/main.js') }}"></script>
@endif
</head>
<body>
	<div class="container">
		{{ $content }}
	</div>
</body>
</html>