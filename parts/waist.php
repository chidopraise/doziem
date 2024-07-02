<div class="container">
	<div class="row login-section mt-5">
		<div class="col-md-4 text-center mt-5 bgc">
			<h2 class="section-title">Sign In</h2>
			<form>
				<input type="text" class="form-control mb-2" placeholder="Email / Phone No.">
				<input type="password" class="form-control mb-2" placeholder="Password">
				<button type="submit" class="btn btn-primary btn-block">Login</button>
			</form>
			<button class="btn btn-secondary mt-2">Sign up</button>
		</div>
		<div class="col-md-4 text-center report-section mt-5 bgc">
			<h2 class="section-title">Report</h2>
			<form>
				<input type="text" class="form-control mb-2" placeholder="Name">
				<input type="text" class="form-control mb-2" placeholder="Description (100 words)">
				<input type="text" class="form-control mb-2" placeholder="Date/Time Last Seen">
				<input type="text" class="form-control mb-2" placeholder="Location Last Seen">
				<button type="submit" class="btn btn-primary btn-block">Report</button>
			</form>
		</div>
		<div class="col-md-4 text-center missing-section mt-5 bgc">
			<h2 class="section-title">Missing</h2>
			<img src="<?php $control->path('images/missing.jpg'); ?>" class="img-fluid" alt="Missing Person">
			<p class="mt-2">REWARD $1,000,000</p>
		</div>
	</div>
</div>