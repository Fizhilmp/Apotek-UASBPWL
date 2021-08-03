<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Dashboard - Invoice</title>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
	</script>
</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
		<!-- Navbar Brand-->
		<a class="navbar-brand ps-3" href="<?php echo base_url('index.php/c_admin/home'); ?>"> Central Pharmacy</a>
		<!-- Sidebar Toggle-->
		<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
				class="fas fa-bars"></i></button>
		<!-- Navbar Search-->
		<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
			<div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
					aria-describedby="btnNavbarSearch" />
				<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
						class="fas fa-search"></i></button>
			</div>
		</form>
		<!-- Navbar-->
		<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
					aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?php if($this->session->userdata('username')) { ?><?php echo $this->session->userdata('username') ?></a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="<?php echo base_url('c_auth/logout'); ?>">Logout</a></li>
						<?php } else { ?>
							<li><?php echo anchor('c_auth/login','Login'); ?></li>
						<?php } ?>
					</ul>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<a class="nav-link" href="<?php echo base_url('/c_auth/index'); ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Dashboard
						</a>
						<a class="nav-link" href="<?php echo base_url('/welcome/obat'); ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Data Obat
						</a>
						<a class="nav-link" href="<?php echo base_url('/welcome/pelanggan'); ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Data Pelanggan
						</a>
						<a class="nav-link active" href="<?php echo base_url('/c_invoice'); ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Invoice
						</a>
					</div>
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">Detail Pesanan </h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active"></li>
						<div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id ?></div>
					</ol>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 navbar">
								<a href=""></a>
								</ul>
							</div>

							<div class="container ">
								<table class="table">
									<tr class="table-primary">
										<th>ID obat</th>
										<th>Nama Obat</th>
										<th>Jumlah</th>
										<th>Harga</th>
										<th>Subtotal</th>
									</tr>
									<?php
                                    $total = 0;
                                    foreach ($pesanan as $psn):
                                        $subtotal = $psn->jumlah * $psn->harga;
                                        $total += $subtotal;
                                    ?>
									<tr class="table-light">
										<td><?php echo $psn->id_obat ?></td>
										<td><?php echo $psn->nama_obat ?></td>
										<td><?php echo $psn->jumlah ?></td>
										<td><?php echo number_format($psn->harga,0,',','.') ?></td>
										<td><?php echo number_format($subtotal,0,',','.') ?></td>

									</tr>
									<?php endforeach; ?>
									<tr>
										<td colspan="4" align="right"> Grand Total</td>
										<td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
									</tr>
								</table>
								<a href="<?php echo base_url('c_invoice/index')?>">
									<div class="btn btn-warning btn-flat mt-3 baris2"><i class="fa fa-undo"></i> Kembali
									</div>
								</a>
							</div>

			</main>
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Central Pharmacy </div>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
	</script>
	<script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo base_url() ?>assets/assets/demo/chart-area-demo.js"></script>
	<script src="<?php echo base_url() ?>assets/assets/demo/chart-bar-demo.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
	<script src="<?php echo base_url() ?>assets/js/datatables-simple-demo.js"></script>
</body>

</html>
