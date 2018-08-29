@extends('layouts.signin')

@section('content')
	<div class="sign-overlay"></div>
	<div class="signpanel"></div>

	<div class="panel signin">
		<div class="panel-heading">
			<h1>ITJ Vallereal</h1>
			<h4 class="panel-title">Bienvenido! Estudiante</h4>
		</div>
		<div class="panel-body">
			<form action="{{ url('/students/login') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb10">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" name="email" class="form-control" placeholder="Enter Username"
									value="{{ old('email') }}">
					</div>
					@if($errors->has('email'))
	          <span class="help-block">
	              <strong>{{ $errors->first('email') }}</strong>
	          </span>
        	@endif
				</div>
				<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} nomargin">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" name="password" class="form-control" placeholder="Enter Password">
					</div>
					@if ($errors->has('password'))
	         <span class="help-block">
	             <strong>{{ $errors->first('password') }}</strong>
	         </span>
          @endif
				</div>
				<div><a href="" class="forgot">Olvidaste tu password?</a></div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-quirk btn-block">Sign In</button>
				</div>
			</form>
			<hr class="invisible">
			<div class="form-group">
				<a href="signup.html" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Not a member? Sign up now!</a>
			</div>
		</div>
	</div><!-- panel -->


@endsection