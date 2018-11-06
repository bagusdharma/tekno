@extends('auth.master')

@section('content')
    <div class="column">
        <h2 class="ui teal image header">
            <img src="/img/logo.jpg" class="image">
            <div class="content">Register to SBY-PC</div>
        </h2>
        <form class="ui large form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required autofocus>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="mail icon"></i>
                        <input type="text" name="email" placeholder="E-mail address" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password_confirmation" placeholder="Password Confirmation" required>
                    </div>
                </div>
                <div class="ui fluid large teal submit button">Register</div>

            @if(!empty( ($errors->first('email')) or ($errors->first('password')) ))
            <div class="ui negative message">
                <i class="close icon"></i>
                <div class="header">Error while signing you in.</div>
                <div class="content">Please check out the message below :</div>
                <ul class="list">
                    @if($errors->has('email'))
                    <li>{{ $errors->first('email') }}</li>
                    @elseif($errors->has('name'))
                    <li>{{ $errors->first('name') }}</li>
                    @elseif($errors->has('password'))
                    <li>{{ $errors->first('password') }}</li>
                    @endif
                </ul>
            </div>
            @endif

            </div>
        </form>
    </div>


{{--     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
