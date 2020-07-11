<!-- proses 1 - copas seluruh template ke sini (admin.php)-->
<!-- proses 5 - akses seluruh css, js, image dr folder assets  -->
<!-- proses 6 - pisah dr bagian footer, header, sidebar di folder templates (admin.php)-->

<style>
	.gallery {
		width: 100px;
	}

	.gallery img {
		display: block;
		object-fit: cover;
		width: 100px;
		height: 100px;
	}
 
</style>

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-5 align-self-center">
				<h4 class="page-title">Pengajuan User</h4>
				<div class="d-flex align-items-center">

				</div>
			</div>
		</div>
	</div>
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
		<!-- scroll-vertical -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Pengajuan Bengkel</h4>
						<h6 class="card-subtitle">Merupakan <code>pengajuan bengkel </code> dari user. Button<code>
								+</code> untuk menambahkan pengajuan bengkel ke GSBM setelah tervalidasi.</h6>
						<div class="table-responsive">
							<table id="scroll_hor" class="table table-striped table-bordered display"
								style="width:100%">
								<thead>
									<tr>
										<th rowspan="2" style="text-align:center">No</th> 
										<th rowspan="2" style="text-align:center">Nama User</th>
										<th rowspan="2" style="text-align:center">Email User</th>
										<th rowspan="2" style="text-align:center">Telepon User</th>
										<th rowspan="2" style="text-align:center">Nama Bengkel</th>
										<th rowspan="2" style="text-align:center">Alamat Bengkel</th>
										<th rowspan="2" style="text-align:center">Telepon Bengkel</th>
										<th rowspan="2" style="text-align:center">Jam Operasional</th>
										<th rowspan="2" style="text-align:center">Gambar</th>
										<th colspan="2" style="text-align:center">Aksi</th>
									</tr>
									<tr>
										<th style="text-align:center">Tolak</th>
										<th style="text-align:center">Approve</th>
									</tr> 
								</thead> 
								<tbody>
									<?php
										// $ : variabel
										$no = 1;
										foreach ($pBengkel as $pB) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $pB->Nama_User?></td>
										<td><?php echo $pB->Email_User ?></td>
										<td><?php echo $pB->Telepon_User ?></td>
										<td><?php echo $pB->Nama_Bengkel ?></td>
										<td><?php echo $pB->Alamat_Bengkel ?></td>
										<td><?php echo $pB->Telepon_Bengkel ?></td>
										<td><?php echo $pB->JamOperasional_Bengkel ?></td>
										<td>
											<div class="gallery">
												<img
													src="<?php echo base_url(); ?>../upload/<?php echo $pB->Gambar_Objek1;?>" />
											</div>
										</td>

										<td style="text-align:center" onclick="javascript: return confirm('Anda yakin hapus?')">
											<?php echo anchor('bengkel/hapus_data_pBengkel/' . $pB->ID_Pengajuan, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')
													?>
										</td>
										<td style="text-align:center">
											<?php echo anchor ('bengkel/tambah_data_pBengkel/' . $pB->ID_Pengajuan, '<div class="btn btn-success"><i class="fa fa-plus"></i></div>')
													?>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- scroll-vetical-dynamic height -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah Layanan</h4>
						<h6 class="card-subtitle">Merupakan <code>daftar tambah layanan</code> dari user. Button<code>
								Checklist</code> untuk menandai bahwa data penambahan layanan telah dilihat.</h6>
						<div class="table-responsive">
							<table id="scroll_ver_hor" class="table table-striped table-bordered display"
								style="width:100%">
								<thead>
									<tr>
										<th style="text-align:center">No</th>
										<th style="text-align:center">Nama Bengkel</th>
										<th style="text-align:center">Nama Layanan</th>
										<th style="text-align:center">Deskripsi Layanan</th>
										<th style="text-align:center">Harga Layanan</th>
										<th style="text-align:center">Gambar</th>
										<th style="text-align:center">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
										// $ : variabel
										$no = 1;
										foreach ($pLayanan as $pL) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $pL->Nama_Alternatif?></td>
										<td><?php echo $pL->Nama_Layanan?></td>
										<td><?php echo $pL->Deskripsi_Layanan?></td>
										<td>Rp. <?php echo number_format($pL->Harga_Layanan,0,'','.') ?></td>
										<td>
											<div class="gallery">
												<img
													src="<?php echo base_url(); ?>../upload/<?php echo $pB->Gambar_Objek1;?>" />
											</div>
										</td>
										<td  style="text-align:center">
											<?php echo anchor('bengkel/telahdilihat_data_pLayanan/' . $pL->ID_Pengajuan_L, '<div class="btn btn-secondary btn-circle"><i class="fa fa-check"></i></div>')
													?>
										</td>

									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- scroll horizontal & vertical -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah Onderdil</h4>
						<h6 class="card-subtitle">Merupakan <code>daftar tambah onderdil</code> dari user. Button<code>
								Checklist</code> untuk menandai bahwa data penambahan onderdil telah dilihat.</h6>
						<div class="table-responsive">
							<table id="scroll_horizontal" class="table table-striped table-bordered display"
								style="width:100%">
								<thead>
									<tr>
										<th style="text-align:center">No</th>
										<th style="text-align:center">Nama Bengkel</th>
										<th style="text-align:center">Nama Onderdil</th>
										<th style="text-align:center">Merek Motor</th>
										<th style="text-align:center">Tipe Motor</th>
										<th style="text-align:center">Merek Onderdil</th>
										<th style="text-align:center">Deskripsi Onderdil</th>
										<th style="text-align:center">Harga Onderdil</th>
										<th style="text-align:center">Gambar</th>
										<th style="text-align:center">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
										// $ : variabel
										$no = 1;
										foreach ($pOnderdil as $pO) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $pO->Nama_Alternatif?></td>
										<td><?php echo $pO->Nama_Onderdil?></td>
										<td><?php echo $pO->Nama_MM?></td>
										<td><?php echo $pO->Nama_TM?></td>
										<td><?php echo $pO->Nama_MO?></td>
										<td><?php echo $pO->Deskripsi_Onderdil?></td>
										<td>Rp. <?php echo number_format($pO->Harga_Onderdil,0,'','.') ?></td>
										<td>
											<div class="gallery">
												<img
													src="<?php echo base_url(); ?>../upload/<?php echo $pB->Gambar_Objek1;?>" />
											</div>
										</td>
										<td style="text-align:center">
											<?php echo anchor('bengkel/telahdilihat_data_pOnderdil/' . $pO->ID_Pengajuan_O, '<div class="btn btn-secondary btn-circle"><i class="fa fa-check"></i></div>')
													?>
										</td>

									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


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
