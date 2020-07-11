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
                                <h1>Filter Katalog</h1>
                                <span></span>
                                <div class="page-active">
                                    <ul>
                                        <li><a href="<?=base_url()?>">Beranda</a></li>
                                        <li><i class="fa fa-dot-circle-o"></i></li>
                                        <li><a href="#">Filter Katalog</a></li>
                                        <li><i class="fa fa-dot-circle-o"></i></li>
                                        <li><a href="#"><?=$_COOKIE['latitude']?>, <?=$_COOKIE['longitude']?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div id="map" style="width:100%;height:400px"></div> -->
				<!-- <p><?=$_COOKIE['latitude']?></p>
				<p><?=$_COOKIE['longitude']?></p> -->

                <!-- ========================================= -->

                <section class="listing-grid">
                    <div class="container">
                        <div class="row">
                            
                            <?php $this->load->view('web/filter'); ?>

                            <div id="listing-cars" class="col-md-9">
                                <div class="pre-featured clearfix">
                                    <div class="info-text">
                                        <h4>Filter Katalog</h4>
                                    </div>
                                    <div class="right-content">
                                        <div class="input-select">
                                            <select name="mark" id="mark" onchange="location = this.value;">
                                                <option value="-1">Sorting by</option>
                                                <?php 
                                                    if($this->uri->segment(3) == 'terbaru'){
                                                        echo '<option value="'.base_url('katalog/all/terbaru').'" selected>Terbaru</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('katalog/all/terbaru').'">Terbaru</option>';
                                                    }

                                                    if($this->uri->segment(3) == 'a-z'){
                                                        echo '<option value="'.base_url('katalog/all/a-z').'" selected>A-Z</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('katalog/all/a-z').'">A-Z</option>';
                                                    }

                                                    if($this->uri->segment(3) == 'z-a'){
                                                        echo '<option value="'.base_url('katalog/all/z-a').'" selected>Z-A</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('katalog/all/z-a').'">Z-A</option>';
                                                    }

                                                    if($this->uri->segment(3) == 'jarak-terdekat'){
                                                        echo '<option value="'.base_url('katalog/all/kategori/'.$slug_kategori.'/jarak-terdekat').'" selected>Jarak Terdekat</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('katalog/all/kategori/'.$slug_kategori.'/jarak-terdekat').'">Jarak Terdekat</option>';
                                                    }

                                                    if($this->uri->segment(3) == 'harga-terendah'){
                                                        echo '<option value="'.base_url('katalog/all/harga-terendah').'" selected>Harga Terendah</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('katalog/all/harga-terendah').'">Harga Terendah</option>';
                                                    }

                                                    if($this->uri->segment(3) == 'harga-tertinggi'){
                                                        echo '<option value="'.base_url('katalog/all/harga-tertinggi').'" selected>Harga Tertinggi</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('katalog/all/harga-tertinggi').'">Harga Tertinggi</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="featured-cars">
                                    <div class="row">
                                        <?php 
                                        $no=1;
                                        $matrix_all = $this->session->userdata('matrix_all');

                                        $get_jl = $this->input->get('Nama_JL');
                                        $get_jo = $this->input->get('Nama_JO');
                                        $get_mm = $this->input->get('Nama_MM');
                                        $get_tm = $this->input->get('Nama_TM');
                                        $get_mo = $this->input->get('Nama_MO');

                                        $ke_filter=0;
						    			for ($i=0;$i<count($matrix_all['ID_Kategori_Detail']);$i++) {

							    			if($get_jl != "" && $get_jo != "" && $get_mm != "" && $get_tm != "" && $get_mo != ""){
							    				$kondisi = 1;
							    			}else if($get_jl != "" && $get_jo == "" && $get_mm == "" && $get_tm == "" && $get_mo == ""){
							    				$kondisi = 2;
							    			}else if($get_jl == "" && $get_jo != "" && $get_mm != "" && $get_tm != "" && $get_mo != ""){
							    				$kondisi = 3;
							    			}
							    		
							    			if($kondisi==1 && ($matrix_all['ID_JL'][$i] == $get_jl && $matrix_all['ID_JO'][$i] == $get_jo && $matrix_all['ID_MM'][$i] == $get_mm && $matrix_all['ID_TM'][$i] == $get_tm && $matrix_all['ID_MO'][$i] == $get_mo)){
							    				$ke_filter++;
							    		?>
						    			<div class="featured-item col-md-4">
                                            <?php
                                                echo '<img src="'.base_url().'assets/images/katalog/'.$matrix_all['Gambar_Isi_Kategori'][$i].'" alt="" style="border:1px solid #eee">';
                                            ?>
                                            <div class="down-content">
                                                <a href="<?=base_url('katalog/detail/'.$matrix_all['ID_Kategori_Detail'][$i])?>">
                                                    <h2><?=$matrix_all['Isi_Kategori'][$i]?></h2>
                                                </a>
                                                <span>Rp. <?=number_format($matrix_all['Harga_Kategori'][$i],0,'.','.')?></span>
                                                <div class="light-line"></div>
                                                <p>
                                                	<small><b><?=$matrix_all['Nama_Alternatif'][$i]?></b></small><br>
                                                	<?=character_limiter($matrix_all['Alamat_Alternatif'][$i], 60,'...');?>
                                                </p>
                                                <div class="car-info">
                                                    <ul>
                                                        <li><i class="icon-home" style="color: #f4c23d;"></i><a
                                                                href="<?=base_url('bengkel/'.$matrix_all['ID_Alternatif'][$i])?>">Kunjungi Bengkel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
							    		<?php
							    			}else if($kondisi==2 && $matrix_all['ID_JL'][$i] == $get_jl){
							    				$ke_filter++;
							    		?>
							    		<div class="featured-item col-md-4">
                                            <?php
                                                echo '<img src="'.base_url().'assets/images/katalog/'.$matrix_all['Gambar_Isi_Kategori'][$i].'" alt="" style="border:1px solid #eee">';
                                            ?>
                                            <div class="down-content">
                                                <a href="<?=base_url('katalog/detail/'.$matrix_all['ID_Kategori_Detail'][$i])?>">
                                                    <h2><?=$matrix_all['Isi_Kategori'][$i]?></h2>
                                                </a>
                                                <span>Rp. <?=number_format($matrix_all['Harga_Kategori'][$i],0,'.','.')?></span>
                                                <div class="light-line"></div>
                                                <p>
                                                	<small><b><?=$matrix_all['Nama_Alternatif'][$i]?></b></small><br>
                                                	<?=character_limiter($matrix_all['Alamat_Alternatif'][$i], 60,'...');?>
                                                </p>
                                                <div class="car-info">
                                                    <ul>
                                                        <li><i class="icon-home" style="color: #f4c23d;"></i><a
                                                                href="<?=base_url('bengkel/'.$matrix_all['ID_Alternatif'][$i])?>">Kunjungi Bengkel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
							    		<?php 
							    			}else if($kondisi==3 && ($matrix_all['ID_JO'][$i] == $get_jo && $matrix_all['ID_MM'][$i] == $get_mm && $matrix_all['ID_TM'][$i] == $get_tm && $matrix_all['ID_MO'][$i] == $get_mo)){
							    				$ke_filter++;
							    		?>
							    		<div class="featured-item col-md-4">
                                            <?php
                                                echo '<img src="'.base_url().'assets/images/katalog/'.$matrix_all['Gambar_Isi_Kategori'][$i].'" alt="" style="border:1px solid #eee">';
                                            ?>
                                            <div class="down-content">
                                                <a href="<?=base_url('katalog/detail/'.$matrix_all['ID_Kategori_Detail'][$i])?>">
                                                    <h2><?=$matrix_all['Isi_Kategori'][$i]?></h2>
                                                </a>
                                                <span>Rp. <?=number_format($matrix_all['Harga_Kategori'][$i],0,'.','.')?></span>
                                                <div class="light-line"></div>
                                                <p>
                                                	<small><b><?=$matrix_all['Nama_Alternatif'][$i]?></b></small><br>
                                                	<?=character_limiter($matrix_all['Alamat_Alternatif'][$i], 60,'...');?>
                                                </p>
                                                <div class="car-info">
                                                    <ul>
                                                        <li><i class="icon-home" style="color: #f4c23d;"></i><a
                                                                href="<?=base_url('bengkel/'.$matrix_all['ID_Alternatif'][$i])?>">Kunjungi Bengkel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
							    		<?php 
							    			}
							    		?>
										
                                        <?php if($no==3){ echo '<div class="clearfix"></div>';$no=1; }else{ $no++; } } ?>

                                        
                                    </div>
                                </div>

                                <?php //echo $show_pagination; ?>

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