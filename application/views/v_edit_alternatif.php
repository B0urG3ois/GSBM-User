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
						<h4 class="card-title">Ubah Alternatif Bengkel</h4>
						<h6 class="card-subtitle">Silahkan ubah <code>alternatif bengkel</code> sesuai dengan yang
							Anda inginkan.</h6>
					</div>
					<hr class="m-t-0">
					<section class="content">
						<!-- dari variabel ['bengkel'] di controller -->
						<?php foreach($alternatif as $alt) { ?>
						<!-- controller/method -->
						<form action="<?php echo base_url().'bengkel/update_alternatif'; ?>" method="post"
							class="form-horizontal r-separator">
							<div class="card-body bg-light">
								<h4 class="card-title m-t-10 p-b-20">Informasi</h4>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">ID Alternatif</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="ID_Alternatif" readonly class="form-control"
											value="<?php echo $alt->ID_Alternatif ?>">
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Nama Alternatif</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Nama_Alternatif" class="form-control"
											value="<?php echo $alt->Nama_Alternatif ?>">
                                            <!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Alamat Alternatif</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Alamat_Alternatif" class="form-control"
											value="<?php echo $alt->Alamat_Alternatif ?>">
                                            <!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Telepon Alternatif</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Telepon_Alternatif" class="form-control"
											value="<?php echo $alt->Telepon_Alternatif ?>">
                                            <!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">JamOperasional Alternatif</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="JamOperasional_Alternatif" class="form-control"
											value="<?php echo $alt->JamOperasional_Alternatif ?>">
                                            <!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Latitude Alternatif</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Latitude_Alternatif" class="form-control"
											value="<?php echo $alt->Latitude_Alternatif ?>">
                                            <!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Longitude Alternatif</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Longitude_Alternatif" class="form-control"
											value="<?php echo $alt->Longitude_Alternatif ?>">
                                            <!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Direction</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Direction" class="form-control"
											value="<?php echo $alt->Direction ?>">
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
