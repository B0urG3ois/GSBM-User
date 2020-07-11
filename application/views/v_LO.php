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
				<h4 class="page-title">Layanan & Onderdil</h4>
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
					<h4 class="card-title">Kategori Layanan & Onderdil</h4>
					<h6 class="card-subtitle">Merupakan<code> kategori</code> layanan & onderdil yang terdapat di
						bengkel.</h6>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Kategori</th>
							</tr>
						</thead>
						<tbody>
							<?php
								// $ : variabel
								$no = 1;
								foreach ($kategori as $ktg) : ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $ktg->Nama_Kategori ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- scroll horizontal & vertical -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
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
						<h4 class="card-title">Kategori Detail Layanan & Onderdil</h4>
						<h6 class="card-subtitle">Merupakan <code> detail layanan & onderdil</code> dari bengkel.
						</h6>
						<section class="content">
							<button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal"
								data-target="#addKategoriDetail" style="float: right; margin-bottom: 10px;"><i
									class="fas fa-plus"></i> Tambah
								Kategori Detail</button>
							<div class="table-responsive">
								<table id="scroll_ver_hor" class="table table-striped table-bordered display"
									style="width:100%">
									<thead>
										<tr>
											<th rowspan="2" style="text-align:center">No</th>
											<th rowspan="2" style="text-align:center">Nama Kategori</th>
											<th rowspan="2" style="text-align:center">Jenis Layanan</th>
											<th rowspan="2" style="text-align:center">Jenis Onderdil</th>
											<th rowspan="2" style="text-align:center">Tipe Motor</th>
											<th rowspan="2" style="text-align:center">Merek Motor</th>
											<th rowspan="2" style="text-align:center">Nama Layanan Onderdil</th>
											<th rowspan="2" style="text-align:center">Harga</th>
											<th rowspan="2" style="text-align:center">Deskripsi</th>
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
										foreach ($kategori_detail as $ktg_dtl) : ?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $ktg_dtl->Nama_Kategori ?></td>
											<td><?php echo $ktg_dtl->Nama_JL ?></td>
											<td><?php echo $ktg_dtl->Nama_JO ?></td>
											<td><?php echo $ktg_dtl->Nama_TM ?></td>
											<td><?php echo $ktg_dtl->Nama_MO ?></td>
											<td><?php echo $ktg_dtl->Isi_Kategori ?></td>
											<td><?php echo $ktg_dtl->Harga_Kategori ?></td>
											<td><?php echo $ktg_dtl->Isi_Deskripsi ?></td>
											<td>
												<div class="gallery">
													<img
														src="<?php echo base_url(); ?>../upload/<?php echo $ktg_dtl->Gambar_Isi_Kategori;?>" />
												</div>
											</td>
											<!-- proses 39 (bengkel.php) -->
											<td style="text-align:center" onclick="javascript: return confirm('Anda yakin hapus?')">
												<!-- proses 42 -->
												<!-- controller/method -->
												<!-- delete data dr ID_KategoriDetail -->
												<?php echo anchor('bengkel/hapus_kategori_detail/' . $ktg_dtl->ID_Kategori_Detail, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')
													?>
											</td>
											<!-- proses 43 (bengkel.php) -->
											<td style="text-align:center">
												<!-- controller/method -->
												<?php echo anchor('bengkel/edit_kategori_detail/' . $ktg_dtl->ID_Kategori_Detail, '<div class="btn btn-info waves-effect waves-light"><i class="fa fa-edit"></i></div>')
													?>
											</td>

										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</section>

						<!-- Modal dr boostrap-->
						<div class="modal fade" id="addKategoriDetail" tabindex="-1" role="dialog"
							aria-labelledby="addKategoriDetailLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="addKategoriDetailLabel">Form Input Tambah KATEGORI
											DETAIL</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- tambah_altrnatif = nama fungsi -->
										<!-- proses 31 (bengkel.php)-->
										<form method="post"
											action="<?php echo base_url() . 'bengkel/tambah_kategori_detail'; ?>" enctype="multipart/form-data">
											<div class="form-group">
												<label>Nama Bengkel</label>
												<select id="ID_Alter" name="ID_Alter" class="form-control">
													<option disabled selected>Nama Bengkel</option>
													<?php
                    											$nama_bengkel = $this->db->get('alternatif');
		            											foreach ($nama_bengkel->result() as $nb) : ?>
                                                    <option value="<?php echo $nb->ID_Alternatif ?>">
                                                        <?php echo $nb->Nama_Alternatif ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
											</div>
											<div class="form-group">
												<label>Jenis Kategori</label>
												<select id="ID_Kategori" name="ID_Kategori" class="form-control">
												<option disabled selected>Kategori</option>
													<?php
                    								$kategori = $this->db->get('kategori');
		            								foreach ($kategori->result() as $ktg) : ?>
													<option value="<?php echo $ktg->ID_Kategori ?>">
														<?php echo $ktg->Nama_Kategori ?>
													</option>
													<?php endforeach; ?>
												</select>
											</div>

											<!-- Layanan -->
											<div class="form-group" id="JL" name="JL">
												<label>Jenis Layanan</label>
												<select id="ID_JL" name="ID_JL" class="form-control">

                                                </select>
											</div>
											<div class="form-group" id="NL" name="NL">
												<label>Nama Layanan</label>
												<input type="text" id="Nama_Layanan" name="Nama_Layanan" class="form-control" placeholder="Nama Layanan">
											</div>
											<!-- End Layanan -->

											<!-- Onderdil -->
											<div class="form-group" id="JO" name="JO">
												<label>Jenis Onderdil</label>
												<select id="ID_JO" name="ID_JO" class="form-control">

                                                </select>
											</div>
											<div class="form-group" id="NO" name="NO">
												<label>Nama Onderdil</label>
												<input type="text" id="Nama_Onderdil" name="Nama_Onderdil" class="form-control" placeholder="Nama Onderdil   (Busi 071ZA Super Iridium)">
											</div>
											<div class="form-group" id="MM" name="MM">
												<label>Merek Motor</label>
												<select id="ID_MM" name="ID_MM" class="form-control">
													<option disabled selected>Merek Motor</option>
													<?php
                    											$saring_merek_motor = $this->db->get('saring_merek_motor');
		            											foreach ($saring_merek_motor->result() as $sMM) : ?>
                                                    <option value="<?php echo $sMM->ID_MM ?>">
                                                        <?php echo $sMM->Nama_MM ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
											</div>
											<div class="form-group" id="TM" name="TM">
												<label>Tipe Motor</label>
												<select id="ID_TM" name="ID_TM" class="form-control">

                                                </select>
											</div>
											<div class="form-group" id="MO" name="MO">
												<label>Merek Motor</label>
												<select id="ID_MO" name="ID_MO" class="form-control">
													<option disabled selected>Merek Onderdil</option>
													<?php
                    											$saring_merek_onderdil = $this->db->get('saring_merek_onderdil');
		            											foreach ($saring_merek_onderdil->result() as $sMO) : ?>
                                                    <option value="<?php echo $sMO->ID_MO ?>">
                                                        <?php echo $sMO->Nama_MO ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
											</div>
											<!-- End Onderdil -->

											<div class="form-group">
												<label>Harga</label>
												<input type="text" name="Harga_Kategori" id="Harga_Kategori" class="form-control" placeholder="Harga Rp.">
											</div>
											<div class="form-group">
												<label>Deskripsi</label>
												<textarea rows="4" cols="50" type="text" name="Isi_Deskripsi" id="Isi_Deskripsi" class="form-control"
                                                        placeholder="Deskripsi" value=""></textarea>
											</div>
											<div class="form-group">
												<label>Image Kategori</label>
												<input type="file" name="Gambar_Kategori" id="Gambar_Kategori" class="form-control">
											</div>
											
											<br>
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

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script>
		$(function () {
			$("#JL").hide();
			$("#NL").hide();
			$("#JO").hide();
			$("#NO").hide();
			$("#MM").hide();
			$("#TM").hide();
			$("#MO").hide();

			$("#ID_Kategori").change(function () {
				var selectedText = $(this).find("option:selected").text();
				var selectedValue = $(this).val();

				if (selectedValue == 1 || selectedValue == 2) {
					$("#JO").hide();
					$("#NO").hide();
					$("#MM").hide();
					$("#MO").hide();
					$("#TM").hide();

					$("#JL").show();
					$("#NL").show();
					$.ajax({
						type: "POST",
						url: '<?php echo base_url() . 'bengkel/get_jenis_layanan'; ?>',
						data: "ID_Kategori=" + selectedValue,
						cache: false,
						success: function(msg){
							$("#ID_JL").html(msg);
						}
					});
				} else {
					$("#JL").hide();
					$("#NL").hide();

					$("#JO").show();
					$("#NO").show();
					$("#MM").show();
					$("#MO").show();
					$.ajax({
						type: "POST",
						url: '<?php echo base_url() . 'bengkel/get_jenis_onderdil'; ?>',
						data: "ID_Kategori=" + selectedValue,
						cache: false,
						success: function(msg){
							$("#ID_JO").html(msg);

							$("#ID_MM").change(function () {
								$("#TM").show();
								var selectedText2 = $(this).find("option:selected").text();
								var selectedValue2 = $(this).val();

								$.ajax({
									type: "POST",
									url: '<?php echo base_url() . 'bengkel/get_id_tm'; ?>',
									data: "ID_MM=" + selectedValue2,
									cache: false,
									success: function(msg){
										$("#ID_TM").html(msg);
									}
								});
							});
						}
					});
				}
			});
		});
	</script>

	</body>

	</html>
