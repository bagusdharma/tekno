@extends('auth.master')

@section('content')
    <div class="column">
        <h2 class="ui teal image header">
            <img src="/img/lembar2.jpg" class="image">
            <div class="content">Register to Lembar</div>
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
        <div class="ui message">
            Has an account? <a href="login">Log in</a>
        </div>
    </div>
@endsection
