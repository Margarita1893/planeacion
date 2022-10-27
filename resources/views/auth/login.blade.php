@extends('layouts.form')

@section('content')
<link href="{{ asset('/public/css/login.css') }}" rel="stylesheet">
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="{{asset('/images/logo.png')}}" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
                 
						<h4 class="mb-3 f-w-400">Iniciar Sesión</h4>
						<form method="POST" action="{{ route('login') }}">
                        @csrf
                        <hr>
						<div class="form-group mb-3">
							<input type="text" class="form-control" id="Email" placeholder="Correo Electronico" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" id="Password" placeholder="Contraseña" name="password" required autocomplete="current-password">
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input name="remember" type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="custom-control-label" for="remember">Recuardame.</label>
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4">Ingresar</button>
						<hr>
						<p class="mb-2 text-muted">Olvidó su contraseña? <a href="{{ route('password.request') }}" class="f-w-400">Recordar</a></p>
						<p class="mb-0 text-muted">crear cuenta <a href="{{ route('register') }}" class="f-w-400">Registrarse</a></p>
					</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->


@endsection
