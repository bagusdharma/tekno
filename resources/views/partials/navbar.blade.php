<div class="ui fixed inverted borderless main menu">
    <div class="ui container">
    	<a href="{{ route('home') }}" class="header item">
    		<img class="logo" src="/img/logo.jpg">SBY-PC
    	</a>
    	<a href="{{ route('profile.index') }}" class="item">Profile</a>
    	<a href="{{ route('chat.index') }}" class="item">Messages</a>
    	<div class="ui category search right floated item">
    		<div class="ui icon input">
    			<input class="prompt" type="text" placeholder="Enter keywords...">
    			<i class="search icon"></i>
    		</div>
    		<div class="results"></div>
    	</div>
    </div>
</div>