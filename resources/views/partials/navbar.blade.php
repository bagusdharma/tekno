<div class="ui fixed borderless main menu">
    <div class="ui container">
    	<a href="{{ route('home') }}" class="header item">
    		<img class="logo" src="/img/lembar2.jpg">Lembar Surabaya
    	</a>
        @auth
    	<a href="alamatchat ntar ae cuk aku berangkat sby dulu" class="item">Messages</a>
        @endauth
        @auth
        <div class="ui right floated dropdown item">
            User Settings<i class="dropdown icon"></i>
            <div class="menu">
                <a href="{{ route('showProfile') }}" class="item">Profile</a>
                @role('personal')
                <a class="item">Printing Progress</a>
                @endrole
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
    </div>
</div>
