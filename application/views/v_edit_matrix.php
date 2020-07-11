<!-- proses 29 (bengkel.php)-->

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper"> 
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
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
		<!-- Row -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Ubah Bobot Bengkel Pada Setiap Kriteria</h4>
						<h6 class="card-subtitle">Silahkan ubah <code>bobot bengkel pada setiap kriteria</code> sesuai dengan yang
							Anda inginkan.</h6>
					</div>
					<hr class="m-t-0">
					<section class="content">
						<!-- dari variabel ['bengkel'] di controller -->
						<!-- controller/method -->
						<form action="<?php echo base_url().'bengkel/update_matrix'; ?>" method="post"
							class="form-horizontal r-separator" id="test">
							<div class="card-body bg-light">
								<h4 class="card-title m-t-10 p-b-20">Informasi</h4>
								<div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">ID Alternatif</label>
									<div class="col-9 border-left p-b-10 p-t-10">
										<input type="text" name="ID_Alternatif" readonly class="form-control"
											value="<?php echo $id_alter; ?>">
									</div>
                                </div>
                                <div class="form-group row align-items-center m-b-0">
									<label class="col-3 text-right control-label col-form-label">Nama Alternatif</label>
									<div class="col-9 border-left p-b-10 p-t-10">
                                        <?php
                                            $this->db->select('*');
                                            $this->db->from('alternatif');
                                            $this->db->where("ID_Alternatif", $id_alter);
                                            $query = $this->db->get();
                                            foreach ($query->result() as $alter) : ?>
                                                <input type="text" name="Nama_Alternatif" class="form-control" value="<?php echo $alter->Nama_Alternatif ?>" readonly>
                                            <?php endforeach; 
                                        ?>
									</div>
                                </div>

								<?php 
								$kriteria_kata_depan = array();
								$kriteria = array();

								$query = $this->db->get('kriteria')->result_array();
								foreach($query as $krt) {
									$kriteria[] = $krt;
									$myvalue = $krt['Nama_Kriteria'];
									$arr = explode(' ',trim($myvalue));
									$kriteria_bobot = 'Bobot_';
									$kriteria_bobot .= $arr[0];
									$kriteria_kata_depan[] = $kriteria_bobot;
								}
								
								$bobot = array();
                                foreach($alternatif as $alt) {
									$bobot[] = $alt['Data_Point'];
								} 

								$len_kriteria = count($kriteria_kata_depan);

								for ($i=0; $i < $len_kriteria; $i++) {
								?>
									<div class="form-group row align-items-center m-b-0">
                                    <label class="col-3 text-right control-label col-form-label"><?php echo $kriteria[$i]['Nama_Kriteria'] ?></label>
                                    <div class="col-9 border-left p-b-10 p-t-10">
                                        <select id="<?php echo $kriteria_kata_depan[$i] ?>" name="<?php echo $kriteria_kata_depan[$i] ?>" class="form-control">
                                            <?php
                                                if ($bobot[$i] == 5) {
                                                    echo '<option value="'.$bobot[$i].'" selected>Sangat Baik (5)</option>';
                                                    echo '<option value="4">Baik (4)</option>
                                                            <option value="3">Cukup Baik (3)</option>
                                                            <option value="2">Buruk (2)</option>
                                                            <option value="1">Sangat Buruk (1)</option>';
                                                } elseif ($bobot[$i] == 4) {
                                                    echo '<option value="'.$bobot[$i].'" selected>Baik (4)</option>';
                                                    echo '<option value="5">Sangat Baik (5)</option>
                                                            <option value="3">Cukup Baik (3)</option>
                                                            <option value="2">Buruk (2)</option>
                                                            <option value="1">Sangat Buruk (1)</option>';
                                                } elseif ($bobot[$i] == 3) {
                                                    echo '<option value="'.$bobot[$i].'" selected>Cukup Baik (3)</option>';
                                                    echo '<option value="5">Sangat Baik (5)</option>
                                                            <option value="4">Baik (4)</option>
                                                            <option value="2">Buruk (2)</option>
                                                            <option value="1">Sangat Buruk (1)</option>';
                                                } elseif ($bobot[$i] == 2) {
                                                    echo '<option value="'.$bobot[$i].'" selected>Buruk (2)</option>';
                                                    echo '<option value="5">Sangat Baik (5)</option>
                                                            <option value="4">Baik (4)</option>
                                                            <option value="3">Cukup Baik (3)</option>
                                                            <option value="1">Sangat Buruk (1)</option>';
                                                } elseif ($bobot[$i] == 1) {
                                                    echo '<option value="'.$bobot[$i].'" selected>Sangat Buruk (1)</option>';
                                                    echo '<option value="5">Sangat Baik (5)</option>
                                                            <option value="4">Baik (4)</option>
                                                            <option value="3">Cukup Baik (3)</option>
                                                            <option value="2">Buruk (2)</option>';
                                                } else {
													echo '<option value="5">Sangat Baik (5)</option>
                                                            <option value="4">Baik (4)</option>
                                                            <option value="3">Cukup Baik (3)</option>
                                                            <option value="2">Buruk (2)</option>
                                                            <option value="1">Sangat Buruk (1)</option>';
												}
                                                    
                                                ?>
                                        </select>
                                    </div>
                                </div>
								<?php
								}
								?>

                                
							</div>
							<div class="card-body">
								<div class="form-group m-b-0 text-right">
									<button type="reset" class="btn btn-danger">Reset</button>
									<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
								</div>
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
		<!-- End Row -->
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

	<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script>
		$('#test').on('submit', function(){
			var arr = $(this).serializeArray();
			console.log(arr);
			return false; //      /<-- Only, if you don't want the form to be submitted after above commands
		});
	</script> -->
	</body>

	</html>
