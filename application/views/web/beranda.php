<?php $this->load->view('web/css'); ?>

<body>


	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<!-- Begin Header -->
				<?php $this->load->view('web/main_menu'); ?>
				<!-- End Header -->

				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
								<li class="first-slide" data-transition="fade" data-slotamount="10"
									data-masterspeed="300">
									<img src="<?=base_url()?>assets/images/banner1.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="160" data-speed="1000" data-start="200"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">Gading Serpong Bengkel Motor
									</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="210" data-speed="1000" data-start="800"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">Website terbaik untuk Motormu
									</div>
									<div class="tp-caption third-line lfb tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="280" data-speed="1000" data-start="800"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">Membantu menemukan <em>bengkel
											motor terbaik </em>di area Gading Serpong</div>
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="160" data-speed="1000" data-start="200"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">Gading Serpong Bengkel Motor
									</div>
									
									<?php /*
									<form method="get" id="subscribe" class="blog-search">
										<input type="text" class="blog-search-field" name="s" placeholder="Alamat Email"
											value="">
										<div class="simple-button">
											<a href="#">Ikuti GSBM</a>
										</div>
									</form>
									<!-- Begin Custom Search -->
									<!-- gimana caranya dia ttep stay di situ, gak ngikutin gerakan slide?
									dan gimana spy responsif? -->
									<div class="tp-caption slider-thumb sfb tp-resizeme start container hidden-xs hidden-sm"
										data-x="center" data-hoffset="0" data-y="460" data-speed="1000"
										data-start="2200" data-easing="Power4.easeOut" data-splitin="none"
										data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
										<form class="example" action="#" style="margin:auto;max-width: 700px;">
											<input type="text" placeholder="Cari... (lokasi/nama bengkel/layanan/onderdil)"
												name="search2">
											<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>
									<!-- End Custom Search -->*/ ?>
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10"
									data-masterspeed="300">
									<img src="<?=base_url()?>assets/images/banner3.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="160" data-speed="1000" data-start="200"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">Selamat Datang di GSBM</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="210" data-speed="1000" data-start="800"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">temukan bengkel motor impianmu
									</div>
									<div class="tp-caption third-line lfb tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="280" data-speed="1000" data-start="800"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">Kunjungi halaman
										<em>kategori</em>,
										untuk menemukan bengkel pilihanmu</div>
									<div class="tp-caption slider-thumb sfb tp-resizeme start container hidden-xs hidden-sm"
										data-x="center" data-hoffset="0" data-y="460" data-speed="1000"
										data-start="2200" data-easing="Power4.easeOut" data-splitin="none"
										data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
									</div>
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10"
									data-masterspeed="300">
									<img src="<?=base_url()?>assets/images/banner2.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="160" data-speed="1000" data-start="200"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">Peluang tambahan</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="210" data-speed="1000" data-start="800"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">Daftarkan segera bengkelmu</div>
									<div class="tp-caption third-line lfb tp-resizeme start" data-x="center"
										data-hoffset="0" data-y="280" data-speed="1000" data-start="800"
										data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
										data-elementdelay="0" data-endelementdelay="0">Tambahan
										<em>bengkel/layanan/onderdil</em> pilihanmu pada website ini</div>
									<div class="tp-caption slider-thumb sfb tp-resizeme start container hidden-xs hidden-sm"
										data-x="center" data-hoffset="0" data-y="460" data-speed="1000"
										data-start="2200" data-easing="Power4.easeOut" data-splitin="none"
										data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="cta-3">
					<div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
					<div class="container" style="background:#333333;">
						<div class="clearfix">&nbsp;</div>
						<div class="row">
							<div class="col-md-12">
								<form class="example" action="<?=base_url('search/default')?>" method="get" style="margin:auto;max-width: 700px;">
                                    <input type="text" placeholder="Cari... (lokasi/nama bengkel/layanan/onderdil)"
                                        name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
							</div>
						</div>
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>

				<div id="cta-3">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p>Temukan bengkel di area Gading Serpong yang <em>paling dekat</em> dengan lokasimu.
								</p>
								<div class="advanced-button2">
									<a href="<?=base_url('bengkel_terdekat')?>">Bengkel Terdekat<i class="fa fa-map-marker"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="cta-1">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="left-content">
									<div class="heading-section">
										<h2>Kategori</h2>
										<div class="line-dec"></div>
									</div>
									<?php foreach ($query_kategori->result() as $row) { ?>

									<div class="col-md-3">
										<div class="simple-button2">
											<a href="<?=base_url('katalog/kategori/'.$row->slug.'/default')?>"><?=$row->Nama_Kategori?></a>
										</div>
									</div>

									<?php } ?>
								</div>
							</div>
						</div>

						<div style="text-align: end;">
							<a href="<?=base_url('katalog/all/default')?>">
								<h4>Lihat Semua Produk &nbsp;<i class="fa fa-mail-forward"></i></h4>
							</a>
						</div>
					</div>

				</div>

				<?php $this->load->view('web/footer'); ?>

			</div>
		</div>

		<?php $this->load->view('web/main_menu_2'); ?>

	</div>

<?php $this->load->view('web/js'); ?>