
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Bengkel</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kriteria Bengkel</h4>
                                <h6 class="card-subtitle">Merupakan<code> kriteria</code> suatu bengkel yang akan
                                    digunakan dalam perhitungan TOPSIS.</h6>
                                <a href="admin_tambah_kriteria.html"><button type="button"
                                        class="btn waves-effect waves-light btn-info"
                                        style="float: right; margin-bottom: 10px;"><i class="fas fa-plus"></i> Tambah
                                        Kriteria</button></a>
                                <!-- <p id="sa-warning"></p> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID Kriteria</th>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Pelayanan</td>
                                                <td>
                                                    <a href="admin_ubah_kriteria.html"><button type="button"
                                                            class="btn waves-effect waves-light btn-warning"
                                                            style="margin-right: 10px; margin-top: 5px; margin-bottom: 5px;"><i
                                                                class="fas fa-edit"></i>
                                                            &nbsp;Ubah</button></a>
                                                    <button onclick="konfirmasi()" type="button"
                                                        class="btn waves-effect waves-light btn-danger"
                                                        style="margin-top: 5px; margin-bottom: 5px;"><i
                                                            class="fas fa-trash"></i> Hapus</button>
                                                    <p id="pesan"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Kecepatan</td>
                                                <td>
                                                    <a href="admin_ubah_kriteria.html"><button type="button"
                                                            class="btn waves-effect waves-light btn-warning"
                                                            style="margin-right: 10px; margin-top: 5px; margin-bottom: 5px;"><i
                                                                class="fas fa-edit"></i>
                                                            &nbsp;Ubah</button></a>
                                                    <button onclick="konfirmasi()" type="button"
                                                        class="btn waves-effect waves-light btn-danger"
                                                        style="margin-top: 5px; margin-bottom: 5px;"><i
                                                            class="fas fa-trash"></i> Hapus</button>
                                                    <p id="pesan"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Kenyamanan Tempat</td>
                                                <td>
                                                    <a href="admin_ubah_kriteria.html"><button type="button"
                                                            class="btn waves-effect waves-light btn-warning"
                                                            style="margin-right: 10px; margin-top: 5px; margin-bottom: 5px;"><i
                                                                class="fas fa-edit"></i>
                                                            &nbsp;Ubah</button></a>
                                                    <button onclick="konfirmasi()" type="button"
                                                        class="btn waves-effect waves-light btn-danger"
                                                        style="margin-top: 5px; margin-bottom: 5px;"><i
                                                            class="fas fa-trash"></i> Hapus</button>
                                                    <p id="pesan"></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- scroll horizontal & vertical -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Alternatif Bengkel</h4>
                                <h6 class="card-subtitle">Merupakan <code> detail data bengkel</code> yang nantinya akan
                                    dihitung untuk mendapatkan hasil rekomendasi bengkel terbaik.
                                </h6>
                                <a href="admin_tambah_alternatif.html"><button type="button" class="btn waves-effect waves-light btn-info"
                                    style="float: right; margin-bottom: 10px;"><i class="fas fa-plus"></i> Tambah
                                    Alternatif</button></a>
                                <div class="table-responsive">
                                    <table id="scroll_ver_hor" class="table table-striped table-bordered display nowrap"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID Alternatif</th>
                                                <th>Nama Bengkel</th>
                                                <th>Jenis</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Jam Operasional</th>
                                                <th>Gambar 1</th>
                                                <th>Gambar 2</th>
                                                <th>Gambar 3</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Pelayanan</th>
                                                <th>Kecepatan</th>
                                                <th>Kenyamanan Tempat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>AeroSpeed Racing Gading Serpong</td>
                                                <td>Motorcycle parts store</td>
                                                <td>Ruko Bolsena Blok E No.33 Gading Serpong, Curug Sangereng, Kelapa
                                                    Dua, Tangerang, Banten 15810</td>
                                                <td>0816-1815-492</td>
                                                <td>Setiap Hari 10:00-20:00</td>
                                                <td> - </td>
                                                <td> - </td>
                                                <td> - </td>
                                                <td>-6.26299</td>
                                                <td>106.616</td>
                                                <td> 5 </td>
                                                <td> 5 </td>
                                                <td> 4 </td>
                                                <td>
                                                    <a href="admin_ubah_alternatif.html"><button type="button"
                                                            class="btn waves-effect waves-light btn-warning"
                                                            style="margin-right: 10px; margin-top: 5px; margin-bottom: 5px;"><i
                                                                class="fas fa-edit"></i>
                                                            &nbsp;Ubah</button></a>
                                                    <button onclick="konfirmasi()" type="button"
                                                        class="btn waves-effect waves-light btn-danger"
                                                        style="margin-top: 5px; margin-bottom: 5px;"><i
                                                            class="fas fa-trash"></i> Hapus</button>
                                                    <p id="pesan"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>AeroSpeed Racing Gading Serpong</td>
                                                <td>Motorcycle parts store</td>
                                                <td>Ruko Bolsena Blok E No.33 Gading Serpong, Curug Sangereng, Kelapa
                                                    Dua, Tangerang, Banten 15810</td>
                                                <td>0816-1815-492</td>
                                                <td>Setiap Hari 10:00-20:00</td>
                                                <td> - </td>
                                                <td> - </td>
                                                <td> - </td>
                                                <td>-6.26299</td>
                                                <td>106.616</td>
                                                <td> 5 </td>
                                                <td> 5 </td>
                                                <td> 4 </td>
                                                <td>
                                                    <a href="admin_ubah_alternatif.html"><button type="button"
                                                            class="btn waves-effect waves-light btn-warning"
                                                            style="margin-right: 10px; margin-top: 5px; margin-bottom: 5px;"><i
                                                                class="fas fa-edit"></i>
                                                            &nbsp;Ubah</button></a>
                                                    <button onclick="konfirmasi()" type="button"
                                                        class="btn waves-effect waves-light btn-danger"
                                                        style="margin-top: 5px; margin-bottom: 5px;"><i
                                                            class="fas fa-trash"></i> Hapus</button>
                                                    <p id="pesan"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>eroSpeed Racing Gading Serpong</td>
                                                <td>Motorcycle parts store</td>
                                                <td>Ruko Bolsena Blok E No.33 Gading Serpong, Curug Sangereng, Kelapa
                                                    Dua, Tangerang, Banten 15810</td>
                                                <td>0816-1815-492</td>
                                                <td>Setiap Hari 10:00-20:00</td>
                                                <td> - </td>
                                                <td> - </td>
                                                <td> - </td>
                                                <td>-6.26299</td>
                                                <td>106.616</td>
                                                <td> 5 </td>
                                                <td> 5 </td>
                                                <td> 4 </td>
                                                <td>
                                                    <a href="admin_ubah_alternatif.html"><button type="button"
                                                            class="btn waves-effect waves-light btn-warning"
                                                            style="margin-right: 10px; margin-top: 5px; margin-bottom: 5px;"><i
                                                                class="fas fa-edit"></i>
                                                            &nbsp;Ubah</button></a>
                                                    <button onclick="konfirmasi()" type="button"
                                                        class="btn waves-effect waves-light btn-danger"
                                                        style="margin-top: 5px; margin-bottom: 5px;"><i
                                                            class="fas fa-trash"></i> Hapus</button>
                                                    <p id="pesan"></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Alternatif</th>
                                                <th>Nama Bengkel</th>
                                                <th>Jenis</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Jam Operasional</th>
                                                <th>Gambar 1</th>
                                                <th>Gambar 2</th>
                                                <th>Gambar 3</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Pelayanan</th>
                                                <th>Kecepatan</th>
                                                <th>Kenyamanan Tempat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
</body>

</html>