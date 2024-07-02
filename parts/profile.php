<div class="profile-header mt-5">
	<h1>User Profile</h1>
	<p>Manage your account information and activity</p>
</div>

<div class="container">
	<div class="profile-section">
		<div class="row">
			<div class="col-md-4">
				<h2 class="section-title">Personal Information</h2>
				<form>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" value="alert">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" value="john.doe@example.com">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="tel" class="form-control" id="phone" value="123-456-7890">
					</div>
					<button type="submit" class="btn btn-primary">Update Info</button>
				</form>
			</div>
			<div class="col-md-8 mt-5">
				<h2 class="section-title">Recent Activity</h2>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Missing Person Reported</h5>
						<p class="card-text">John Doe reported a missing person named Jane Doe on 2024-06-01.</p>
						<a href="#" class="btn btn-primary">View Details</a>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Search Joined</h5>
						<p class="card-text">John Doe joined a search for a missing person in New York on 2024-05-28.</p>
						<a href="#" class="btn btn-primary">View Details</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-12">
				<h2 class="section-title">Account Settings</h2>
				<form>
					<div class="form-group">
						<label for="password">Change Password</label>
						<input type="password" class="form-control" id="password" placeholder="New Password">
					</div>
					<button type="submit" class="btn btn-primary">Update Password</button>
				</form>
			</div>
		</div>
	</div>
</div>