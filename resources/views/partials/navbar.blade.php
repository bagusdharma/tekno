<div class="ui fixed inverted borderless main menu">
    <div class="ui container">
    	<a href="{{ route('home') }}" class="header item">
    		<img class="logo" src="/img/logo.jpg">SBY-PC
    	</a>
        @auth
    	<a href="{{ route('showProfile') }}" class="item">Profile</a>
    	<a href="{{ route('chat.index') }}" class="item">Messages</a>
        @endauth
    	<div class="ui category search right floated item">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Enter keywords...">
                <i class="search icon"></i>
            </div>
            <div class="results"></div>
        </div>
        @auth
        <div class="ui right floated dropdown item">
            User Settings<i class="dropdown icon"></i>
            <div class="menu">
                <a class="item">Edit Profile</a>
                <a class="item">Printing Progress</a>
                <div class="divider"></div>
                <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        @endauth

        @guest
        <div class="ui right floated dropdown item">
            Login / Signup<i class="dropdown icon"></i>
            <div class="menu">
                <a class="item" href="{{ route('login') }}">Login</a>
                <a class="item" href="{{ route('register') }}">Signup</a>
            </div>
        </div>
        @endguest
        {{-- <div class="ui right floated item">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="AA">
                <i class="search icon"></i>
            </div>
            <div class="results"></div>
        </div> --}}
    </div>
</div>