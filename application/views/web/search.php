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
                                <h1>Cari Keyword '<?=$keyword?>': <?=$total_data_search?> Results</h1>
                                <span></span>
                                <div class="page-active">
                                    <ul>
                                        <li><a href="<?=base_url()?>">Beranda</a></li>
                                        <li><i class="fa fa-dot-circle-o"></i></li>
                                        <li><a href="#">Cari Katalog</a></li>
                                        <li><i class="fa fa-dot-circle-o"></i></li>
                                        <li><a href="#"><?=$keyword?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================= -->

                <section class="listing-grid">
                    <div class="container">
                        <div class="row">
                            
                            <?php $this->load->view('web/filter'); ?>

                            <div id="listing-cars" class="col-md-9">
                                <div class="pre-featured clearfix">
                                    <div class="info-text">
                                        <h4><?=$nama_kategori?></h4>
                                    </div>
                                    <div class="right-content">
                                        <div class="input-select">
                                            <select name="mark" id="mark" onchange="location = this.value;">
                                                <?php 
                                                    if($nama_kategori !== ''){
                                                        echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/default/'.$keyword).'">Sorting by</option>';

                                                        if($this->uri->segment(3) == 'terbaru'){
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/terbaru/'.$keyword).'" selected>Terbaru</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/terbaru/'.$keyword).'">Terbaru</option>';
                                                        }

                                                        if($this->uri->segment(3) == 'a-z'){
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/a-z/'.$keyword).'" selected>A-Z</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/a-z/'.$keyword).'">A-Z</option>';
                                                        }

                                                        if($this->uri->segment(3) == 'z-a'){
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/z-a/'.$keyword).'" selected>Z-A</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/z-a/'.$keyword).'">Z-A</option>';
                                                        }

                                                        if($this->uri->segment(3) == 'jarak-terdekat'){
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/jarak-terdekat/'.$keyword).'" selected>Jarak Terdekat</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/jarak-terdekat/'.$keyword).'">Jarak Terdekat</option>';
                                                        }

                                                        if($this->uri->segment(3) == 'harga-terendah'){
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/harga-terendah/'.$keyword).'" selected>Harga Terendah</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/harga-terendah/'.$keyword).'">Harga Terendah</option>';
                                                        }

                                                        if($this->uri->segment(3) == 'harga-tertinggi'){
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/harga-tertinggi/'.$keyword).'" selected>Harga Tertinggi</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/kategori/'.$slug_kategori.'/harga-tertinggi/'.$keyword).'">Harga Tertinggi</option>';
                                                        }
                                                    }else{
                                                        echo '<option value="'.base_url('search/default/'.$keyword).'">Sorting by</option>';

                                                        if($this->uri->segment(2) == 'terbaru'){
                                                            echo '<option value="'.base_url('search/terbaru/'.$keyword).'" selected>Terbaru</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/terbaru/'.$keyword).'">Terbaru</option>';
                                                        }

                                                        if($this->uri->segment(2) == 'a-z'){
                                                            echo '<option value="'.base_url('search/a-z/'.$keyword).'" selected>A-Z</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/a-z/'.$keyword).'">A-Z</option>';
                                                        }

                                                        if($this->uri->segment(2) == 'z-a'){
                                                            echo '<option value="'.base_url('search/z-a/'.$keyword).'" selected>Z-A</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/z-a/'.$keyword).'">Z-A</option>';
                                                        }

                                                        if($this->uri->segment(2) == 'jarak-terdekat'){
                                                            echo '<option value="'.base_url('search/jarak-terdekat/'.$keyword).'" selected>Jarak Terdekat</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/jarak-terdekat/'.$keyword).'">Jarak Terdekat</option>';
                                                        }

                                                        if($this->uri->segment(2) == 'harga-terendah'){
                                                            echo '<option value="'.base_url('search/harga-terendah/'.$keyword).'" selected>Harga Terendah</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/harga-terendah/'.$keyword).'">Harga Terendah</option>';
                                                        }

                                                        if($this->uri->segment(2) == 'harga-tertinggi'){
                                                            echo '<option value="'.base_url('search/harga-tertinggi/'.$keyword).'" selected>Harga Tertinggi</option>';
                                                        }else{
                                                            echo '<option value="'.base_url('search/harga-tertinggi/'.$keyword).'">Harga Tertinggi</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="featured-cars">
                                    <div class="row">
                                        <?php $no=1;foreach ($query_kategori->result() as $row) { ?>
                                        
                                        <div class="featured-item col-md-4">
                                            <?php
                                                if($row->Gambar_Isi_Kategori == ""){
                                                    echo '<img src="'.base_url().'assets/images/katalog/onderdil-standar/coba-katalog1.jpg" alt="" style="border:1px solid #eee">';
                                                }else{
                                                    echo '<img src="'.base_url().'../upload/'.$row->Gambar_Isi_Kategori.'" alt="" style="border:1px solid #eee">';
                                                }
                                            ?>
                                            
                                            <div class="down-content">
                                                <a href="<?=base_url('katalog/detail/'.$row->ID_Kategori_Detail)?>">
                                                    <h2><?=$row->Isi_Kategori?></h2>
                                                </a>
                                                <span>Rp. <?=number_format($row->Harga_Kategori,0,'.','.')?></span>
                                                <div class="light-line"></div>
                                                <p>
                                                    <small><b><?=$row->Nama_Alternatif?></b></small><br>
                                                    <?=character_limiter($row->Alamat_Alternatif, 60,'...');?>
                                                </p>
                                                <div class="car-info">
                                                    <ul>
                                                        <li><i class="icon-home" style="color: #f4c23d;"></i><a
                                                                href="<?=base_url('bengkel/'.$row->ID_Alternatif)?>">Kunjungi Bengkel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <?php if($no==3){ echo '<div class="clearfix"></div>';$no=1; }else{ $no++; } } ?>
                                    </div>
                                </div>

                                <?=$show_pagination?>




                                <?php /*<div class="pagination">
                                    
                                    <div class="prev">
                                        <a href="#"><i class="fa fa-arrow-left"></i>Prev</a>
                                    </div>
                                    <div class="page-numbers">
                                        <ul>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">...</a></li>
                                            <li><a href="#">14</a></li>
                                            <li class="active"><a href="#">15</a></li>
                                            <li><a href="#">16</a></li>
                                            <li><a href="#">...</a></li>
                                            <li><a href="#">47</a></li>
                                        </ul>
                                    </div>
                                    <div class="next">
                                        <a href="#">Next<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>*/ ?>
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