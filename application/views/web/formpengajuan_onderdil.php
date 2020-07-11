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
                                        <li><a href="<?php echo base_url() . 'pengajuan_LO/tambah_onderdil_view'; ?>">Formulir Pengajuan Onderdil</a></li>
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
                                            <h4>Tambahan Onderdil</h4>
                                        </div>
                                        <br>
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
                                        
                                        <form method="post"
                                            action="<?php echo base_url() . 'pengajuan_LO/tambah_onderdil'; ?>" enctype="multipart/form-data">
                                            <div>
                                                <p>Onderdil yang anda ajukan akan otomatis masuk ke dalam
                                                    sistem GSBM. Apakah anda mengalami masalah? silahkan
                                                    hubungi
                                                    kami melalui email.</p>
                                                <hr />

                                                <div class="form-group">
                                                    <select id="ID_Kategori" name="ID_Kategori" class="form-control"
                                                        style="font-family: 'roboto', sans-serif; height: 40px; width: 100%; font-size: 12px; outline: none; border: 1px solid #e5f2ff; margin-bottom: 20px; padding-left: 12px; color: gray;">
                                                        <option disabled selected>Kategori Onderdil</option>
                                                        <?php
                                                            $this->db->where('ID_Kategori NOT BETWEEN 1 AND 2',NULL, FALSE);
                    										$kategori = $this->db->get('kategori');
		            										foreach ($kategori->result() as $ktg) : ?>
                                                        <option value="<?php echo $ktg->ID_Kategori ?>"> <?php echo $ktg->Nama_Kategori ?> </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group" >
                                                    <select id="ID_JO" name="ID_JO" class="form-control"
                                                        style="font-family: 'roboto', sans-serif; height: 40px; width: 100%; font-size: 12px; outline: none; border: 1px solid #e5f2ff; margin-bottom: 20px; padding-left: 12px; color: gray;">
                                                        <option disabled selected>Jenis Onderdil</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="Nama_Onderdil" class="form-control"
                                                        placeholder="Nama Onderdil    (Busi 071ZA Super Iridium / Electrode 90C TDR, dll)"
                                                        value="">
                                                </div>
                                                <hr>

                                                <div class="form-group">
                                                    <select id="ID_MM" name="ID_MM" class="form-control"
                                                        style="font-family: 'roboto', sans-serif; height: 40px; width: 100%; font-size: 12px; outline: none; border: 1px solid #e5f2ff; margin-bottom: 20px; padding-left: 12px; color: gray;">
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

                                                <div class="form-group">
                                                    <select id="ID_TM" name="ID_TM" class="form-control"
                                                        style="font-family: 'roboto', sans-serif; height: 40px; width: 100%; font-size: 12px; outline: none; border: 1px solid #e5f2ff; margin-bottom: 20px; padding-left: 12px; color: gray;">
                                                        <option disabled selected>Tipe Motor</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <select id="ID_MO" name="ID_MO" class="form-control"
                                                        style="font-family: 'roboto', sans-serif; height: 40px; width: 100%; font-size: 12px; outline: none; border: 1px solid #e5f2ff; margin-bottom: 20px; padding-left: 12px; color: gray;">
                                                        <option value="-1">Merek Onderdil</option>
                                                        <?php
                    												$saring_merek_onderdil = $this->db->get('saring_merek_onderdil');
		            												foreach ($saring_merek_onderdil->result() as $sMO) : ?>
                                                        <option value="<?php echo $sMO->ID_MO ?>">
                                                            <?php echo $sMO->Nama_MO ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <textarea rows="4" cols="50" type="text" name="Deskripsi_Onderdil" class="form-control"
                                                        placeholder="Deskripsi" value=""></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="Harga_Onderdil" class="form-control"
                                                        placeholder="Harga" value="">
                                                </div>

                                                <div class="row">
                                                    <input type="file" id="myFile1" name="myFile1">
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-info waves-effect waves-light"
                                                style="font-family:'Montserrat', sans-serif; text-transform:uppercase; color: #222222; background-color: #f4c23d; border-color: #f4c23d; font-size: 12px; font-weight: 700;">Tambah
                                                Onderdil </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div id="test"></div>

                <?php $this->load->view('web/footer'); ?>

            </div>
        </div>

        <?php $this->load->view('web/main_menu_2'); ?>

    </div>

    <script>
        $(function () {
            $("#ID_Kategori").change(function () {
                var selectedText = $(this).find("option:selected").text();
                var selectedValue = $(this).val();
                console.log(selectedValue);

                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() . 'pengajuan_LO/get_id_kategori'; ?>',
                    data: "ID_Kategori=" + selectedValue,
                    cache: false,
                    success: function(msg){
                        $("#ID_JO").html(msg);
                    }
                });
            });

            $("#ID_MM").change(function () {
                var selectedText = $(this).find("option:selected").text();
                var selectedValue = $(this).val();
                console.log(selectedValue);

                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() . 'pengajuan_LO/get_id_mm'; ?>',
                    data: "ID_MM=" + selectedValue,
                    cache: false,
                    success: function(msg){
                        $("#ID_TM").html(msg);
                    }
                });
            });
        });
    </script>