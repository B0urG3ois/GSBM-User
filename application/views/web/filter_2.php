<div id="sidebar" class="col-md-3">
    <div class="sidebar-content">
        <div class="head-side-bar">
            <h4>Filter</h4>
        </div>
        <div class="search-form">
            <form method="get" action="<?=base_url()?>filter" name="filter">
            <?php if($this->uri->segment(3) == "layanan-darurat" || $this->uri->segment(3) == "layanan-rutin"){ ?>
            <div class="select" style="margin-bottom: 20px;">
                <select class="form-control" name="Nama_JL">
                    <option value="">Pilih Jenis Layanan</option>
                    <?php
                    $saringJL = $this->db->get('saring_jenis_layanan');
		            foreach ($saringJL->result() as $sJL) : ?>
                    <option value="<?php echo $sJL->ID_JL ?>"><?php echo $sJL->Nama_JL ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        	<?php }else if($this->uri->segment(3) != "layanan-darurat" || $this->uri->segment(3) != "layanan-rutin"){ ?>
            <div class="select" style="margin-bottom: 20px;">
                <select class="form-control" name="Nama_JO">
                    <option value="">Pilih Jenis Onderdil</option>
                    <?php
                    $saringJO = $this->db->get('saring_jenis_onderdil');
		            foreach ($saringJO->result() as $sJO) : ?>
                    <option value="<?php echo $sJO->ID_JO ?>"><?php echo $sJO->Nama_JO ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="select" style="margin-bottom: 20px;">
                <select class="form-control" name="Nama_MM">
                    <option value="">Pilih Merek Motor</orption>
                    <?php
                    $saringMM = $this->db->get('saring_merek_motor');
		            foreach ($saringMM->result() as $sMM) : ?>
                    <option value="<?php echo $sMM->ID_MM ?>"><?php echo $sMM->Nama_MM ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="select" style="margin-bottom: 20px;">
                 <select class="form-control" name="Nama_TM">
                    <option value="">Pilih Tipe Motor</option>
                    <?php
                    $saringTM = $this->db->get('saring_tipe_motor');
		            foreach ($saringTM->result() as $sTM) : ?>
                    <option value="<?php echo $sTM->ID_TM ?>"><?php echo $sTM->Nama_TM ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="select" style="margin-bottom: 20px;">
                <select class="form-control" name="Nama_MO">
                    <option value="">Pilih Merek Onderdil</option>
                    <?php
                    $saringMO = $this->db->get('saring_merek_onderdil');
		            foreach ($saringMO->result() as $sMO) : ?>
                    <option value="<?php echo $sMO->ID_MO ?>"><?php echo $sMO->Nama_MO ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        	<?php } ?>

            <div style="margin-bottom: 20px;">
            <h4 style="color: #f4c23d; text-align:center">Untuk memperoleh rekomendasi</h4>
                <?php if(!empty($_COOKIE['latitude'])){  ?>
                <a onclick="location.reload()"><i class="fa fa-refresh fa-1x"></i> Get Latitude and Longitude</a>
                <?php } ?>
                <input type="text" class="form-control" name="latitude" value="<?php if(!empty($_COOKIE['latitude'])){ echo $_COOKIE['latitude']; } ?>" required readonly>
                <input type="text" class="form-control" name="longitude" value="<?php if(!empty($_COOKIE['longitude'])){ echo $_COOKIE['longitude']; } ?>" required readonly>
            </div>

            <p style="font-size: 12px; color: #a7cdf2;">Pelayanan</p>
            <div style="padding-left: 30px;">
                <input type="radio" id="saring" name="pelayanan" value="5">
                <label for="pelayanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </label><br>
                <input type="radio" id="saring" name="pelayanan" value="4">
                <label for="pelayanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="pelayanan" value="3">
                <label for="pelayanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="pelayanan" value="2">
                <label for="pelayanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="pelayanan" value="1">
                <label for="pelayanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
            </div>
            <p style="font-size: 12px; color: #a7cdf2;">Kecepatan</p>
            <div style="padding-left: 30px;">
                <input type="radio" id="saring" name="kecepatan" value="5">
                <label for="kecepatan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </label><br>
                <input type="radio" id="saring" name="kecepatan" value="4">
                <label for="kecepatan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="kecepatan" value="3">
                <label for="kecepatan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="kecepatan" value="2">
                <label for="kecepatan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="kecepatan" value="1">
                <label for="kecepatan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
            </div>
            <p style="font-size: 12px; color: #a7cdf2;">Kenyamanan Tempat Tunggu</p>
            <div style="padding-left: 30px;">
                <input type="radio" id="saring" name="kenyamanan" value="5">
                <label for="kenyamanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </label><br>
                <input type="radio" id="saring" name="kenyamanan" value="4">
                <label for="kenyamanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="kenyamanan" value="3">
                <label for="kenyamanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="kenyamanan" value="2">
                <label for="kenyamanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="kenyamanan" value="1">
                <label for="kenyamanan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
            </div>
            <p style="font-size: 12px; color: #a7cdf2;">Harga</p>
            <div style="padding-left: 30px;">
                <input type="radio" id="saring" name="harga" value="5">
                <label for="harga"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </label><br>
                <input type="radio" id="saring" name="harga" value="4">
                <label for="harga"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="harga" value="3">
                <label for="harga"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="harga" value="2">
                <label for="harga"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
                <input type="radio" id="saring" name="harga" value="1">
                <label for="harga"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                    <span class="fa fa-star-o checked"></span>
                </label><br>
            </div>
            <p style="font-size: 12px; color: #a7cdf2;">Jarak</p>
            <div style="padding-left: 30px;">
                <input type="radio" id="saring" name="jarak" value="5">
                <label for="jarak"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span style="color: white; font-family: 'Roboto', sans-serif; font-size: 12px;">≤
                        1km</span>
                </label><br>
                <input type="radio" id="saring" name="jarak" value="4">
                <label for="jarak"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span style="color: white; font-family: 'Roboto', sans-serif; font-size: 12px;">>1km
                        - ≤
                        2km</span>
                </label><br>
                <input type="radio" id="saring" name="jarak" value="3">
                <label for="jarak"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span style="color: white; font-family: 'Roboto', sans-serif; font-size: 12px;">>2km
                        - ≤
                        3km</span>
                </label><br>
                <input type="radio" id="saring" name="jarak" value="2">
                <label for="jarak"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span style="color: white; font-family: 'Roboto', sans-serif; font-size: 12px;">>3km
                        - ≤
                        4km</span>
                </label><br>
                <input type="radio" id="saring" name="jarak" value="1">
                <label for="jarak"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span style="color: white; font-family: 'Roboto', sans-serif; font-size: 12px;">>
                        4km</span>
                </label><br><br><br>
            </div>
            <button type="submit" class="btn btn-success btn-md" style="width:100%;"> 
                Terapkan
                <i class="fa fa-search fa-lg"></i>
            </button>
            <div class="clearfix"></div>
            <div style="text-align: center; font-family: 'Roboto', sans-serif; font-size: 12px; padding: 8px;">
                <button type="reset" style="background:transparent;color:#f4c23d;border:0;">Hapus Semua</button>
            </div>
            </form>
        </div>
    </div>
</div>