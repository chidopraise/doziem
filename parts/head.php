<body id="home">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top header">
        <a class="navbar-brand" href="#home" style="color:#000;"><img src="<?php $control->path('images/logo.jpg'); ?>" class="img_logo" />lert</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="<?php $control->path('index.php'); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/profile.php'); ?>">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/geolocate.php'); ?>">Geo - Locate Friends</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/report.php'); ?>">Report Missing Person</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/missing.php'); ?>">Missing Persons</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/wanted.php'); ?>">Wanted Persons</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/found.php'); ?>">Found</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/about.php'); ?>">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/contact.php'); ?>">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/faq.php'); ?>">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/tc.php'); ?>">T&CS</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php $control->path('menu/login.php'); ?>">Login / Signup</a></li>
            </ul>
        </div>
    </nav>