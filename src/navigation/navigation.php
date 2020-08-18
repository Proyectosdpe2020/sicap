<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color lighten-1" style="position: fixed; width: 100%; z-index: 10000">
	<a id="sidebarCollapse" class="navbar-brand" href="#" style="border-radius: 1px;">
		<i class="fas fa-bars"></i>
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
		aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent-555">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home
				<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Features</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Pricing</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">Dropdown
				</a>
				<div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
		</ul>
		<ul class="navbar-nav nav-flex-icons">

			<li class="nav-item avatar dropdown">

				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
					<img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0" style="height: 25px; width: 25px;" alt="avatar image">
					<div style="display: inline; margin-right: 45px"><?php echo $_SESSION['user_data']['name']." ".$_SESSION['user_data']['paternal_surename']." ".$_SESSION['user_data']['maternal_surename']; ?></div>
				</a>
				
				<div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
					<a class="dropdown-item" href="#">Perfil</a>
					<a class="dropdown-item" href="../../service/close_session.php">Cerrar sesión</a>
				</div>

			</li>
		</ul>
	</div>
</nav>