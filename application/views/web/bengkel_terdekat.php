<?php $this->load->view('web/css'); ?>

<?php 
    if($use_geolocation == "yes"){
        echo '<body onload="getLocation()">';
    }else{
        echo '<body>';
    }
?>


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
								<h1>Bengkel Terdekat</h1>
								<span></span>
								<div class="page-active">
									<ul>
										<li><a href="<?=base_url()?>">Beranda</a></li>
										<li><i class="fa fa-dot-circle-o"></i></li>
										<li><a href="<?=base_url('bengkel_terdekat')?>">Bengkel Terdekat</a></li>
										<?php if(isset($_COOKIE['latitude'])){ ?>
										<li><i class="fa fa-dot-circle-o"></i></li>
										<li><a href="#"><?=$_COOKIE['latitude']?>, <?=$_COOKIE['longitude']?></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- <div id="map" style="width:100%;height:400px"></div> -->
				<!-- <p><?=$_COOKIE['latitude']?></p>
				<p><?=$_COOKIE['longitude']?></p> -->

				<section class="blog-grid">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div id="blog-posts">
									<div class="heading-section">
										<h2>Bengkel di Gading Serpong</h2>
										<div class="line-dec"></div>
										<?php /*$plus=1;foreach ($query_bengkel->result() as $row) { ?>
										<?=$row->distance.'<br>';?>
										<?php }*/ ?>
										<br>
									</div>
									<?php $plus=1;foreach ($query_bengkel->result() as $row) { ?>
									<div class="blog-item col-md-4">
										<?php /*$row->distance; */ ?>
										<img src="<?=base_url()?>../upload/<?=$row->Gambar_Alternatif;?>" alt="" height="300">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li><i class="fa fa-phone fa-lg"></i> <?=$row->Telepon_Alternatif?></li>
													<?php /*<li style="color: #f4c23d;">Tutup</li>*/ ?>
													<li><i class="fa fa-clock-o fa-lg"></i> <?=$row->JamOperasional_Alternatif?></li>
												</ul>
												<div class="tittle">
													<a href="<?=base_url('bengkel/'.$row->ID_Alternatif)?>/default">
														<h2><?=$row->Nama_Alternatif?></h2>
													</a>
												</div>
											</div>
											<p><?=$row->Alamat_Alternatif?></p>
										</div>
									</div>
									<?php 
										if($plus==3){ echo '<div class="clearfix"></div>';$plus=1; }else{ $plus++; }
									} 
									if($query_bengkel->num_rows()%3!=0){ echo '<div class="clearfix"></div>'; } 
									?>
									<?php /*<!-- Begin bengkel line 1 -->
									<div class="blog-item col-md-4">
										<img src="assets/images/bengkel/bengkel1.jpg" alt="">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li>0816-1815-492</li>
													<li style="color: #f4c23d;">Tutup</li>
													<li>buka pukul 10:00 WIB</li>
												</ul>
												<div class="tittle">
													<a href="bengkel-detail.html">
														<h2>AeroSpeed Racing Gading Serpong</h2>
													</a>
												</div>
											</div>
											<p>Ruko Bolsena Blok E No.33 Gading Serpong, Curug Sangereng, Kelapa Dua,
												Tangerang, Banten 15810</p>
										</div>
									</div>
									<div class="blog-item col-md-4">
										<img src="assets/images/bengkel/bengkel2.jpg" alt="">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li>(021) 22225734</li>
													<li style="color: #f4c23d;">Tutup</li>
													<li>buka pukul 07:30 WIB</li>
												</ul>
												<div class="tittle">
													<a href="bengkel-detail.html">
														<h2>AHASS Gading Serpong</h2>
													</a>
												</div>
											</div>
											<p>Klp. Dua, Kec. Klp. Dua, Tangerang, Banten 15810</p>
										</div>
									</div>
									<div class="blog-item col-md-4">
										<img src="assets/images/bengkel/bengkel3.jpg" alt="">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li>(021) 54203710</li>
													<li style="color: #f4c23d;">Buka</li>
													<li>segera tutup pukul 17:00 WIB</li>
												</ul>
												<div class="tittle">
													<a href="single-blog.html">
														<h2>Ahong Motor</h2>
													</a>
												</div>
											</div>
											<p>Jl. Klp. Gading Sel., Pakulonan Bar., Kec. Klp. Dua, Tangerang, Banten
												15810</p>
										</div>
									</div>
									<!-- End bengkel line 1 -->
									<!-- Begin bengkel line 2 -->
									<div class="blog-item col-md-4">
										<img src="assets/images/bengkel/bengkel1.jpg" alt="">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li>0816-1815-492</li>
													<li style="color: #f4c23d;">Tutup</li>
													<li>buka pukul 10:00 WIB</li>
												</ul>
												<div class="tittle">
													<a href="bengkel-detail.html">
														<h2>AeroSpeed Racing Gading Serpong</h2>
													</a>
												</div>
											</div>
											<p>Ruko Bolsena Blok E No.33 Gading Serpong, Curug Sangereng, Kelapa Dua,
												Tangerang, Banten 15810</p>
										</div>
									</div>
									<div class="blog-item col-md-4">
										<img src="assets/images/bengkel/bengkel2.jpg" alt="">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li>(021) 22225734</li>
													<li style="color: #f4c23d;">Tutup</li>
													<li>buka pukul 07:30 WIB</li>
												</ul>
												<div class="tittle">
													<a href="bengkel-detail.html">
														<h2>AHASS Gading Serpong</h2>
													</a>
												</div>
											</div>
											<p>Klp. Dua, Kec. Klp. Dua, Tangerang, Banten 15810</p>
										</div>
									</div>
									<div class="blog-item col-md-4">
										<img src="assets/images/bengkel/bengkel3.jpg" alt="">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li>(021) 54203710</li>
													<li style="color: #f4c23d;">Buka</li>
													<li>segera tutup pukul 17:00 WIB</li>
												</ul>
												<div class="tittle">
													<a href="single-blog.html">
														<h2>Ahong Motor</h2>
													</a>
												</div>
											</div>
											<p>Jl. Klp. Gading Sel., Pakulonan Bar., Kec. Klp. Dua, Tangerang, Banten
												15810</p>
										</div>
									</div>
									<!-- End bengkel line 2 -->
									<!-- Begin bengkel line 3 -->
									<div class="blog-item col-md-4">
										<img src="assets/images/bengkel/bengkel1.jpg" alt="">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li>0816-1815-492</li>
													<li style="color: #f4c23d;">Tutup</li>
													<li>buka pukul 10:00 WIB</li>
												</ul>
												<div class="tittle">
													<a href="bengkel-detail.html">
														<h2>AeroSpeed Racing Gading Serpong</h2>
													</a>
												</div>
											</div>
											<p>Ruko Bolsena Blok E No.33 Gading Serpong, Curug Sangereng, Kelapa Dua,
												Tangerang, Banten 15810</p>
										</div>
									</div>
									<div class="blog-item col-md-4">
										<img src="assets/images/bengkel/bengkel2.jpg" alt="">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li>(021) 22225734</li>
													<li style="color: #f4c23d;">Tutup</li>
													<li>buka pukul 07:30 WIB</li>
												</ul>
												<div class="tittle">
													<a href="bengkel-detail.html">
														<h2>AHASS Gading Serpong</h2>
													</a>
												</div>
											</div>
											<p>Klp. Dua, Kec. Klp. Dua, Tangerang, Banten 15810</p>
										</div>
									</div>
									<div class="blog-item col-md-4">
										<img src="assets/images/bengkel/bengkel3.jpg" alt="">
										<div class="down-content">
											<div class="post-info">
												<ul>
													<li>(021) 54203710</li>
													<li style="color: #f4c23d;">Buka</li>
													<li>segera tutup pukul 17:00 WIB</li>
												</ul>
												<div class="tittle">
													<a href="single-blog.html">
														<h2>Ahong Motor</h2>
													</a>
												</div>
											</div>
											<p>Jl. Klp. Gading Sel., Pakulonan Bar., Kec. Klp. Dua, Tangerang, Banten
												15810</p>
										</div>
									</div>
									<!-- End bengkel line 3 -->*/ ?>

									<?=$show_pagination?>
									<!-- <div class="col-md-12 text-center">
										<div class="load-more-button">
											<a href="#">Muat Lebih Banyak</a><i class="fa fa-spinner"></i>
										</div>
									</div> -->
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



<?php $this->load->view('web/js'); ?>