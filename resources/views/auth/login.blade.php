

  @extends('Admin.includes.layouts.app')
 

@section('head')
@endsection

@section('content')
            <style>
                .sidebar { 
                                display: none;
                            }
            </style>
	<main class="main h-100 w-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">{{ __('Login') }}</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4"> 
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
										<div class="form-group">
											<label>Email</label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
										</div>
										<div class="form-group">
											<label>Password</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
 

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
											<small>
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('auth.forgot') }}
                                            </a> 
                                            </small>
										</div>
										<div>
											<div class="custom-control custom-checkbox align-items-center">
												<input type="checkbox" class="custom-control-input" value="remember-me" name="remember-me"  {{ old('remember') ? 'checked' : '' }}>
												<label class="custom-control-label text-small"> {{ __('Remember Me') }}
                                                </label>
											</div>
										</div>
										<div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button> 
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main> 
@endsection
