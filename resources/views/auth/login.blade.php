@extends('auth.master')

@section('content')
    <div class="column">
        <h2 class="ui teal image header">
            <img src="/img/logo.jpg" class="image">
            <div class="content">Log-in to SBY-PC</div>
        </h2>
        <form class="ui large form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" placeholder="E-mail address" value="{{ old('email') }}" required autofocus>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="remember">
                        <label>Remember me</label>
                    </div>
                </div>
                <div class="ui fluid large teal submit button">Login</div>
            </div>

            @if(!empty( ($errors->first('email')) or ($errors->first('password')) ))
            <div class="ui negative message">
                <i class="close icon"></i>
                <div class="header">Error while signing you in.</div>
                <div class="content">Please check out the message below :</div>
                <ul class="list">
                    @if($errors->has('email'))
                    <li>{{ $errors->first('email') }}</li>
                    @elseif($errors->has('password'))
                    <li>{{ $errors->first('password') }}</li>
                    @endif
                </ul>
            </div>
            @endif

        </form>

    <div class="ui message">
      New to us? <a href="register">Sign Up</a>
    </div>
  </div>
</div>

@endsection
