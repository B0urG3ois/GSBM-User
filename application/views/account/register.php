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
                            <div class="col-md-3"></div>
                            <div id="left-info" class="col-md-6">
                                <div class="enquiry">
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


                                    <div class="head-side-bar">
                                        <h4>Register</h4>
                                    </div>
                                    <div class="contact-form">
                                        <div class="contact-form">
                                            <form id="contact_form"
                                                action="<?php echo base_url() . 'pengajuan/regis_user'; ?>"
                                                method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input type="text" name="Regis_Nama" class="form-control"
                                                        placeholder="Nama Lengkap">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="Regis_HP" class="form-control"
                                                        placeholder="Nomor HP">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="Regis_Email" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="Regis_Password" class="form-control"
                                                        placeholder="Password">
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info waves-effect waves-light"
                                                        style="display: block; margin: auto; width: 100%; font-family:'Montserrat', sans-serif; text-transform:uppercase; color: #222222; background-color: #f4c23d; border-color: #f4c23d; font-size: 12px; font-weight: 700;">Daftar</button>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <p style="color: black; text-align: center;">Sudah punya akun?<a
                                                            href="<?php echo base_url() . 'pengajuan/login_view'; ?>">
                                                            Login</a></p>
                                                </div>
                                                <br>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
            </div>
            </section>

            <?php $this->load->view('web/footer'); ?>

        </div>
    </div>

    <?php $this->load->view('web/main_menu_2'); ?>

    </div>