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
				<h4 class="page-title">Bengkel</h4>
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
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Kriteria Bengkel</h4>
					<h6 class="card-subtitle">Merupakan<code> kriteria</code> suatu bengkel yang akan
						digunakan dalam perhitungan TOPSIS.</h6>
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
										foreach ($bengkel as $bkl) : ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $bkl->Nama_Kriteria ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- scroll - vertical -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Pengaju Bengkel</h4>
						<h6 class="card-subtitle">Merupakan<code> data pengaju</code> suatu bengkel.</h6>
						<div class="table-responsive">
							<table id="scroll_ver" class="table table-striped table-bordered display"
								style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Bengkel</th>
										<th>Nama</th>
										<th>Email</th>
										<th>Telepon</th>
									</tr>
								</thead>
								<tbody>
									<?php
										// $ : variabel
										$no = 1;
										foreach ($pengaju as $pgj) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $pgj->Nama_Alternatif ?></td>
										<td><?php echo $pgj->Nama_User ?></td>
										<td><?php echo $pgj->Email_User ?></td>
										<td><?php echo $pgj->Telepon_User ?></td>
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
						<h4 class="card-title">Alternatif Bengkel</h4>
						<h6 class="card-subtitle">Merupakan <code>detail data bengkel </code> yang nantinya akan
							dihitung untuk mendapatkan hasil rekomendasi bengkel terbaik.</h6>

						<?php echo $this->session->flashdata('message');?>

						<?php 
                            if (validation_errors()) {
                            ?>
                            <div class="alert alert-danger alert-dismissible" role="alert"
                                style="color: black;">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <p style="color: black"><?php echo validation_errors(); ?></p>
                            </div>
                            <br>
                            <?php } ?>
						<section class="content">
							<!-- proses 32 -->
							<!-- GAK PERLU TAMBAH ALTERNATIF, KRN HARUS USER YG NAMBAHIN  -->
							<button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal"
								data-target="#addAlternatifBobot" style="float: right; margin-bottom: 10px;"><i
									class="fas fa-plus"></i> Tambah
								Alternatif</button>
							<!-- proses 34 -->
							<div class="table-responsive">
								<table id="scroll_ver_hor" class="table table-striped table-bordered display"
									style="width:100%">
									<thead>
										<tr>
											<th rowspan="2" style="text-align:center">No</th>
											<th rowspan="2" style="text-align:center">ID_Alternatif</th>
											<th rowspan="2" style="text-align:center">Nama Bengkel</th>
											<th rowspan="2" style="text-align:center">Alamat</th>
											<th rowspan="2" style="text-align:center">Telepon</th>
											<th rowspan="2" style="text-align:center">Jam Operasional</th>
											<th rowspan="2" style="text-align:center">Latitude</th>
											<th rowspan="2" style="text-align:center">Longitude</th>
											<th rowspan="2" style="text-align:center">Direction</th>
											<th rowspan="2" style="text-align:center">Gambar</th>
											<th colspan="2" style="text-align:center">Aksi</th>
										</tr>
										<tr>
											<th style="text-align:center">Hapus</th>
											<th style="text-align:center">Edit</th>
										</tr>
									</thead>
									<tbody>
										<?php
										// $ : variabel
										$no = 1;
										foreach ($alternatif as $alt) : ?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $alt->ID_Alternatif ?></td>
											<td><?php echo $alt->Nama_Alternatif ?></td>
											<td><?php echo $alt->Alamat_Alternatif ?></td>
											<td><?php echo $alt->Telepon_Alternatif ?></td>
											<td><?php echo $alt->JamOperasional_Alternatif ?></td>
											<td><?php echo $alt->Latitude_Alternatif ?></td>
											<td><?php echo $alt->Longitude_Alternatif ?></td>
											<td><?php echo $alt->Direction ?></td>
											<td>
												<div class="gallery">
													<img
														src="<?php echo base_url(); ?>../upload/<?php echo $alt->Gambar_Alternatif;?>" />
												</div>
											</td>
											

											<!-- proses 39 (bengkel.php) -->
											<td style="text-align:center" onclick="javascript: return confirm('Anda yakin hapus?')">
												<!-- proses 42 -->
												<!-- controller/method -->
												<!-- delete data dr ID_Alternatif -->
												<?php echo anchor('bengkel/hapus_alternatif/' . $alt->ID_Alternatif, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')
													?>
												</>
												<!-- proses 43 (bengkel.php) -->
											<td style="text-align:center">
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
						<!-- proses 35 -->
						<div class="modal fade" id="addAlternatifBobot" tabindex="-1" role="dialog"
							aria-labelledby="addAlternatifBobotLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="addAlternatifBobotLabel">Form Input Tambah
											ALTERNATIF
										</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- tambah_altrnatif = nama fungsi -->
										<!-- proses 31 (bengkel.php)-->
										<form method="post"
											action="<?php echo base_url() . 'bengkel/tambah_alternatif'; ?>" enctype="multipart/form-data">
											<div class="form-group">
												<label>Nama Bengkel</label>
												<input type="text" name="Nama_Alternatif" class="form-control" placeholder="Nama Bengkel">
												<br>
												<label>Alamat Bengkel</label>
												<input type="text" name="Alamat_Alternatif" class="form-control" placeholder="Alamat Bengkel">
												<br>
												<label>Telepon Bengkel</label>
												<input type="text" name="Telepon_Alternatif" class="form-control" placeholder="Telepon Bengkel">
												<br>
												<label>Jam Operasional</label>
												<input type="text" name="JamOperasional_Alternatif" class="form-control" placeholder="Jam Operasional">
												<br>
												<label>Latitude</label>
												<input type="text" name="Latitude_Alternatif" class="form-control" placeholder="Latitude">
												<br>
												<label>Longitude</label>
												<input type="text" name="Longitude_Alternatif" class="form-control" placeholder="Longitude">
												<br>
												<label>Bobot Pelayanan</label>
												<select id="bobot_pelayanan" name="bobot_pelayanan" class="form-control">
													<!-- Di database keluarnya 5, bukan sangat baik -->
													<option value="5">Sangat Baik</option>
													<option value="4">Baik</option>
													<option value="3">Cukup Baik</option>
													<option value="2">Buruk</option>
													<option value="1">Sangat Buruk</option>
												</select>
												<br>
												<label>Bobot Kecepatan</label>
												<select id="bobot_kecepatan" name="bobot_kecepatan" class="form-control">
													<!-- Di database keluarnya 5, bukan sangat baik -->
													<option value="5">Sangat Baik</option>
													<option value="4">Baik</option>
													<option value="3">Cukup Baik</option>
													<option value="2">Buruk</option>
													<option value="1">Sangat Buruk</option>
												</select>
												<br>
												<label>Bobot Kenyamanan Tempat Tunggu</label>
												<select id="bobot_kenyamanan" name="bobot_kenyamanan" class="form-control">
													<!-- Di database keluarnya 5, bukan sangat baik -->
													<option value="5">Sangat Baik</option>
													<option value="4">Baik</option>
													<option value="3">Cukup Baik</option>
													<option value="2">Buruk</option>
													<option value="1">Sangat Buruk</option>
												</select>
												<br>
												<label>Bobot Harga</label>
												<select id="bobot_harga" name="bobot_harga" class="form-control">
													<!-- Di database keluarnya 5, bukan sangat baik -->
													<option value="5">Sangat Baik</option>
													<option value="4">Baik</option>
													<option value="3">Cukup Baik</option>
													<option value="2">Buruk</option>
													<option value="1">Sangat Buruk</option>
												</select>
												<br>
												<label>Direction</label>
												<input type="text" name="direction" id="direction" class="form-control" placeholder="Direction GPS">
												<br>
												<label>Gambar</label>
												<input type="file" name="Gambar_Alternatif" class="form-control">
												<br>
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

		<!-- scroll-vetical-dynamic height -->
		<?php
			$sql_string = null;
			$kriteria_rows = $this->db->count_all_results('kriteria');

			for ($i = 1; $i < $kriteria_rows+1; $i++) {
				$sql_string .= ", sum( if( ID_Kriteria = ".$i.", Data_Point, 0 ) ) AS '".$i."'";
			}
			$matrix = array();

			$query = $this->db->query("SELECT ID_Alternatif".$sql_string."  FROM matrix  GROUP BY ID_Alternatif; ");

			foreach ($query->result_array() as $row)
			{
				$matrix[] = $row;
			}

			// print "<pre>";
			// print_r($matrix);
			// print "</pre>";

			$rows = count($matrix);
			foreach ($matrix as $row) {
				$cols = count($row);
			}

		?>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Bobot Kriteria dari Alternatif Bengkel</h4>
						<h6 class="card-subtitle">Merupakan <code>bobot kriteria bengkel </code> yang diambil dari
							masing-masing alternatif bengkel.</h6>
						<section class="content">
							<!-- proses 32 -->
							<!-- <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal"
								data-target="#addAlternatifBobot" style="float: right; margin-bottom: 10px;"><i
									class="fas fa-plus"></i> Tambah
								Alternatif</button> proses 34 -->
							<div class="table-responsive">
								<table id="scroll_ver_dynamic_hei" class="table table-striped table-bordered display"
									style="width:120%">
									<thead>
										<tr>
											<th rowspan="2" style="text-align:center">No</th>
											<th rowspan="2" style="text-align:center">Nama Bengkel</th>
											<th colspan="4" style="text-align:center">Bobot Kriteria</th>
											<th rowspan="2" style="text-align:center">Aksi</th>
										</tr>
										<tr>
											<th style="text-align:center">Pelayanan</th>
											<th style="text-align:center">Kecepatan</th>
											<th style="text-align:center">Kenyamanan</th>
											<th style="text-align:center">Harga</th>
										</tr>
									</thead>
									<tbody>
										<?php
										// $ : variabel
										$alter = array();
										$alter_id = array();

										$query_alter = $this->db->query("SELECT * FROM alternatif");
										foreach ($query_alter->result_array() as $row)
										{
											$alter[] = $row['Nama_Alternatif']; 
											$alter_id[] = $row['ID_Alternatif']; 
										}

										$no = 1;
										for ($row = 0; $row < $rows; $row++) {
											echo "<tr>";
											echo "<td>".$no."</td>";
											echo "<td>".$alter[$row]."</td>";
											for ($col = 1; $col < $cols; $col++) {
												echo "<td>".$matrix[$row][$col]."</td>";
											}
											echo '<td style="text-align:center">';
											echo anchor('bengkel/edit_matrix/' . $alter_id[$row], '<div class="btn btn-info waves-effect waves-light"><i class="fa fa-edit"></i></div>');
											echo '</td>';
											echo "</tr>";
											$no++;
										}
										
										?>
									</tbody>
								</table>
							</div>
						</section>
						<!-- proses 35 -->
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
