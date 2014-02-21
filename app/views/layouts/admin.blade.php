<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" class="no-js">
<head>
	<title>{{{ (empty($title) ? '' : $title . ' | ') . Lang::get('app.sitename') }}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
@if (App::environment('local'))
	<link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('assets-dev/css/admin.css') }}">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="{{ URL::to('assets-dev/js/admin.js') }}"></script>
@else
	<link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('assets/css/admin.css') }}">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="{{ URL::to('assets/js/admin.js') }}"></script>
@endif
@if (Auth::check())
	<script>var _token='{{ csrf_token() }}';</script>
@endif
</head>
<body>

@include('admin.subviews.navigation')

<div class="container">

	<main>
{{ $content }}
	</main>

</div>

</body>
</html>