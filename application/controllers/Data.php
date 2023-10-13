<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_pengguna();
        $this->load->model('penduduk_model');
    }

    public function index()
    {
        $data['title'] = 'Keluarga';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['keluarga'] = $this->keluarga_model->tampil_keluarga('keluarga')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('data/keluarga', $data);
        $this->load->view('layout/footer');
    }

    public function keluarga_tambah()
    {
        $data['title'] = 'Keluarga';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['keluarga'] = $this->keluarga_model->tampil_keluarga('keluarga')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_kk', 'No_kk', 'is_unique[keluarga.no_kk]|min_length[16]|max_length[16]', [
            'is_unique' => 'No KK Sudah Ada!',
            'min_length' => 'No KK Terlalu Pendek!',
            'max_length' => 'No KK Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('no_rt', 'No_rt', 'required', [
            'required' => 'No RT Kosong'
        ]);
        $this->form_validation->set_rules('no_rw', 'No_rw', 'required', [
            'required' => 'No RW Kosong'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode_pos', 'max_length[5]', [
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Kosong'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Kosong'
        ]);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Kosong'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Kosong'
        ]);


        //batas form validasi pesan error

        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('data/keluarga', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'no_kk' => $this->input->post('no_kk'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi'),
                    'jumlah_keluarga' => 0
                ];
            $this->db->insert('keluarga', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('data');
        }
    }

    public function keluarga_detail()
    {
        $data['title'] = 'Keluarga';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['keluarga'] = $this->keluarga_model->tampil_keluarga('keluarga')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
    }

    public function keluarga_ubah()
    {
        $data['title'] = 'Keluarga';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['keluarga'] = $this->kk_model->tampil_kk('keluarga')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();


        //form validation pesan error
        $this->form_validation->set_rules('no_kk', 'No_kk', 'min_length[16]|max_length[16]', [
            'min_length' => 'No KK Terlalu Pendek!',
            'max_length' => 'No KK Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode_pos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('data/keluarga', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'no_kk' => $this->input->post('no_kk'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi'),
                ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('keluarga', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('data');
        }
    }

    public function keluarga_hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('keluarga');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('data');
    }

    public function penduduk()
    {
        $data['title'] = 'Penduduk';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan 3 tabel user_submenu, user_menu, user_active
        $this->load->model('Keluarga_model', 'keluargam');
        $data['pendudukM'] = $this->keluargam->getPenduduk();
        $data['status_penduduk'] = $this->db->get('tb_status_penduduk')->result_array();
        //batas model

        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();

        $this->load->view('layout/header_data', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('data/penduduk', $data);
        $this->load->view('layout/footer_data');
    }

    public function penduduk_tambah()
    {
        $data['title'] = 'Penduduk';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan 3 tabel user_submenu, user_menu, user_active
        $this->load->model('Keluarga_model', 'keluargam');
        $data['pendudukM'] = $this->keluargam->getPenduduk();
        $data['status_penduduk'] = $this->db->get('tb_status_penduduk')->result_array();
        //batas model

        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nokk', 'Nokk', 'min_length[16]|max_length[16]', [
            'min_length' => 'No KK Terlalu Pendek!',
            'max_length' => 'No KK Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('nik', 'Nik', 'is_unique[penduduk.nik]|min_length[16]|max_length[16]', [
            'is_unique' => 'Nik Sudah Ada!',
            'min_length' => 'Nik Terlalu Pendek!',
            'max_length' => 'Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('warga_negara', 'Warga_negara', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan_Terakhir', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('status_kawin', 'status_kawin', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamat_penduduk', 'Alamat_penduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nort', 'NoRt', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('norw', 'NoRw', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kodepos', 'Kodepos', 'min_length[5]|max_length[5]|required', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!',
            'required' => 'Data Masih Kosong!'
        ]);
       
        //batas form validasi pesan error

        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_data', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('data/penduduk', $data);
            $this->load->view('layout/footer_data');
        } else {
            $data =
                [
                    'no_kk' => $this->input->post('nokk'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'status_penduduk_id' => 1,
                    'agama' => $this->input->post('agama'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'alamat' => $this->input->post('alamat_penduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'date_created' => time()
                ];
            $this->db->insert('penduduk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('data/penduduk');
        }
    }

    public function penduduk_detail()
    {
        $data['title'] = 'Penduduk';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan rt dengan pendidikan 
        $data['penduduk'] = $this->keluarga_model->getpenduduk();
        $data['status_penduduk'] = $this->db->get('status_penduduk')->result_array();
        //batas model
        $data['penduduk'] = $this->keluarga_model->tampil_penduduk('penduduk')->result();

        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
    }

    public function penduduk_ubah()
    {
        $data['title'] = 'Penduduk';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan 3 tabel user_submenu, user_menu, user_active
        $this->load->model('Keluarga_model', 'keluargam');
        $data['pendudukM'] = $this->keluargam->getPenduduk();
        $data['status_penduduk'] = $this->db->get('tb_status_penduduk')->result_array();
        //batas model

        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nik', 'Nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode_pos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_data', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('data/penduduk', $data);
            $this->load->view('layout/footer_data');
        } else {
            $data =
                [
                    'no_kk' => $this->input->post('no_kk'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'status_penduduk_id' => 1,
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'date_created' => time()
                ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('penduduk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('data/penduduk');
        }
    }

    public function penduduk_hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('penduduk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('data/penduduk');
    }

    function autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->keluarga_model->get_autocomple($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label'     => $row->no_kk,
                        'alamat_penduduk'    => strtoupper($row->alamat),
                        'nort'     => strtoupper($row->no_rt),
                        'norw'     => strtoupper($row->no_rw),
                        'kodepos'     => strtoupper($row->kode_pos),
                        'kelurahan_penduduk'     => ($row->kelurahan),
                        'kecamatan_penduduk'     => ($row->kecamatan),
                        'kabupaten_penduduk'     => ($row->kabupaten),
                        'provinsi_penduduk'     => ($row->provinsi),
                    );
                echo json_encode($result_array);
            }
        }
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['penduduk'] = $this->penduduk_model->tampil_penduduk('penduduk')->result();

        $this->load->view('data/penduduk_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_penduduk.pdf", array('Attachment' => 0));
    }
}
