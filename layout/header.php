<nav class="navbar navbar-expand-md navbar-light py-3  sticky-top" >
	<div class="container-fluid">
		<a class="navbar-brand navbar-brand-custom ms-3" href="#"><img src="assets/images/logo.png" alt="logo"></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon m-ic"></span>
    		</button>

			<div class="collapse navbar-collapse me-3" id="navbarSupportedContent"> 
				<ul class="navbar-nav nav-white ms-auto">
					<li class="nav-item"><a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="index.php")?" active": ""; ?>" href="index.php">メインページ</a></li>
					<li class="nav-item"><a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="profile.php")?" active": ""; ?>" href="profile.php">会社概要</a></li>
		            <li class="nav-item"><a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="tochigi.php")?" active": ""; ?>" href="tochigi.php">Tochigi Guide</a></li>
		            <li class="nav-item"><a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="intern.php")?" active": ""; ?>" href="intern.php">技能実習制度</a></li>
		            <li class="nav-item"><a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="contact.php")?" active": ""; ?>" href="contact.php">お問合せ</a></li>
				</ul>
			</div>
	</div>
</nav>