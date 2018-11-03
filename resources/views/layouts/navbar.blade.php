<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container-fluid">
			<ul class="navbar-nav">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img src="/img/logo.jpg" alt="Logo" width="40px" height="40px">
					</a>
				</div>

				<li class="nav-item">
					<a class="nav-link" href=" {{route('home')}} ">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=" {{route('profile.index')}} ">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=" {{route('chat.index')}} ">Message</a>
				</li>
			</ul>	
			<ul class="nav navbar-nav navbar-right">
				<li>
					<div class="input-group md-form form-sm form-2 pl-0">
						<input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<span class="input-group-text lime lighten-2" id="basic-text1"><i class="fa fa-search text-grey"
								aria-hidden="true"></i></span>
							</div>
						</div>
					</li>
				</ul>	
			</div>
		</nav>