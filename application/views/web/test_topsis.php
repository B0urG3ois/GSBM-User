    
    <?php 
        echo $this->input->get('latitude');
        echo ", ";
        echo $this->input->get('longitude');
    ?>
    
    <table border="1">
        <thead> 
            <tr>
                <th>Nama Bengkel</th>
                <th>ID Alternatif</th>
                <?php
                $sql_kriteria = $this->db->get('kriteria');
                foreach ($sql_kriteria->result() as $row) {
                    echo "<th>".$row->Nama_Kriteria."</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $matrix = $this->session->userdata('matrix');
                $alter = array();
                $sql_alter = $this->db->get('alternatif');
                foreach ($sql_alter->result() as $row) {
                    //nampung nama bengkel
                    $alter[] = $row->Nama_Alternatif; 
                }
                // matrix 2 dimanesi - ada row & col, untuk nyimpen nilai2nya, supaya dinamis, supaya kriteria tambahannya bs nampil, jd g manual
                //ngitung jumlah dr database Kriteria, row nya ada brp sih -> $rows
                $rows = count($matrix['1']);
                // $cols = $this->db->count_all('kriteria');
                for ($row = 0; $row < $rows; $row++) {
                    echo "<tr>";
                    //th = supaya di kiri
                    //alter row = dilooping
                    echo "<td>".$alter[$row]."</td>";
                    echo "<td>".$matrix['ID_Alternatif'][$row]."</td>";
                    echo "<td>".$matrix['1'][$row]."</td>";
                    echo "<td>".$matrix['2'][$row]."</td>";
                    echo "<td>".$matrix['3'][$row]."</td>";
                    echo "<td>".$matrix['4'][$row]."</td>";
                    // echo "<td>".$matrix[$row][$col]."</td>";

                    // for ($col = 0; $col < $cols; $col++) {
                    //     echo "<td>".$matrix[$row][$col]."</td>";
                    // }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <table border="1">
        <thead>
            <tr>
                <th>ID Alternatif</th>
                <th>Jarak</th>
                <th>Bobot</th>
                <th>Nama Alternatif</th>
                <th>Alamat Alternatif</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $matrix_bobot_jarak = $this->session->userdata('matrix_bobot_jarak');
                // print_r($matrix_bobot_jarak['distance']);
                for ($i=0;$i<count($matrix_bobot_jarak['distance']);$i++) {
            ?>
            <tr>
                <td><?=$matrix_bobot_jarak['ID_Alternatif'][$i]?></td>
                <td><?=$matrix_bobot_jarak['distance'][$i]?></td>
                <td><?=$matrix_bobot_jarak['bobot_jarak'][$i]?></td>
                <td><?=$matrix_bobot_jarak['Nama_Alternatif'][$i]?></td>
                <td><?=$matrix_bobot_jarak['Alamat_Alternatif'][$i]?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div>&nbsp;</div>


    <div>SETELAH DIGABUNG</div>
    <?php 
        $array_merge = array();

    ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Alternatif</th>
                <th>Nama Alternatif</th>
                <th>Alamat Alternatif</th>
                <th>Distance</th>

                <th>Bobot Pelayanan</th>
                <th>Bobot Kecepatan</th>
                <th>Bobot Kenyamanan</th>
                <th>Bobot Harga</th>
                <th>Bobot Jarak</th>

                <th>Bobot KT Pelayanan</th>
                <th>Bobot KT Kecepatan</th>
                <th>Bobot KT Kenyamanan</th>
                <th>Bobot KT Harga</th>
                <th>Bobot KT Jarak</th>

                <th>Bobot TT Pelayanan</th>
                <th>Bobot TT Kecepatan</th>
                <th>Bobot TT Kenyamanan</th>
                <th>Bobot TT Harga</th>
                <th>Bobot TT Jarak</th>


                <th>D+</th>
                <th>D-</th>    

                <th>RANKING</th>            
            </tr>
        </thead>
        <tbody>
            <?php 
                $no=1;
                $matrix_all = $this->session->userdata('matrix_all');
                for ($i=0;$i<count($matrix_all['ID_Alternatif']);$i++) {
            ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$matrix_all['ID_Alternatif'][$i]?></td>
                <td><?=$matrix_all['Nama_Alternatif'][$i]?></td>
                <td><?=$matrix_all['Alamat_Alternatif'][$i]?></td>
                <td><?=$matrix_all['distance'][$i]?></td>
                
                <td><?=$matrix_all['bobot_pelayanan'][$i]?></td>
                <td><?=$matrix_all['bobot_kecepatan'][$i]?></td>
                <td><?=$matrix_all['bobot_kenyamanan'][$i]?></td>
                <td><?=$matrix_all['bobot_harga'][$i]?></td>
                <td><?=$matrix_all['bobot_jarak'][$i]?></td>

                <td><?=$matrix_all['kt_pelayanan'][$i]?></td>
                <td><?=$matrix_all['kt_kecepatan'][$i]?></td>
                <td><?=$matrix_all['kt_kenyamanan'][$i]?></td>
                <td><?=$matrix_all['kt_harga'][$i]?></td>
                <td><?=$matrix_all['kt_jarak'][$i]?></td>

                <td><?=$matrix_all['tt_pelayanan'][$i]?></td>
                <td><?=$matrix_all['tt_kecepatan'][$i]?></td>
                <td><?=$matrix_all['tt_kenyamanan'][$i]?></td>
                <td><?=$matrix_all['tt_harga'][$i]?></td>
                <td><?=$matrix_all['tt_jarak'][$i]?></td>

                <td><?=$matrix_all['dplus'][$i]?></td>
                <td><?=$matrix_all['dmin'][$i]?></td>

                <td><?=$matrix_all['preferensi'][$i]?></td>
            </tr>
            <?php } ?>
            <tr>
                <th colspan="15">MAX</th>
                <td><?php echo $this->session->userdata('max_1') ?></td>
                <td><?php echo $this->session->userdata('max_2') ?></td>
                <td><?php echo $this->session->userdata('max_3') ?></td>
                <td><?php echo $this->session->userdata('max_4') ?></td>
                <td><?php echo $this->session->userdata('max_5') ?></td>
            </tr>
            <tr>
                <th colspan="15">MIN</th>
                <td><?php echo $this->session->userdata('min_1') ?></td>
                <td><?php echo $this->session->userdata('min_2') ?></td>
                <td><?php echo $this->session->userdata('min_3') ?></td>
                <td><?php echo $this->session->userdata('min_4') ?></td>
                <td><?php echo $this->session->userdata('min_5') ?></td>
            </tr>
        </tbody>
    </table>