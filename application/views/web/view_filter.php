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
                                        <li><a href="#"><?=$latitude?>, <?=$longitude?></a></li>
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
						    			for ($i=0;$i<count($matrix_all['ID_Alternatif']);$i++) {

							    			if($get_jl != "" && $get_jo != "" && $get_mm != "" && $get_tm != "" && $get_mo != ""){
							    				$kondisi = 1;
							    			}else if($get_jl != "" && $get_jo == "" && $get_mm == "" && $get_tm == "" && $get_mo == ""){
							    				$kondisi = 2;
							    			}else if($get_jl == "" && $get_jo != "" && $get_mm != "" && $get_tm != "" && $get_mo != ""){
							    				$kondisi = 3;
							    			}
							    		
							    			if($kondisi==1){
							    				$this->db->select('kategori_detail.Gambar_Isi_Kategori, kategori_detail.Harga_Kategori, kategori_detail.Isi_Kategori, kategori_detail.ID_Kategori_Detail');
							    				$this->db->from('kategori_detail');
							    				$this->db->where('kategori_detail.ID_JL',$get_jl);
							    				$this->db->where('kategori_detail.ID_JO',$get_jo);
							    				$this->db->where('saring_tipe_motor.ID_MM',$get_mm);
							    				$this->db->where('kategori_detail.ID_TM',$get_tm);
							    				$this->db->where('kategori_detail.ID_MO',$get_mo);
							    				$this->db->where('kategori_detail.ID_Alternatif',$matrix_all['ID_Alternatif'][$i]);
							    				$this->db->join('alternatif', 'alternatif.ID_Alternatif = kategori_detail.ID_Alternatif', 'left');
    											$this->db->join('saring_tipe_motor', 'saring_tipe_motor.ID_TM = kategori_detail.ID_TM', 'left');
							    				$query_filter = $this->db->get();

							    				$ke_filter++;
							    				foreach ($query_filter->result() as $row) {
							    		?>
						    			<div class="featured-item col-md-4">
						    				<?php //echo $matrix_all['ID_Alternatif'][$i].', '.$matrix_all['preferensi'][$i]; ?>
                                            <?php
                                                echo '<img src="'.base_url().'assets/images/katalog/'.$row->Gambar_Isi_Kategori.'" alt="" style="border:1px solid #eee">';
                                            ?>
                                            <div class="down-content">
                                                <a href="<?=base_url('katalog/detail/'.$row->ID_Kategori_Detail)?>">
                                                    <h2><?=$row->Isi_Kategori?></h2>
                                                </a>
                                                <span>Rp. <?=number_format($row->Harga_Kategori,0,'.','.')?></span>
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
							    				if($no==3){ echo '<div class="clearfix"></div>';$no=1; }else{ $no++; }
							    				}
							    			}else if($kondisi==2){
							    				$this->db->select('kategori_detail.Gambar_Isi_Kategori, kategori_detail.Harga_Kategori, kategori_detail.Isi_Kategori, kategori_detail.ID_Kategori_Detail');
							    				$this->db->from('kategori_detail');
							    				$this->db->where('kategori_detail.ID_JL',$get_jl);
							    				$this->db->where('kategori_detail.ID_Alternatif',$matrix_all['ID_Alternatif'][$i]);
							    				$this->db->join('alternatif', 'alternatif.ID_Alternatif = kategori_detail.ID_Alternatif', 'left');
							    				$query_filter = $this->db->get();

							    				$ke_filter++;
							    				foreach ($query_filter->result() as $row) { 
							    		?>
							    		<div class="featured-item col-md-4">
							    			<?php //echo $matrix_all['ID_Alternatif'][$i].', '.$matrix_all['preferensi'][$i]; ?>
                                            <?php
                                                echo '<img src="'.base_url().'assets/images/katalog/'.$row->Gambar_Isi_Kategori.'" alt="" style="border:1px solid #eee">';
                                            ?>
                                            <div class="down-content">
                                                <a href="<?=base_url('katalog/detail/'.$row->ID_Kategori_Detail)?>">
                                                    <h2><?=$row->Isi_Kategori?></h2>
                                                </a>
                                                <span>Rp. <?=number_format($row->Harga_Kategori,0,'.','.')?></span>
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
							    				if($no==3){ echo '<div class="clearfix"></div>';$no=1; }else{ $no++; }
							    				}
							    			}else if($kondisi==3){
							    				$this->db->select('kategori_detail.Gambar_Isi_Kategori, kategori_detail.Harga_Kategori, kategori_detail.Isi_Kategori, kategori_detail.ID_Kategori_Detail');
							    				$this->db->from('kategori_detail');
							    				$this->db->where('kategori_detail.ID_JO',$get_jo);
							    				$this->db->where('saring_tipe_motor.ID_MM',$get_mm);
							    				$this->db->where('kategori_detail.ID_TM',$get_tm);
							    				$this->db->where('kategori_detail.ID_MO',$get_mo);
							    				$this->db->where('kategori_detail.ID_Alternatif',$matrix_all['ID_Alternatif'][$i]);
							    				$this->db->join('alternatif', 'alternatif.ID_Alternatif = kategori_detail.ID_Alternatif', 'left');
    											$this->db->join('saring_tipe_motor', 'saring_tipe_motor.ID_TM = kategori_detail.ID_TM', 'left');
							    				$query_filter = $this->db->get();

							    				$ke_filter++;
							    				foreach ($query_filter->result() as $row) {
							    		?>
							    		<div class="featured-item col-md-4">
							    			<?php //echo $matrix_all['ID_Alternatif'][$i].', '.$matrix_all['preferensi'][$i]; ?>
                                            <?php
                                                echo '<img src="'.base_url().'assets/images/katalog/'.$row->Gambar_Isi_Kategori.'" alt="" style="border:1px solid #eee">';
                                            ?>
                                            <div class="down-content">
                                                <a href="<?=base_url('katalog/detail/'.$row->ID_Kategori_Detail)?>">
                                                    <h2><?=$row->Isi_Kategori?></h2>
                                                </a>
                                                <span>Rp. <?=number_format($row->Harga_Kategori,0,'.','.')?></span>
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
							    				if($no==3){ echo '<div class="clearfix"></div>';$no=1; }else{ $no++; }
							    				}
							    			}
							    		} 
							    		?>

                                        
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