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
                                <h1>Detail Bengkel</h1>
                                <span></span>
                                <div class="page-active">
                                    <ul>
                                        <li><a href="index.html">Beranda</a></li>
                                        <li><i class="fa fa-dot-circle-o"></i></li>
                                        <li><a href="#">Bengkel</a></li>
                                        <li><i class="fa fa-dot-circle-o"></i></li>
                                        <li><a href="#"><?=$nama_bengkel?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="car-details">
                    <div class="container">
                        <div class="row">
                            <div id="left-info" class="col-md-4" style="background-color: #f5fafe;">
                                <br>
                                <div id="single-car">
                                    <img src="<?=base_url()?>../upload/<?=$gambar_bengkel?>" width="100%" height="300" alt="" />
                                </div><br><br>
                                <div class="details">
                                    <div class="head-side-bar">
                                        <h4>Detail</h4>
                                    </div>
                                    <div class="list-info">
                                        <table class="table col-md-6">
                                            <tr>
                                                <td style="border-top:1px #333;color:#888;font-size:12px;"><span>Alamat:</span></td>
                                                <td style="border-top:1px #333;color:#336699;font-size: 12px;font-weight: bold;"><?=$alamat_bengkel?></td>
                                            </tr>
                                            <tr>
                                                <td style="border-top:1px #333;color:#888;font-size:12px;"><span>Telepon:</span></td>
                                                <td style="border-top:1px #333;color:#336699;font-size: 12px;font-weight: bold;"><?=$telepon_bengkel?></td>
                                            </tr>
                                            <tr>
                                                <td style="border-top:1px #333;color:#888;font-size:12px;"><span>Jam Operasional:</span></td>
                                                <td style="border-top:1px #333;color:#336699;font-size: 12px;font-weight: bold;"><?=$jam_bengkel?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-top:1px #333;color:#888;font-size:12px;"><span>Direction:</span></td>
                                                <td style="border-top:1px #333;color:#336699;font-size: 12px;font-weight: bold;">
                                                    <a href="<?=$direction?>" target="_BLANK">Google Maps</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div id="single-car" class="col-md-8">
                                <div class="up-content clearfix">
                                    <h2><?=$nama_bengkel?></h2>
                                </div>
                                <iframe height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=106.57390594482423%2C-6.290984665095943%2C106.67604446411134%2C-6.233650615995721&amp;layer=mapnik&amp;marker=<?=$lat_bengkel.'%2C'.$long_bengkel?>" style="width:100%"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=<?=$lat_bengkel?>&amp;mlon=<?=$long_bengkel?>#map=14/<?=$lat_bengkel?>/<?=$long_bengkel?>" target="_BLANK">View Larger Map</a></small>
                            </div>
                        </div>
                    </div>
                </section>

                <div style="background-color: #e2eff9;">
                    <section class="listing-grid">
                        <div class="container">
                            <div class="row">
                                <div id="listing-cars" class="col-md-12">
                                    <div class="pre-featured clearfix">
                                        <div class="info-text">
                                            <h4>Katalog Layanan & Onderdil - <?=$nama_bengkel?></h4>
                                        </div>
                                        <div class="right-content">
                                        <div class="input-select">
                                            <select name="mark" id="mark" onchange="location = this.value;">
                                                <option>Sorting by</option>
                                                <?php 
                                                    if($this->uri->segment(4) == 'terbaru'){
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/terbaru').'" selected>Terbaru</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/terbaru').'">Terbaru</option>';
                                                    }

                                                    if($this->uri->segment(4) == 'a-z'){
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/a-z').'" selected>A-Z</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/a-z').'">A-Z</option>';
                                                    }

                                                    if($this->uri->segment(4) == 'z-a'){
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/z-a').'" selected>Z-A</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/z-a').'">Z-A</option>';
                                                    }

                                                    if($this->uri->segment(4) == 'harga-terendah'){
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/harga-terendah').'" selected>Harga Terendah</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/harga-terendah').'">Harga Terendah</option>';
                                                    }

                                                    if($this->uri->segment(4) == 'harga-tertinggi'){
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/harga-tertinggi').'" selected>Harga Tertinggi</option>';
                                                    }else{
                                                        echo '<option value="'.base_url('bengkel/'.$id_bengkel.'/harga-tertinggi').'">Harga Tertinggi</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div id="featured-cars">
                                        <div class="row">
                                            <?php $plus=1;foreach ($query_katalog->result() as $row) { ?>
                                            <div class="featured-item col-md-3">
                                                <img src="<?=base_url()?>../upload/<?=$row->Gambar_Isi_Kategori?>"
                                                    alt="">
                                                <div class="down-content">
                                                    <a href="<?=base_url('katalog/detail/'.$row->ID_Kategori_Detail)?>">
                                                        <h2><?=$row->Isi_Kategori?></h2>
                                                    </a>
                                                    <span>Rp. <?=number_format($row->Harga_Kategori,0,'.','.')?></span>
                                                    <div class="light-line"></div>
                                                    <p><?=character_limiter($row->Isi_Deskripsi, 60,'...');?></p>
                                                </div>
                                            </div>
                                            <?php 
                                                if($plus==4){ echo '<div class="clearfix"></div>';$plus=1; }else{ $plus++; }
                                            } 
                                            if($query_katalog->num_rows()%4!=0){ echo '<div class="clearfix"></div>'; } 
                                            ?>
                                        </div>
                                    </div>
                                    <?=$show_pagination?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <?php $this->load->view('web/footer'); ?>

            </div>

        </div>

        <?php $this->load->view('web/main_menu_2'); ?>

    </div>

<?php $this->load->view('web/js'); ?>