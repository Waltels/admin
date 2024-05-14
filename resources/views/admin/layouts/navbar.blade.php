<div class="horizontal-menu">
	<nav class="navbar top-navbar">
		<div class="container">
			<div class="navbar-content">
				<a href="#" class="navbar-brand">
					<span>UE </span> Alemania
				</a>
				
				{{-- Codigo del buscador --}}
				
				<form class="search-form">
					<div class="input-group">
						<div class="input-group-text">
						<i data-feather="search"></i>
						</div>
						<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
					</div>
				</form>
				{{-- <div class="navbar-brand">
					<p class="tx-16 fw-bolder"><span>Usuario: </span>{{ Auth::user()->name }}</p>
				</div> --}}
				<ul class="navbar-nav">
					{{-- Codigo del notificaciones --}}
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i data-feather="bell"></i>
						<div class="indicator">
							<div class="circle"></div>
						</div>
						</a>
						<div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
						<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
							<p>6 New Notifications</p>
							<a href="javascript:;" class="text-muted">Clear all</a>
						</div>
						<div class="p-1">
							<a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
							<div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
								<i class="icon-sm text-white" data-feather="gift"></i>
							</div>
							<div class="flex-grow-1 me-2">
								<p>New Order Recieved</p>
								<p class="tx-12 text-muted">30 min ago</p>
							</div>	
							</a>
							<a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
							<div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
								<i class="icon-sm text-white" data-feather="alert-circle"></i>
							</div>
							<div class="flex-grow-1 me-2">
								<p>Server Limit Reached!</p>
								<p class="tx-12 text-muted">1 hrs ago</p>
							</div>	
							</a>
							<a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
							<div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
								<img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
							</div>
							<div class="flex-grow-1 me-2">
								<p>New customer registered</p>
								<p class="tx-12 text-muted">2 sec ago</p>
							</div>	
							</a>
							<a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
							<div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
								<i class="icon-sm text-white" data-feather="layers"></i>
							</div>
							<div class="flex-grow-1 me-2">
								<p>Apps are ready for update</p>
								<p class="tx-12 text-muted">5 hrs ago</p>
							</div>	
							</a>
							<a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
							<div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
								<i class="icon-sm text-white" data-feather="download"></i>
							</div>
							<div class="flex-grow-1 me-2">
								<p>Download completed</p>
								<p class="tx-12 text-muted">6 hrs ago</p>
							</div>	
							</a>
						</div>
						<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
							<a href="javascript:;">View all</a>
						</div>
						</div>
					</li>
					{{-- Codigo del usuario --}}
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img class="wd-30 ht-30 rounded-circle" src="{{asset('perfil.png')}}" alt="profile">
						</a>
						<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
						<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
							<div class="mb-3">
							<img class="wd-80 ht-80 rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" alt="">
							</div>
							<div class="text-center">
							<p class="tx-16 fw-bolder">{{ Auth::user()->name }}</p>
							<p class="tx-12 text-muted">{{ Auth::user()->email }}</p>
							</div>
						</div>
						<ul class="list-unstyled p-1">
							<li class="dropdown-item py-2">
							<a href="pages/general/profile.html" class="text-body ms-0">
								<i class="me-2 icon-md" data-feather="user"></i>
								<span>Perfil</span>
							</a>
							</li>
							<li class="dropdown-item py-2">
							<a href="javascript:;" class="text-body ms-0">
								<i class="me-2 icon-md" data-feather="edit"></i>
								<span>Editar Perfil</span>
							</a>
							</li>
							<li class="dropdown-item py-2">

							<li class="dropdown-item py-2">
								<form method="POST" action="{{ route('logout') }}" x-data>
									@csrf
									<a onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item">
										<i class="ri-logout-box-line fs-18 align-middle me-1"></i>
										<span>Logout</span>
									</a>
								</form>
							</li>


						</ul>
						</div>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
					<i data-feather="menu"></i>					
				</button>
			</div>
		</div>
	</nav>

	<nav class="bottom-navbar">
		<div class="container">
			<ul class="nav page-navigation">

				<li class="nav-item">
					<a class="nav-link" href="{{route('index')}}" >
						<i class="link-icon" data-feather="home"></i>
						<span class="menu-title">Inicio</span>
					</a>
				</li>
				@can('Dashboard')
				<li class="nav-item">
					<a class="nav-link" href="{{route('admin.dashboard')}}">
						<i class="link-icon" data-feather="box"></i>
						<span class="menu-title">Escritorio</span>
					</a>
				</li>
				@endcan

				<li class="nav-item">
					<a href="{{route('file.index')}}" class="nav-link">
						<i class="link-icon" data-feather="user"></i>
						<span class="menu-title">Docente</span>
					</a>
				</li>
				@can('Administracion')
					
				
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="link-icon" data-feather="archive"></i>
						<span class="menu-title">Administrador</span>
						<i class="link-arrow"></i>
					</a>
					<div class="submenu">
						<ul class="submenu-item">
							<li class="nav-item"><a class="nav-link" href="{{route('admin.archivos')}}">Archivos recividos</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('admin.users.index')}}">Asignar rol a usuarios</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('admin.roles.index')}}">Roles de usuarios</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('admin.documentos.index')}}">Documentos</a></li>
							<li class="nav-item"><a class="nav-link" href="pages/forms/advanced-elements.html">Otros</a></li>
						</ul>
					</div>
				</li>
				@endcan
				@can('Administracion')
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="link-icon" data-feather="monitor"></i>
						<span class="menu-title">Aplicativo</span>
						<i class="link-arrow"></i>
					</a>
					<div class="submenu">
						<ul class="submenu-item">
							<li class="nav-item"><a class="nav-link" href="{{route('admin.comunicados.index')}}">Comunicados</a></li>
							<li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">otros</a></li>
						</ul>
					</div>
				</li>
				@endcan
				@can('Administracion')
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="link-icon" data-feather="users"></i>
						<span class="menu-title">Dirección de la U E</span>
						<i class="link-arrow"></i>
					</a>
					<div class="submenu">
						<div class="row">
							<div class="col-md-6">
								<ul class="submenu-item pe-md-0">
									<li class="category-heading">Docentes</li>
									<li class="nav-item"><a class="nav-link" href="{{route('admin.permisos.index')}}">Solicitudes de Permisos</a></li>
									<li class="nav-item"><a class="nav-link" href="{{route('admin.peuser')}}">Permisos por Docente</a></li>
									<li class="nav-item"><a class="nav-link" href="{{route('admin.faltasdocs.index')}}">Registro de Faltas</a></li>
									<li class="nav-item"><a class="nav-link" href="{{route('admin.fuser')}}">Faltas por Docente</a></li>
									<li class="nav-item"><a class="nav-link" href="{{route('admin.com')}}">Comisiones UE</a></li>
									<li class="nav-item"><a class="nav-link" href="{{route('admin.cont')}}">Planificaciones</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/charts/apex.html">Otros</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="submenu-item ps-md-0">
									<li class="category-heading">Estudiantes</li>
									<li class="nav-item"><a class="nav-link" href="../../pages/tables/basic-table.html">Permisos</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/tables/data-table.html">Compromisos</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/tables/data-table.html">Faltas</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/tables/data-table.html">Aprovechamiento</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/tables/data-table.html">Padres de familia</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				@endcan
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="link-icon" data-feather="tag"></i>
						<span class="menu-title">Nosotros</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</div>