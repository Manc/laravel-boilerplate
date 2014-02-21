<?php

$loggedin = Auth::check();

if (!isset($current_nav)) {
	$current_nav = null;
}

?>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ URL::route('admin') }}">{{{ Lang::get('app.sitename') }}}</a>
		</div>

@if ($loggedin)
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li{{ $current_nav === 'dashboard' ? ' class="active"' : '' }}><a href="{{ URL::route('admin') }}">{{{ Lang::get('admin.nav.dashboard') }}}</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <span class="visible-xs">@lang('admin.nav_other')</span> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="{{ URL::route('home') }}">{{{ Lang::get('admin.nav.gotosite') }}}</a></li>
						<li class="divider"></li>
						<li><a href="{{ URL::route('logout') }}">{{{ Lang::get('admin.nav.logout') }}}</a></li>
					</ul>
				</li>
			</ul>
		</div>
@endif

	</div>
</nav>