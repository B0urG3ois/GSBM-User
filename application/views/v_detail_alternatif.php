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
						<h4 class="card-title">Detail Alternatif Bengkel</h4>
						<h6 class="card-subtitle">Berikut merupakan detail <code>alternatif bengkel</code> yang anda telah pilih.</h6>
					</div>
					<hr class="m-t-0">
					<section class="content">
							<!-- proses 32 -->
							<button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal"
								data-target="#addAlternatif" style="float: right; margin-bottom: 10px;"><i
									class="fas fa-plus"></i> Tambah
								Alternatif</button> <!-- proses 34 -->
							<div class="table-responsive">
								<!-- proses 33 -->
								<table id="zero_config" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th colspan="3">Aksi</th> <!-- proses 38 -->
										</tr>
									</thead>
									<tbody>
										<?php
										// $ : variabel
										$no = 1;
										foreach ($alternatif as $alt) : ?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $alt->Nama_Alternatif ?></td>
											<!-- proses 39 (bengkel.php) -->
											<td><?php echo anchor('bengkel/detail_alternatif/' . $alt->ID_Alternatif, '<div class="btn btn-success"><i class="fa fa-search-plus"></i></div>') ?>
											</td>
											<td onclick="javascript: return confirm('Anda yakin hapus?')">
												<!-- proses 42 -->
												<!-- controller/method -->
												<!-- delete data dr ID_Alternatif -->
												<?php echo anchor('bengkel/hapus_alternatif/' . $alt->ID_Alternatif, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')
													?>
												</>
												<!-- proses 43 (bengkel.php) -->
											<td>
												<!-- controller/method -->
												<?php echo anchor('bengkel/edit_alternatif/' . $alt->ID_Alternatif, '<div class="btn btn-info waves-effect waves-light"><i class="fa fa-edit"></i></div>')
													?>
											</td>

										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
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
