@extends('layouts.login')
@section('title','Login')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title p-b-43">
						Login to continue
					</span>


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


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
                        placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        {{--<span class="focus-input100"></span>--}}
                        {{--<span class="label-input100">Password</span>--}}
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('signin/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>
@endsection
