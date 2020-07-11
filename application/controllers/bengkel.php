<?php
// proses 10
class Bengkel extends CI_Controller 
{
    // proses 11 (m_bengkel.php)
    public function index()
    {
        // m_bengkel : nama model, tampil_data : method/function yang bakal dipake di model bengkel
        $data['bengkel'] = $this->m_bengkel->tampil_data()->result();
        $data['pengaju'] = $this->m_bengkel->tampil_data_pengaju();
        $data['alternatif'] = $this->m_bengkel->tampil_data_alternatif()->result();
        $data['kategori'] = $this->m_bengkel->tampil_data_kategori()->result();
        //load view, copy dr controller admin
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_bengkel', $data);
        $this->load->view('templates/footer');
    }
 
    public function LO()
    {
        // m_bengkel : nama model, tampil_data : method/function yang bakal dipake di model bengkel
        $data['kategori'] = $this->m_bengkel->tampil_data_kategori()->result();
        $data['kategori_detail'] = $this->m_bengkel->tampil_data_kategori_detail(); 
        //load view, copy dr controller admin
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_LO', $data);
        $this->load->view('templates/footer');
    }

    // ini dinyalain kalau pakai left join
    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_bengkel', '', TRUE);
        $this->load->helper(array('form', 'url'));

        if(empty($this->session->userdata('iduser'))){
            redirect('admin/login');
        }
    }

    public function saring() 
    {
        // m_bengkel : nama model, tampil_data : method/function yang bakal dipake di model bengkel
        $data['saring'] = $this->m_bengkel->tampil_data_saring()->result();
        // $data['saring_detail'] = $this->m_bengkel->tampil_data_saring_detail()->result();

        $data['saring_detail'] = "Join CodeIgniter"; 
        // query memanggil function duatable di model
        // $data['saring_detail'] = $this->m_bengkel->duatable_saring_detail(); 

        $data['saringJL'] = "Join CodeIgniter"; 
        // query memanggil function duatable di model
        $data['saringJL'] = $this->m_bengkel->duatable_saringJL(); 

        $data['saringJO'] = "Join CodeIgniter"; 
        // query memanggil function duatable di model
        $data['saringJO'] = $this->m_bengkel->duatable_saringJO(); 

        $data['saringMM'] = $this->m_bengkel->tampil_saringMM()->result();

        $data['saringTM'] = "Join CodeIgniter"; 
        // query memanggil function duatable di model
        $data['saringTM'] = $this->m_bengkel->duatable_saringTM(); 

        $data['saringMO'] = $this->m_bengkel->tampil_saringMO()->result();
       


        //load view, copy dr controller admin
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_saring', $data);
        $this->load->view('templates/footer');
    }

    public function pengajuan_user() 
    {
        $data['pBengkel'] = $this->m_bengkel->tampil_data_pBengkel();
        $data['pLayanan'] = $this->m_bengkel->tampil_data_pLayanan();
        $data['pOnderdil'] = $this->m_bengkel->tampil_data_pOnderdil();

        // $data['pLayanan'] = "Join CodeIgniter"; 
        // // query memanggil function duatable di model
        // $data['pLayanan'] = $this->m_bengkel->duatable(); 

        //load view, copy dr controller admin
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pengajuan', $data);
        $this->load->view('templates/footer');
    }



       //=================================== END PAGE ===================================

    // proses 20 (v_bengkel.php)
    // untuk nangkep inputan
    // TAMBAH
  
    // proses 23 (m_bengkel.php)
    // HAPUS

    // proses 27 (m_bengkel.php)
    // EDIT

    // proses 30 (m_bengkel.php)
    // UPDATE

    //=================================== END KRITERIA ===================================

    public function hapus_alternatif($ID_Alternatif)
    {
        // proses penghapusan data
        $where = array('ID_Alternatif' => $ID_Alternatif);
        $this->m_bengkel->hapus_data($where, 'alternatif');
        // lalu dikembalikan ke method index

        $where2 = array('ID_Alternatif' => $ID_Alternatif);
        $this->m_bengkel->hapus_data($where2, 'matrix');

        redirect('bengkel/index');
    }

    public function edit_alternatif($ID_Alternatif)
    {
        $where = array('ID_Alternatif' => $ID_Alternatif);
        // result = untuk generate hasil query mnjd array
        // ['bengkel'] = variabel bengkel
        //di model ada method edit_data
        $data['alternatif'] = $this->m_bengkel->edit_data($where, 'alternatif')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        // ini view edit_alternatif.php
        $this->load->view('v_edit_alternatif', $data);
        $this->load->view('templates/footer');
    }

    public function update_alternatif()
    {
        $ID_Alternatif = $this->input->post('ID_Alternatif');
        $Nama_Alternatif = $this->input->post('Nama_Alternatif');
        $Alamat_Alternatif = $this->input->post('Alamat_Alternatif');
        $Telepon_Alternatif = $this->input->post('Telepon_Alternatif');
        $JamOperasional_Alternatif = $this->input->post('JamOperasional_Alternatif');
        $Latitude_Alternatif = $this->input->post('Latitude_Alternatif');
        $Longitude_Alternatif = $this->input->post('Longitude_Alternatif');
        $Direction = $this->input->post('Direction');

        // lalu dimasukkan ke dalam array
        $data = array(
            'Nama_Alternatif'               => $Nama_Alternatif,
            'Alamat_Alternatif'             => $Alamat_Alternatif,
            'Telepon_Alternatif'            => $Telepon_Alternatif,
            'JamOperasional_Alternatif'     => $JamOperasional_Alternatif,
            'Latitude_Alternatif'           => $Latitude_Alternatif,
            'Longitude_Alternatif'          => $Longitude_Alternatif,
            'Direction'                     => $Direction,
        );
        $where = array(
            'ID_Alternatif'        => $ID_Alternatif
        );
        // memanggil sebuah method update_data untuk di model
        $this->m_bengkel->update_data($where, $data, 'alternatif');
        redirect('bengkel/index');
    }

    // public function detail_alternatif($ID_Alternatif){
    //     $this->load->model('m_bengkel');
    //     $detail_alternatif = $this->m_bengkel->detail_data($ID_Alternatif);
    //     $data['detail_alternatif'] = $detail_alternatif;
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     // ini view edit_alternatif.php
    //     $this->load->view('v_detail_alternatif', $data);
    //     $this->load->view('templates/footer');
    // }

//=================================== END ALTERNATIF ===================================

    public function hapus_matrix($ID_Alternatif)
    {
        // proses penghapusan data
        $where = array('ID_Alternatif' => $ID_Alternatif);
        $this->m_bengkel->hapus_data($where, 'matrix');
        redirect('bengkel/index');
    }

    public function edit_matrix($ID_Alternatif)
    {
        $data['alternatif'] = $this->m_bengkel->get_data_matrix($ID_Alternatif);
        $data['id_alter'] = $ID_Alternatif;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_edit_matrix', $data);
        $this->load->view('templates/footer');
    }

    public function update_matrix()
    {
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

        $bobot_post = array();
        $len_kriteria = count($kriteria_kata_depan);
        for ($i=0; $i < $len_kriteria; $i++) {
            $bobot_post[] = $this->input->post($kriteria_kata_depan[$i]);
        }

        $ID_Alternatif = $this->input->post('ID_Alternatif');

        $id_kriteria = 1;
        for ($j=0; $j < $len_kriteria; $j++) {
            $data = array(
                'Data_Point' => $bobot_post[$j]
            );
            $where = array(
                'ID_Alternatif' => $ID_Alternatif,
                'ID_Kriteria' => $id_kriteria
            );
            $id_kriteria++;

            $this->m_bengkel->update_data($where, $data, 'matrix');
        }
        redirect('bengkel/index');
    }

//=================================== END MATRIX ===================================

       public function tambah_kategori_detail()
       {
            $this->form_validation->set_rules('ID_Kategori', 'Kategori', 'required',
                array('required'=>'Kategori Layanan tidak boleh kosong!'));

            if($this->form_validation->run() != false) {
                $id_ktg = $this->db->escape_str($this->input->post('ID_Kategori'));

                if ($id_ktg == 1 || $id_ktg == 2) {
                    $this->form_validation->set_rules('ID_Alter', 'Nama Bengkel', 'required',
                        array('required'=>'Nama Bengkel tidak boleh kosong!'));
                    $this->form_validation->set_rules('ID_JL', 'Jenis Layanan', 'required',
                        array('required'=>'Jenis Layanan tidak boleh kosong!'));
                    $this->form_validation->set_rules('Nama_Layanan', 'Nama Layanan', 'required|alpha_numeric_spaces',
                        array('required'=>'Nama Layanan tidak boleh kosong!', 'alpha_numeric_spaces'=>'Hanya diperbolehkan angka dan huruf!'));
                    $this->form_validation->set_rules('Isi_Deskripsi', 'Deskripsi', 'required|alpha_numeric_spaces',
                        array('required'=>'Deskripsi Layanan tidak boleh kosong!', 'alpha_numeric_spaces'=>'Hanya diperbolehkan angka dan huruf!'));
                    $this->form_validation->set_rules('Harga_Kategori', 'Harga', 'required|integer',
                        array('required'=>'Harga tidak boleh kosong!', 'numeric'=>'Hanya diperbolehkan angka!'));

                    if($this->form_validation->run() != false) {
                        $id_alter = $this->db->escape_str($this->input->post('ID_Alter'));
                        $jenis_layanan = $this->db->escape_str($this->input->post('ID_JL'));
                        $nama_layanan = $this->db->escape_str($this->input->post('Nama_Layanan'));
                        $deskripsi = $this->db->escape_str($this->input->post('Isi_Deskripsi'));
                        $harga = $this->db->escape_str($this->input->post('Harga_Kategori'));

                        $config['upload_path']          = './../upload/';
                        $config['allowed_types']        = 'jpg|png';
                        $config['encrypt_name']     = TRUE;
                        $config['overwrite']      = TRUE;
                        $config['max_size']             = 1024;
                
                        $this->load->library('upload', $config);
                
                        if ( !$this->upload->do_upload('Gambar_Kategori')){
                            $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Gagal!  Anda juga harus menambahkan gambar.
                            </div>');

                            redirect('bengkel/LO');
                        }else{
                            $nama_file = $this->upload->data("file_name");

                            $data_kategori_detail = array(
                                'ID_User' => 1,
                                'ID_Kategori' => $id_ktg,
                                'ID_JL' => $jenis_layanan,
                                'Isi_Kategori' => $nama_layanan,
                                'Harga_Kategori' => $harga,
                                'Isi_Deskripsi' => $deskripsi,
                                'Gambar_Isi_Kategori' => $nama_file,
                                'ID_Alternatif' => $id_alter,
                            );
                            $this->m_bengkel->input_data($data_kategori_detail, 'kategori_detail');

                            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Data Anda Berhasil Dikirimkan!
                            </div>');

                            redirect('bengkel/LO');
                        }

                        // $data_kategori_detail = array(
                        //     'ID_User' => 1,
                        //     'ID_Kategori' => $id_ktg,
                        //     'ID_JL' => $jenis_layanan,
                        //     'Isi_Kategori' => $nama_layanan,
                        //     'Harga_Kategori' => $harga,
                        //     'Isi_Deskripsi' => $deskripsi,
                        //     'Gambar_Isi_Kategori' => 'test.jpg',
                        //     'ID_Alternatif' => $id_alter,
                        // );
                        // $this->m_bengkel->input_data($data_kategori_detail, 'kategori_detail');

                        // $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
                        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        // Data Anda Berhasil Dikirimkan!
                        // </div>');

                        // redirect('bengkel/LO');
                    } else {
                        // m_bengkel : nama model, tampil_data : method/function yang bakal dipake di model bengkel
                        $data['kategori'] = $this->m_bengkel->tampil_data_kategori()->result();
                        $data['kategori_detail'] = $this->m_bengkel->tampil_data_kategori_detail(); 
                        //load view, copy dr controller admin
                        $this->load->view('templates/header');
                        $this->load->view('templates/sidebar');
                        $this->load->view('v_LO', $data);
                        $this->load->view('templates/footer');
                    }
                } else {
                    $this->form_validation->set_rules('ID_Alter', 'Nama Bengkel', 'required',
                        array('required'=>'Nama Bengkel tidak boleh kosong!'));
                    $this->form_validation->set_rules('ID_JO', 'Jenis Onderdil', 'required',
                        array('required'=>'Jenis Onderdil tidak boleh kosong!'));
                    $this->form_validation->set_rules('Nama_Onderdil', 'Nama Onderdil', 'required|alpha_numeric_spaces',
                        array('required'=>'Nama Onderdil tidak boleh kosong!', 'alpha_numeric_spaces'=>'Hanya diperbolehkan angka dan huruf!'));
                    $this->form_validation->set_rules('ID_MM', 'Merek Motor', 'required',
                        array('required'=>'Merek Motor tidak boleh kosong!'));
                    $this->form_validation->set_rules('ID_TM', 'Tipe Motor', 'required',
                        array('required'=>'Tipe Motor tidak boleh kosong!'));
                    $this->form_validation->set_rules('ID_MO', 'Merek Onderdil', 'required',
                        array('required'=>'Merek Onderdil tidak boleh kosong!'));
                    $this->form_validation->set_rules('Isi_Deskripsi', 'Deskripsi', 'required|alpha_numeric_spaces',
                        array('required'=>'Deskripsi Layanan tidak boleh kosong!', 'alpha_numeric_spaces'=>'Hanya diperbolehkan angka dan huruf!'));
                    $this->form_validation->set_rules('Harga_Kategori', 'Harga', 'required|integer',
                        array('required'=>'Harga tidak boleh kosong!', 'numeric'=>'Hanya diperbolehkan angka!'));

                    if($this->form_validation->run() != false) {
                        $id_alter = $this->db->escape_str($this->input->post('ID_Alter'));
                        $jenis_onderdil = $this->db->escape_str($this->input->post('ID_JO'));
                        $nama_onderdil = $this->db->escape_str($this->input->post('Nama_Onderdil'));
                        $merek_motor = $this->db->escape_str($this->input->post('ID_MM'));
                        $tipe_motor = $this->db->escape_str($this->input->post('ID_TM'));
                        $merek_onderdil = $this->db->escape_str($this->input->post('ID_MO'));
                        $deskripsi = $this->db->escape_str($this->input->post('Isi_Deskripsi'));
                        $harga = $this->db->escape_str($this->input->post('Harga_Kategori'));


                        $config['upload_path']          = './../upload/';
                        $config['allowed_types']        = 'jpg|png';
                        $config['encrypt_name']     = TRUE;
                        $config['overwrite']      = TRUE;
                        $config['max_size']             = 1024;
                
                        $this->load->library('upload', $config);
                
                        if ( !$this->upload->do_upload('Gambar_Kategori')){
                            $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Gagal!  Anda juga harus menambahkan gambar.
                            </div>');

                            redirect('bengkel/LO');
                        }else{
                            $nama_file = $this->upload->data("file_name");

                            $data_kategori_detail = array(
                                'ID_User' => 1,
                                'ID_Kategori' => $id_ktg,
                                'ID_JO' => $jenis_onderdil,
                                'ID_TM' => $tipe_motor,
                                'ID_MO' => $merek_onderdil,
                                'Isi_Kategori' => $nama_onderdil,
                                'Harga_Kategori' => $harga,
                                'Isi_Deskripsi' => $deskripsi,
                                'Gambar_Isi_Kategori' => $nama_file,
                                'ID_Alternatif' => $id_alter,
                            );
                            $this->m_bengkel->input_data($data_kategori_detail, 'kategori_detail');

                            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Data Anda Berhasil Dikirimkan!
                            </div>');

                            redirect('bengkel/LO');
                        }

                        // $data_kategori_detail = array(
                        //     'ID_User' => 1,
                        //     'ID_Kategori' => $id_ktg,
                        //     'ID_JO' => $jenis_onderdil,
                        //     'ID_TM' => $tipe_motor,
                        //     'ID_MO' => $merek_onderdil,
                        //     'Isi_Kategori' => $nama_onderdil,
                        //     'Harga_Kategori' => $harga,
                        //     'Isi_Deskripsi' => $deskripsi,
                        //     'Gambar_Isi_Kategori' => 'test.jpg',
                        //     'ID_Alternatif' => $id_alter,
                        // );
                        // $this->m_bengkel->input_data($data_kategori_detail, 'kategori_detail');

                        // $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
                        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        // Data Anda Berhasil Dikirimkan!
                        // </div>');

                        // redirect('bengkel/LO');
                    } else {
                        // m_bengkel : nama model, tampil_data : method/function yang bakal dipake di model bengkel
                        $data['kategori'] = $this->m_bengkel->tampil_data_kategori()->result();
                        $data['kategori_detail'] = $this->m_bengkel->tampil_data_kategori_detail(); 
                        //load view, copy dr controller admin
                        $this->load->view('templates/header');
                        $this->load->view('templates/sidebar');
                        $this->load->view('v_LO', $data);
                        $this->load->view('templates/footer');
                    }
                }
            } else {
                // m_bengkel : nama model, tampil_data : method/function yang bakal dipake di model bengkel
                $data['kategori'] = $this->m_bengkel->tampil_data_kategori()->result();
                $data['kategori_detail'] = $this->m_bengkel->tampil_data_kategori_detail(); 
                //load view, copy dr controller admin
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('v_LO', $data);
                $this->load->view('templates/footer');
            }
       }
      
       public function hapus_kategori_detail($ID_Kategori_Detail)
       {
           // proses penghapusan data
           $where = array('ID_Kategori_Detail' => $ID_Kategori_Detail);
           $this->m_bengkel->hapus_data($where, 'kategori_detail');
           // lalu dikembalikan ke method index
           redirect('bengkel/LO');
       }
      
      
       public function edit_kategori_detail($ID_Kategori_Detail)
       {
           $where = array('ID_Kategori_Detail' => $ID_Kategori_Detail);
           // result = untuk generate hasil query mnjd array
           // ['bengkel'] = variabel bengkel
           //di model ada method edit_data
           $data['kategori_detail'] = $this->m_bengkel->edit_data($where, 'kategori_detail')->result();
           $this->load->view('templates/header');
           $this->load->view('templates/sidebar');
           // ini view edit_kategori_detail.php
           $this->load->view('v_edit_kategori_detail', $data);
           $this->load->view('templates/footer');
       }
      
       public function update_kategori_detail()
       {
           $ID_Kategori_Detail = $this->input->post('ID_Kategori_Detail');
           $ID_Kategori         = $this->input->post('ID_Kategori');
           $Isi_Kategori        = $this->input->post('Isi_Kategori');
           $Harga_Kategori      = $this->input->post('Harga_Kategori');
           $Isi_Deskripsi       = $this->input->post('Isi_Deskripsi');
      
           // lalu dimasukkan ke dalam array
           $data = array(
                'ID_Kategori'         => $ID_Kategori,
                'Isi_Kategori'        => $Isi_Kategori,
                'Harga_Kategori'      => $Harga_Kategori,
                'Isi_Deskripsi'       => $Isi_Deskripsi,
           );
           $where = array('ID_Kategori_Detail' => $ID_Kategori_Detail);
           // memanggil sebuah method update_data untuk di model
           $this->m_bengkel->update_data($where, $data, 'kategori_detail');
           redirect('bengkel/LO');
       }
      

 //=================================== END KATEGORI DETAIL ===================================

 public function tambah_saring_detail()
 {
     // Nama_Kategori = name
     $Isi_Saring = $this->input->post('Isi_Saring');

     // hasil tangkepannya diubah ke array
     $data = array(
         'Isi_Saring' => $Isi_Saring,
     );
     // untuk input datanya
     $this->m_bengkel->input_data($data, 'saring_detail');
     redirect('bengkel/saring');
 }

 public function hapus_saring_detail($ID_Saring_Detail)
 {
     // proses penghapusan data
     $where = array('ID_Saring_Detail' => $ID_Saring_Detail);
     $this->m_bengkel->hapus_data($where, 'saring_detail');
     // lalu dikembalikan ke method index
     redirect('bengkel/saring');
 }

 public function edit_saring_detail($ID_Saring_Detail)
 {
     $where = array('ID_Saring_Detail' => $ID_Saring_Detail);
     // result = untuk generate hasil query mnjd array
     // ['bengkel'] = variabel bengkel
     //di model ada method edit_data
     $data['saring_detail'] = $this->m_bengkel->edit_data($where, 'saring_detail')->result();
     $this->load->view('templates/header');
     $this->load->view('templates/sidebar');
     // ini view edit_saring_detail.php
     $this->load->view('v_edit_saring_detail', $data);
     $this->load->view('templates/footer');
 }
 
 public function update_saring_detail()
 {
     $ID_Saring_Detail = $this->input->post('ID_Saring_Detail');
     $Isi_Saring = $this->input->post('Isi_Saring');

     // lalu dimasukkan ke dalam array
     $data = array(
         'Isi_Saring'     => $Isi_Saring
     );
     $where = array(
         'ID_Saring_Detail'        => $ID_Saring_Detail
     );
     // memanggil sebuah method update_data untuk di model
     $this->m_bengkel->update_data($where, $data, 'saring_detail');
     redirect('bengkel/saring');
 }
 //=================================== END SARING DETAIL ===================================
   
 public function tambah_data_pBengkel($ID_Pengajuan)
 {
     $data_bengkel = $this->m_bengkel->ambil_data_pengajuan($ID_Pengajuan);
    foreach ($data_bengkel as $dataPB) {
        $ID_User = $dataPB->ID_User;
        $Nama_User = $dataPB->Nama_User;
        $Email_User = $dataPB->Email_User;
        $Telepon_User = $dataPB->Telepon_User;
        $Nama_Bengkel = $dataPB->Nama_Bengkel;
        $Alamat_Bengkel = $dataPB->Alamat_Bengkel;
        $Telepon_Bengkel = $dataPB->Telepon_Bengkel;
        $JamOperasionalBengkel = $dataPB->JamOperasional_Bengkel;
        $Gambar_Objek1 = $dataPB->Gambar_Objek1;
    }

    // m_bengkel : nama model, tampil_data : method/function yang bakal dipake di model bengkel
    $alternatif = $this->m_bengkel->getAllDataAlternatif();
    // mengecek banyaknya data yg ada d tabel alternatif dimasukin ke cek_row_akhir
    $cek_row_akhir = $alternatif->num_rows();
    if ($cek_row_akhir==0) {
        // krn belum ada data
        $noUrut = 0;
    } else {
        $noUrut = $cek_row_akhir + 1;
    }
    // +1 = krn id bengkel selalu +1 setiap diinput
    // 2020 biar gampang ngelompokinnya, untuk report tahunan = ada brp bengkel yg join di th 2020
    $ID_Bengkel= 'B'.date('Y').$noUrut;

    $message_email = "http://localhost:8080/bengkel/pengajuan/index";
    $subject_email = "Persetujuan Bengkel - $Nama_Bengkel";

     $config = array('protocol' => 'smtp',
                     'smtp_host' => 'ssl://smtp.googlemail.com',
                     'smtp_port' => 465,
                     'smtp_user' => 'gsb.motor20@gmail.com',
                     'smtp_pass' => 'GSBMsepta20',
                     'mailtype'  => 'html', 
                     'charset'   => 'utf-8');

    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");   
    $this->email->set_header('MIME-Version' ,'1.0; charset=utf-8');
    $this->email->set_header('Content-type', 'text/html');

    $this->email->from('gsb.motor20@gmail.com', 'GSBM'); 
    $this->email->to('septaria@student.umn.ac.id');
    $this->email->cc('gsb.motor20@gmail.com'); 
    $this->email->subject($subject_email);

    $data_web = array(
        'NamaBengkel'=> $Nama_Bengkel,
        'NamaUser' => $Nama_User,
        'URLPengajuan' => $message_email
    );
    $body = $this->load->view('message_email', $data_web, TRUE);
    
    $this->email->message($body); 
    $this->email->send();

    $data = array(
        // nama field => isi/value
        'ID_Alternatif' => $ID_Bengkel,
        'ID_User' => $ID_User,
        'Nama_Alternatif' => $Nama_Bengkel,
        'Alamat_Alternatif' => $Alamat_Bengkel,
        'Telepon_Alternatif' => $Telepon_Bengkel,
        'JamOperasional_Alternatif' => $JamOperasionalBengkel,
    );
    

    // ('') menandakan nama tabel
    $this->m_bengkel->input_data($data, 'alternatif');

    $where = array('ID_Pengajuan' => $this->uri->segment(3));
    $this->m_bengkel->hapus_data($where, 'pengajuan_temp');
    // lalu dikembalikan ke method index
    redirect('bengkel/pengajuan_user');
 }

 public function hapus_data_pBengkel($ID_Pengajuan)
 {
     // proses penghapusan data
     $where = array('ID_Pengajuan' => $ID_Pengajuan);
     $this->m_bengkel->hapus_data($where, 'pengajuan_temp');
     // lalu dikembalikan ke method index
     redirect('bengkel/pengajuan_user');
 }

 public function telahdilihat_data_pLayanan($ID_Pengajuan_L)
 {
    $where = array('ID_Pengajuan_L' => $ID_Pengajuan_L);
    $this->m_bengkel->hapus_data($where, 'pengajuan_layanan');

    redirect('bengkel/pengajuan_user');
 }

 public function telahdilihat_data_pOnderdil($ID_Pengajuan_O)
 {
    $where = array('ID_Pengajuan_O' => $ID_Pengajuan_O);
    $this->m_bengkel->hapus_data($where, 'pengajuan_onderdil');

    redirect('bengkel/pengajuan_user');
 }

 //=================================== END PENGAJUAN BENGKEL ===================================

 public function tambah_saringJL()
 {
     // Nama_Kategori = name
     $Nama_JL       = $this->input->post('Nama_JL');
     $ID_Kategori   = $this->input->post('ID_Kategori');

     // hasil tangkepannya diubah ke array
     $data = array(
         'Nama_JL'          => $Nama_JL,
         'ID_Kategori'      => $ID_Kategori,
     );
     // untuk input datanya
     $this->m_bengkel->input_data($data, 'saring_jenis_layanan');
     redirect('bengkel/saring');
 }

 public function hapus_saringJL($ID_JL)
 {
     // proses penghapusan data
     $where = array('ID_JL' => $ID_JL);
     $this->m_bengkel->hapus_data($where, 'saring_jenis_layanan');
     // lalu dikembalikan ke method index
     redirect('bengkel/saring');
 }


 public function edit_saringJL($ID_JL)
 {
     $where = array('ID_JL' => $ID_JL);
     // result = untuk generate hasil query mnjd array
     // ['bengkel'] = variabel bengkel
     //di model ada method edit_data
     $data['saringJL'] = $this->m_bengkel->edit_data($where, 'saring_jenis_layanan')->result();
     $this->load->view('templates/header');
     $this->load->view('templates/sidebar');
     // ini view edit_saringJL.php
     $this->load->view('v_edit_saringJL', $data);
     $this->load->view('templates/footer');
 }

 public function update_saringJL()
 {
     $ID_JL = $this->input->post('ID_JL');
     $Nama_JL = $this->input->post('Nama_JL');
     $ID_Kategori = $this->input->post('ID_Kategori');

     // lalu dimasukkan ke dalam array
     $data = array(
        'ID_Kategori' => $ID_Kategori,
        'Nama_JL'     => $Nama_JL
     );
     $where = array('ID_JL' => $ID_JL);
     // memanggil sebuah method update_data untuk di model
     $this->m_bengkel->update_data($where, $data, 'saring_jenis_layanan');
     redirect('bengkel/saring');
 }



 //=================================== END SARING JL ===================================

 public function tambah_saringJO()
 {
     // Nama_Kategori = name
     $Nama_JO       = $this->input->post('Nama_JO');
     $ID_Kategori   = $this->input->post('ID_Kategori');

     // hasil tangkepannya diubah ke array
     $data = array(
         'Nama_JO'          => $Nama_JO,
         'ID_Kategori'      => $ID_Kategori,
     );
     // untuk input datanya
     $this->m_bengkel->input_data($data, 'saring_jenis_onderdil');
     redirect('bengkel/saring');
 }

 public function hapus_saringJO($ID_JO)
 {
     // proses penghapusan data
     $where = array('ID_JO' => $ID_JO);
     $this->m_bengkel->hapus_data($where, 'saring_jenis_onderdil');
     // lalu dikembalikan ke method index
     redirect('bengkel/saring');
 }


 public function edit_saringJO($ID_JO)
 {
     $where = array('ID_JO' => $ID_JO);
     // result = untuk generate hasil query mnjd array
     // ['bengkel'] = variabel bengkel
     //di model ada method edit_data
     $data['saringJO'] = $this->m_bengkel->edit_data($where, 'saring_jenis_onderdil')->result();
     $this->load->view('templates/header');
     $this->load->view('templates/sidebar');
     // ini view edit_saringJO.php
     $this->load->view('v_edit_saringJO', $data);
     $this->load->view('templates/footer');
 }

 public function update_saringJO()
 {
     $ID_JO = $this->input->post('ID_JO');
     $Nama_JO = $this->input->post('Nama_JO');
     $ID_Kategori = $this->input->post('ID_Kategori');

     // lalu dimasukkan ke dalam array
     $data = array(
        'ID_Kategori' => $ID_Kategori,
         'Nama_JO'     => $Nama_JO
     );
     $where = array(
         'ID_JO'        => $ID_JO
     );
     // memanggil sebuah method update_data untuk di model
     $this->m_bengkel->update_data($where, $data, 'saring_jenis_onderdil');
     redirect('bengkel/saring');
 }


  //=================================== END SARING JO ===================================

  public function tambah_saringMM()
  {
      // Nama_Kategori = name
      $Nama_MM       = $this->input->post('Nama_MM');
 
      // hasil tangkepannya diubah ke array
      $data = array(
          'Nama_MM'          => $Nama_MM,
      );
      // untuk input datanya
      $this->m_bengkel->input_data($data, 'saring_merek_motor');
      redirect('bengkel/saring');
  }
 
  public function hapus_saringMM($ID_MM)
  {
      // proses penghapusan data
      $where = array('ID_MM' => $ID_MM);
      $this->m_bengkel->hapus_data($where, 'saring_merek_motor');
      // lalu dikembalikan ke method index
      redirect('bengkel/saring');
  }
 
 
  public function edit_saringMM($ID_MM)
  {
      $where = array('ID_MM' => $ID_MM);
      // result = untuk generate hasil query mnjd array
      // ['bengkel'] = variabel bengkel
      //di model ada method edit_data
      $data['saringMM'] = $this->m_bengkel->edit_data($where, 'saring_merek_motor')->result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      // ini view edit_saringMM.php
      $this->load->view('v_edit_saringMM', $data);
      $this->load->view('templates/footer');
  }
 
  public function update_saringMM()
  {
      $ID_MM = $this->input->post('ID_MM');
      $Nama_MM = $this->input->post('Nama_MM');
 
      // lalu dimasukkan ke dalam array
      $data = array(
          'Nama_MM'     => $Nama_MM
      );
      $where = array(
          'ID_MM'        => $ID_MM
      );
      // memanggil sebuah method update_data untuk di model
      $this->m_bengkel->update_data($where, $data, 'saring_merek_motor');
      redirect('bengkel/saring');
  }
 
   //=================================== END SARING MM ===================================

   public function tambah_saringTM()
 {
     // Nama_Kategori = name
     $Nama_TM       = $this->input->post('Nama_TM');
     $ID_MM   = $this->input->post('ID_MM');

     // hasil tangkepannya diubah ke array
     $data = array(
         'Nama_TM'          => $Nama_TM,
         'ID_MM'      => $ID_MM,
     );
     // untuk input datanya
     $this->m_bengkel->input_data($data, 'saring_tipe_motor');
     redirect('bengkel/saring');
 }

 public function hapus_saringTM($ID_TM)
 {
     // proses penghapusan data
     $where = array('ID_TM' => $ID_TM);
     $this->m_bengkel->hapus_data($where, 'saring_tipe_motor');
     // lalu dikembalikan ke method index
     redirect('bengkel/saring');
 }


 public function edit_saringTM($ID_TM)
 {
     $where = array('ID_TM' => $ID_TM);
     // result = untuk generate hasil query mnjd array
     // ['bengkel'] = variabel bengkel
     //di model ada method edit_data
     $data['saringTM'] = $this->m_bengkel->edit_data($where, 'saring_tipe_motor')->result();
     $this->load->view('templates/header');
     $this->load->view('templates/sidebar');
     // ini view edit_saringTM.php
     $this->load->view('v_edit_saringTM', $data);
     $this->load->view('templates/footer');
 }

 public function update_saringTM()
 {
     $ID_TM = $this->input->post('ID_TM');
     $Nama_TM = $this->input->post('Nama_TM');
     $ID_MM = $this->input->post('ID_MM');

     // lalu dimasukkan ke dalam array
     $data = array(
         'ID_MM' => $ID_MM,
         'Nama_TM'     => $Nama_TM
     );
     $where = array(
         'ID_TM'        => $ID_TM
     );
     // memanggil sebuah method update_data untuk di model
     $this->m_bengkel->update_data($where, $data, 'saring_tipe_motor');
     redirect('bengkel/saring');
 }


  
    //=================================== END SARING MM ===================================

    public function tambah_saringMO()
    {
        // Nama_Kategori = name
        $Nama_MO       = $this->input->post('Nama_MO');
   
        // hasil tangkepannya diubah ke array
        $data = array(
            'Nama_MO'          => $Nama_MO,
        );
        // untuk input datanya
        $this->m_bengkel->input_data($data, 'saring_merek_onderdil');
        redirect('bengkel/saring');
    }
   
    public function hapus_saringMO($ID_MO)
    {
        // proses penghapusan data
        $where = array('ID_MO' => $ID_MO);
        $this->m_bengkel->hapus_data($where, 'saring_merek_onderdil');
        // lalu dikembalikan ke method index
        redirect('bengkel/saring');
    }
   
   
    public function edit_saringMO($ID_MO)
    {
        $where = array('ID_MO' => $ID_MO);
        // result = untuk generate hasil query mnjd array
        // ['bengkel'] = variabel bengkel
        //di model ada method edit_data
        $data['saringMO'] = $this->m_bengkel->edit_data($where, 'saring_merek_onderdil')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        // ini view edit_saringMO.php
        $this->load->view('v_edit_saringMO', $data);
        $this->load->view('templates/footer');
    }
   
    public function update_saringMO()
    {
        $ID_MO = $this->input->post('ID_MO');
        $Nama_MO = $this->input->post('Nama_MO');
   
        // lalu dimasukkan ke dalam array
        $data = array(
            'Nama_MO'     => $Nama_MO
        );
        $where = array(
            'ID_MO'        => $ID_MO
        );
        // memanggil sebuah method update_data untuk di model
        $this->m_bengkel->update_data($where, $data, 'saring_merek_onderdil');
        redirect('bengkel/saring');
    }
   
     //=================================== END SARING MM ===================================
    
    public function get_jenis_layanan()
    {
        $id_ktg = $this->input->post('ID_Kategori');

        $this->db->where('ID_Kategori', $id_ktg);
        $saring_jenis_layanan = $this->db->get('saring_jenis_layanan');

        echo '<option disabled selected>Jenis Layanan</option>';
        foreach ($saring_jenis_layanan->result() as $sJL) :
            echo '<option value="'.$sJL->ID_JL.'">'.$sJL->Nama_JL.'</option>';  
        endforeach;
    }

    public function get_jenis_onderdil()
    {
        $id_ktg = $this->input->post('ID_Kategori');

        $this->db->where('ID_Kategori', $id_ktg);
        $saring_jenis_onderdil = $this->db->get('saring_jenis_onderdil');

        echo '<option disabled selected>Jenis Onderdil</option>';
        foreach ($saring_jenis_onderdil->result() as $sJO) :
            echo '<option value="'.$sJO->ID_JO.'">'.$sJO->Nama_JO.'</option>';  
        endforeach;
    }

    public function get_id_tm()
    {
        $id_mm = $this->input->post('ID_MM');

        $this->db->where('ID_MM', $id_mm);
        $saring_tipe_motor = $this->db->get('saring_tipe_motor');
  
        echo '<option disabled selected>Tipe Motor</option>';
        foreach ($saring_tipe_motor->result() as $sTM) :
            echo '<option value="'.$sTM->ID_TM.'">'.$sTM->Nama_TM.'</option>';  
        endforeach;
    }

    public function tambah_alternatif()
    {
        $alternatif = $this->m_bengkel->getAllDataAlternatif();
        $cek_row_akhir = $alternatif->num_rows();
        if ($cek_row_akhir==0) {
            $noUrut = 0;
        } else {
            $noUrut = $cek_row_akhir + 1;
        }
        $ID_Bengkel= 'B'.date('Y').$noUrut;

        $this->form_validation->set_rules('Nama_Alternatif', 'Nama Bengkel', 'required|alpha_numeric_spaces',
            array('required'=>'Nama Bengkel tidak boleh kosong!', 'alpha_dash'=>'Nama Bengkel hanya diperkenankan huruf'));
        $this->form_validation->set_rules('Alamat_Alternatif', 'Alamat Bengkel', 'required',
            array('required'=>'Alamat Bengkel tidak boleh kosong!'));
        $this->form_validation->set_rules('Telepon_Alternatif', 'Telepon Bengkel', 'required|numeric',
            array('required'=>'Telepon Bengkel tidak boleh kosong!', 'numeric'=>'Nomor Telepon hanya diperbolehkan angka! Tidak boleh menggunakan spasi atau simbol tambahan seperti - dll'));
        $this->form_validation->set_rules('JamOperasional_Alternatif', 'Jam Operasional Bengkel', 'required',
            array('required'=>'Jam Operasional Bengkel tidak boleh kosong!'));
        $this->form_validation->set_rules('Latitude_Alternatif', 'Latitude Bengkel', 'required',
            array('required'=>'Latitude Bengkel tidak boleh kosong!'));
        $this->form_validation->set_rules('Longitude_Alternatif', 'Longitude Bengkel', 'required',
            array('required'=>'Longitude Bengkel tidak boleh kosong!'));
        $this->form_validation->set_rules('bobot_pelayanan', 'Bobot Pelayanan', 'required',
            array('required'=>'Bobot Pelayanan tidak boleh kosong!'));
        $this->form_validation->set_rules('bobot_kecepatan', 'Bobot Kecepatan', 'required',
            array('required'=>'Bobot Kecepatan tidak boleh kosong!'));
        $this->form_validation->set_rules('bobot_kenyamanan', 'Bobot Kenyamanan', 'required',
            array('required'=>'Bobot Kenyamanan tidak boleh kosong!'));
        $this->form_validation->set_rules('bobot_harga', 'Bobot Harga', 'required',
            array('required'=>'Bobot Harga tidak boleh kosong!'));
        $this->form_validation->set_rules('direction', 'Direction GPS', 'required',
            array('required'=>'Direction tidak boleh kosong!'));

        if($this->form_validation->run() != false) {
            $nama_alter = $this->db->escape_str($this->input->post('Nama_Alternatif'));
            $alamat_alter = $this->db->escape_str($this->input->post('Alamat_Alternatif'));
            $telp_alter = $this->db->escape_str($this->input->post('Telepon_Alternatif'));
            $jam_alter = $this->db->escape_str($this->input->post('JamOperasional_Alternatif'));
            $lat_alter = $this->db->escape_str($this->input->post('Latitude_Alternatif'));
            $lon_alter = $this->db->escape_str($this->input->post('Longitude_Alternatif'));
            $bobot_pelayanan = $this->db->escape_str($this->input->post('bobot_pelayanan'));
            $bobot_kecepatan = $this->db->escape_str($this->input->post('bobot_kecepatan'));
            $bobot_kenyamanan = $this->db->escape_str($this->input->post('bobot_kenyamanan'));
            $bobot_harga = $this->db->escape_str($this->input->post('bobot_harga'));
            $direction = $this->db->escape_str($this->input->post('direction'));

            // $data_alter = array(
            //     'ID_Alternatif' => $ID_Bengkel,
            //     'ID_User' => 1,
            //     'Nama_Alternatif' => $nama_alter,
            //     'Alamat_Alternatif' => $alamat_alter,
            //     'Telepon_Alternatif' => $telp_alter,
            //     'JamOperasional_Alternatif' => $jam_alter,
            //     'Latitude_Alternatif' => $lat_alter,
            //     'Longitude_Alternatif' => $lon_alter,
            //     'Direction' => $direction,
            //     'Gambar_Alternatif' => 'test.jpg',
            // );
            // $this->m_bengkel->input_data($data_alter, 'alternatif');

            $bobot = array();
            $bobot[0] = $bobot_pelayanan;
            $bobot[1] = $bobot_kecepatan;
            $bobot[2] = $bobot_kenyamanan;
            $bobot[3] = $bobot_harga;

            $idx = 0;
            for ($i=1; $i < 5; $i++) { 
                $data_matrix = array(
                    'ID_Alternatif' => $ID_Bengkel,
                    'ID_Kriteria' => $i,
                    'Data_Point' => $bobot[$idx]
                );
                $this->m_bengkel->input_data($data_matrix, 'matrix');

                $idx++;
            }

            $config['upload_path']          = './../upload/';
            $config['allowed_types']        = 'jpg|png';
            $config['encrypt_name']     = TRUE;
            $config['overwrite']      = TRUE;
            $config['max_size']             = 1024;
    
            $this->load->library('upload', $config);
    
            if ( !$this->upload->do_upload('Gambar_Alternatif')){
                $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Gagal! Anda juga harus menambahkan gambar.
                </div>');

                redirect('bengkel/index');
            }else{
                $nama_file = $this->upload->data("file_name");

                $data_alter = array(
                    'ID_Alternatif' => $ID_Bengkel,
                    'ID_User' => 1,
                    'Nama_Alternatif' => $nama_alter,
                    'Alamat_Alternatif' => $alamat_alter,
                    'Telepon_Alternatif' => $telp_alter,
                    'JamOperasional_Alternatif' => $jam_alter,
                    'Latitude_Alternatif' => $lat_alter,
                    'Longitude_Alternatif' => $lon_alter,
                    'Direction' => $direction,
                    'Gambar_Alternatif' => $nama_file,
                );
                $this->m_bengkel->input_data($data_alter, 'alternatif');

                $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Data Anda Berhasil Dikirimkan!
                </div>');

                redirect('bengkel/index');
            }
        } else {
            // m_bengkel : nama model, tampil_data : method/function yang bakal dipake di model bengkel
            $data['bengkel'] = $this->m_bengkel->tampil_data()->result();
            $data['pengaju'] = $this->m_bengkel->tampil_data_pengaju();
            $data['alternatif'] = $this->m_bengkel->tampil_data_alternatif()->result();
            $data['kategori'] = $this->m_bengkel->tampil_data_kategori()->result();
            //load view, copy dr controller admin
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_bengkel', $data);
            $this->load->view('templates/footer');
        }
    }

}
