<div class="header mt-5">
	<h1>Alert</h1>
	<p>Your Trusted Partner in Locating Missing Persons</p>
</div>

<div class="container">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Signup</a>
		</li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
			<div class="card">
				<h3 class="card-title">Login</h3>
				<form>
					<div class="form-group">
						<label for="loginUsername">Username</label>
						<input type="text" class="form-control" id="loginUsername" placeholder="Enter your username">
					</div>
					<div class="form-group">
						<label for="loginPassword">Password</label>
						<input type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
					</div>
					<button type="submit" class="btn btn-primary btn-block">Login</button>
				</form>
			</div>
		</div>
		<div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
			<div class="card">
				<h3 class="card-title">Signup</h3>
				<form>
					<div class="form-group">
						<label for="signupUsername">Username</label>
						<input type="text" class="form-control" id="signupUsername" placeholder="Choose a username">
					</div>
					<div class="form-group">
						<label for="signupEmail">Email address</label>
						<input type="email" class="form-control" id="signupEmail" placeholder="Enter your email">
					</div>
					<div class="form-group">
						<label for="signupPassword">Password</label>
						<input type="password" class="form-control" id="signupPassword" placeholder="Choose a password">
					</div>
					<button type="submit" class="btn btn-primary btn-block">Signup</button>
				</form>
			</div>
		</div>
	</div>
</div>