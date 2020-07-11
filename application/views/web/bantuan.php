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
								<?php $this->load->view('web/form_search_jumbotron'); ?>
								<div class="line"></div>
								<h1>Bantuan</h1>
								<span></span>
								<div class="page-active">
									<ul>
										<li><a href="<?=base_url()?>">Beranda</a></li>
										<li><i class="fa fa-dot-circle-o"></i></li>
										<li><a href="<?=base_url('bantuan')?>">Bantuan</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="why-us">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="right-img">
									<img src="<?=base_url()?>assets/images/bantuan.png" alt="">
									<div class="img-bg"></div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="left-content">
									<div class="services">
										<div class="col-md-12">
											<div class="service-item">
												<div class="heading-section">
													<h2>Pilih Kategori Layanan / onderdil</h2>
													<div class="line-dec"></div>
												</div>
												<i class="fa fa-bar-chart-o"></i>
												<p>Terdapat 8 kategori layanan & onderdil yang tersedia di GSBM, yaitu Layanan Darurat,
													Layanan Rutin, Onderdil Standar, Onderdil Variasi, Bodypart Motor, Aksesoris Motor, 
													Pelumas Motor, dan Ban/Velg Motor. <br>
													Anda dapat memilih kategori layanan / onderdil sesuai keinginan Anda.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div style="background-color: #e2eff9;">
					<section class="why-us">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<div class="left-content">
										<div class="services">
											<div class="service-item2">
												<div class="heading-section">
													<h2>Filter</h2>
													<div class="line-dec"></div>
												</div>
												<i class="fa fa-bar-chart-o"></i>
												<p>Terdapat delapan saringan yang tersedia, yaitu saring berdasarkan Jenis Onderdil, 
													Merek Sepeda Motor, Tipe Sepeda Motor, Merek Onderdil, Harga, serta saring kriteria Pelayanan, 
													kriteria Kecepatan, dan kriteria Kenyamanan Tempat.
												</p>
											</div>
											<div class="service-item second-row">
												<div class="heading-section">
													<h2>Sorting</h2>
													<div class="line-dec"></div>
												</div>
												<i class="fa fa-pencil"></i>
												<p>Selain saringan, Anda juga dapat melakukan sortir. Anda dapat
													melakukan sortir berdasarkan layanan & onderdil terbaru ke terlama, A-Z, Z-A, sortir kriteria jarak terdekat 
													ke terjauh, harga terendah ke tertinggi, dan harga tertinggi ke terendah.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="right-img">
										<img src="<?=base_url()?>assets/images/bantuan.png" alt="">
										<div class="img-bg"></div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<?php $this->load->view('web/footer'); ?>

			</div>
		</div>

		<?php $this->load->view('web/main_menu_2'); ?>

	</div>


	<?php $this->load->view('web/js'); ?>