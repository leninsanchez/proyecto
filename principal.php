<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
	
	$nombre = $_SESSION['nombre'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
	
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TurisLoja</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="/sistema/principal.php">TuriLoja</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
			><!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
				<div class="input-group-append">
				<button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
				</div>
                </div>
			</form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Salir</a>
					</div>
				</li>
			</ul>
		</nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="/sistema/principal.php"
							><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home</a
							>
							
							<?php if($tipo_usuario == 1) { ?>
								
								<div class="sb-sidenav-menu-heading">Interface</div>
								<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
								><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
									Layouts
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
									></a>
									<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
										<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
									</div>
									<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
									><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
										Pages
										<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
										></a>
										<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
											<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
												<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
												>Authentication
													<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
													></a>
													<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
														<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
													</div>
													<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
													>Error
														<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
														></a>
														<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
															<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
														</div>
											</nav>
										</div>
										
							<?php } ?>
							
							<div class="sb-sidenav-menu-heading">Addons</div>
							<a class="nav-link" href="charts.html"
							><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
								Charts</a
								><a class="nav-link" href="tabla.php"
								><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
									Tables</a
								>
							</div>
					</div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
					</div>
				</nav>
			</div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
						</ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Visitantes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
									</div>
								</div>
							</div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Vistantes Extrangeros</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
									</div>
								</div>
							</div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">HOY</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
									</div>
								</div>
							</div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">MES</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
									</div>
								</div>
							</div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">AÑO</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#"> </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
									</div>
								</div>
							</div>
						</div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Estadisticas de visita</div>
                                    <div class="card-body"><canvas id="ctx3" width="100%" height="40"></canvas></div>
								</div>
							</div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Visitantes</div>
                                    <div class="card-body"><canvas id="ctx2" width="100%" height="40">
                                    

                                </canvas></div>
								</div>
							</div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-pie mr-1"></i>Transporte</div>
                                    <div class="card-body"><canvas id="ctx4"  width="100%" height="50"></canvas></div>
                                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-pie mr-2"></i>Razon de visita</div>
                                    <div class="card-body"><canvas id="myChart" width="100%" height="50"></canvas></div>
                                </div>
                            </div>
						</div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Turista Responsable</th>
                                                <th>Fecha Registro</th>
                                                <th>Pais Procedencia</th>
                                                <th>Mes Registro</th>
                                                <th>Año Registro</th>
                                                <th>Lugar Registro</th>
											</tr>
										</thead>
                                        <tfoot>
                                            <tr>
                                            <th>Turista Responsable</th>
                                                <th>Fecha Registro</th>
                                                <th>Pais Procedencia</th>
                                                <th>Mes Registro</th>
                                                <th>Año Registro</th>
                                                <th>Lugar Registro</th>
											</tr>
										</tfoot>
                                        <tbody>
                                        <tr>
                                                <td>Joselin Enaso</td>
                                                <td>02/06/2022</td>
                                                <td>México</td>
                                                <td>6</td>
                                                <td>2022</td>
                                                <td>CENTRAL</td>
											</tr>
                                            <tr>
                                                <td>Manuel Moscol Medino</td>
                                                <td>01/06/2022</td>
                                                <td>Peru</td>
                                                <td>6</td>
                                                <td>2022</td>
                                                <td>VILCABAMBA</td>
                                            </tr>
                                            <tr>
                                                <td>Nathan Walderben</td>
                                                <td>01/06/2022</td>
                                                <td>Estados Unidos</td>
                                                <td>6</td>
                                                <td>2022</td>
                                                <td>CENTRAL</td>
                                            </tr>
                                            <tr>
                                                <td>Martina Guerra</td>
                                                <td>31/05/2022</td>
                                                <td>Ecuador</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>CENTRAL</td>
                                            </tr>
                                            <tr>
                                                <td>Gregg Smith</td>
                                                <td>31/05/2022</td>
                                                <td>Estados Unidos</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>CENTRAL</td>
                                            </tr>
                                            <tr>
                                                <td>Veronica Montoya</td>
                                                <td>30/05/2022</td>
                                                <td>España</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>CENTRAL</td>
                                            </tr>
                                            <tr>
                                                <td>Verónica Martínez</td>
                                                <td>30/05/2022</td>
                                                <td>España</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>CENTRAL</td>
                                            </tr>
                                            <tr>
                                                <td>Mateo Montoyo</td>
                                                <td>30/05/2022</td>
                                                <td>Ecuador</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>CENTRAL</td>
                                            </tr>
                                            <tr>
                                                <td>Mateo</td>
                                                <td>30/05/2022</td>
                                                <td>España</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>PUERTA DE LA CIUDAD</td>
                                            </tr>
                                            <tr>
                                                <td>Mateo</td>
                                                <td>30/05/2022</td>
                                                <td>España</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>PUERTA DE LA CIUDAD</td>
                                            </tr>
                                            <tr>
                                                <td>MONICA ALULIMA</td>
                                                <td>29/05/2022</td>
                                                <td>Perú</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>PUERTA DE LA CIUDAD</td>
                                            </tr>
                                            <tr>
                                                <td>MMARCELO RAMIREZ</td>
                                                <td>29/05/2022</td>
                                                <td>Venezuela</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>PUERTA DE LA CIUDAD</td>
                                            </tr>
                                            <tr>
                                                <td>MARKO VILLANAZUL</td>
                                                <td>28/05/2022</td>
                                                <td>Chile</td>
                                                <td>5</td>
                                                <td>2022</td>
                                                <td>PUERTA DE LA CIUDAD</td>
                                            </tr>
                                            <td>NICOLAS REYES</td>
                                            <td>28/05/2022</td>
                                            <td>Ecuador</td>
                                            <td>5</td>
                                            <td>2022</td>
                                            <td>PUERTA DE LA CIUDAD</td>
                                            </tr>
                                            <td>DAVID BARROS</td>
                                            <td>28/05/2022</td>
                                            <td>Ecuador</td>
                                            <td>5</td>
                                            <td>2022</td>
                                            <td>PUERTA DE LA CIUDAD</td>
                                        </tr>  
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>  
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script> 
        <script src="/sistema/assets/demo/chart-bar2.js"></script>
        
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        
	</body>
</html>
