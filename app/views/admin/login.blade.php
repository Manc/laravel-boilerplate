<form action="{{ URL::route('login.post') }}" method="post" class="form-horizontal" role="form">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
@if ($error = Session::get('error'))
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<p class="help-block">{{{ $error }}}</p>
		</div>
	</div>
@endif
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<label for="email" class="col-sm-2 control-label">Email address</label>
		<div class="col-sm-10">
			<input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="{{{ Input::old('email') }}}" maxlength="100">
		</div>
	</div>
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		<label for="password" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
			<input type="password" name="password" class="form-control" id="password" placeholder="Password" maxlength="255">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Sign in</button>
		</div>
	</div>
</form>