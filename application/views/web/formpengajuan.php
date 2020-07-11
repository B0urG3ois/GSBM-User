<?php $this->load->view('web/css'); ?>

<body>


	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<!-- Begin Header -->
				<?php $this->load->view('web/main_menu'); ?>
				<!-- End Header -->

				<div id="page-heading" style="padding: 50px;">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<form class="example" action="#" style="margin:auto;max-width: 400px;">
									<input type="text" placeholder="Cari... (lokasi/nama bengkel/layanan/onderdil)"
										name="search2">
									<button type="submit"><i class="fa fa-search"></i></button>
								</form>
								<div class="line"></div>
								<h1>Pengajuan Bengkel/layanan/onderdil</h1>
								<span></span>
								<div class="page-active">
									<ul>
										<li><a href="index.html">Beranda</a></li>
										<li><i class="fa fa-dot-circle-o"></i></li>
										<li><a href="formpengajuan.html">Formulir Pengajuan</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="car-details">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="left-content">
									<div class="heading-section">
										<div class="row">
											<div class="col-md-8"></div>
											<div class="col-md-2">
												<a href="<?php echo base_url() . 'pengajuan/beranda_akun'; ?>"
													class="btn btn-info waves-effect waves-light"
													style="display: block; width: 80%; margin: auto; font-family:'Montserrat', sans-serif; text-transform:uppercase; color: #222222; background-color: #f4c23d; border-color: #f4c23d; font-size: 12px; font-weight: 700;"><i class="fa fa-chevron-left fa-lg"></i>   Kembali</a>
											</div>
											<div class="col-md-2">
												<a href="<?php echo base_url() . 'pengajuan/logout'; ?>"
													class="btn btn-info waves-effect waves-light"
													style="display: block; width: 80%; margin: auto; font-family:'Montserrat', sans-serif; text-transform:uppercase; color: #222222; background-color: #f4c23d; border-color: #f4c23d; font-size: 12px; font-weight: 700;">Logout</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div id="left-info" class="col-md-12">
								<div class="enquiry">
									<?php echo $this->session->flashdata('message');?>

									<div class="head-side-bar">
										<h4>Pengajuan Bengkel</h4>
									</div>
									<div class="contact-form">
										<form method="post"
											action="<?php echo base_url() . 'pengajuan/tambah_bengkel'; ?>"
											enctype="multipart/form-data">
											<div class="tab">
												<div class="tabs">
													<ul class="tab-links">
														<li class="active"><a href="#tab1">Tambah Bengkel</a></li>
														<!-- <li><a href="#tab2">Tambah Layanan</a></li>
														<li><a href="#tab3">Tambah Onderdil</a></li> -->
													</ul>

													<div class="tab-content">

														<div id="tab1" class="tab  active">
															<p>Informasi status penerimaan pengajuan bengkel akan
																diemail kepada
																Anda segera setelah Anda
																mengirimkan pengajuan Anda. Proses berlangsung maksimum
																2x24jam.</p>

															<div class="form-group">
																<input type="text" name="Nama_Bengkel"
																	class="form-control" placeholder="Nama Bengkel"
																	value="">
															</div>

															<div class="form-group">
																<input type="text" name="Alamat_Bengkel"
																	class="form-control" placeholder="Alamat Bengkel"
																	value="">
															</div>

															<div class="form-group">
																<input type="text" name="Telepon_Bengkel"
																	class="form-control"
																	placeholder="Nomor Telepon Bengkel" value="">
															</div>

															<div class="form-group">
																<textarea id="JamOperasional_Bengkel"
																	name="JamOperasional_Bengkel" class="form-control"
																	placeholder="Jam Operasional Bengkel"></textarea>
															</div>

															<div class="row">
																<input type="file" id="myFile1" name="myFile1">
															</div>

														</div>
													</div>
												</div>

												<button type="submit" class="btn btn-info waves-effect waves-light"
													style="font-family:'Montserrat', sans-serif; text-transform:uppercase; color: #222222; background-color: #f4c23d; border-color: #f4c23d; font-size: 12px; font-weight: 700;">Tambahkan</button>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			</section>

			<?php $this->load->view('web/footer'); ?>

		</div>
	</div>

	<?php $this->load->view('web/main_menu_2'); ?>

	</div>