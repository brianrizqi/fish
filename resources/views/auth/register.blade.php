@extends('layouts.login')
@section('title','Register')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title p-b-43">
						Register
					</span>


                    <div class="wrap-input100 validate-input">
                        <input id="email" type="text"
                               class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                               value="{{ old('name') }}" required autofocus
                               placeholder="Nama">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                        {{--<span class="focus-input100"></span>--}}
                        {{--<span class="label-input100">Email</span>--}}
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input id="email" type="email"
                               class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required autofocus
                               placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        {{--<span class="focus-input100"></span>--}}
                        {{--<span class="label-input100">Email</span>--}}
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input id="email" type="text"
                               class="input100{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat"
                               value="{{ old('alamat') }}" required autofocus
                               placeholder="Alamat">
                        @if ($errors->has('alamat'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                        @endif
                        {{--<span class="focus-input100"></span>--}}
                        {{--<span class="label-input100">Email</span>--}}
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input id="email" type="text"
                               class="input100{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" name="no_hp"
                               value="{{ old('no_hp') }}" required autofocus
                               placeholder="No HP">
                        @if ($errors->has('no_hp'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                    </span>
                        @endif
                        {{--<span class="focus-input100"></span>--}}
                        {{--<span class="label-input100">Email</span>--}}
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" type="password"
                               class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required
                               placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        {{--<span class="focus-input100"></span>--}}
                        {{--<span class="label-input100">Password</span>--}}
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password-confirm" type="password" class="input100" name="password_confirmation"
                               placeholder="Confirm Password"
                               required>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('signin/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>
@endsection
