@extends('guest.layout')

@section('content')

<div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
      	<div class="page-brand-info">
	        <div class="brand">
	          	<img class="brand-img" src="../../assets/images/logo@2x.png" alt="...">
	          	<h2 class="brand-text font-size-40">Solo</h2>
	        </div>
        	<p class="font-size-20">The freelancer companion.</p>
      	</div>
      
      	<div class="page-login-main">
        	<div class="brand hidden-md-up">
          		<img class="brand-img" src="../../assets/images/logo-blue@2x.png" alt="...">
          		<h3 class="brand-text font-size-40">Solo</h3>
        	</div>
        	
        	<h3 class="font-size-24">Sign In</h3>
        	<p>Enter your credentials.</p>
        
        	{!! Form::Open(['route' => 'auth.login.attempt']) !!}
	        	<div class="form-group">
	            	{!! Form::label('email', 'Email Address', ['class' => 'sr-only', 'for' => 'inputEmail']) !!}
                    {!! Form::text('email', old('email'), [ 'class' => 'form-control', 'id' => 'inputEmail', 'placeholder' => 'Email Address' ] ) !!}
                    @if ($errors->has('email')) <small class='text-help invalid'>{!! $errors->first('email') !!}</small>@endif
	          </div>
          		
          		<div class="form-group">
                    {!! Form::label('password', 'Password', ['class' => 'sr-only', 'for' => 'inputPassword']) !!}
                    <input class="form-control" id="inputPassword" placeholder="Password" name="password" type="password">
                    @if ($errors->has('password')) <small class='text-help invalid'>{!! $errors->first('password') !!}</small>@endif
          		</div>
          		
          		<input type="submit" class="btn btn-primary btn-block" value="Sign in" />
        	{!! Form::Close() !!}
        
        	<p>No account? <a href="register-v2.html">Sign Up</a></p>
	        
	        <footer class="page-copyright">
	        	<p>© 2017. All RIGHT RESERVED.</p>
	        </footer>
      </div>
    </div>
 </div>

@stop