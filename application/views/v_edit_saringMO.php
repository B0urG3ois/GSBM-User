<!-- proses 29 (bengkel.php)-->

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Start Page Content -->
		<!-- ============================================================== -->
		<!-- Row -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Ubah Filter Jenis Onderdil</h4>
						<h6 class="card-subtitle">Silahkan ubah Filter<code> Jenis Onderdil</code> sesuai dengan yang
							Anda inginkan.</h6>
					</div>
					<hr class="m-t-0">
					<section class="content">
						<!-- dari variabel ['bengkel'] di controller -->
						<?php foreach($saringMO as $sMO) { ?>
						<!-- controller/method -->
						<form action="<?php echo base_url().'bengkel/update_saringMO'; ?>" method="post"
							class="form-horizontal r-separator">
							<div class="card-body bg-light">
								<h4 class="card-title m-t-10 p-b-20">Informasi</h4>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">ID Filter</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="ID_MO" readonly class="form-control"
											value="<?php echo $sMO->ID_MO ?>">
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Nama Filter</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Nama_MO" class="form-control"
											value="<?php echo $sMO->Nama_MO ?>">
                                            <!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="form-group m-b-0 text-right">
									<button type="reset" class="btn btn-danger">Reset</button>
									<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
								</div>
							</div>
						</form>
						<?php } ?>
					</section>
				</div>
			</div>
		</div>
		<!-- End Row -->
		<!-- ============================================================== -->
		<!-- End PAge Content -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right sidebar -->
		<!-- ============================================================== -->
		<!-- .right-sidebar -->
		<!-- ============================================================== -->
		<!-- End Right sidebar -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	</body>

	</html>
