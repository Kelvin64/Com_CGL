@extends('layouts.app')


@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: urlrl('{{ asset('assets/plugins/images/bg-01.jfif') }}')">
					<span class="login100-form-title-1">
						Log In
					</span>
				</div>
                <div class="logo-cont" >
                    <img class="logo" src="{{asset("assets/plugins/images/comsys.png")}}" alt="Logo">
                </div>

				<form class="login100-form validate-form">
                    
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="" href="/pages/dashboard.html">
							Log In
						</button>
                        <button class="login100-form-btn1">
							Sign Up
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection
