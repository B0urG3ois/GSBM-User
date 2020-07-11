<!-- proses 1 - copas seluruh template ke sini (admin.php)-->
<!-- proses 5 - akses seluruh css, js, image dr folder assets  -->
<!-- proses 6 - pisah dr bagian footer, header, sidebar di folder templates (admin.php)-->

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
				<h4 class="page-title">Filter</h4>
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

		<!-- Tabel saring -->
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Jenis FIlter</h4>
					<h6 class="card-subtitle">Merupakan<code> filter</code> untuk mencari layanan & onderdil sesuai
						kebutuhan pengguna.</h6>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
							</tr>
						</thead> 
						<tbody>
							<?php
							// $ : variabel
							$no = 1;
							foreach ($saring as $srg) : ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $srg->Nama_Saring ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- Tabel saring_jenis_layanan -->
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Filter Jenis Layanan</h4>
					<h6 class="card-subtitle">Merupakan filter untuk mencari layanan berdasarkan filter<code> jenis
							layanan</code>.
				</div>
				<section class="content">
					<button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal"
						data-target="#addsaringJL" style="float: right; margin-bottom: 10px;"><i
							class="fas fa-plus"></i> Tambah
						Filter Jenis Layanan</button>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead> 
								<tr>
									<th rowspan="2">No</th>
									<th rowspan="2">Nama Filter</th>
									<th rowspan="2">Nama Kategori</th>
									<th colspan="2">Aksi</th>
								</tr>
								<tr>
									<th>Hapus</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								<?php
								// $ : variabel
								$no = 1;
								foreach ($saringJL as $sJL) : ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $sJL->Nama_JL ?></td>
									<td><?php echo $sJL->Nama_Kategori ?></td>
									<td onclick="javascript: return confirm('Anda yakin hapus?')">
										<!-- delete data dr ID_Alternatif -->
										<?php echo anchor('bengkel/hapus_saringJL/' . $sJL->ID_JL, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')
													?>
									</td>
									<!-- proses 43 (bengkel.php) -->
									<td>
										<!-- controller/method -->
										<?php echo anchor('bengkel/edit_saringJL/' . $sJL->ID_JL, '<div class="btn btn-info waves-effect waves-light"><i class="fa fa-edit"></i></div>')
													?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</section>
 
				<!-- Modal dr boostrap-->
				<div class="modal fade" id="addsaringJL" tabindex="-1" role="dialog" aria-labelledby="addsaringJLLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="addsaringJLLabel">Form Input Tambah FILTER JENIS LAYANAN
								</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="<?php echo base_url() . 'bengkel/tambah_saringJL'; ?>">
									<div class="form-group">
										<label>Nama Filter</label>
										<input type="text" name="Nama_JL" class="form-control">
									</div>
									<div class="form-group">
										<label>Nama Kategori</label>
										<select id="ID_Kategori" name="ID_Kategori" class="form-control">
											<?php
											$this->db->select('*');
											$this->db->from('kategori');
											$this->db->where("ID_Kategori < 3");
                    						$kategori = $this->db->get();
		            						foreach ($kategori->result() as $ktg) : ?>
											<option value="<?php echo $ktg->ID_Kategori ?>"><?php echo $ktg->Nama_Kategori ?>
											</option>
											<?php endforeach; ?>
										</select>
									</div>
									<button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
									<button type="submit"
										class="btn btn-info waves-effect waves-light">Tambahkan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Tabel saring_jenis_Onderdil -->
		<!-- scroll-vertical -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Filter Jenis Onderdil</h4>
						<h6 class="card-subtitle">Merupakan filter untuk mencari onderdil berdasarkan filter<code> jenis
								onderdil</code>.
					</div>
					<section class="content">
						<button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal"
							data-target="#addsaringJO" style="float: right; margin-bottom: 10px;"><i
								class="fas fa-plus"></i> Tambah
							Filter Jenis Onderdil</button>
						<div class="table-responsive">
							<table id="scroll_ver" class="table table-striped table-bordered display"
								style="width:100%">
								<thead>
									<tr>
										<th rowspan="2">No</th>
										<th rowspan="2">Nama Filter</th>
										<th rowspan="2">Nama Kategori</th>
										<th colspan="2">Aksi</th>
									</tr>
									<tr>
										<th>Hapus</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<?php
											// $ : variabel
											$no = 1;
											foreach ($saringJO as $sJO) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $sJO->Nama_JO ?></td>
										<td><?php echo $sJO->Nama_Kategori ?></td>
										<td onclick="javascript: return confirm('Anda yakin hapus?')">
											<!-- delete data dr ID_Alternatif -->
											<?php echo anchor('bengkel/hapus_saringJO/' . $sJO->ID_JO, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')
													?>
										</td>
										<!-- proses 43 (bengkel.php) -->
										<td>
											<!-- controller/method -->
											<?php echo anchor('bengkel/edit_saringJO/' . $sJO->ID_JO, '<div class="btn btn-info waves-effect waves-light"><i class="fa fa-edit"></i></div>')
													?>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</section>


					<!-- Modal dr boostrap-->
					<div class="modal fade" id="addsaringJO" tabindex="-1" role="dialog"
						aria-labelledby="addsaringJOLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="addsaringJOLabel">Form Input Tambah FILTER JENIS
										ONDERDIL
									</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="post" action="<?php echo base_url() . 'bengkel/tambah_saringJO'; ?>">
										<div class="form-group">
											<label>Nama Filter</label>
											<input type="text" name="Nama_JO" class="form-control">
										</div>
										<div class="form-group">
										<label>Nama Kategori</label>
										<select id="ID_Kategori" name="ID_Kategori" class="form-control">
											<?php
                    						$kategori = $this->db->get('kategori');
		            						foreach ($kategori->result() as $ktg) : ?>
											<option value="<?php echo $ktg->ID_Kategori ?>"><?php echo $ktg->Nama_Kategori ?>
											</option>
											<?php endforeach; ?>
										</select>
									</div>
										<button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
										<button type="submit"
											class="btn btn-info waves-effect waves-light">Tambahkan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Tabel saring_merek_motor -->
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Filter Merek Motor</h4>
					<h6 class="card-subtitle">Merupakan filter untuk mencari onderdil berdasarkan filter<code> merek
							motor</code>.
				</div>
				<section class="content">
					<button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal"
						data-target="#addsaringMM" style="float: right; margin-bottom: 10px;"><i
							class="fas fa-plus"></i>
						Tambah
						Filter Merek Motor</button>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th rowspan="2">No</th>
									<th rowspan="2">Nama Filter</th>
									<th colspan="2">Aksi</th>
								</tr>
								<tr>
									<th>Hapus</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								<?php
								// $ : variabel
								$no = 1;
								foreach ($saringMM as $sMM) : ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $sMM->Nama_MM ?></td>
									<td onclick="javascript: return confirm('Anda yakin hapus?')">
										<!-- delete data dr ID_Alternatif -->
										<?php echo anchor('bengkel/hapus_saringMM/' . $sMM->ID_MM, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')
													?>
									</td>
									<!-- proses 43 (bengkel.php) -->
									<td>
										<!-- controller/method -->
										<?php echo anchor('bengkel/edit_saringMM/' . $sMM->ID_MM, '<div class="btn btn-info waves-effect waves-light"><i class="fa fa-edit"></i></div>')
													?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</section>

				<!-- Modal dr boostrap-->
				<div class="modal fade" id="addsaringMM" tabindex="-1" role="dialog" aria-labelledby="addsaringMMLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="addsaringMMLabel">Form Input Tambah FILTER MEREK MOTOR
								</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="<?php echo base_url() . 'bengkel/tambah_saringMM'; ?>">
									<div class="form-group">
										<label>Nama Filter</label>
										<input type="text" name="Nama_MM" class="form-control">
									</div>
									<button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
									<button type="submit"
										class="btn btn-info waves-effect waves-light">Tambahkan</button>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Tabel saring_tipe_motor -->
		<!-- scroll-vetical-dynamic height -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Filter Tipe Motor</h4>
						<h6 class="card-subtitle">Merupakan filter untuk mencari onderdil berdasarkan filter<code> tipe
								motor</code>.
					</div>
					<section class="content">
						<button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal"
							data-target="#addsaringTM" style="float: right; margin-bottom: 10px;"><i
								class="fas fa-plus"></i> Tambah
							Filter Tipe Motor</button>
						<div class="table-responsive">
							<table id="scroll_ver_dynamic_hei" class="table table-striped table-bordered display"
								style="width:100%">
								<thead>
									<tr>
										<th rowspan="2">No</th>
										<th rowspan="2">Nama Filter</th>
										<th rowspan="2">Merek Motor</th>
										<th colspan="2">Aksi</th>
									</tr>
									<tr>
										<th>Hapus</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<?php
										// $ : variabel
										$no = 1;
										foreach ($saringTM as $sTM) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $sTM->Nama_TM ?></td>
										<td><?php echo $sTM->Nama_MM ?></td>
										<td onclick="javascript: return confirm('Anda yakin hapus?')">
											<!-- delete data dr ID_Alternatif -->
											<?php echo anchor('bengkel/hapus_saringTM/' . $sTM->ID_TM, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')
													?>
										</td>
										<!-- proses 43 (bengkel.php) -->
										<td>
											<!-- controller/method -->
											<?php echo anchor('bengkel/edit_saringTM/' . $sTM->ID_TM, '<div class="btn btn-info waves-effect waves-light"><i class="fa fa-edit"></i></div>')
													?>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</section>

					<!-- Modal dr boostrap-->
					<div class="modal fade" id="addsaringTM" tabindex="-1" role="dialog"
						aria-labelledby="addsaringTMLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="addsaringTMLabel">Form Input Tambah FILTER TIPE
										MOTOR
									</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="post" action="<?php echo base_url() . 'bengkel/tambah_saringTM'; ?>">
										<div class="form-group">
											<label>Nama Filter</label>
											<input type="text" name="Nama_TM" class="form-control">
										</div>
										<div class="form-group">
										<label>Merek Motor</label>
										<select id="ID_MM" name="ID_MM" class="form-control">
											<?php
                    						$SaringMM = $this->db->get('saring_merek_motor');
		            						foreach ($SaringMM->result() as $sMM) : ?>
											<option value="<?php echo $sMM->ID_MM ?>"><?php echo $sMM->Nama_MM ?>
											</option>
											<?php endforeach; ?>
										</select>
									</div>
										<button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
										<button type="submit"
											class="btn btn-info waves-effect waves-light">Tambahkan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Tabel saring_merek_Onderdil -->
		<!-- scroll horizontal & vertical -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Filter Merek Onderdil</h4>
						<h6 class="card-subtitle">Merupakan filter untuk mencari onderdil berdasarkan filter<code> merek
								onderdil</code>.
							<section class="content">
								<button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal"
									data-target="#addsaringMO" style="float: right; margin-bottom: 10px;"><i
										class="fas fa-plus"></i> Tambah
									Filter Merek Onderdil</button>
								<div class="table-responsive">
									<table id="scroll_ver_hor" class="table table-striped table-bordered display nowrap"
										style="width:100%; color: #3e5569">
										<thead>
											<tr>
												<th rowspan="2">No</th>
												<th rowspan="2">Nama Filter</th>
												<th colspan="2">Aksi</th>
											</tr>
											<tr>
												<th>Hapus</th>
												<th>Edit</th>
											</tr>
										</thead>
										<tbody>
											<?php
											// $ : variabel
											$no = 1;
											foreach ($saringMO as $sMO) : ?>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $sMO->Nama_MO ?></td>
												<td onclick="javascript: return confirm('Anda yakin hapus?')">
													<!-- delete data dr ID_Alternatif -->
													<?php echo anchor('bengkel/hapus_saringMO/' . $sMO->ID_MO, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')
													?>
												</td>
												<!-- proses 43 (bengkel.php) -->
												<td>
													<!-- controller/method -->
													<?php echo anchor('bengkel/edit_saringMO/' . $sMO->ID_MO, '<div class="btn btn-info waves-effect waves-light"><i class="fa fa-edit"></i></div>')
													?>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</section>

							<!-- Modal dr boostrap-->
							<div class="modal fade" id="addsaringMO" tabindex="-1" role="dialog"
								aria-labelledby="addsaringMOLabel" aria-hidden="true">
								<div class="modal-dialog" role="document" style="color: #3e5569">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="addsaringMOLabel">Form Input Tambah FILTER MEREK
												ONDERDIL
											</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form method="post"
												action="<?php echo base_url() . 'bengkel/tambah_saringMO'; ?>">
												<div class="form-group">
													<label>Nama Filter</label>
													<input type="text" name="Nama_MO" class="form-control">
												</div>
												<button type="reset" class="btn btn-danger"
													data-dismiss="modal">Batal</button>
												<button type="submit"
													class="btn btn-info waves-effect waves-light">Tambahkan</button>
											</form>
										</div>
									</div>
								</div>
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
