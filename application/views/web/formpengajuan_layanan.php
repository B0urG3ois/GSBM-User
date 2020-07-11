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
                                        <li><a href="<?php echo base_url() . 'pengajuan_LO/tambah_layanan_view'; ?>">Formulir Pengajuan Layanan</a></li>
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
                                    <div class="contact-form">
                                        <div class="head-side-bar">
                                            <h4>Tambahan Layanan</h4>
                                        </div>
                                        <br>
                                        <?php 
                                        if (validation_errors()) {
                                        ?>
                                        <div class="alert alert-danger alert-dismissible" role="alert" style="color: black;">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <p style="color: black"><?php echo validation_errors(); ?></p>
                                        </div>
                                        <br>
                                        <?php } ?>
                                        <form method="post"
                                            action="<?php echo base_url() . 'pengajuan_LO/tambah_layanan'; ?>" enctype="multipart/form-data">
                                            <div>
                                                <p>Layanan yang anda ajukan akan otomatis masuk ke dalam
                                                    sistem GSBM. Apakah anda mengalami masalah? silahkan
                                                    hubungi
                                                    kami melalui email.</p>
                                                <hr />

                                                <div class="form-group">
                                                    <select id="ID_Kategori" name="ID_Kategori" class="form-control"
                                                        style="font-family: 'roboto', sans-serif; height: 40px; width: 100%; font-size: 12px; outline: none; border: 1px solid #e5f2ff; margin-bottom: 20px; padding-left: 12px; color: gray;">
                                                        <option disabled selected>Kategori Layanan</option>
                                                        <?php
                                                            $this->db->where('ID_Kategori BETWEEN 1 AND 2',NULL, FALSE);
                    										$kategori = $this->db->get('kategori');
		            										foreach ($kategori->result() as $ktg) : ?>
                                                            <option value="<?php echo $ktg->ID_Kategori ?>">
                                                                <?php echo $ktg->Nama_Kategori ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <select id="ID_JL" name="ID_JL" class="form-control"
                                                        style="font-family: 'roboto', sans-serif; height: 40px; width: 100%; font-size: 12px; outline: none; border: 1px solid #e5f2ff; margin-bottom: 20px; padding-left: 12px; color: gray;">
                                                        <option disabled selected>Jenis Layanan</option>
                                                        <?php
                    												$saring_jenis_layanan = $this->db->get('saring_jenis_layanan');
		            												foreach ($saring_jenis_layanan->result() as $sJL) : ?>
                                                        <option value="<?php echo $sJL->ID_JL ?>">
                                                            <?php echo $sJL->Nama_JL ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="Nama_Layanan" class="form-control"
                                                        placeholder="Nama Layanan    (tambal ban biasa, tambal ban tubles, isi angin, dll)"
                                                        value="">
                                                </div>

                                                <div class="form-group">
                                                    <textarea rows="4" cols="50" type="text" name="Deskripsi_Layanan" class="form-control"
                                                        placeholder="Deskripsi" value=""></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <input type="number" name="Harga_Layanan" class="form-control"
                                                        placeholder="Harga" value="">
                                                </div>

                                                <div class="row">
                                                    <input type="file" id="myFile1" name="myFile1">
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-info waves-effect waves-light"
                                                style="font-family:'Montserrat', sans-serif; text-transform:uppercase; color: #222222; background-color: #f4c23d; border-color: #f4c23d; font-size: 12px; font-weight: 700;">Tambah Layanan</button>

                                        </form>
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

    <!-- <script>
        function getUrlVars(param = null) {
            if (param !== null) {
                var vars = [],
                    hash;
                var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                for (var i = 0; i < hashes.length; i++) {
                    hash = hashes[i].split('=');
                    vars.push(hash[0]);
                    vars[hash[0]] = hash[1];
                }
                return vars[param];
            } else {
                return null;
            }
        }

        window.onload = document.getElementById("ID_Pengajuan");
        window.onload = document.getElementById("ID_Pengajuan2");
        var element_jam = document.getElementById("ID_Pengajuan");
        var element_jam2 = document.getElementById("ID_Pengajuan2");
        element_jam.value = getUrlVars('ID_Pengajuan');
        element_jam2.value = getUrlVars('ID_Pengajuan');
    </script> -->

    <!-- Chain Dropdown -->
    <script>
        $(document).ready(
            function () { // Ketika halaman sudah siap (sudah selesai di load)
                // Kita sembunyikan dulu untuk loadingnya
                // $("#loading").hide();

                $("#kategori").change(
                    function () { // Ketika user mengganti atau memilih data kategori
                        $("#saring_jenis_layanan")
                            .hide(); // Sembunyikan dulu combobox kota nya
                        //     $("#loading")
                        // .show(); // Tampilkan loadingnya

                        $.ajax({
                            type: "POST", // Method pengiriman data bisa dengan GET atau POST
                            url: "<?php echo base_url("
                            pengajuan_LO /
                            listJL "); ?>", // Isi dengan url/path file php yang dituju
                            data: {
                                ID_Kategori: $("#kategori")
                                    .val()
                            }, // data yang akan dikirim ke file yang dituju
                            dataType: "json",
                            beforeSend: function (e) {
                                if (e && e
                                    .overrideMimeType) {
                                    e.overrideMimeType(
                                        "application/json;charset=UTF-8"
                                    );
                                }
                            },
                            success: function (
                                response
                            ) { // Ketika proses pengiriman berhasil
                                $("#loading")
                                    .hide(); // Sembunyikan loadingnya

                                // set isi dari combobox kota
                                // lalu munculkan kembali combobox kotanya
                                $("#saring_jenis_layanan")
                                    .html(response
                                        .list_JL)
                                    .show();
                            },
                            error: function (xhr,
                                ajaxOptions, thrownError
                            ) { // Ketika ada error
                                alert(xhr.status +
                                    "\n" + xhr
                                    .responseText +
                                    "\n" +
                                    thrownError
                                ); // Munculkan alert error
                            }
                        });
                    });
            });
    </script>