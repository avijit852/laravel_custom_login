<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">

		<title>Ubold - Responsive Admin Dashboard Template</title>

        @section('login_head')
            @include('admin.layout.head')
        @show

	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>

		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Sign In to <strong class="text-custom">UBold</strong></h3>
				</div>

				<div class="panel-body">
                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}" >
                        @csrf

						<div class="form-group row">
							<div class="col-xs-12">
								<input id="email" class="form-control @error('email') is-invalid @enderror" type="email"  name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="E-mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



						</div>

						<div class="form-group row">
							<div class="col-xs-12">
								<input id="password"  type="password"  class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>



						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<div class="checkbox checkbox-primary">
                                    {{-- <input type="checkbox"> --}}
                                    <input id="checkbox-signup"  class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									<label for="checkbox-signup"> Remember me </label>
								</div>

							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
									Log In
								</button>
							</div>
						</div>

						<div class="form-group m-t-20 m-b-0">
							<div class="col-sm-12">
                                @if (Route::has('password.request'))
                                    <a class="text-dark" href="{{ route('password.request') }}">
                                        <i class="fa fa-lock m-r-5"></i>
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
								{{-- <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a> --}}
							</div>
						</div>

						<div class="form-group m-t-20 m-b-0">
							<div class="col-sm-12 text-center">
								<h4><b>Sign in with</b></h4>
							</div>
						</div>

						<div class="form-group m-b-0 text-center">
							<div class="col-sm-12">
								<button type="button" class="btn btn-facebook waves-effect waves-light m-t-20">
		                           <i class="fa fa-facebook m-r-5"></i> Facebook
		                        </button>

		                        <button type="button" class="btn btn-twitter waves-effect waves-light m-t-20">
		                           <i class="fa fa-twitter m-r-5"></i> Twitter
		                        </button>

		                        <button type="button" class="btn btn-googleplus waves-effect waves-light m-t-20">
		                           <i class="fa fa-google-plus m-r-5"></i> Google+
		                        </button>
							</div>
						</div>
					</form>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<p>
                    Don't have an account? <a href="{{ route('ad_register') }}" class="text-primary m-l-5"><b>Sign Up</b></a>
					</p>
				</div>
			</div>

		</div>

		@section('login_footer')
            @include('admin.layout.footer')
        @show

	</body>
</html>

