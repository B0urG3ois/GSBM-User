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
								<h1>Tentang Kami</h1>
								<span></span>
								<div class="page-active">
									<ul>
										<li><a href="index.html">Beranda</a></li>
										<li><i class="fa fa-dot-circle-o"></i></li>
										<li><a href="tentangkami.html">Tentang Kami</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
                <section class="testimonials">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-section-2 text-center">
                                    <h2>GSBM</h2>
                                    <div class="dec"><i class="fa fa-cogs"></i></div>
									<div class="line-dec"></div>
                                    <h3>
										GSBM (Gading Serpong Bengkel Motor) merupakan sebuah sistem rekomendasi berbasis website 
										yang bertujuan untuk memberikan rekomendasi bengkel terdekat yang ada di Gading Serpong, Tangerang. 
										Sistem ini dibuat oleh Septaria Dwi Natapura pada Mei 2020. 
										Algoritma yang digunakan dalam memberikan rekomendasi pada sistem ini adalah TOPSIS. <br><br>
										Sistem ini dibuat untuk keperluan skripsi, guna mendapatkan gelar S.Kom. (Sarjana Komputer) 
										di Universitas Multimedia Nusantara. Adapun dalam menyelesaikan sistem ini, Septaria dibimbing 
										oleh Fenina Adline Twince Tobing, M.Kom. 
										GSBM telah dibuat dengan baik dan benar, dan telah mengimplementasikan algoritma TOPSIS dalam 
										memberikan rekomendasi bengkel terdekat di Gading Serpong.
                                    </h3>
								</div>
							</div>
						</div>
					</div>
                </section>

                <section class="testimonials">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-section-2 text-center">
									<h2>Profil</h2>
									<div class="dec"><i class="fa fa-user"></i></div>
									<div class="line-dec"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-testimonials">
									<div class="item text-center col-md-8 col-md-offset-2">
                                        <h3>
											Septaria Dwi Natapura adalah mahasiswa jurusan Informatika di Univeristas Multimedia Nusantara. 
											Septaria Dwi Natapura merupakan pembuat sistem rekomendasi GSBM.
                                        </h3>
										<img src="<?=base_url()?>assets/images/septa.png" alt="">
										<h2>Septaria Dwi Natapura</h2>
										<span>Peneliti</span>
									</div>
									<div class="item text-center col-md-8 col-md-offset-2">
                                        <h3>
											Fenina Adline Twince Tobing adalah dosen  Informatika di Universitas Multimedia Nusantara. 
											Fenina Adline Twince Tobing merupakan pembimbing skripsi yang telah membantu peneliti dalam 
											menyelesaikan skripsi ini.
                                        </h3>
										<img src="<?=base_url()?>assets/images/fenina.png" alt="">
										<h2>Fenina Adline Twince Tobing</h2>
										<span>Pembimbing</span>
									</div>
								</div>
							</div>
							<div class="owl-controls col-md-12">
								<a class="btn prev fa fa-arrow-left"></a>
								<div class="bg-prev"></div>
								<a class="btn next fa fa-arrow-right"></a>
							 	<div class="bg-next"></div>
							</div>
						</div>
					</div>
                </section>

				<?php $this->load->view('web/footer'); ?>

			</div>
		</div>

		<?php $this->load->view('web/main_menu_2'); ?>
	</div> 

<?php $this->load->view('web/js'); ?>