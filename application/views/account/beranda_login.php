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
                                        <li><a href="<?php echo base_url() . 'pengajuan/index'; ?>">Beranda</a></li>
                                        <li><i class="fa fa-dot-circle-o"></i></li>
                                        <li><a href="<?php echo base_url() . 'pengajuan/index'; ?>">Formulir
                                                Pengajuan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo $this->session->flashdata('message');?>
                                    
                <?php 
                    if (validation_errors()) {
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert" style="color: black;">
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p style="color: black"><?php echo validation_errors(); ?></p>
                </div>
                <?php } ?>


                <?php
                    if($cek_alter == 0) {
                        if($cek_pengaju == 0) { 
                ?>
                <section class="car-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    <div class="heading-section">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h2>Bengkel Anda</h2>
                                            </div>
                                            <div class="col-md-6"></div>
                                            <div class="col-md-2">
                                                <a href="<?php echo base_url() . 'pengajuan/logout'; ?>"
                                                    class="btn btn-info waves-effect waves-light"
                                                    style="display: block; width: 80%; margin: auto; font-family:'Montserrat', sans-serif; text-transform:uppercase; color: #222222; background-color: #f4c23d; border-color: #f4c23d; font-size: 12px; font-weight: 700;">Logout</a>
                                            </div>
                                        </div>
                                        <div class="line-dec"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <p>Anda belum memiliki Bengkel yang terdaftar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="car-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    <div class="heading-section">
                                        <h2>Pengajuan</h2>
                                        <div class="line-dec"></div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="simple-button2">
                                            <a href="<?php echo base_url() . 'pengajuan/pengajuan_view'; ?>">Pengajuan
                                                Bengkel</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php } elseif ($cek_pengaju == 1) { ?>

                <section class="car-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    <div class="heading-section">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h2>Bengkel Anda</h2>
                                            </div>
                                            <div class="col-md-6"></div>
                                            <div class="col-md-2">
                                                <a href="<?php echo base_url() . 'pengajuan/logout'; ?>"
                                                    class="btn btn-info waves-effect waves-light"
                                                    style="display: block; width: 80%; margin: auto; font-family:'Montserrat', sans-serif; text-transform:uppercase; color: #222222; background-color: #f4c23d; border-color: #f4c23d; font-size: 12px; font-weight: 700;">Logout</a>
                                            </div>
                                        </div>
                                        <div class="line-dec"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <p>Anda sudah melakukan pendaftaran bengkel. Harap menunggu 3x24jam sampai bengkel Anda diterima dan terdaftar. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="car-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    <div class="heading-section">
                                        <h2>Pengajuan</h2>
                                        <div class="line-dec"></div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php } } elseif ($cek_alter == 1) { ?>

                <section class="car-details">
                    <div class="container">
                        <div class="row">
                            <div class="heading-section">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2>Bengkel Anda</h2>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-2">
                                        <a href="<?php echo base_url() . 'pengajuan/logout'; ?>"
                                            class="btn btn-info waves-effect waves-light"
                                            style="display: block; width: 80%; margin: auto; font-family:'Montserrat', sans-serif; text-transform:uppercase; color: #222222; background-color: #f4c23d; border-color: #f4c23d; font-size: 12px; font-weight: 700;">Logout</a>
                                    </div>
                                </div>
                                <div class="line-dec"></div>
                            </div>
                            <div id="left-info" class="col-md-4" style="background-color: #f5fafe;">
                                <br>
                                <div id="single-car">
                                    <img src="<?php echo base_url(); ?>../upload/<?php echo $gambar_bengkel;?>"
                                        width="100%" height="300" alt="" />
                                </div>
                                <div class="up-content clearfix">
                                    <h2><?=$nama_bengkel?></h2>
                                </div>
                                <div class="details">
                                    <div class="head-side-bar">
                                        <h4>Detail</h4>
                                    </div>
                                    <div class="list-info">
                                        <table class="table col-md-6">
                                            <tr>
                                                <td style="border-top:1px #333;color:#888;font-size:12px;">
                                                    <span>Alamat:</span></td>
                                                <td
                                                    style="border-top:1px #333;color:#336699;font-size: 12px;font-weight: bold;">
                                                    <?=$alamat_bengkel?></td>
                                            </tr>
                                            <tr>
                                                <td style="border-top:1px #333;color:#888;font-size:12px;">
                                                    <span>Telepon:</span></td>
                                                <td
                                                    style="border-top:1px #333;color:#336699;font-size: 12px;font-weight: bold;">
                                                    <?=$telepon_bengkel?></td>
                                            </tr>
                                            <tr>
                                                <td style="border-top:1px #333;color:#888;font-size:12px;"><span>Jam
                                                        Operasional:</span></td>
                                                <td
                                                    style="border-top:1px #333;color:#336699;font-size: 12px;font-weight: bold;">
                                                    <?=$jam_bengkel?>

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            <div id="single-car" class="col-md-8">

                                <iframe height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://www.openstreetmap.org/export/embed.html?bbox=106.57390594482423%2C-6.290984665095943%2C106.67604446411134%2C-6.233650615995721&amp;layer=mapnik&amp;marker=<?=$lat_bengkel.'%2C'.$long_bengkel?>"
                                    style="width:100%"></iframe><br /><small><a
                                        href="https://www.openstreetmap.org/?mlat=<?=$lat_bengkel?>&amp;mlon=<?=$long_bengkel?>#map=14/<?=$lat_bengkel?>/<?=$long_bengkel?>"
                                        target="_BLANK">View Larger Map</a></small>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="car-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    <div class="heading-section">
                                        <h2>Tambah Layanan dan Onderdil</h2>
                                        <div class="line-dec"></div>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="simple-button2">
                                            <a href="<?php echo base_url() . 'pengajuan_LO/tambah_layanan_view'; ?>">Tambah
                                                Layanan</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="simple-button2">
                                            <a href="<?php echo base_url() . 'pengajuan_LO/tambah_onderdil_view'; ?>">Tambah
                                                Onderdil</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php } ?>

                <?php $this->load->view('web/footer'); ?>

            </div>
        </div>

        <?php $this->load->view('web/main_menu_2'); ?>

    </div>
