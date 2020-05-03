@extends('layouts.app')

@section('content')
<div class="tentang2" >
	<div id="content " class="text-light">
		<div class="align-items-center" >
			<div class="text-light">
				<div class=" card1">
					<div class="pt-lg-5">
						<div class="card-header text-center bg-transparent border-bottom-0">
							<h3>{{ __('Login') }}</h3>
						</div>
						<div class="card-body">
                            <form method="POST" action="{{route('login')}}">
                                @csrf
								<h6>
									{{ __('E-Mail Address') }}
								</h6>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror border-light mb-2 bg-transparent text-light" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
								<h6>
									{{ __('Password') }}
								</h6>
                                <input type="password" id="password" name="password" required autocomplete="current-password" class="form-control @error('password') is-invalid @enderror border-light mb-3 text-light bg-transparent"  placeholder="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
								<button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
							</form>
							<div class="card-footer text-right border-0">

								@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
