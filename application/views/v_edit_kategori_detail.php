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
						<h4 class="card-title">Ubah Kategori Detail</h4>
						<h6 class="card-subtitle">Silahkan ubah <code> Kategori Detail</code> sesuai dengan yang
							Anda inginkan.</h6>
					</div>
					<hr class="m-t-0"> 
					<section class="content">
						<!-- dari variabel ['bengkel'] di controller -->
						<?php foreach($kategori_detail as $ktg_dtl) { ?>
						<!-- controller/method -->
						<form action="<?php echo base_url().'bengkel/update_kategori_detail'; ?>" method="post"
							class="form-horizontal r-separator">
							<div class="card-body bg-light">
								<h4 class="card-title m-t-10 p-b-20">Informasi</h4>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">ID Filter</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="ID_Kategori_Detail" readonly class="form-control"
											value="<?php echo $ktg_dtl->ID_Kategori_Detail ?>">
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Nama Kategori</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<select id="ID_Kategori" name="ID_Kategori" class="form-control">
											<?php
												$this->db->select('*');
												$this->db->from('kategori');
												$this->db->where("ID_Kategori", $ktg_dtl->ID_Kategori);
												$query = $this->db->get();
												foreach ($query->result() as $ktg) : ?>
													<option value="<?php echo $ktg->ID_Kategori ?>" selected>
														<?php echo $ktg->Nama_Kategori ?>
													</option>
												<?php endforeach; 
                                            ?>
											<?php
											$this->db->select('*');
											$this->db->from('kategori');
											$kategori = $this->db->get();
											foreach ($kategori->result() as $ktg) : ?>
											<option value="<?php echo $ktg->ID_Kategori ?>"><?php echo $ktg->Nama_Kategori ?>
											</option>
											<?php endforeach; ?>
										</select>
										<!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Nama Layanan
										Onderdil</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Isi_Kategori" class="form-control"
											value="<?php echo $ktg_dtl->Isi_Kategori ?>">
										<!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Harga</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Harga_Kategori" class="form-control"
											value="<?php echo $ktg_dtl->Harga_Kategori ?>">
										<!-- value = untuk nangkep dr database dan dimasukin ke dalem view edit -->
									</div>
								</div>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Deskripsi</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="Isi_Deskripsi" class="form-control"
											value="<?php echo $ktg_dtl->Isi_Deskripsi ?>">
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
