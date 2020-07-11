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
								<h1>Detail Layanan / Onderdil</h1>
								<span></span>
								<div class="page-active">
									<ul>
										<li><a href="index.html">Beranda</a></li>
										<li><i class="fa fa-dot-circle-o"></i></li>
										<li><a href="katalog.html">Detail</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="car-details">
					<div class="container">
						<div class="row">
							<div id="single-car" class="col-md-8">
								<div class="up-content clearfix">
									<h2><?=$nama_katalog?></h2>
									<span>Rp. <?=number_format($harga_katalog,0,'.','.')?></span>
								</div>
								<div>
									<img src="<?=base_url()?>../upload/<?=$gambar?>" width="100%" height="350" alt=""/>
								</div>
								<div class="tab">
									<div class="tabs">
										<ul class="tab-links">
											<li class="active"><a href="#tab1">Deskripsi</a></li>
											<li><a href="#tab2">Lokasi Bengkel</a></li>
										</ul>
										<div class="tab-content">
											<div id="tab1" class="tab active">
												<h6>Fungsi <?=$nama_katalog?></h6>
												<p>
													<?=$deskripsi_katalog?>
												</p>
											</div>
											<div id="tab2" class="tab">
												<p><?=$alamat_bengkel?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="left-info" class="col-md-4">
								<div class="details">
									<div class="head-side-bar">
										<h4>Fitur</h4>
									</div>
									<div class="list-info">
										<ul>
											<li><span>Jenis Onderdil:</span><?php if($jo!=null){echo $jo;}else{ echo '-'; }?></li>
											<li><span>Merek Motor:</span><?php if($mm!=null){echo $mm;}else{ echo '-'; }?></li>
											<li><span>Tipe Motor:</span><?php if($tm!=null){echo $tm;}else{ echo '-'; }?></li>
											<li><span>Merek Onderdil:</span><?php if($mo!=null){echo $mo;}else{ echo '-'; }?></li>

										</ul>
									</div>
								</div>
								<div class="enquiry">
									<div class="check-boxes">
										<div class="advanced-button2">
											<a href="<?=base_url('bengkel/'.$id_bengkel.'/default')?>">Kunjungi bengkel <i
													class="fa fa-home"></i></a>
										</div>
									</div>
									<div class="subhead-side-bar">
										<h4>Hubungi Bengkel</h4>
									</div>
									<div class="call-info">
										<i class="fa fa-phone"></i>
										<h6><?=$telepon_bengkel?></h6>
										<p><span><?=$nama_bengkel?></span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="featured-listing">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-section-2 text-center">
									<h2>Produk Serupa</h2>
									<span>Mari kita lihat produk apa saja yang cocok untukmu</span>
									<div class="dec"><i class="fa fa-car"></i></div>
									<div class="line-dec"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div id="featured-cars">
								<?php $no=1;foreach ($query_katalog_serupa->result() as $row) { ?>
								<div class="featured-item col-md-3">
									<img src="<?=base_url()?>../upload/<?=$row->Gambar_Isi_Kategori?>" alt="" style="border:1px solid #eee">
									<div class="down-content">
										<a href="<?=base_url('katalog/detail/'.$row->ID_Kategori_Detail)?>">
                                            <h2><?=$row->Isi_Kategori?></h2>
                                        </a>
                                        <span>Rp. <?=number_format($row->Harga_Kategori,0,'.','.')?></span>
                                        <div class="light-line"></div>
                                        <p><?=character_limiter($row->Alamat_Alternatif, 60,'...');?></p>
                                        <div class="car-info">
                                            <ul>
                                                <li>
                                                	<i class="icon-home" style="color: #f4c23d;"></i>
                                                	<a href="<?=base_url('bengkel/'.$row->ID_Alternatif)?>">Kunjungi Bengkel</a>
                                                </li>
                                            </ul>
                                        </div>
									</div>
								</div>
								<?php if($no==4){ echo '<div class="clearfix"></div><div>&nbsp;</div>';$no=1; }else{ $no++; } } ?>
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