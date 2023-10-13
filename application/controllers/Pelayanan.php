<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_pengguna();
    }

    ///////////////////////////spektp/////////////////////////////////////////////////////
    public function index()
    {
        $data['title'] = 'SP EKTP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['spektp'] = $this->pelayanan_model->tampil_spektp('spektp')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/index', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function spektp_tambah()
    {
        $data['title'] = 'SP EKTP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['spektp'] = $this->pelayanan_model->tampil_spektp('spektp')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nospektp', 'Nospektp', 'required|is_unique[spektp.no_spektp]', [
            'required' => 'Data Masih Kosong!',
            'is_unique' => 'Data Sudah Ada!'
        ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Data Masih Kosong!',
            'min_length' => 'Terlalu Pendek!',
            'max_length' => 'Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'Namapenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempatlahir', 'Tempatlahir', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggallahir', 'Tanggallahir', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'Agamapenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('statuskawin', 'Statuskawin', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'Pekerjaanpenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'Agamapenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('statuskawin', 'Statuskawin', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'Pekerjaanpenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'Alamatpenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nort', 'NoRt', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('norw', 'NoRw', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kodepos', 'Kodepos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Data Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kelurahanpenduduk', 'Kelurahanpenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kecamatanpenduduk', 'Kecamatanpenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kabupatenpenduduk', 'Kabupatenpenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        $this->form_validation->set_rules('provinsipenduduk', 'Provinsipenduduk', 'required', [
            'required' => 'Data Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/index', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_spektp' => $this->input->post('nospektp'),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'status_kawin' => $this->input->post('statuskawin'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'kelurahan' => $this->input->post('kelurahanpenduduk'),
                    'kecamatan' => $this->input->post('kecamatanpenduduk'),
                    'kabupaten' => $this->input->post('kabupatenpenduduk'),
                    'provinsi' => $this->input->post('provinsipenduduk'),
                    'date_created' => time()
                ];
            $this->db->insert('spektp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan');
        }
    }

    public function spektp_detail()
    {
        $data['title'] = 'SP EKTP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['spektp'] = $this->pelayanan_model->tampil_spektp('spektp')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/index', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function spektp_ubah()
    {
        $data['title'] = 'SP EKTP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['spektp'] = $this->pelayanan_model->tampil_spektp('spektp')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'Terlalu Pendek!',
            'max_length' => 'Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode_pos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/index', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_spektp' => $this->input->post('no_spektp'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi'),
                    'date_created' => time()
                ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('spektp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan');
        }
    }

    public function spektp_hapus($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('spektp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('pelayanan');
    }

    public function spektp_print($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_spektp($id);
        $this->load->view('pelayanan/export/spektp_print', $data);
    }

    public function spektp_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_spektp($id);
        $this->load->view('pelayanan/export/spektp_pdf', $data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("pendaftaran" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    /////////////////////////////////////////////////////////////////////////////////////////////

    //////////////////////////////////////////domisili///////////////////////////////////////////
    public function domisili()
    {
        $data['title'] = 'SK Domisili';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['domisili'] = $this->pelayanan_model->tampil_domisili('domisili')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/domisili', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function domisili_tambah()
    {
        $data['title'] = 'SK Domisili';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['domisili'] = $this->pelayanan_model->tampil_domisili('domisili')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
        $data['pendidikan'] = $this->db->get('tb_pendidikan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
            'required' => 'Nomor Surat Masih Kosong!',
        ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Nomor Nik Masih Kosong!',
            'min_length' => 'Nik Terlalu Pendek!',
            'max_length' => 'Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
            'required' => 'Nama Masih Kosong!',
        ]);
                $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
            'required' => 'Jenis Kelamin Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
            'required' => 'Agama Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
            'required' => 'Pendidikan Terakhir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('statuskawin', 'StatusKawin', 'required', [
            'required' => 'Status Pernikahan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
            'required' => 'Warga Negara Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
            'required' => 'Pekerjaan Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
            'required' => 'Alamat Masih Kosong!',
        ]);
        $this->form_validation->set_rules('nort', 'nort', 'required', [
            'required' => 'Nomor RT Masih Kosong!',
        ]);
        $this->form_validation->set_rules('norw', 'norw', 'required', [
            'required' => 'Nomor RW Masih Kosong!',
        ]);
        $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error


        //form validation insert   
       if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/domisili', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
          
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'kode_surat' => $this->Pelayanan_model->CreateCode_skd(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'status_kawin' => $this->input->post('statuskawin'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_surat' => "SK Domisili",
                    'date_created' => date('Y-m-d')
                ];
            $data2 =
                [  
                    'no_surat' => $this->input->post('no_surat'),
                    'kode_surat' => $this->Pelayanan_model->CreateCode_skd(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'status_kawin' => $this->input->post('statuskawin'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_surat' => "SK Domisili",
                    'date_created' => date('Y-m-d')
                ];
            $this->db->insert('domisili', $data);
            $this->db->insert('pemohon', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/domisili');
        }
    }

    public function domisili_detail()
    {
        $data['title'] = 'SK Domisili';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['domisili'] = $this->pelayanan_model->tampil_domisili('domisili')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/index', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function domisili_ubah($kode_surat)
    {
        $data['title'] = 'SK Domisili';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['domisili'] = $this->pelayanan_model->tampil_domisili('domisili')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/domisili', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'date_created' => date('Y-m-d')
                ];
            
            $where = array(
                'kode_surat' => $this->input->post('kode_surat')
            );

            // data dan where untuk tabel domisili dan pemohon
            // data2 dan where2 untuk tabel penduduk

            $this->pelayanan_model->update_data($where,$data,'domisili');
            $this->pelayanan_model->update_data($where,$data,'pemohon');
            //$this->pelayanan_model->update_data($where2,$data2,'penduduk');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/domisili');
        }
    }

    public function domisili_hapus($kode_surat)
    {
        $this->db->trans_start();
        $this->db->delete('domisili', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('pelayanan/domisili');
    }
    
    public function domisili_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_domisili($id);
        
        $this->load->view('pelayanan/export/domisili_pdf', $data);
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'Portait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("sk domisili" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    /////////////////////////////////////////////////////////////////////////////////////////////

    /////////////////// SK IZIN ORANG TUA /////////////////////////////////////////
    public function sk_izin_orang_tua()
    {
        $data['title'] = 'SK Izin Orang Tua';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_izin_orang_tua'] = $this->pelayanan_model->tampil_sk_izin_orang_tua('sk_izin_orang_tua')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_izin_orang_tua', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_izin_orang_tua_tambah()
    {
        $data['title'] = 'SK Izin Orang Tua';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_izin_orang_tua'] = $this->pelayanan_model->tampil_sk_izin_orang_tua('sk_izin_orang_tua')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
            'required' => 'Nomor Surat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Nomor Nik Pemohon Masih Kosong!',
            'min_length' => 'Nik Terlalu Pendek!',
            'max_length' => 'Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'Namapenduduk', 'required', [
            'required' => 'Nama Pemohon Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempatlahir', 'Tempatlahir', 'required', [
            'required' => 'Tempat Lahir Pemohon Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggallahir', 'Tanggallahir', 'required', [
            'required' => 'Tanggal Lahir Pemohon Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required', [
            'required' => 'Jenis Kelamin Pemohon Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'Agamapenduduk', 'required', [
            'required' => 'Agama Pemohon Masih Kosong!'
        ]);
        $this->form_validation->set_rules('statuskawin', 'Statuskawin', 'required', [
            'required' => 'Status Pernikahan Pemohon Masih Kosong!'
        ]);
        $this->form_validation->set_rules('warganegara', 'warganegara', 'required', [
            'required' => 'Status Warga Negara Pemohon Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
            'required' => 'Pendidikan Pemohon Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'Pekerjaanpenduduk', 'required', [
            'required' => 'Pekerjaan Pemohon Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'Alamatpenduduk', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nort', 'NoRt', 'required', [
            'required' => 'Nomor RT Masih Kosong!'
        ]);
        $this->form_validation->set_rules('norw', 'NoRw', 'required', [
            'required' => 'Nomor RW Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kodepos', 'Kodepos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('nama_ayah', 'Nama_Ayah', 'required', [
            'required' => 'Nama Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempat_lahir_ayah', 'Tempat_Lahir_Ayah', 'required', [
            'required' => 'Tempat Lahir Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_ayah', 'Tanggal_Lahir_Ayah', 'required', [
            'required' => 'Tanggal Lahir Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan_Ayah', 'required', [
            'required' => 'Pekerjaan Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_ibu', 'Nama_Ibu', 'required', [
            'required' => 'Nama Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempat_lahir_ibu', 'Tempat_Lahir_Ibu', 'required', [
            'required' => 'Tempat Lahir Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_ibu', 'Tanggal_Lahir_Ibu', 'required', [
            'required' => 'Tanggal Lahir Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan_Ibu', 'required', [
            'required' => 'Pekerjaan Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
            'required' => 'Keterangan Masih Kosong!'
        ]);
        //batas form validasi pesan error


        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_izin_orang_tua', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'kode_surat' => $this->Pelayanan_model->CreateCode_skiot(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'status_kawin' => $this->input->post('statuskawin'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                    'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                    'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'keterangan' => $this->input->post('keterangan'),
                    'nama_surat' => "SK Izin Orang Tua",
                    'date_created' => date('Y-m-d')
                ];
            $data2 =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'kode_surat' => $this->Pelayanan_model->CreateCode_skiot(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'status_kawin' => $this->input->post('statuskawin'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_surat' => "SK Izin Orang Tua",
                    'date_created' => date('Y-m-d')
                ];
            $this->db->insert('sk_izin_orang_tua', $data);
            $this->db->insert('pemohon', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/sk_izin_orang_tua');
        }
    }

    public function sk_izin_orang_tua_detail()
    {
        $data['title'] = 'SK Izin Orang Tua';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_izin_orang_tua'] = $this->pelayanan_model->tampil_sk_izin_orang_tua('sk_izin_orang_tua')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_izin_orang_tua', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_izin_orang_tua_ubah($kode_surat)
    {
        $data['title'] = 'SK Izin Orang Tua';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_izin_orang_tua'] = $this->pelayanan_model->tampil_sk_izin_orang_tua('sk_izin_orang_tua')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_izin_orang_tua', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                    'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                    'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'keterangan' => $this->input->post('keterangan'),
                    'date_created' => date('Y-m-d')
                ];
            $data2 =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'nama_surat' => "SK Izin Orang Tua",
                    'date_created' => date('Y-m-d')
                ];
            $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                $this->pelayanan_model->update_data($where,$data,'sk_izin_orang_tua');
                $this->pelayanan_model->update_data($where,$data2,'pemohon');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
              redirect('pelayanan/sk_izin_orang_tua');
        }
    }

    public function sk_izin_orang_tua_hapus($kode_surat)
    {
        $this->db->trans_start();
        $this->db->delete('sk_izin_orang_tua', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
           redirect('pelayanan/sk_izin_orang_tua');
    }
    
    public function sk_izin_orang_tua_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_sk_izin_orang_tua($id);
        
        $this->load->view('pelayanan/export/sk_izin_orang_tua_pdf', $data);
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("sk izin orang tua" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    //////////////////////////////////////////////////////////////////////

    ///////////////////////////////KELAHIRAN//////////////////////////////////
    public function sk_kelahiran()
    {
        $data['title'] = 'SK Kelahiran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_kelahiran'] = $this->pelayanan_model->tampil_sk_kelahiran('sk_kelahiran')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_kelahiran', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_kelahiran_tambah()
    {
        $data['title'] = 'SK Kelahiran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_kelahiran'] = $this->pelayanan_model->tampil_sk_kelahiran('sk_kelahiran')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
            'required' => 'Nomor Surat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Nomor Nik Masih Kosong!',
            'min_length' => 'Nomor Nik Terlalu Pendek!',
            'max_length' => 'Nomor Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'Namapenduduk', 'required', [
            'required' => 'Nama Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
            'required' => 'Tempat Lahir Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
            'required' => 'Tanggal Lahir Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
            'required' => 'Agama Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
            'required' => 'Pendidikan Terakhir Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
            'required' => 'Warga Negara Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'Pekerjaanpenduduk', 'required', [
            'required' => 'Pekerjaan Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'Alamatpenduduk', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nort', 'NoRt', 'required', [
            'required' => 'Nomor RT Masih Kosong!'
        ]);
        $this->form_validation->set_rules('norw', 'NoRw', 'required', [
            'required' => 'Nomor RW Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kodepos', 'Kodepos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('nama_ibu', 'Nama_Ibu', 'required', [
            'required' => 'Nama Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempat_lahir_ibu', 'Tempat_Lahir_Ibu', 'required', [
            'required' => 'Tempat Lahir Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_ibu', 'Tanggal_Lahir_Ibu', 'required', [
            'required' => 'Tanggal Lahir Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agama_ibu', 'Agama_Ibu', 'required', [
            'required' => 'Agama Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pendidikan_terakhir_ibu', 'Pendidikan_Terakhir_Ibu', 'required', [
            'required' => 'Pendidikan Terakhir Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('warga_negara_ibu', 'Warga_Negara_Ibu', 'required', [
            'required' => 'Warga Negara Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan_Ibu', 'required', [
            'required' => 'Pekerjaan Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_anak', 'Nama_Anak', 'required', [
            'required' => 'Nama Anak Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin_anak', 'Jenis_Kelamin_anak', 'required', [
            'required' => 'Jenis Kelamin Anak Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempat_lahir_anak', 'Tempat_Lahir_Anak', 'required', [
            'required' => 'Tempat Lahir Anak Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_anak', 'Tanggal_Lahir_Anak', 'required', [
            'required' => 'Tanggal Lahir Anak Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jam', 'Jam', 'required', [
            'required' => 'Jam Lahir Anak Masih Kosong!'
        ]);

        //batas form validasi pesan error


        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_kelahiran', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'kode_surat' => $this->Pelayanan_model->CreateCode_skk(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => "Laki - laki",
                    'agama' => $this->input->post('agamapenduduk'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                    'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                    'agama_ibu' => $this->input->post('agama_ibu'),
                    'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu'),
                    'warga_negara_ibu' => $this->input->post('warga_negara_ibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'nama_anak' => $this->input->post('nama_anak'),
                    'jenis_kelamin_anak' => $this->input->post('jenis_kelamin_anak'),
                    'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
                    'tanggal_lahir_anak' => $this->input->post('tanggal_lahir_anak'),
                    'jam' => $this->input->post('jam'),
                    'nama_surat' => "SK Kelahiran",
                    'date_created' => date('Y-m-d')
                ];
            $data2 =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'kode_surat' => $this->Pelayanan_model->CreateCode_skk(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => "Laki - laki",
                    'agama' => $this->input->post('agamapenduduk'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'status_kawin' => "Menikah",
                    'warga_negara' => $this->input->post('warganegara'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_surat' => "SK Kelahiran",
                    'date_created' => date('Y-m-d')
                ];
            $this->db->insert('sk_kelahiran', $data);
            $this->db->insert('pemohon', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/sk_kelahiran');
        }
    }

    public function sk_kelahiran_detail()
    {
        $data['title'] = 'SK Kelahiran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_kelahiran'] = $this->pelayanan_model->tampil_sk_kelahiran('sk_kelahiran')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_kelahiran', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_kelahiran_ubah($kode_surat)
    {
        $data['title'] = 'SK Kelahiran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_kelahiran'] = $this->pelayanan_model->tampil_sk_kelahiran('sk_kelahiran')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_kelahiran', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => "Laki - laki",
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                    'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                    'agama_ibu' => $this->input->post('agama_ibu'),
                    'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu'),
                    'warga_negara_ibu' => $this->input->post('warga_negara_ibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'nama_anak' => $this->input->post('nama_anak'),
                    'jenis_kelamin_anak' => $this->input->post('jenis_kelamin_anak'),
                    'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
                    'tanggal_lahir_anak' => $this->input->post('tanggal_lahir_anak'),
                    'jam' => $this->input->post('jam'),
                    'date_created' => date('Y-m-d')
                ];
            $data2 =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'jenis_kelamin' => "Laki - laki",
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => "Menikah",
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'date_created' => date('Y-m-d')
                ];
            $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                $this->pelayanan_model->update_data($where,$data,'sk_kelahiran');
                $this->pelayanan_model->update_data($where,$data2,'pemohon');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
              redirect('pelayanan/sk_kelahiran');
        }
    }

    public function sk_kelahiran_hapus($kode_surat)
    {
        $this->db->trans_start();
        $this->db->delete('sk_kelahiran', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
           redirect('pelayanan/sk_kelahiran');
    }
    
    public function sk_kelahiran_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_sk_kelahiran($id);
        
        $this->load->view('pelayanan/export/sk_kelahiran_pdf', $data);
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("sk kelahiran" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    //////////////////////////////////////////////////////////////////////////

    //////////////////////////////SK Pindah////////////////////////////////////
    public function sk_pindah()
    {
        $data['title'] = 'SK Pindah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_pindah'] = $this->pelayanan_model->tampil_sk_pindah('sk_pindah')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_pindah', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_pindah_tambah()
    {
        $data['title'] = 'SK Pindah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_pindah'] = $this->pelayanan_model->tampil_sk_pindah('sk_pindah')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
            'required' => 'Nomor Surat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Nomor Nik Masih Kosong!',
            'min_length' => 'Nik Terlalu Pendek!',
            'max_length' => 'Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
            'required' => 'Nama Masih Kosong!',
        ]);
                $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
            'required' => 'Jenis Kelamin Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
            'required' => 'Agama Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
            'required' => 'Pendidikan Terakhir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('statuskawin', 'StatusKawin', 'required', [
            'required' => 'Status Pernikahan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
            'required' => 'Warga Negara Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
            'required' => 'Pekerjaan Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
            'required' => 'Alamat Masih Kosong!',
        ]);
        $this->form_validation->set_rules('nort', 'nort', 'required', [
            'required' => 'Nomor RT Masih Kosong!',
        ]);
        $this->form_validation->set_rules('norw', 'norw', 'required', [
            'required' => 'Nomor RW Masih Kosong!',
        ]);
        $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('alamat_baru', 'alamat_baru', 'required', [
            'required' => 'Alamat Baru Masih Kosong!',
        ]);
        $this->form_validation->set_rules('no_rt_baru', 'no_rt_baru', 'required', [
            'required' => 'Nomor RT Baru Masih Kosong!',
        ]);
        $this->form_validation->set_rules('no_rw_baru', 'no_rw_baru', 'required', [
            'required' => 'Nomor RW Baru Masih Kosong!',
        ]);
        $this->form_validation->set_rules('kode_pos_baru', 'Kode_Pos_Baru', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Baru Masih Kosong!',
            'min_length' => 'kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error


        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_pindah', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
            [
                'no_surat' => $this->input->post('no_surat'),
                'kode_surat' => $this->Pelayanan_model->CreateCode_skp(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'status_kawin' => $this->input->post('statuskawin'),
                'warga_negara' => $this->input->post('warganegara'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'alamat_baru' => $this->input->post('alamat_baru'),
                'no_rt_baru' => $this->input->post('no_rt_baru'),
                'no_rw_baru' => $this->input->post('no_rw_baru'),
                'kode_pos_baru' => $this->input->post('kode_pos_baru'),
                'nama_surat' => "SK Pindah",
                'pengikut' => $this->input->post('pengikut'),
                'date_created' => date('Y-m-d')
            ];
        $data2 =
            [  
                'no_surat' => $this->input->post('no_surat'),
                'kode_surat' => $this->Pelayanan_model->CreateCode_skp(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'status_kawin' => $this->input->post('statuskawin'),
                'warga_negara' => $this->input->post('warganegara'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'nama_surat' => "SK Pindah",
                'date_created' => date('Y-m-d')
            ];
            $this->db->insert('sk_pindah', $data);
            $this->db->insert('pemohon', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/sk_pindah');
        }
    }

    public function sk_pindah_detail()
    {
        $data['title'] = 'SK Pindah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_pindah'] = $this->pelayanan_model->tampil_sk_pindah('sk_pindah')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_pindah', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_pindah_ubah($kode_surat)
    {
        $data['title'] = 'SK Pindah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_pindah'] = $this->pelayanan_model->tampil_sk_pindah('sk_pindah')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_pindah', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),  
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'alamat_baru' => $this->input->post('alamat_baru'),
                    'no_rt_baru' => $this->input->post('no_rt_baru'),
                    'no_rw_baru' => $this->input->post('no_rw_baru'),
                    'kode_pos_baru' => $this->input->post('kode_pos_baru'),
                    'pengikut' => $this->input->post('pengikut'),
                    'date_created' => date('Y-m-d')
                ];
            $data2 =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'date_created' => date('Y-m-d')
                ];
            $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                $this->pelayanan_model->update_data($where,$data,'sk_pindah');
                $this->pelayanan_model->update_data($where,$data2,'pemohon');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
              redirect('pelayanan/sk_pindah');
        }
    }

    public function sk_pindah_hapus($kode_surat)
    {
        $this->db->trans_start();
        $this->db->delete('sk_pindah', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
           redirect('pelayanan/sk_pindah');
    }
    
    public function sk_pindah_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_sk_pindah($id);
        
        $this->load->view('pelayanan/export/sk_pindah_pdf', $data);
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("sk pindah" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    ////////////////////////////////////////////////////////////////////////////

    //////////////////////////////SK Sudah Menikah//////////////////////////////
    public function sk_sudah_menikah()
    {
        $data['title'] = 'SK Sudah Menikah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_sudah_menikah'] = $this->pelayanan_model->tampil_sk_sudah_menikah('sk_sudah_menikah')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_sudah_menikah', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_sudah_menikah_tambah()
    {
        $data['title'] = 'SK Sudah Menikah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_sudah_menikah'] = $this->pelayanan_model->tampil_sk_sudah_menikah('sk_sudah_menikah')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
            'required' => 'Nomor Surat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Nomor NIK Masih Kosong!',
            'min_length' => 'Nik Terlalu Pendek!',
            'max_length' => 'Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
            'required' => 'Nama Masih Kosong!',
        ]);
                $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
            'required' => 'Jenis Kelamin Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
            'required' => 'Agama Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
            'required' => 'Warga Negara Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
            'required' => 'Pendidikan Terakhir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
            'required' => 'Pekerjaan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('nama_pasangan', 'Nama_Pasangan', 'required', [
            'required' => 'Nama Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
            'required' => 'Alamat Masih Kosong!',
        ]);
        $this->form_validation->set_rules('nort', 'nort', 'required', [
            'required' => 'Nomor RT Masih Kosong!',
        ]);
        $this->form_validation->set_rules('norw', 'norw', 'required', [
            'required' => 'Nomor RW Masih Kosong!',
        ]);
        $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error


        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_sudah_menikah', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
            [
                'no_surat' => $this->input->post('no_surat'),  
                'kode_surat' => $this->Pelayanan_model->CreateCode_sksm(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'status_kawin' => "Menikah",
                'warga_negara' => $this->input->post('warganegara'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'nama_pasangan' => $this->input->post('nama_pasangan'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'nama_surat' => "SK Sudah Menikah",
                'date_created' => date('Y-m-d')
            ];
        $data2 =
            [  
                'no_surat' => $this->input->post('no_surat'),
                'kode_surat' => $this->Pelayanan_model->CreateCode_sksm(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'status_kawin' => "Menikah",
                'warga_negara' => $this->input->post('warganegara'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'nama_surat' => "SK Sudah Menikah",
                'date_created' => date('Y-m-d')
            ];
            $this->db->insert('sk_sudah_menikah', $data);
            $this->db->insert('pemohon', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/sk_sudah_menikah');
        }
    }

    public function sk_sudah_menikah_detail()
    {
        $data['title'] = 'SK Sudah Menikah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_sudah_menikah'] = $this->pelayanan_model->tampil_sk_sudah_menikah('sk_sudah_menikah')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_sudah_menikah', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_sudah_menikah_ubah($kode_surat)
    {
        $data['title'] = 'SK Sudah Menikah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_sudah_menikah'] = $this->pelayanan_model->tampil_sk_sudah_menikah('sk_sudah_menikah')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_sudah_menikah', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),  
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => "Menikah",
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'nama_pasangan' => $this->input->post('nama_pasangan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'date_created' => date('Y-m-d')
                ];

            $data2 =
                [
                'no_surat' => $this->input->post('no_surat'), 
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'status_kawin' => $this->input->post('statuskawin'),
                'warga_negara' => $this->input->post('warganegara'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'date_created' => date('Y-m-d')
                ];

            $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                $this->pelayanan_model->update_data($where,$data,'sk_sudah_menikah');
                $this->pelayanan_model->update_data($where,$data2,'pemohon');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
              redirect('pelayanan/sk_sudah_menikah');
        }
    }

    public function sk_sudah_menikah_hapus($kode_surat)
    {
        $this->db->trans_start();
        $this->db->delete('sk_sudah_menikah', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
           redirect('pelayanan/sk_sudah_menikah');
    }
    
    public function sk_sudah_menikah_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_sk_sudah_menikah($id);
        
        $this->load->view('pelayanan/export/sk_sudah_menikah_pdf', $data);
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("sk pindah" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    ///////////////////////////////////////////////////////////////////////////
    
    //////////////////////////////SK Belum Menikah//////////////////////////////
    public function sk_belum_menikah()
    {
        $data['title'] = 'SK Belum Menikah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_belum_menikah'] = $this->pelayanan_model->tampil_sk_belum_menikah('sk_belum_menikah')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_belum_menikah', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_belum_menikah_tambah()
    {
        $data['title'] = 'SK Belum Menikah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_belum_menikah'] = $this->pelayanan_model->tampil_sk_belum_menikah('sk_belum_menikah')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
            'required' => 'Nomor Surat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Nomor Nik Masih Kosong!',
            'min_length' => 'Nik Terlalu Pendek!',
            'max_length' => 'Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
            'required' => 'Nama Masih Kosong!',
        ]);
                $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
            'required' => 'Jenis Kelamin Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
            'required' => 'Agama Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
            'required' => 'Pendidikan Terakhir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('statuskawin', 'StatusKawin', 'required', [
            'required' => 'Status Pernikahan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
            'required' => 'Warga Negara Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
            'required' => 'Pekerjaan Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
            'required' => 'Alamat Masih Kosong!',
        ]);
        $this->form_validation->set_rules('nort', 'nort', 'required', [
            'required' => 'Nomor RT Masih Kosong!',
        ]);
        $this->form_validation->set_rules('norw', 'norw', 'required', [
            'required' => 'Nomor RW Masih Kosong!',
        ]);
        $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error


        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_belum_menikah', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
            [
                'no_surat' => $this->input->post('no_surat'),
                'kode_surat' => $this->Pelayanan_model->CreateCode_skbm(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'status_kawin' => $this->input->post('statuskawin'),
                'warga_negara' => $this->input->post('warganegara'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'nama_surat' => "SK Belum Menikah",
                'date_created' => date('Y-m-d')
            ];
        $data2 =
            [  
                'no_surat' => $this->input->post('no_surat'),
                'kode_surat' => $this->Pelayanan_model->CreateCode_skbm(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'status_kawin' => $this->input->post('statuskawin'),
                'warga_negara' => $this->input->post('warganegara'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'nama_surat' => "SK Belum Menikah",
                'date_created' => date('Y-m-d')
            ];
            $this->db->insert('sk_belum_menikah', $data);
            $this->db->insert('pemohon', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/sk_belum_menikah');
        }
    }

    public function sk_belum_menikah_detail()
    {
        $data['title'] = 'SK Belum Menikah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_belum_menikah'] = $this->pelayanan_model->tampil_sk_belum_menikah('sk_belum_menikah')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_belum_menikah', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_belum_menikah_ubah($kode_surat)
    {
        $data['title'] = 'SK Belum Menikah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_belum_menikah'] = $this->pelayanan_model->tampil_sk_belum_menikah('sk_belum_menikah')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_belum_menikah', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),  
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'date_created' => date('Y-m-d')
                ];
            $data2 =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'date_created' => date('Y-m-d')
                ];
            $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                $this->pelayanan_model->update_data($where,$data,'sk_belum_menikah');
                $this->pelayanan_model->update_data($where,$data2,'pemohon');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
              redirect('pelayanan/sk_belum_menikah');
        }
    }

    public function sk_belum_menikah_hapus($kode_surat)
    {
        $this->db->trans_start();
        $this->db->delete('sk_belum_menikah', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
           redirect('pelayanan/sk_belum_menikah');
    }
    
    public function sk_belum_menikah_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_sk_belum_menikah($id);
        
        $this->load->view('pelayanan/export/sk_belum_menikah_pdf', $data);
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("sk belum menikah" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    /////////////////////////////////////////////////////////////////////////////////////////////

    /////////////////////////SK TIDAK MAMPU////////////////////////////////////////////////////
    public function sk_tidak_mampu()
    {
        $data['title'] = 'SK Tidak Mampu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_tidak_mampu'] = $this->pelayanan_model->tampil_sk_tidak_mampu('sk_tidak_mampu')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_tidak_mampu', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_tidak_mampu_tambah()
    {
        $data['title'] = 'SK Tidak Mampu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_tidak_mampu'] = $this->pelayanan_model->tampil_sk_tidak_mampu('sk_tidak_mampu')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
            'required' => 'Nomor Surat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Nomor Nik Masih Kosong!',
            'min_length' => 'Nik Terlalu Pendek!',
            'max_length' => 'Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
            'required' => 'Nama Masih Kosong!',
        ]);
                $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
            'required' => 'Jenis Kelamin Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
            'required' => 'Agama Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
            'required' => 'Pendidikan Terakhir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('statuskawin', 'StatusKawin', 'required', [
            'required' => 'Status Pernikahan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
            'required' => 'Warga Negara Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
            'required' => 'Pekerjaan Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
            'required' => 'Alamat Masih Kosong!',
        ]);
        $this->form_validation->set_rules('nort', 'nort', 'required', [
            'required' => 'Nomor RT Masih Kosong!',
        ]);
        $this->form_validation->set_rules('norw', 'norw', 'required', [
            'required' => 'Nomor RW Masih Kosong!',
        ]);
        $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error


        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_tidak_mampu', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
            [
                'no_surat' => $this->input->post('no_surat'),
                'kode_surat' => $this->Pelayanan_model->CreateCode_sktm(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'status_kawin' => $this->input->post('statuskawin'),
                'warga_negara' => $this->input->post('warganegara'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'nama_surat' => "SK Tidak Mampu",
                'date_created' => date('Y-m-d')
            ];
        $data2 =
            [  
                'no_surat' => $this->input->post('no_surat'),
                'kode_surat' => $this->Pelayanan_model->CreateCode_sktm(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'status_kawin' => $this->input->post('statuskawin'),
                'warga_negara' => $this->input->post('warganegara'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'nama_surat' => "SK Tidak Mampu",
                'date_created' => date('Y-m-d')
            ];
            $this->db->insert('sk_tidak_mampu', $data);
            $this->db->insert('pemohon', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/sk_tidak_mampu');
        }
    }

    public function sk_tidak_mampu_detail()
    {
        $data['title'] = 'SK Tidak Mampu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_tidak_mampu'] = $this->pelayanan_model->tampil_sk_tidak_mampu('sk_tidak_mampu')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_tidak_mampu', $data);
        $this->load->view('layout/footer_pelayanan');
    }

    public function sk_tidak_mampu_ubah($kode_surat)
    {
        $data['title'] = 'SK Tidak Mampu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_tidak_mampu'] = $this->pelayanan_model->tampil_sk_tidak_mampu('sk_tidak_mampu')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_tidak_mampu', $data);
            $this->load->view('layout/footer_pelayanan');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'no_surat' => $this->input->post('no_surat'),  
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'date_created' => date('Y-m-d')
                ];
            $data2 =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'status_kawin' => $this->input->post('status_kawin'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'date_created' => date('Y-m-d')
                ];
            $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                $this->pelayanan_model->update_data($where,$data,'sk_tidak_mampu');
                $this->pelayanan_model->update_data($where,$data2,'pemohon');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
              redirect('pelayanan/sk_tidak_mampu');
        }
    }

    public function sk_tidak_mampu_hapus($kode_surat)
    {
        $this->db->trans_start();
        $this->db->delete('sk_tidak_mampu', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
           redirect('pelayanan/sk_tidak_mampu');
    }
    
    public function sk_tidak_mampu_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_sk_tidak_mampu($id);
        
        $this->load->view('pelayanan/export/sk_tidak_mampu_pdf', $data);
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("sk tidak mampu" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    /////////////////////////SK USAHA////////////////////////////////////////////////////
        public function sk_usaha()
        {
            $data['title'] = 'SK Usaha';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_usaha'] = $this->pelayanan_model->tampil_sk_usaha('sk_usaha')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_usaha', $data);
            $this->load->view('layout/footer_pelayanan');
        }
    
        public function sk_usaha_tambah()
        {
            $data['title'] = 'SK Usaha';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_usaha'] = $this->pelayanan_model->tampil_sk_usaha('sk_usaha')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
                'required' => 'Nomor Surat Masih Kosong!'
            ]);
            $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
                'required' => 'Nomor Nik Masih Kosong!',
                'min_length' => 'Nik Terlalu Pendek!',
                'max_length' => 'Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
                'required' => 'Nama Masih Kosong!',
            ]);
                    $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
                'required' => 'Tempat Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
                'required' => 'Tanggal Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
                'required' => 'Jenis Kelamin Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
                'required' => 'Agama Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
                'required' => 'Pendidikan Terakhir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('statuskawin', 'StatusKawin', 'required', [
                'required' => 'Status Pernikahan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
                'required' => 'Warga Negara Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
                'required' => 'Pekerjaan Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
                'required' => 'Alamat Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nort', 'nort', 'required', [
                'required' => 'Nomor RT Masih Kosong!',
            ]);
            $this->form_validation->set_rules('norw', 'norw', 'required', [
                'required' => 'Nomor RW Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
                'required' => 'Kode Pos Masih Kosong!',
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
    
            //form validation insert
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_usaha', $data);
                $this->load->view('layout/footer_pelayanan');
            } else {
                $data =
                [
                    'no_surat' => $this->input->post('no_surat'),  
                    'kode_surat' => $this->Pelayanan_model->CreateCode_sktm(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'status_kawin' => $this->input->post('statuskawin'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'bidang_usaha' => $this->input->post('bidang_usaha'),
                    'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                    'status_perusahaan' => $this->input->post('status_perusahaan'),
                    'golongan_usaha' => $this->input->post('golongan_usaha'),    
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_surat' => "SK Usaha",
                    'date_created' => date('Y-m-d')
                ];
            $data2 =
                [  
                    'no_surat' => $this->input->post('no_surat'),  
                    'kode_surat' => $this->Pelayanan_model->CreateCode_sktm(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'status_kawin' => $this->input->post('statuskawin'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_surat' => "SK Usaha",
                    'date_created' => date('Y-m-d')
                ];
                $this->db->insert('sk_usaha', $data);
                $this->db->insert('pemohon', $data2);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/sk_usaha');
            }
        }
    
        public function sk_usaha_detail()
        {
            $data['title'] = 'SK Usaha';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_usaha'] = $this->pelayanan_model->tampil_sk_usaha('sk_usaha')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_usaha', $data);
            $this->load->view('layout/footer_pelayanan');
        }
    
        public function sk_usaha_ubah($kode_surat)
        {
            $data['title'] = 'SK Usaha';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_usaha'] = $this->pelayanan_model->tampil_sk_usaha('sk_usaha')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
                'min_length' => 'No Nik Terlalu Pendek!',
                'max_length' => 'No Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
            //form validation
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_usaha', $data);
                $this->load->view('layout/footer_pelayanan');
            } else {
                $data =
                    [
                        'no_surat' => $this->input->post('no_surat'),  
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'status_kawin' => $this->input->post('status_kawin'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'bidang_usaha' => $this->input->post('bidang_usaha'),
                        'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                        'status_perusahaan' => $this->input->post('status_perusahaan'),
                        'golongan_usaha' => $this->input->post('golongan_usaha'),        
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'date_created' => date('Y-m-d')
                    ];
                $data2 =
                    [
                        'no_surat' => $this->input->post('no_surat'),  
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'status_kawin' => $this->input->post('status_kawin'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'date_created' => date('Y-m-d')
                    ];
                $where = array(
                        'kode_surat' => $this->input->post('kode_surat')
                    );
        
                    $this->pelayanan_model->update_data($where,$data,'sk_usaha');
                    $this->pelayanan_model->update_data($where,$data2,'pemohon');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                  redirect('pelayanan/sk_usaha');
            }
        }
    
        public function sk_usaha_hapus($kode_surat)
        {
            $this->db->trans_start();
            $this->db->delete('sk_usaha', array('kode_surat' => $kode_surat));
            $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
               redirect('pelayanan/sk_usaha');
        }
        
        public function sk_usaha_pdf($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_sk_usaha($id);
            
            $this->load->view('pelayanan/export/sk_usaha_pdf', $data);
            $this->load->library('dompdf_gen');
            $paper_size = 'A4';
            $orientation = 'portrait';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);
    
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $sekarang = date("d:F:Y:h:m:s");
            $this->dompdf->stream("sk usaha" . $sekarang . ".pdf", array('Attachment' => 0));
        }
        /////////////////////////SK N(1)////////////////////////////////////////////////////
        public function sk_nsatu()
        {
            $data['title'] = 'SK (N1)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_nsatu'] = $this->pelayanan_model->tampil_sk_nsatu('sk_nsatu')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_nsatu', $data);
            $this->load->view('layout/footer_pelayanan_nsatu');
        }
    
        public function sk_nsatu_tambah()
        {
            $data['title'] = 'SK (N1)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_nsatu'] = $this->pelayanan_model->tampil_sk_nsatu('sk_nsatu')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
                'required' => 'Nomor Surat Masih Kosong!'
            ]);
            $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
                'required' => 'Nomor NIK Masih Kosong!',
                'min_length' => 'NIK Terlalu Pendek!',
                'max_length' => 'NIK Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
                'required' => 'Nama Masih Kosong!',
            ]);
            $this->form_validation->set_rules('calon', 'calon', 'required', [
                'required' => 'Calon Masih Kosong!',
            ]);
            $this->form_validation->set_rules('binbinti', 'BinBinti', 'required', [
                'required' => 'Bin/Binti Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
                'required' => 'Tempat Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
                'required' => 'Tanggal Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
                'required' => 'Jenis Kelamin Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
                'required' => 'Agama Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
                'required' => 'Pendidikan Terakhir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('status', 'Status', 'required', [
                'required' => 'Status Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
                'required' => 'Warga Negara Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
                'required' => 'Pekerjaan Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
                'required' => 'Alamat Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nort', 'nort', 'required', [
                'required' => 'Nomor RT Masih Kosong!',
            ]);
            $this->form_validation->set_rules('norw', 'norw', 'required', [
                'required' => 'Nomor RW Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
                'required' => 'Kode Pos Masih Kosong!',
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('nama_ayah', 'Nama_Ayah', 'required', [
                'required' => 'Nama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempat_lahir_ayah', 'tempat_lahir_ayah', 'required', [
                'required' => 'Tempat Lahir Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggal_lahir_ayah', 'tanggal_lahir_ayah', 'required', [
                'required' => 'Tanggal Lahir Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agama_ayah', 'agama_ayah', 'required', [
                'required' => 'Agama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warga_negara_ayah', 'warga_negara_ayah', 'required', [
                'required' => 'Warga Negara Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaan_ayah', 'pekerjaan_ayah', 'required', [
                'required' => 'Pekerjaan Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required', [
                'required' => 'Nama Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempat_lahir_ibu', 'tempat_lahir_ibu', 'required', [
                'required' => 'Tempat Lahir Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggal_lahir_ibu', 'tanggal_lahir_ibu', 'required', [
                'required' => 'Tanggal Lahir Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agama_ibu', 'agama_ibu', 'required', [
                'required' => 'Agama Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warga_negara_ibu', 'warga_negara_ibu', 'required', [
                'required' => 'Warga Negara Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaan_ibu', 'pekerjaan_ibu', 'required', [
                'required' => 'Pekerjaan Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nama_pasangan', 'nama_pasangan', 'required', [
                'required' => 'Nama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nama_pasangan', 'nama_pasangan', 'required', [
                'required' => 'Nama Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('calon_pasangan', 'calon_pasangan', 'required', [
                'required' => 'Calon Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempat_lahir_pasangan', 'tempat_lahir_pasangan', 'required', [
                'required' => 'Tempat Lahir Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggal_lahir_pasangan', 'tanggal_lahir_pasangan', 'required', [
                'required' => 'Tanggal Lahir Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agama_pasangan', 'agama_pasangan', 'required', [
                'required' => 'Agama Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warga_negara_pasangan', 'warga_negara_pasangan', 'required', [
                'required' => 'Warga Negara Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaan_pasangan', 'pekerjaan_pasangan', 'required', [
                'required' => 'Pekerjaan Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamat_pasangan', 'alamat_pasangan', 'required', [
                'required' => 'Alamat Pasangan Masih Kosong!',
            ]);
            //batas form validasi pesan error
    
    
            //form validation insert
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_nsatu', $data);
                $this->load->view('layout/footer_pelayanan_nsatu');
            } else {
                $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'kode_surat' => $this->Pelayanan_model->CreateCode_sknsatu(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'calon' => $this->input->post('calon'),
                    'binbinti' => $this->input->post('binbinti'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'status_kawin' => "Menikah",
                    'status' => $this->input->post('status'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                    'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                    'agama_ayah' => $this->input->post('agama_ayah'),
                    'warga_negara_ayah' => $this->input->post('warga_negara_ayah'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                    'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                    'agama_ibu' => $this->input->post('agama_ibu'),
                    'warga_negara_ibu' => $this->input->post('warga_negara_ibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'nama_pasangan' => $this->input->post('nama_pasangan'),
                    'tempat_lahir_pasangan' => $this->input->post('tempat_lahir_pasangan'),
                    'tanggal_lahir_pasangan' => $this->input->post('tanggal_lahir_pasangan'),
                    'calon_pasangan' => $this->input->post('calon_pasangan'),
                    'agama_pasangan' => $this->input->post('agama_pasangan'),
                    'warga_negara_pasangan' => $this->input->post('warga_negara_pasangan'),
                    'pekerjaan_pasangan' => $this->input->post('pekerjaan_pasangan'),
                    'alamat_pasangan' => $this->input->post('alamat_pasangan'),
                    'nama_surat' => "SK Nikah (N1)",
                    'date_created' => date('Y-m-d')
                ];
                $this->db->insert('sk_nsatu', $data);
                $this->db->insert('pemohon', $data);
                $this->db->insert('pemohon_nsatu', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/sk_nsatu');
            }
        }
    
        public function sk_nsatu_detail()
        {
            $data['title'] = 'SK (N1)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_nsatu'] = $this->pelayanan_model->tampil_sk_nsatu('sk_nsatu')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_nsatu', $data);
            $this->load->view('layout/footer_pelayanan_nsatu');
        }
    
        public function sk_nsatu_ubah($kode_surat)
        {
            $data['title'] = 'SK (N1)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_nsatu'] = $this->pelayanan_model->tampil_sk_nsatu('sk_nsatu')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

    
            //form validation pesan error
            $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
                'min_length' => 'No Nik Terlalu Pendek!',
                'max_length' => 'No Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
            //form validation
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_nsatu', $data);
                $this->load->view('layout/footer_pelayanan_nsatu');
            } else {
                $data =
                    [
                        'no_surat' => $this->input->post('no_surat'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'calon' => $this->input->post('calon'),
                        'binbinti' => $this->input->post('binbinti'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'status' => $this->input->post('status'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'nama_ayah' => $this->input->post('nama_ayah'),
                        'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                        'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                        'agama_ayah' => $this->input->post('agama_ayah'),
                        'warga_negara_ayah' => $this->input->post('warga_negara_ayah'),
                        'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                        'nama_ibu' => $this->input->post('nama_ibu'),
                        'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                        'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                        'agama_ibu' => $this->input->post('agama_ibu'),
                        'warga_negara_ibu' => $this->input->post('warga_negara_ibu'),
                        'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                        'nama_pasangan' => $this->input->post('nama_pasangan'),
                        'tempat_lahir_pasangan' => $this->input->post('tempat_lahir_pasangan'),
                        'tanggal_lahir_pasangan' => $this->input->post('tanggal_lahir_pasangan'),
                        'calon_pasangan' => $this->input->post('calon_pasangan'),
                        'agama_pasangan' => $this->input->post('agama_pasangan'),
                        'warga_negara_pasangan' => $this->input->post('warga_negara_pasangan'),
                        'pekerjaan_pasangan' => $this->input->post('pekerjaan_pasangan'),
                        'alamat_pasangan' => $this->input->post('alamat_pasangan'),
                        'date_created' => date('Y-m-d')
                        ];  
                $where = array(
                        'kode_surat' => $this->input->post('kode_surat')
                    );
        
                    $this->pelayanan_model->update_data($where,$data,'sk_nsatu');
                    $this->pelayanan_model->update_data($where,$data,'pemohon');
                    $this->pelayanan_model->update_data($where,$data,'pemohon_nsatu');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                  redirect('pelayanan/sk_nsatu');
            }
        }
    
        public function sk_nsatu_hapus($kode_surat)
        {
            $this->db->trans_start();
            $this->db->delete('sk_nsatu', array('kode_surat' => $kode_surat));
            $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
            $this->db->delete('pemohon_nsatu', array('kode_surat' => $kode_surat));
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
               redirect('pelayanan/sk_nsatu');
        }
        
        public function sk_nsatu_pdf($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_sk_nsatu($id);
            
            $this->load->view('pelayanan/export/sk_nsatu_pdf', $data);
            $this->load->library('dompdf_gen');
            $paper_size = 'A4';
            $orientation = 'portrait';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);
    
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $sekarang = date("d:F:Y:h:m:s");
            $this->dompdf->stream("sk nikah (N1)" . $sekarang . ".pdf", array('Attachment' => 0));
        }
        /////////////////////////SK N(2)////////////////////////////////////////////////////
        public function sk_ndua()
        {
            $data['title'] = 'SK (N2)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_ndua'] = $this->pelayanan_model->tampil_sk_ndua('sk_ndua')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_ndua', $data);
            $this->load->view('layout/footer_pelayanan_ndua');
        }
    
        public function sk_ndua_tambah()
        {
            $data['title'] = 'SK Asal (N2)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_ndua'] = $this->pelayanan_model->tampil_sk_ndua('sk_ndua')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
                'required' => 'Nomor Surat Masih Kosong!'
            ]);
            $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
                'required' => 'Nomor Nik Masih Kosong!',
                'min_length' => 'Nik Terlalu Pendek!',
                'max_length' => 'Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
                'required' => 'Nama Masih Kosong!',
            ]);
            $this->form_validation->set_rules('calonpenduduk', 'calonpenduduk', 'required', [
                'required' => 'Calon Masih Kosong!',
            ]);
            $this->form_validation->set_rules('binbinti', 'BinBinti', 'required', [
                'required' => 'Bin/Binti Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
                'required' => 'Tempat Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
                'required' => 'Tanggal Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
                'required' => 'Jenis Kelamin Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
                'required' => 'Agama Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
                'required' => 'Pendidikan Terakhir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('statuspenduduk', 'StatusPenduduk', 'required', [
                'required' => 'Status Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
                'required' => 'Warga Negara Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
                'required' => 'Pekerjaan Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
                'required' => 'Alamat Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nort', 'nort', 'required', [
                'required' => 'Nomor RT Masih Kosong!',
            ]);
            $this->form_validation->set_rules('norw', 'norw', 'required', [
                'required' => 'Nomor RW Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
                'required' => 'Kode Pos Masih Kosong!',
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('namaayah', 'namaayah', 'required', [
                'required' => 'Nama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahirayah', 'tempatlahirayah', 'required', [
                'required' => 'Tempat Lahir Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahirayah', 'tanggallahirayah', 'required', [
                'required' => 'Tanggal Lahir Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamaayah', 'agamaayah', 'required', [
                'required' => 'Agama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegaraayah', 'warganegaraayah', 'required', [
                'required' => 'Warga Negara Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanayah', 'pekerjaanayah', 'required', [
                'required' => 'Pekerjaan Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('namaibu', 'namaibu', 'required', [
                'required' => 'Nama Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahiribu', 'tempatlahiribu', 'required', [
                'required' => 'Tempat Lahir Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahiribu', 'tanggallahiribu', 'required', [
                'required' => 'Tanggal Lahir Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamaibu', 'agamaibu', 'required', [
                'required' => 'Agama Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegaraibu', 'warganegaraibu', 'required', [
                'required' => 'Warga Negara Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanibu', 'pekerjaanibu', 'required', [
                'required' => 'Pekerjaan Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('namapasangan', 'namapasangan', 'required', [
                'required' => 'Nama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('namapasangan', 'namapasangan', 'required', [
                'required' => 'Nama Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('calonpasangan', 'calonpasangan', 'required', [
                'required' => 'Calon Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahirpasangan', 'tempatlahirpasangan', 'required', [
                'required' => 'Tempat Lahir Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahirpasangan', 'tanggallahirpasangan', 'required', [
                'required' => 'Tanggal Lahir Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamapasangan', 'agamapasangan', 'required', [
                'required' => 'Agama Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegarapasangan', 'warganegarapasangan', 'required', [
                'required' => 'Warga Negara Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanpasangan', 'pekerjaanpasangan', 'required', [
                'required' => 'Pekerjaan Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamatpasangan', 'alamatpasangan', 'required', [
                'required' => 'Alamat Pasangan Masih Kosong!',
            ]);
            //batas form validasi pesan error
    
    
            //form validation insert
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_ndua', $data);
                $this->load->view('layout/footer_pelayanan_ndua');
            } else {

                $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'kode_surat' => $this->Pelayanan_model->CreateCode_skndua(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'calon' => $this->input->post('calonpenduduk'),
                    'binbinti' => $this->input->post('binbinti'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'status_kawin' => "Menikah",
                    'status' => $this->input->post('statuspenduduk'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_ayah' => $this->input->post('namaayah'),
                    'tempat_lahir_ayah' => $this->input->post('tempatlahirayah'),
                    'tanggal_lahir_ayah' => $this->input->post('tanggallahirayah'),
                    'agama_ayah' => $this->input->post('agamaayah'),
                    'warga_negara_ayah' => $this->input->post('warganegaraayah'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaanayah'),
                    'nama_ibu' => $this->input->post('namaibu'),
                    'tempat_lahir_ibu' => $this->input->post('tempatlahiribu'),
                    'tanggal_lahir_ibu' => $this->input->post('tanggallahiribu'),
                    'agama_ibu' => $this->input->post('agamaibu'),
                    'warga_negara_ibu' => $this->input->post('warganegaraibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaanibu'),
                    'nama_pasangan' => $this->input->post('namapasangan'),
                    'tempat_lahir_pasangan' => $this->input->post('tempatlahirpasangan'),
                    'tanggal_lahir_pasangan' => $this->input->post('tanggallahirpasangan'),
                    'calon_pasangan' => $this->input->post('calonpasangan'),
                    'agama_pasangan' => $this->input->post('agamapasangan'),
                    'warga_negara_pasangan' => $this->input->post('warganegarapasangan'),
                    'pekerjaan_pasangan' => $this->input->post('pekerjaanpasangan'),
                    'alamat_pasangan' => $this->input->post('alamatpasangan'),
                    'nama_surat' => "SK Asal (N2)",
                    'date_created' => date('Y-m-d')
                ];

                $this->db->insert('sk_ndua', $data);
                $this->db->insert('pemohon', $data);
                $this->db->insert('pemohon_ndua', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/sk_ndua');
            }
        }
    
        public function sk_ndua_detail()
        {
            $data['title'] = 'SK (N2)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_ndua'] = $this->pelayanan_model->tampil_sk_ndua('sk_ndua')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_ndua', $data);
            $this->load->view('layout/footer_pelayanan_ndua');
        }
    
        public function sk_ndua_ubah($kode_surat)
        {
            $data['title'] = 'SK (N2)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_ndua'] = $this->pelayanan_model->tampil_sk_ndua('sk_ndua')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

    
            //form validation pesan error
            $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
                'min_length' => 'No Nik Terlalu Pendek!',
                'max_length' => 'No Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
            //form validation
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_ndua', $data);
                $this->load->view('layout/footer_pelayanan_ndua');
            } else {
                $data =
                    [
                        'no_surat' => $this->input->post('no_surat'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'calon' => $this->input->post('calon'),
                        'binbinti' => $this->input->post('binbinti'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'status' => $this->input->post('status'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'nama_ayah' => $this->input->post('nama_ayah'),
                        'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                        'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                        'agama_ayah' => $this->input->post('agama_ayah'),
                        'warga_negara_ayah' => $this->input->post('warga_negara_ayah'),
                        'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                        'nama_ibu' => $this->input->post('nama_ibu'),
                        'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                        'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                        'agama_ibu' => $this->input->post('agama_ibu'),
                        'warga_negara_ibu' => $this->input->post('warga_negara_ibu'),
                        'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                        'nama_pasangan' => $this->input->post('nama_pasangan'),
                        'tempat_lahir_pasangan' => $this->input->post('tempat_lahir_pasangan'),
                        'tanggal_lahir_pasangan' => $this->input->post('tanggal_lahir_pasangan'),
                        'calon_pasangan' => $this->input->post('calon_pasangan'),
                        'agama_pasangan' => $this->input->post('agama_pasangan'),
                        'warga_negara_pasangan' => $this->input->post('warga_negara_pasangan'),
                        'pekerjaan_pasangan' => $this->input->post('pekerjaan_pasangan'),
                        'alamat_pasangan' => $this->input->post('alamat_pasangan'),
                        'date_created' => date('Y-m-d')
                    ];
                $where = array(
                        'kode_surat' => $this->input->post('kode_surat')
                    );
        
                    $this->pelayanan_model->update_data($where,$data,'sk_ndua');
                    $this->pelayanan_model->update_data($where,$data,'pemohon');
                    $this->pelayanan_model->update_data($where,$data,'pemohon_ndua');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                  redirect('pelayanan/sk_ndua');
            }
        }
    
        public function sk_ndua_hapus($kode_surat)
        {
            $this->db->trans_start();
            $this->db->delete('sk_ndua', array('kode_surat' => $kode_surat));
            $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
               redirect('pelayanan/sk_ndua');
        }
        
        public function sk_ndua_pdf($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_sk_ndua($id);
            $this->load->model('Pelayanan_model');
            
            $this->load->view('pelayanan/export/sk_ndua_pdf', $data);
            $this->load->library('dompdf_gen');
            $paper_size = 'A4';
            $orientation = 'portrait';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);
    
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $sekarang = date("d:F:Y:h:m:s");
            $this->dompdf->stream("sk asal (N2)" . $sekarang . ".pdf", array('Attachment' => 0));
        }
    /////////////////////////SK N(3)////////////////////////////////////////////////////
        public function sk_ntiga()
        {
            $data['title'] = 'SK (N3)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_ntiga'] = $this->pelayanan_model->tampil_sk_ntiga('sk_ntiga')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_ntiga', $data);
            $this->load->view('layout/footer_pelayanan_ntiga');
        }
    
        public function sk_ntiga_tambah()
        {
            $data['title'] = 'SK (N3)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_ntiga'] = $this->pelayanan_model->tampil_sk_ntiga('sk_ntiga')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
           $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
                'required' => 'Nomor Surat Masih Kosong!'
            ]);
            $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
                'required' => 'Nomor Nik Masih Kosong!',
                'min_length' => 'Nik Terlalu Pendek!',
                'max_length' => 'Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
                'required' => 'Nama Masih Kosong!',
            ]);
            $this->form_validation->set_rules('calonpenduduk', 'calonpenduduk', 'required', [
                'required' => 'Calon Masih Kosong!',
            ]);
            $this->form_validation->set_rules('binbinti', 'BinBinti', 'required', [
                'required' => 'Bin/Binti Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
                'required' => 'Tempat Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
                'required' => 'Tanggal Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
                'required' => 'Jenis Kelamin Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
                'required' => 'Agama Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
                'required' => 'Pendidikan Terakhir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('statuspenduduk', 'StatusPenduduk', 'required', [
                'required' => 'Status Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
                'required' => 'Warga Negara Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
                'required' => 'Pekerjaan Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
                'required' => 'Alamat Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nort', 'nort', 'required', [
                'required' => 'Nomor RT Masih Kosong!',
            ]);
            $this->form_validation->set_rules('norw', 'norw', 'required', [
                'required' => 'Nomor RW Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
                'required' => 'Kode Pos Masih Kosong!',
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('namaayah', 'namaayah', 'required', [
                'required' => 'Nama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahirayah', 'tempatlahirayah', 'required', [
                'required' => 'Tempat Lahir Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahirayah', 'tanggallahirayah', 'required', [
                'required' => 'Tanggal Lahir Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamaayah', 'agamaayah', 'required', [
                'required' => 'Agama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegaraayah', 'warganegaraayah', 'required', [
                'required' => 'Warga Negara Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanayah', 'pekerjaanayah', 'required', [
                'required' => 'Pekerjaan Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('namaibu', 'namaibu', 'required', [
                'required' => 'Nama Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahiribu', 'tempatlahiribu', 'required', [
                'required' => 'Tempat Lahir Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahiribu', 'tanggallahiribu', 'required', [
                'required' => 'Tanggal Lahir Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamaibu', 'agamaibu', 'required', [
                'required' => 'Agama Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegaraibu', 'warganegaraibu', 'required', [
                'required' => 'Warga Negara Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanibu', 'pekerjaanibu', 'required', [
                'required' => 'Pekerjaan Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('namapasangan', 'namapasangan', 'required', [
                'required' => 'Nama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('namapasangan', 'namapasangan', 'required', [
                'required' => 'Nama Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('calonpasangan', 'calonpasangan', 'required', [
                'required' => 'Calon Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahirpasangan', 'tempatlahirpasangan', 'required', [
                'required' => 'Tempat Lahir Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahirpasangan', 'tanggallahirpasangan', 'required', [
                'required' => 'Tanggal Lahir Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamapasangan', 'agamapasangan', 'required', [
                'required' => 'Agama Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegarapasangan', 'warganegarapasangan', 'required', [
                'required' => 'Warga Negara Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanpasangan', 'pekerjaanpasangan', 'required', [
                'required' => 'Pekerjaan Pasangan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamatpasangan', 'alamatpasangan', 'required', [
                'required' => 'Alamat Pasangan Masih Kosong!',
            ]);
            //batas form validasi pesan error
    
    
            //form validation insert
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_ntiga', $data);
                $this->load->view('layout/footer_pelayanan_ntiga');
            } else {
                $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'kode_surat' => $this->Pelayanan_model->CreateCode_skntiga(),
                    'nik' => $this->input->post('nonik'),
                    'nama' => $this->input->post('namapenduduk'),
                    'calon' => $this->input->post('calonpenduduk'),
                    'binbinti' => $this->input->post('binbinti'),
                    'tempat_lahir' => $this->input->post('tempatlahir'),
                    'tanggal_lahir' => $this->input->post('tanggallahir'),
                    'jenis_kelamin' => $this->input->post('jeniskelamin'),
                    'agama' => $this->input->post('agamapenduduk'),
                    'status_kawin' => "Menikah",
                    'status' => $this->input->post('statuspenduduk'),
                    'warga_negara' => $this->input->post('warganegara'),
                    'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                    'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                    'alamat' => $this->input->post('alamatpenduduk'),
                    'no_rt' => $this->input->post('nort'),
                    'no_rw' => $this->input->post('norw'),
                    'kode_pos' => $this->input->post('kodepos'),
                    'nama_ayah' => $this->input->post('namaayah'),
                    'tempat_lahir_ayah' => $this->input->post('tempatlahirayah'),
                    'tanggal_lahir_ayah' => $this->input->post('tanggallahirayah'),
                    'agama_ayah' => $this->input->post('agamaayah'),
                    'warga_negara_ayah' => $this->input->post('warganegaraayah'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaanayah'),
                    'nama_ibu' => $this->input->post('namaibu'),
                    'tempat_lahir_ibu' => $this->input->post('tempatlahiribu'),
                    'tanggal_lahir_ibu' => $this->input->post('tanggallahiribu'),
                    'agama_ibu' => $this->input->post('agamaibu'),
                    'warga_negara_ibu' => $this->input->post('warganegaraibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaanibu'),
                    'nama_pasangan' => $this->input->post('namapasangan'),
                    'tempat_lahir_pasangan' => $this->input->post('tempatlahirpasangan'),
                    'tanggal_lahir_pasangan' => $this->input->post('tanggallahirpasangan'),
                    'calon_pasangan' => $this->input->post('calonpasangan'),
                    'agama_pasangan' => $this->input->post('agamapasangan'),
                    'warga_negara_pasangan' => $this->input->post('warganegarapasangan'),
                    'pekerjaan_pasangan' => $this->input->post('pekerjaanpasangan'),
                    'alamat_pasangan' => $this->input->post('alamatpasangan'),
                    'nama_surat' => "SK Persetujuan Mempelai (N3)",
                    'date_created' => date('Y-m-d')
                ];
                $this->db->insert('sk_ntiga', $data);
                $this->db->insert('pemohon', $data);
                $this->db->insert('pemohon_ntiga', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/sk_ntiga');
            }
        }
    
        public function sk_ntiga_detail()
        {
            $data['title'] = 'SK (N3)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_ntiga'] = $this->pelayanan_model->tampil_sk_ntiga('sk_ntiga')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_ntiga', $data);
            $this->load->view('layout/footer_pelayanan_ntiga');
        }
    
        public function sk_ntiga_ubah($kode_surat)
        {
            $data['title'] = 'SK (N3)';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_ntiga'] = $this->pelayanan_model->tampil_sk_ntiga('sk_ntiga')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

    
            //form validation pesan error
            $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
                'min_length' => 'No Nik Terlalu Pendek!',
                'max_length' => 'No Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
            //form validation
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_ntiga', $data);
                $this->load->view('layout/footer_pelayanan_ntiga');
            } else {
                $data =
                    [
                        
                        'no_surat' => $this->input->post('no_surat'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'calon' => $this->input->post('calon'),
                        'binbinti' => $this->input->post('binbinti'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'status' => $this->input->post('status'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'nama_ayah' => $this->input->post('nama_ayah'),
                        'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                        'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                        'agama_ayah' => $this->input->post('agama_ayah'),
                        'warga_negara_ayah' => $this->input->post('warga_negara_ayah'),
                        'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                        'nama_ibu' => $this->input->post('nama_ibu'),
                        'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                        'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                        'agama_ibu' => $this->input->post('agama_ibu'),
                        'warga_negara_ibu' => $this->input->post('warga_negara_ibu'),
                        'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                        'nama_pasangan' => $this->input->post('nama_pasangan'),
                        'tempat_lahir_pasangan' => $this->input->post('tempat_lahir_pasangan'),
                        'tanggal_lahir_pasangan' => $this->input->post('tanggal_lahir_pasangan'),
                        'calon_pasangan' => $this->input->post('calon_pasangan'),
                        'agama_pasangan' => $this->input->post('agama_pasangan'),
                        'warga_negara_pasangan' => $this->input->post('warga_negara_pasangan'),
                        'pekerjaan_pasangan' => $this->input->post('pekerjaan_pasangan'),
                        'alamat_pasangan' => $this->input->post('alamat_pasangan'),
                        'date_created' => date('Y-m-d')
                    ];
                $where = array(
                        'kode_surat' => $this->input->post('kode_surat')
                    );
        
                    $this->pelayanan_model->update_data($where,$data,'sk_ntiga');
                    $this->pelayanan_model->update_data($where,$data,'pemohon');
                    $this->pelayanan_model->update_data($where,$data,'pemohon_ntiga');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                  redirect('pelayanan/sk_ntiga');
            }
        }
    
        public function sk_ntiga_hapus($kode_surat)
        {
            $this->db->trans_start();
            $this->db->delete('sk_ntiga', array('kode_surat' => $kode_surat));
            $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
            $this->db->delete('pemohon_ntiga', array('kode_surat' => $kode_surat));
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
               redirect('pelayanan/sk_ntiga');
        }
        
        public function sk_ntiga_pdf($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_sk_ntiga($id);
            
            $this->load->view('pelayanan/export/sk_ntiga_pdf', $data);
            $this->load->library('dompdf_gen');
            $paper_size = 'A4';
            $orientation = 'portrait';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);
    
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $sekarang = date("d:F:Y:h:m:s");
            $this->dompdf->stream("sk persetujuan mempelai (N3)" . $sekarang . ".pdf", array('Attachment' => 0));
        }
    /////////////////////////SK N(4)////////////////////////////////////////////////////
    public function sk_nempat()
    {
        $data['title'] = 'SK (N4)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_nempat'] = $this->pelayanan_model->tampil_sk_nempat('sk_nempat')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_nempat', $data);
        $this->load->view('layout/footer_pelayanan_nempat');
    }

    public function sk_nempat_tambah()
    {
        $data['title'] = 'SK (N4)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_nempat'] = $this->pelayanan_model->tampil_sk_nempat('sk_nempat')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
       $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
         'required' => 'Nomor Surat Masih Kosong!',
          ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Nomor Nik Masih Kosong!',
            'min_length' => 'Nik Terlalu Pendek!',
            'max_length' => 'Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
            'required' => 'Nama Masih Kosong!',
        ]);
        $this->form_validation->set_rules('calonpenduduk', 'calonpenduduk', 'required', [
            'required' => 'Calon Masih Kosong!',
        ]);
        $this->form_validation->set_rules('binbinti', 'BinBinti', 'required', [
            'required' => 'Bin/Binti Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
            'required' => 'Jenis Kelamin Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
            'required' => 'Agama Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
            'required' => 'Pendidikan Terakhir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('statuspenduduk', 'StatusPenduduk', 'required', [
            'required' => 'Status Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
            'required' => 'Warga Negara Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
            'required' => 'Pekerjaan Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
            'required' => 'Alamat Masih Kosong!',
        ]);
        $this->form_validation->set_rules('nort', 'nort', 'required', [
            'required' => 'Nomor RT Masih Kosong!',
        ]);
        $this->form_validation->set_rules('norw', 'norw', 'required', [
            'required' => 'Nomor RW Masih Kosong!',
        ]);
        $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namaayah', 'namaayah', 'required', [
            'required' => 'Nama Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tempatlahirayah', 'tempatlahirayah', 'required', [
            'required' => 'Tempat Lahir Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahirayah', 'tanggallahirayah', 'required', [
            'required' => 'Tanggal Lahir Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamaayah', 'agamaayah', 'required', [
            'required' => 'Agama Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegaraayah', 'warganegaraayah', 'required', [
            'required' => 'Warga Negara Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanayah', 'pekerjaanayah', 'required', [
            'required' => 'Pekerjaan Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('namaibu', 'namaibu', 'required', [
            'required' => 'Nama Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tempatlahiribu', 'tempatlahiribu', 'required', [
            'required' => 'Tempat Lahir Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahiribu', 'tanggallahiribu', 'required', [
            'required' => 'Tanggal Lahir Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamaibu', 'agamaibu', 'required', [
            'required' => 'Agama Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegaraibu', 'warganegaraibu', 'required', [
            'required' => 'Warga Negara Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanibu', 'pekerjaanibu', 'required', [
            'required' => 'Pekerjaan Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('namapasangan', 'namapasangan', 'required', [
            'required' => 'Nama Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('namapasangan', 'namapasangan', 'required', [
            'required' => 'Nama Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('calonpasangan', 'calonpasangan', 'required', [
            'required' => 'Calon Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tempatlahirpasangan', 'tempatlahirpasangan', 'required', [
            'required' => 'Tempat Lahir Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahirpasangan', 'tanggallahirpasangan', 'required', [
            'required' => 'Tanggal Lahir Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamapasangan', 'agamapasangan', 'required', [
            'required' => 'Agama Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegarapasangan', 'warganegarapasangan', 'required', [
            'required' => 'Warga Negara Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanpasangan', 'pekerjaanpasangan', 'required', [
            'required' => 'Pekerjaan Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('alamatpasangan', 'alamatpasangan', 'required', [
            'required' => 'Alamat Pasangan Masih Kosong!',
        ]);
        //batas form validasi pesan error


        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_nempat', $data);
            $this->load->view('layout/footer_pelayanan_nempat');
        } else {
            $data =
            [
                'no_surat' => $this->input->post('no_surat'),
                'kode_surat' => $this->Pelayanan_model->CreateCode_sknempat(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'calon' => $this->input->post('calonpenduduk'),
                'binbinti' => $this->input->post('binbinti'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'status_kawin' => "Menikah",
                'status' => $this->input->post('statuspenduduk'),
                'warga_negara' => $this->input->post('warganegara'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'nama_ayah' => $this->input->post('namaayah'),
                'tempat_lahir_ayah' => $this->input->post('tempatlahirayah'),
                'tanggal_lahir_ayah' => $this->input->post('tanggallahirayah'),
                'agama_ayah' => $this->input->post('agamaayah'),
                'warga_negara_ayah' => $this->input->post('warganegaraayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaanayah'),
                'nama_ibu' => $this->input->post('namaibu'),
                'tempat_lahir_ibu' => $this->input->post('tempatlahiribu'),
                'tanggal_lahir_ibu' => $this->input->post('tanggallahiribu'),
                'agama_ibu' => $this->input->post('agamaibu'),
                'warga_negara_ibu' => $this->input->post('warganegaraibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaanibu'),
                'nama_pasangan' => $this->input->post('namapasangan'),
                'tempat_lahir_pasangan' => $this->input->post('tempatlahirpasangan'),
                'tanggal_lahir_pasangan' => $this->input->post('tanggallahirpasangan'),
                'calon_pasangan' => $this->input->post('calonpasangan'),
                'agama_pasangan' => $this->input->post('agamapasangan'),
                'warga_negara_pasangan' => $this->input->post('warganegarapasangan'),
                'pekerjaan_pasangan' => $this->input->post('pekerjaanpasangan'),
                'alamat_pasangan' => $this->input->post('alamatpasangan'),
                'nama_surat' => "SK Untuk Orang Tua (N4)",
                'date_created' => date('Y-m-d')
            ];
            $this->db->insert('sk_nempat', $data);
            $this->db->insert('pemohon', $data);
            $this->db->insert('pemohon_nempat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/sk_nempat');
        }
    }

    public function sk_nempat_detail()
    {
        $data['title'] = 'SK (N4)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_nempat'] = $this->pelayanan_model->tampil_sk_nempat('sk_nempat')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_nempat', $data);
        $this->load->view('layout/footer_pelayanan_nempat');
    }

    public function sk_nempat_ubah($kode_surat)
    {
        $data['title'] = 'SK (N4)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_nempat'] = $this->pelayanan_model->tampil_sk_nempat('sk_nempat')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();


        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_nempat', $data);
            $this->load->view('layout/footer_pelayanan_nempat');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'calon' => $this->input->post('calon'),
                    'binbinti' => $this->input->post('binbinti'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'status' => $this->input->post('status'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                    'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                    'agama_ayah' => $this->input->post('agama_ayah'),
                    'warga_negara_ayah' => $this->input->post('warga_negara_ayah'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                    'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                    'agama_ibu' => $this->input->post('agama_ibu'),
                    'warga_negara_ibu' => $this->input->post('warga_negara_ibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'nama_pasangan' => $this->input->post('nama_pasangan'),
                    'tempat_lahir_pasangan' => $this->input->post('tempat_lahir_pasangan'),
                    'tanggal_lahir_pasangan' => $this->input->post('tanggal_lahir_pasangan'),
                    'calon_pasangan' => $this->input->post('calon_pasangan'),
                    'agama_pasangan' => $this->input->post('agama_pasangan'),
                    'warga_negara_pasangan' => $this->input->post('warga_negara_pasangan'),
                    'pekerjaan_pasangan' => $this->input->post('pekerjaan_pasangan'),
                    'alamat_pasangan' => $this->input->post('alamat_pasangan'),
                    'date_created' => date('Y-m-d')
                ];
            $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                $this->pelayanan_model->update_data($where,$data,'sk_nempat');
                $this->pelayanan_model->update_data($where,$data,'pemohon');
                $this->pelayanan_model->update_data($where,$data,'pemohon_nempat');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
              redirect('pelayanan/sk_nempat');
        }
    }

    public function sk_nempat_hapus($kode_surat)
    {
        $this->db->trans_start();
        $this->db->delete('sk_nempat', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon_nempat', array('kode_surat' => $kode_surat));
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
           redirect('pelayanan/sk_nempat');
    }
    
    public function sk_nempat_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_sk_nempat($id);
        
        $this->load->view('pelayanan/export/sk_nempat_pdf', $data);
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("sk untuk orang tua (N4)" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    /////////////////////////SK N(5)////////////////////////////////////////////////////
    public function sk_nlima()
    {
        $data['title'] = 'SK (N5)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_nlima'] = $this->pelayanan_model->tampil_sk_nlima('sk_nlima')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_nlima', $data);
        $this->load->view('layout/footer_pelayanan_nlima');
    }

    public function sk_nlima_tambah()
    {
        $data['title'] = 'SK (N4)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['sk_nlima'] = $this->pelayanan_model->tampil_sk_nlima('sk_nlima')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        //form validation pesan error
       $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
            'required' => 'Nomor Surat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
            'required' => 'Nomor Nik Masih Kosong!',
            'min_length' => 'Nik Terlalu Pendek!',
            'max_length' => 'Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
            'required' => 'Nama Masih Kosong!',
        ]);
        $this->form_validation->set_rules('calonpenduduk', 'calonpenduduk', 'required', [
            'required' => 'Calon Masih Kosong!',
        ]);
        $this->form_validation->set_rules('binbinti', 'BinBinti', 'required', [
            'required' => 'Bin/Binti Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
            'required' => 'Jenis Kelamin Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
            'required' => 'Agama Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
            'required' => 'Pendidikan Terakhir Masih Kosong!',
        ]);
        $this->form_validation->set_rules('statuspenduduk', 'StatusPenduduk', 'required', [
            'required' => 'Status Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
            'required' => 'Warga Negara Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
            'required' => 'Pekerjaan Penduduk Masih Kosong!',
        ]);
        $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
            'required' => 'Alamat Masih Kosong!',
        ]);
        $this->form_validation->set_rules('nort', 'nort', 'required', [
            'required' => 'Nomor RT Masih Kosong!',
        ]);
        $this->form_validation->set_rules('norw', 'norw', 'required', [
            'required' => 'Nomor RW Masih Kosong!',
        ]);
        $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
            'required' => 'Kode Pos Masih Kosong!',
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('namaayah', 'namaayah', 'required', [
            'required' => 'Nama Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tempatlahirayah', 'tempatlahirayah', 'required', [
            'required' => 'Tempat Lahir Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahirayah', 'tanggallahirayah', 'required', [
            'required' => 'Tanggal Lahir Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamaayah', 'agamaayah', 'required', [
            'required' => 'Agama Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegaraayah', 'warganegaraayah', 'required', [
            'required' => 'Warga Negara Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanayah', 'pekerjaanayah', 'required', [
            'required' => 'Pekerjaan Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('namaibu', 'namaibu', 'required', [
            'required' => 'Nama Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tempatlahiribu', 'tempatlahiribu', 'required', [
            'required' => 'Tempat Lahir Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahiribu', 'tanggallahiribu', 'required', [
            'required' => 'Tanggal Lahir Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamaibu', 'agamaibu', 'required', [
            'required' => 'Agama Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegaraibu', 'warganegaraibu', 'required', [
            'required' => 'Warga Negara Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanibu', 'pekerjaanibu', 'required', [
            'required' => 'Pekerjaan Ibu Masih Kosong!',
        ]);
        $this->form_validation->set_rules('namapasangan', 'namapasangan', 'required', [
            'required' => 'Nama Ayah Masih Kosong!',
        ]);
        $this->form_validation->set_rules('namapasangan', 'namapasangan', 'required', [
            'required' => 'Nama Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('calonpasangan', 'calonpasangan', 'required', [
            'required' => 'Calon Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tempatlahirpasangan', 'tempatlahirpasangan', 'required', [
            'required' => 'Tempat Lahir Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('tanggallahirpasangan', 'tanggallahirpasangan', 'required', [
            'required' => 'Tanggal Lahir Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('agamapasangan', 'agamapasangan', 'required', [
            'required' => 'Agama Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('warganegarapasangan', 'warganegarapasangan', 'required', [
            'required' => 'Warga Negara Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('pekerjaanpasangan', 'pekerjaanpasangan', 'required', [
            'required' => 'Pekerjaan Pasangan Masih Kosong!',
        ]);
        $this->form_validation->set_rules('alamatpasangan', 'alamatpasangan', 'required', [
            'required' => 'Alamat Pasangan Masih Kosong!',
        ]);
        //batas form validasi pesan error


        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_nlima', $data);
            $this->load->view('layout/footer_pelayanan_nlima');
        } else {
            $data =
            [
                'no_surat' => $this->input->post('no_surat'),
                'kode_surat' => $this->Pelayanan_model->CreateCode_sknlima(),
                'nik' => $this->input->post('nonik'),
                'nama' => $this->input->post('namapenduduk'),
                'calon' => $this->input->post('calonpenduduk'),
                'binbinti' => $this->input->post('binbinti'),
                'tempat_lahir' => $this->input->post('tempatlahir'),
                'tanggal_lahir' => $this->input->post('tanggallahir'),
                'jenis_kelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agamapenduduk'),
                'status_kawin' => "Menikah",
                'status' => $this->input->post('statuspenduduk'),
                'warga_negara' => $this->input->post('warganegara'),
                'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                'alamat' => $this->input->post('alamatpenduduk'),
                'no_rt' => $this->input->post('nort'),
                'no_rw' => $this->input->post('norw'),
                'kode_pos' => $this->input->post('kodepos'),
                'nama_ayah' => $this->input->post('namaayah'),
                'tempat_lahir_ayah' => $this->input->post('tempatlahirayah'),
                'tanggal_lahir_ayah' => $this->input->post('tanggallahirayah'),
                'agama_ayah' => $this->input->post('agamaayah'),
                'warga_negara_ayah' => $this->input->post('warganegaraayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaanayah'),
                'nama_ibu' => $this->input->post('namaibu'),
                'tempat_lahir_ibu' => $this->input->post('tempatlahiribu'),
                'tanggal_lahir_ibu' => $this->input->post('tanggallahiribu'),
                'agama_ibu' => $this->input->post('agamaibu'),
                'warga_negara_ibu' => $this->input->post('warganegaraibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaanibu'),
                'nama_pasangan' => $this->input->post('namapasangan'),
                'tempat_lahir_pasangan' => $this->input->post('tempatlahirpasangan'),
                'tanggal_lahir_pasangan' => $this->input->post('tanggallahirpasangan'),
                'calon_pasangan' => $this->input->post('calonpasangan'),
                'agama_pasangan' => $this->input->post('agamapasangan'),
                'warga_negara_pasangan' => $this->input->post('warganegarapasangan'),
                'pekerjaan_pasangan' => $this->input->post('pekerjaanpasangan'),
                'alamat_pasangan' => $this->input->post('alamatpasangan'),
                'nama_surat' => "SK Izin Orang Tua (N5)",
                'date_created' => date('Y-m-d')
            ];
            $this->db->insert('sk_nlima', $data);
            $this->db->insert('pemohon', $data);
            $this->db->insert('pemohon_nlima', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('pelayanan/sk_nlima');
        }
    }

    public function sk_nlima_detail()
    {
        $data['title'] = 'SK (N5)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_nlima'] = $this->pelayanan_model->tampil_sk_nlima('sk_nlima')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header_pelayanan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('pelayanan/sk_nlima', $data);
        $this->load->view('layout/footer_pelayanan_nlima');
    }

    public function sk_nlima_ubah($kode_surat)
    {
        $data['title'] = 'SK (N5)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sk_nlima'] = $this->pelayanan_model->tampil_sk_nlima('sk_nlima')->result();
        $this->load->model('Pelayanan_model');

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();


        //form validation pesan error
        $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
            'min_length' => 'No Nik Terlalu Pendek!',
            'max_length' => 'No Nik Terlalu Panjang!'
        ]);
        $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
            'min_length' => 'Kode Pos Terlalu Pendek!',
            'max_length' => 'Kode Pos Terlalu Panjang!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_nlima', $data);
            $this->load->view('layout/footer_pelayanan_nlima');
        } else {
            $data =
                [
                    'no_surat' => $this->input->post('no_surat'),
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'calon' => $this->input->post('calon'),
                    'binbinti' => $this->input->post('binbinti'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'status' => $this->input->post('status'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                    'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                    'agama_ayah' => $this->input->post('agama_ayah'),
                    'warga_negara_ayah' => $this->input->post('warga_negara_ayah'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                    'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                    'agama_ibu' => $this->input->post('agama_ibu'),
                    'warga_negara_ibu' => $this->input->post('warga_negara_ibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'nama_pasangan' => $this->input->post('nama_pasangan'),
                    'tempat_lahir_pasangan' => $this->input->post('tempat_lahir_pasangan'),
                    'tanggal_lahir_pasangan' => $this->input->post('tanggal_lahir_pasangan'),
                    'calon_pasangan' => $this->input->post('calon_pasangan'),
                    'agama_pasangan' => $this->input->post('agama_pasangan'),
                    'warga_negara_pasangan' => $this->input->post('warga_negara_pasangan'),
                    'pekerjaan_pasangan' => $this->input->post('pekerjaan_pasangan'),
                    'alamat_pasangan' => $this->input->post('alamat_pasangan'),
                    'date_created' => date('Y-m-d')
                ];
            $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                $this->pelayanan_model->update_data($where,$data,'sk_nlima');
                $this->pelayanan_model->update_data($where,$data,'pemohon');
                $this->pelayanan_model->update_data($where,$data,'pemohon_nlima');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
              redirect('pelayanan/sk_nlima');
        }
    }

    public function sk_nlima_hapus($kode_surat)
    {
        $this->db->trans_start();
        $this->db->delete('sk_nlima', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
        $this->db->delete('pemohon_nlima', array('kode_surat' => $kode_surat));
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
           redirect('pelayanan/sk_nlima');
    }
    
    public function sk_nlima_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->pelayanan_model->ambil_id_sk_nlima($id);
        
        $this->load->view('pelayanan/export/sk_nlima_pdf', $data);
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("sk izin orang tua (N5)" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    //////////////////////////////////////////SK KEMATIAN///////////////////////////////////////////   
        public function sk_kematian()
        {
            $data['title'] = 'SK Kematian';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_kematian'] = $this->pelayanan_model->tampil_sk_kematian('sk_kematian')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_kematian', $data);
            $this->load->view('layout/footer_pelayanan');
        }
    
        public function sk_kematian_tambah()
        {
            $data['title'] = 'SK Kematian';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['sk_kematian'] = $this->pelayanan_model->tampil_sk_kematian('sk_kematian')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
                'required' => 'Nomor Surat Masih Kosong!',
            ]);
            $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
                'required' => 'Nama Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
                'required' => 'Tempat Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
                'required' => 'Tanggal Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
                'required' => 'Jenis Kelamin Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
                'required' => 'Agama Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
                'required' => 'Pendidikan Terakhir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('statuskawin', 'StatusKawin', 'required', [
                'required' => 'Status Pernikahan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
                'required' => 'Warga Negara Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
                'required' => 'Pekerjaan Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
                'required' => 'Alamat Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nort', 'nort', 'required', [
                'required' => 'Nomor RT Masih Kosong!',
            ]);
            $this->form_validation->set_rules('norw', 'norw', 'required', [
                'required' => 'Nomor RW Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
                'required' => 'Kode Pos Masih Kosong!',
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
    
            //form validation insert   
           if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_kematian', $data);
                $this->load->view('layout/footer_pelayanan');
            } else {
              
                $data =
                    [
                        'no_surat' => $this->input->post('no_surat'),
                        'kode_surat' => $this->Pelayanan_model->CreateCode_skkm(),
                        'nik' => $this->input->post('nonik'),
                        'nama' => $this->input->post('namapenduduk'),
                        'tempat_lahir' => $this->input->post('tempatlahir'),
                        'tanggal_lahir' => $this->input->post('tanggallahir'),
                        'jenis_kelamin' => $this->input->post('jeniskelamin'),
                        'agama' => $this->input->post('agamapenduduk'),
                        'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                        'status_kawin' => $this->input->post('statuskawin'),
                        'warga_negara' => $this->input->post('warganegara'),
                        'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'nama_surat' => "SK Kematian",
                        'tanggal_kematian' => $this->input->post('tanggal_kematian'),
                        'jam' => $this->input->post('jam'),
                        'tempat_kematian' => $this->input->post('tempat_kematian'),
                        'penyebab_kematian' => $this->input->post('penyebab_kematian'),
                        'pelapor' => $this->input->post('pelapor'),
                        'hubungan' => $this->input->post('hubungan'),
                        'nama_surat' => "SK Kematian",
                        'date_created' => date('Y-m-d')
                    ];
                $data2 =
                    [  
                        'no_surat' => $this->input->post('no_surat'),
                        'kode_surat' => $this->Pelayanan_model->CreateCode_skkm(),
                        'nik' => $this->input->post('nonik'),
                        'nama' => $this->input->post('namapenduduk'),
                        'tempat_lahir' => $this->input->post('tempatlahir'),
                        'tanggal_lahir' => $this->input->post('tanggallahir'),
                        'jenis_kelamin' => $this->input->post('jeniskelamin'),
                        'agama' => $this->input->post('agamapenduduk'),
                        'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                        'status_kawin' => $this->input->post('statuskawin'),
                        'warga_negara' => $this->input->post('warganegara'),
                        'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'nama_surat' => "SK Kematian",
                        'date_created' => date('Y-m-d')
                    ];
                $this->db->insert('sk_kematian', $data);
                $this->db->insert('pemohon', $data2);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/sk_kematian');
            }
        }
    
        public function sk_kematian_detail()
        {
            $data['title'] = 'SK Kematian';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_kematian'] = $this->pelayanan_model->tampil_sk_kematian('sk_kematian')->result();

            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_kematian', $data);
            $this->load->view('layout/footer_pelayanan');
        }
    
        public function sk_kematian_ubah($kode_surat)
        {
            $data['title'] = 'SK Kematian';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['sk_kematian'] = $this->pelayanan_model->tampil_sk_kematian('sk_kematian')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
         
            $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
            //form validation
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_kematian', $data);
                $this->load->view('layout/footer_pelayanan');
            } else {
                $data =
                    [
                        'no_surat' => $this->input->post('no_surat'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'status_kawin' => $this->input->post('status_kawin'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'tanggal_kematian' => $this->input->post('tanggal_kematian'),
                        'jam' => $this->input->post('jam'),
                        'tempat_kematian' => $this->input->post('tempat_kematian'),
                        'penyebab_kematian' => $this->input->post('penyebab_kematian'),
                        'pelapor' => $this->input->post('pelapor'),
                        'hubungan' => $this->input->post('hubungan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'date_created' => date('Y-m-d')
                    ];
                $data2 =
                    [
                        
                        'no_surat' => $this->input->post('no_surat'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'status_kawin' => $this->input->post('status_kawin'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'date_created' => date('Y-m-d')
                    ];
                
                $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                // data dan where untuk tabel sk_kematian dan pemohon
    
                $this->pelayanan_model->update_data($where,$data,'sk_kematian');
                $this->pelayanan_model->update_data($where,$data2,'pemohon');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/sk_kematian');
            }
        }
    
        public function sk_kematian_hapus($kode_surat)
        {
            $this->db->trans_start();
            $this->db->delete('sk_kematian', array('kode_surat' => $kode_surat));
            $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
            redirect('pelayanan/sk_kematian');
        }
        
        public function sk_kematian_pdf($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_sk_kematian($id);
            
            $this->load->view('pelayanan/export/sk_kematian_pdf', $data);
            $this->load->library('dompdf_gen');
            $paper_size = 'A4';
            $orientation = 'portrait';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);
    
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $sekarang = date("d:F:Y:h:m:s");
            $this->dompdf->stream("sk kematian" . $sekarang . ".pdf", array('Attachment' => 0));
        }
    /////////////////////////////////////////////////////////////////////////////////////////////

    //////////////////////////////////////////SK Pengajuan KK///////////////////////////////////////////
        public function pengajuan_kk()
        {
            $data['title'] = 'Pengajuan KK';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['pengajuan_kk'] = $this->pelayanan_model->tampil_pengajuan_kk('pengajuan_kk')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/pengajuan_kk', $data);
            $this->load->view('layout/footer_pelayanan');
        }
    
        public function pengajuan_kk_tambah()
        {
            $data['title'] = 'Pengajuan KK';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
    
            $data['pengajuan_kk'] = $this->pelayanan_model->tampil_pengajuan_kk('pengajuan_kk')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
                'required' => 'Nomor Surat Masih Kosong!'
            ]);
            $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
                'required' => 'Nomor NIK Masih Kosong!',
                'min_length' => 'Nik Terlalu Pendek!',
                'max_length' => 'Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('nonik', 'nonik', 'required', [
                'required' => 'Nomor NIK Masih Kosong!',
            ]);
            $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
                'required' => 'Nama Masih Kosong!',
            ]);
                    $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
                'required' => 'Tempat Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
                'required' => 'Tanggal Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
                'required' => 'Jenis Kelamin Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
                'required' => 'Agama Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
                'required' => 'Pendidikan Terakhir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('statuskawin', 'StatusKawin', 'required', [
                'required' => 'Status Pernikahan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
                'required' => 'Warga Negara Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
                'required' => 'Pekerjaan Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('status_keluarga', 'Status_Keluarga', 'required', [
                'required' => 'Status Keluarga Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nama_ayah', 'Nama_Ayah', 'required', [
                'required' => 'Nama Ayah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nama_ibu', 'Nama_Ibu', 'required', [
                'required' => 'Nama Ibu Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
                'required' => 'Alamat Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nort', 'nort', 'required', [
                'required' => 'Nomor RT Masih Kosong!',
            ]);
            $this->form_validation->set_rules('norw', 'norw', 'required', [
                'required' => 'Nomor RW Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
                'required' => 'Kode Pos Masih Kosong!',
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
    
            //form validation insert   
           if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/pengajuan_kk', $data);
                $this->load->view('layout/footer_pelayanan');
            } else {
              
                $data =
                    [
                        'no_surat' => $this->input->post('no_surat'),
                        'kode_surat' => $this->Pelayanan_model->CreateCode_pengajuan_kk(),
                        'nik' => $this->input->post('nonik'),
                        'nama' => $this->input->post('namapenduduk'),
                        'tempat_lahir' => $this->input->post('tempatlahir'),
                        'tanggal_lahir' => $this->input->post('tanggallahir'),
                        'jenis_kelamin' => $this->input->post('jeniskelamin'),
                        'agama' => $this->input->post('agamapenduduk'),
                        'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                        'status_kawin' => $this->input->post('statuskawin'),
                        'warga_negara' => $this->input->post('warganegara'),
                        'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                        'status_keluarga' => $this->input->post('status_keluarga'),
                        'no_paspor' => $this->input->post('no_paspor'),
                        'no_kitab' => $this->input->post('no_kitab'),
                        'nama_ayah' => $this->input->post('nama_ayah'),
                        'nama_ibu' => $this->input->post('nama_ibu'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'nik_pasangan' => $this->input->post('nik_pasangan'),
                        'nama_pasangan' => $this->input->post('nama_pasangan'),
                        'tempat_lahir_pasangan' => $this->input->post('tempat_lahir_pasangan'),
                        'tanggal_lahir_pasangan' => $this->input->post('tanggal_lahir_pasangan'),
                        'jenis_kelamin_pasangan' => $this->input->post('jenis_kelamin_pasangan'),
                        'agama_pasangan' => $this->input->post('agama_pasangan'),
                        'status_kawin_pasangan' => $this->input->post('status_kawin_pasangan'),
                        'warga_negara_pasangan' => $this->input->post('warga_negara_pasangan'),
                        'pendidikan_terakhir_pasangan' => $this->input->post('pendidikan_terakhir_pasangan'),
                        'pekerjaan_pasangan' => $this->input->post('pekerjaan_pasangan'),
                        'status_keluarga_pasangan' => $this->input->post('status_keluarga_pasangan'),
                        'no_paspor_pasangan' => $this->input->post('no_paspor_pasangan'),
                        'no_kitab_pasangan' => $this->input->post('no_kitab_pasangan'),
                        'nama_ayah_pasangan' => $this->input->post('nama_ayah_pasangan'),
                        'nama_ibu_pasangan' => $this->input->post('nama_ibu_pasangan'),
                        'nik_anak_satu' => $this->input->post('nik_anak_satu'),
                        'nama_anak_satu' => $this->input->post('nama_anak_satu'),
                        'tempat_lahir_anak_satu' => $this->input->post('tempat_lahir_anak_satu'),
                        'tanggal_lahir_anak_satu' => $this->input->post('tanggal_lahir_anak_satu'),
                        'jenis_kelamin_anak_satu' => $this->input->post('jenis_kelamin_anak_satu'),
                        'agama_anak_satu' => $this->input->post('agama_anak_satu'),
                        'pendidikan_terakhir_anak_satu' => $this->input->post('pendidikan_terakhir_anak_satu'),
                        'status_kawin_anak_satu' => $this->input->post('status_kawin_anak_satu'),
                        'warga_negara_anak_satu' => $this->input->post('warga_negara_anak_satu'),
                        'pekerjaan_anak_satu' => $this->input->post('pekerjaan_anak_satu'),
                        'status_keluarga_anak_satu' => $this->input->post('status_keluarga_anak_satu'),
                        'no_paspor_anak_satu' => $this->input->post('no_paspor_anak_satu'),
                        'no_kitab_anak_satu' => $this->input->post('no_kitab_anak_satu'),
                        'nama_ayah_anak_satu' => $this->input->post('nama_ayah_anak_satu'),
                        'nama_ibu_anak_satu' => $this->input->post('nama_ibu_anak_satu'),
                        'nik_anak_dua' => $this->input->post('nik_anak_dua'),
                        'nama_anak_dua' => $this->input->post('nama_anak_dua'),
                        'tempat_lahir_anak_dua' => $this->input->post('tempat_lahir_anak_dua'),
                        'tanggal_lahir_anak_dua' => $this->input->post('tanggal_lahir_anak_dua'),
                        'jenis_kelamin_anak_dua' => $this->input->post('jenis_kelamin_anak_dua'),
                        'agama_anak_dua' => $this->input->post('agama_anak_dua'),
                        'pendidikan_terakhir_anak_dua' => $this->input->post('pendidikan_terakhir_anak_dua'),
                        'status_kawin_anak_dua' => $this->input->post('status_kawin_anak_dua'),
                        'warga_negara_anak_dua' => $this->input->post('warga_negara_anak_dua'),
                        'pekerjaan_anak_dua' => $this->input->post('pekerjaan_anak_dua'),
                        'status_keluarga_anak_dua' => $this->input->post('status_keluarga_anak_dua'),
                        'no_paspor_anak_dua' => $this->input->post('no_paspor_anak_dua'),
                        'no_kitab_anak_dua' => $this->input->post('no_kitab_anak_dua'),
                        'nama_ayah_anak_dua' => $this->input->post('nama_ayah_anak_dua'),
                        'nama_ibu_anak_dua' => $this->input->post('nama_ibu_anak_satu'),
                        'nik_anak_tiga' => $this->input->post('nik_anak_tiga'),
                        'nama_anak_tiga' => $this->input->post('nama_anak_tiga'),
                        'tempat_lahir_anak_tiga' => $this->input->post('tempat_lahir_anak_tiga'),
                        'tanggal_lahir_anak_tiga' => $this->input->post('tanggal_lahir_anak_tiga'),
                        'jenis_kelamin_anak_tiga' => $this->input->post('jenis_kelamin_anak_tiga'),
                        'agama_anak_tiga' => $this->input->post('agama_anak_tiga'),
                        'pendidikan_terakhir_anak_tiga' => $this->input->post('pendidikan_terakhir_anak_tiga'),
                        'status_kawin_anak_tiga' => $this->input->post('status_kawin_anak_tiga'),
                        'warga_negara_anak_tiga' => $this->input->post('warga_negara_anak_tiga'),
                        'pekerjaan_anak_tiga' => $this->input->post('pekerjaan_anak_tiga'),
                        'status_keluarga_anak_tiga' => $this->input->post('status_keluarga_anak_tiga'),
                        'no_paspor_anak_tiga' => $this->input->post('no_paspor_anak_tiga'),
                        'no_kitab_anak_tiga' => $this->input->post('no_kitab_anak_tiga'),
                        'nama_ayah_anak_tiga' => $this->input->post('nama_ayah_anak_tiga'),
                        'nama_ibu_anak_tiga' => $this->input->post('nama_ibu_anak_tiga'),
                        'nik_anak_empat' => $this->input->post('nik_anak_empat'),
                        'nama_anak_empat' => $this->input->post('nama_anak_empat'),
                        'tempat_lahir_anak_empat' => $this->input->post('tempat_lahir_anak_empat'),
                        'tanggal_lahir_anak_empat' => $this->input->post('tanggal_lahir_anak_empat'),
                        'jenis_kelamin_anak_empat' => $this->input->post('jenis_kelamin_anak_empat'),
                        'agama_anak_empat' => $this->input->post('agama_anak_empat'),
                        'pendidikan_terakhir_anak_empat' => $this->input->post('pendidikan_terakhir_anak_empat'),
                        'status_kawin_anak_empat' => $this->input->post('status_kawin_anak_empat'),
                        'warga_negara_anak_empat' => $this->input->post('warga_negara_anak_empat'),
                        'pekerjaan_anak_empat' => $this->input->post('pekerjaan_anak_empat'),
                        'status_keluarga_anak_empat' => $this->input->post('status_keluarga_anak_empat'),
                        'no_paspor_anak_empat' => $this->input->post('no_paspor_anak_empat'),
                        'no_kitab_anak_empat' => $this->input->post('no_kitab_anak_empat'),
                        'nama_ayah_anak_empat' => $this->input->post('nama_ayah_anak_empat'),
                        'nama_ibu_anak_empat' => $this->input->post('nama_ibu_anak_empat'),
                        'nik_anak_lima' => $this->input->post('nik_anak_lima'),
                        'nama_anak_lima' => $this->input->post('nama_anak_lima'),
                        'tempat_lahir_anak_lima' => $this->input->post('tempat_lahir_anak_lima'),
                        'tanggal_lahir_anak_lima' => $this->input->post('tanggal_lahir_anak_lima'),
                        'jenis_kelamin_anak_lima' => $this->input->post('jenis_kelamin_anak_lima'),
                        'agama_anak_lima' => $this->input->post('agama_anak_lima'),
                        'pendidikan_terakhir_anak_lima' => $this->input->post('pendidikan_terakhir_anak_lima'),
                        'status_kawin_anak_lima' => $this->input->post('status_kawin_anak_lima'),
                        'warga_negara_anak_lima' => $this->input->post('warga_negara_anak_lima'),
                        'pekerjaan_anak_lima' => $this->input->post('pekerjaan_anak_lima'),
                        'status_keluarga_anak_lima' => $this->input->post('status_keluarga_anak_lima'),
                        'no_paspor_anak_lima' => $this->input->post('no_paspor_anak_lima'),
                        'no_kitab_anak_lima' => $this->input->post('no_kitab_anak_lima'),
                        'nama_ayah_anak_lima' => $this->input->post('nama_ayah_anak_lima'),
                        'nama_ibu_anak_lima' => $this->input->post('nama_ibu_anak_lima'),
                        'nik_anak_enam' => $this->input->post('nik_anak_enam'),
                        'nama_anak_enam' => $this->input->post('nama_anak_enam'),
                        'tempat_lahir_anak_enam' => $this->input->post('tempat_lahir_anak_enam'),
                        'tanggal_lahir_anak_enam' => $this->input->post('tanggal_lahir_anak_enam'),
                        'jenis_kelamin_anak_enam' => $this->input->post('jenis_kelamin_anak_enam'),
                        'agama_anak_enam' => $this->input->post('agama_anak_enam'),
                        'pendidikan_terakhir_anak_enam' => $this->input->post('pendidikan_terakhir_anak_enam'),
                        'status_kawin_anak_enam' => $this->input->post('status_kawin_anak_enam'),
                        'warga_negara_anak_enam' => $this->input->post('warga_negara_anak_enam'),
                        'pekerjaan_anak_enam' => $this->input->post('pekerjaan_anak_enam'),
                        'status_keluarga_anak_enam' => $this->input->post('status_keluarga_anak_enam'),
                        'no_paspor_anak_enam' => $this->input->post('no_paspor_anak_enam'),
                        'no_kitab_anak_enam' => $this->input->post('no_kitab_anak_enam'),
                        'nama_ayah_anak_enam' => $this->input->post('nama_ayah_anak_enam'),
                        'nama_ibu_anak_enam' => $this->input->post('nama_ibu_anak_enam'),
                        'nik_anak_tujuh' => $this->input->post('nik_anak_tujuh'),
                        'nama_anak_tujuh' => $this->input->post('nama_anak_tujuh'),
                        'tempat_lahir_anak_tujuh' => $this->input->post('tempat_lahir_anak_tujuh'),
                        'tanggal_lahir_anak_tujuh' => $this->input->post('tanggal_lahir_anak_tujuh'),
                        'jenis_kelamin_anak_tujuh' => $this->input->post('jenis_kelamin_anak_tujuh'),
                        'agama_anak_tujuh' => $this->input->post('agama_anak_tujuh'),
                        'pendidikan_terakhir_anak_tujuh' => $this->input->post('pendidikan_terakhir_anak_tujuh'),
                        'status_kawin_anak_tujuh' => $this->input->post('status_kawin_anak_tujuh'),
                        'warga_negara_anak_tujuh' => $this->input->post('warga_negara_anak_tujuh'),
                        'pekerjaan_anak_tujuh' => $this->input->post('pekerjaan_anak_tujuh'),
                        'status_keluarga_anak_tujuh' => $this->input->post('status_keluarga_anak_tujuh'),
                        'no_paspor_anak_tujuh' => $this->input->post('no_paspor_anak_tujuh'),
                        'no_kitab_anak_tujuh' => $this->input->post('no_kitab_anak_tujuh'),
                        'nama_ayah_anak_tujuh' => $this->input->post('nama_ayah_anak_tujuh'),
                        'nama_ibu_anak_tujuh' => $this->input->post('nama_ibu_anak_tujuh'),
                        'nik_anak_delapan' => $this->input->post('nik_anak_delapan'),
                        'nama_anak_delapan' => $this->input->post('nama_anak_delapan'),
                        'tempat_lahir_anak_delapan' => $this->input->post('tempat_lahir_anak_delapan'),
                        'tanggal_lahir_anak_delapan' => $this->input->post('tanggal_lahir_anak_delapan'),
                        'jenis_kelamin_anak_delapan' => $this->input->post('jenis_kelamin_anak_delapan'),
                        'agama_anak_delapan' => $this->input->post('agama_anak_delapan'),
                        'pendidikan_terakhir_anak_delapan' => $this->input->post('pendidikan_terakhir_anak_delapan'),
                        'status_kawin_anak_delapan' => $this->input->post('status_kawin_anak_delapan'),
                        'warga_negara_anak_delapan' => $this->input->post('warga_negara_anak_delapan'),
                        'pekerjaan_anak_delapan' => $this->input->post('pekerjaan_anak_delapan'),
                        'status_keluarga_anak_delapan' => $this->input->post('status_keluarga_anak_delapan'),
                        'no_paspor_anak_delapan' => $this->input->post('no_paspor_anak_delapan'),
                        'no_kitab_anak_delapan' => $this->input->post('no_kitab_anak_delapan'),
                        'nama_ayah_anak_delapan' => $this->input->post('nama_ayah_anak_delapan'),
                        'nama_ibu_anak_delapan' => $this->input->post('nama_ibu_anak_delapan'),
                        'nama_surat' => "Register KK",
                        'date_created' => date('Y-m-d')
                    ];

                $data2 =
                    [  
                        'no_surat' => $this->input->post('no_surat'),
                        'kode_surat' => $this->Pelayanan_model->CreateCode_pengajuan_kk(),
                        'nik' => $this->input->post('nonik'),
                        'nama' => $this->input->post('namapenduduk'),
                        'tempat_lahir' => $this->input->post('tempatlahir'),
                        'tanggal_lahir' => $this->input->post('tanggallahir'),
                        'jenis_kelamin' => $this->input->post('jeniskelamin'),
                        'agama' => $this->input->post('agamapenduduk'),
                        'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                        'status_kawin' => $this->input->post('statuskawin'),
                        'warga_negara' => $this->input->post('warganegara'),
                        'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'nama_surat' => "Register KK",
                        'date_created' => date('Y-m-d')
                    ];
                    
                $this->db->insert('pengajuan_kk', $data);
                $this->db->insert('pemohon', $data2);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/pengajuan_kk');
            }
        }
    
        public function pengajuan_kk_detail()
        {
            $data['title'] = 'Pengajuan KK';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['pengajuan_kk'] = $this->pelayanan_model->tampil_pengajuan_kk('pengajuan_kk')->result();

            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/pengajuan_kk', $data);
            $this->load->view('layout/footer_pelayanan');
        }
    
        public function pengajuan_kk_ubah($kode_surat)
        {
            $data['title'] = 'Pengajuan KK';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['pengajuan_kk'] = $this->pelayanan_model->tampil_pengajuan_kk('pengajuan_kk')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
         
            $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
            //form validation
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/pengajuan_kk', $data);
                $this->load->view('layout/footer_pelayanan');
            } else {
                $data =
                    [
                        'no_surat' => $this->input->post('no_surat'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'status_kawin' => $this->input->post('status_kawin'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'nik_pasangan' => $this->input->post('nik_pasangan'),
                        'nama_pasangan' => $this->input->post('nama_pasangan'),
                        'tempat_lahir_pasangan' => $this->input->post('tempat_lahir_pasangan'),
                        'tanggal_lahir_pasangan' => $this->input->post('tanggal_lahir_pasangan'),
                        'jenis_kelamin_pasangan' => "Perempuan",
                        'agama_pasangan' => $this->input->post('agama_pasangan'),
                        'status_kawin_pasangan' => "Menikah",
                        'warga_negara_pasangan' => $this->input->post('warga_negara_pasangan'),
                        'pendidikan_terakhir_pasangan' => $this->input->post('pendidikan_terakhir_pasangan'),
                        'pekerjaan_pasangan' => $this->input->post('pekerjaan_pasangan'),
                        'status_keluarga_pasangan' => "Istri",
                        'no_paspor_pasangan' => $this->input->post('no_paspor_pasangan'),
                        'no_kitab_pasangan' => $this->input->post('no_kitab_pasangan'),
                        'nama_ayah_pasangan' => $this->input->post('nama_ayah_pasangan'),
                        'nama_ibu_pasangan' => $this->input->post('nama_ibu_pasangan'),
                        'nik_anak_satu' => $this->input->post('nik_anak_satu'),
                        'nama_anak_satu' => $this->input->post('nama_anak_satu'),
                        'tempat_lahir_anak_satu' => $this->input->post('tempat_lahir_anak_satu'),
                        'tanggal_lahir_anak_satu' => $this->input->post('tanggal_lahir_anak_satu'),
                        'jenis_kelamin_anak_satu' => $this->input->post('jenis_kelamin_anak_satu'),
                        'agama_anak_satu' => $this->input->post('agama_anak_satu'),
                        'pendidikan_terakhir_anak_satu' => $this->input->post('pendidikan_terakhir_anak_satu'),
                        'status_kawin_anak_satu' => $this->input->post('status_kawin_anak_satu'),
                        'warga_negara_anak_satu' => $this->input->post('warga_negara_anak_satu'),
                        'pekerjaan_anak_satu' => $this->input->post('pekerjaan_anak_satu'),
                        'status_keluarga_anak_satu' => $this->input->post('status_keluarga_anak_satu'),
                        'no_paspor_anak_satu' => $this->input->post('no_paspor_anak_satu'),
                        'no_kitab_anak_satu' => $this->input->post('no_kitab_anak_satu'),
                        'nama_ayah_anak_satu' => $this->input->post('nama_ayah_anak_satu'),
                        'nama_ibu_anak_satu' => $this->input->post('nama_ibu_anak_satu'),
                        'nik_anak_dua' => $this->input->post('nik_anak_dua'),
                        'nama_anak_dua' => $this->input->post('nama_anak_dua'),
                        'tempat_lahir_anak_dua' => $this->input->post('tempat_lahir_anak_dua'),
                        'tanggal_lahir_anak_dua' => $this->input->post('tanggal_lahir_anak_dua'),
                        'jenis_kelamin_anak_dua' => $this->input->post('jenis_kelamin_anak_dua'),
                        'agama_anak_dua' => $this->input->post('agama_anak_dua'),
                        'pendidikan_terakhir_anak_dua' => $this->input->post('pendidikan_terakhir_anak_dua'),
                        'status_kawin_anak_dua' => $this->input->post('status_kawin_anak_dua'),
                        'warga_negara_anak_dua' => $this->input->post('warga_negara_anak_dua'),
                        'pekerjaan_anak_dua' => $this->input->post('pekerjaan_anak_dua'),
                        'status_keluarga_anak_dua' => $this->input->post('status_keluarga_anak_dua'),
                        'no_paspor_anak_dua' => $this->input->post('no_paspor_anak_dua'),
                        'no_kitab_anak_dua' => $this->input->post('no_kitab_anak_dua'),
                        'nama_ayah_anak_dua' => $this->input->post('nama_ayah_anak_dua'),
                        'nama_ibu_anak_dua' => $this->input->post('nama_ibu_anak_satu'),
                        'nik_anak_tiga' => $this->input->post('nik_anak_tiga'),
                        'nama_anak_tiga' => $this->input->post('nama_anak_tiga'),
                        'tempat_lahir_anak_tiga' => $this->input->post('tempat_lahir_anak_tiga'),
                        'tanggal_lahir_anak_tiga' => $this->input->post('tanggal_lahir_anak_tiga'),
                        'jenis_kelamin_anak_tiga' => $this->input->post('jenis_kelamin_anak_tiga'),
                        'agama_anak_tiga' => $this->input->post('agama_anak_tiga'),
                        'pendidikan_terakhir_anak_tiga' => $this->input->post('pendidikan_terakhir_anak_tiga'),
                        'status_kawin_anak_tiga' => $this->input->post('status_kawin_anak_tiga'),
                        'warga_negara_anak_tiga' => $this->input->post('warga_negara_anak_tiga'),
                        'pekerjaan_anak_tiga' => $this->input->post('pekerjaan_anak_tiga'),
                        'status_keluarga_anak_tiga' => $this->input->post('status_keluarga_anak_tiga'),
                        'no_paspor_anak_tiga' => $this->input->post('no_paspor_anak_tiga'),
                        'no_kitab_anak_tiga' => $this->input->post('no_kitab_anak_tiga'),
                        'nama_ayah_anak_tiga' => $this->input->post('nama_ayah_anak_tiga'),
                        'nama_ibu_anak_tiga' => $this->input->post('nama_ibu_anak_tiga'),
                        'nik_anak_empat' => $this->input->post('nik_anak_empat'),
                        'nama_anak_empat' => $this->input->post('nama_anak_empat'),
                        'tempat_lahir_anak_empat' => $this->input->post('tempat_lahir_anak_empat'),
                        'tanggal_lahir_anak_empat' => $this->input->post('tanggal_lahir_anak_empat'),
                        'jenis_kelamin_anak_empat' => $this->input->post('jenis_kelamin_anak_empat'),
                        'agama_anak_empat' => $this->input->post('agama_anak_empat'),
                        'pendidikan_terakhir_anak_empat' => $this->input->post('pendidikan_terakhir_anak_empat'),
                        'status_kawin_anak_empat' => $this->input->post('status_kawin_anak_empat'),
                        'warga_negara_anak_empat' => $this->input->post('warga_negara_anak_empat'),
                        'pekerjaan_anak_empat' => $this->input->post('pekerjaan_anak_empat'),
                        'status_keluarga_anak_empat' => $this->input->post('status_keluarga_anak_empat'),
                        'no_paspor_anak_empat' => $this->input->post('no_paspor_anak_empat'),
                        'no_kitab_anak_empat' => $this->input->post('no_kitab_anak_empat'),
                        'nama_ayah_anak_empat' => $this->input->post('nama_ayah_anak_empat'),
                        'nama_ibu_anak_empat' => $this->input->post('nama_ibu_anak_empat'),
                        'nik_anak_lima' => $this->input->post('nik_anak_lima'),
                        'nama_anak_lima' => $this->input->post('nama_anak_lima'),
                        'tempat_lahir_anak_lima' => $this->input->post('tempat_lahir_anak_lima'),
                        'tanggal_lahir_anak_lima' => $this->input->post('tanggal_lahir_anak_lima'),
                        'jenis_kelamin_anak_lima' => $this->input->post('jenis_kelamin_anak_lima'),
                        'agama_anak_lima' => $this->input->post('agama_anak_lima'),
                        'pendidikan_terakhir_anak_lima' => $this->input->post('pendidikan_terakhir_anak_lima'),
                        'status_kawin_anak_lima' => $this->input->post('status_kawin_anak_lima'),
                        'warga_negara_anak_lima' => $this->input->post('warga_negara_anak_lima'),
                        'pekerjaan_anak_lima' => $this->input->post('pekerjaan_anak_lima'),
                        'status_keluarga_anak_lima' => $this->input->post('status_keluarga_anak_lima'),
                        'no_paspor_anak_lima' => $this->input->post('no_paspor_anak_lima'),
                        'no_kitab_anak_lima' => $this->input->post('no_kitab_anak_lima'),
                        'nama_ayah_anak_lima' => $this->input->post('nama_ayah_anak_lima'),
                        'nama_ibu_anak_lima' => $this->input->post('nama_ibu_anak_lima'),
                        'nik_anak_enam' => $this->input->post('nik_anak_enam'),
                        'nama_anak_enam' => $this->input->post('nama_anak_enam'),
                        'tempat_lahir_anak_enam' => $this->input->post('tempat_lahir_anak_enam'),
                        'tanggal_lahir_anak_enam' => $this->input->post('tanggal_lahir_anak_enam'),
                        'jenis_kelamin_anak_enam' => $this->input->post('jenis_kelamin_anak_enam'),
                        'agama_anak_enam' => $this->input->post('agama_anak_enam'),
                        'pendidikan_terakhir_anak_enam' => $this->input->post('pendidikan_terakhir_anak_enam'),
                        'status_kawin_anak_enam' => $this->input->post('status_kawin_anak_enam'),
                        'warga_negara_anak_enam' => $this->input->post('warga_negara_anak_enam'),
                        'pekerjaan_anak_enam' => $this->input->post('pekerjaan_anak_enam'),
                        'status_keluarga_anak_enam' => $this->input->post('status_keluarga_anak_enam'),
                        'no_paspor_anak_enam' => $this->input->post('no_paspor_anak_enam'),
                        'no_kitab_anak_enam' => $this->input->post('no_kitab_anak_enam'),
                        'nama_ayah_anak_enam' => $this->input->post('nama_ayah_anak_enam'),
                        'nama_ibu_anak_enam' => $this->input->post('nama_ibu_anak_enam'),
                        'nik_anak_tujuh' => $this->input->post('nik_anak_tujuh'),
                        'nama_anak_tujuh' => $this->input->post('nama_anak_tujuh'),
                        'tempat_lahir_anak_tujuh' => $this->input->post('tempat_lahir_anak_tujuh'),
                        'tanggal_lahir_anak_tujuh' => $this->input->post('tanggal_lahir_anak_tujuh'),
                        'jenis_kelamin_anak_tujuh' => $this->input->post('jenis_kelamin_anak_tujuh'),
                        'agama_anak_tujuh' => $this->input->post('agama_anak_tujuh'),
                        'pendidikan_terakhir_anak_tujuh' => $this->input->post('pendidikan_terakhir_anak_tujuh'),
                        'status_kawin_anak_tujuh' => $this->input->post('status_kawin_anak_tujuh'),
                        'warga_negara_anak_tujuh' => $this->input->post('warga_negara_anak_tujuh'),
                        'pekerjaan_anak_tujuh' => $this->input->post('pekerjaan_anak_tujuh'),
                        'status_keluarga_anak_tujuh' => $this->input->post('status_keluarga_anak_tujuh'),
                        'no_paspor_anak_tujuh' => $this->input->post('no_paspor_anak_tujuh'),
                        'no_kitab_anak_tujuh' => $this->input->post('no_kitab_anak_tujuh'),
                        'nama_ayah_anak_tujuh' => $this->input->post('nama_ayah_anak_tujuh'),
                        'nama_ibu_anak_tujuh' => $this->input->post('nama_ibu_anak_tujuh'),
                        'nik_anak_delapan' => $this->input->post('nik_anak_delapan'),
                        'nama_anak_delapan' => $this->input->post('nama_anak_delapan'),
                        'tempat_lahir_anak_delapan' => $this->input->post('tempat_lahir_anak_delapan'),
                        'tanggal_lahir_anak_delapan' => $this->input->post('tanggal_lahir_anak_delapan'),
                        'jenis_kelamin_anak_delapan' => $this->input->post('jenis_kelamin_anak_delapan'),
                        'agama_anak_delapan' => $this->input->post('agama_anak_delapan'),
                        'pendidikan_terakhir_anak_delapan' => $this->input->post('pendidikan_terakhir_anak_delapan'),
                        'status_kawin_anak_delapan' => $this->input->post('status_kawin_anak_delapan'),
                        'warga_negara_anak_delapan' => $this->input->post('warga_negara_anak_delapan'),
                        'pekerjaan_anak_delapan' => $this->input->post('pekerjaan_anak_delapan'),
                        'status_keluarga_anak_delapan' => $this->input->post('status_keluarga_anak_delapan'),
                        'no_paspor_anak_delapan' => $this->input->post('no_paspor_anak_delapan'),
                        'no_kitab_anak_delapan' => $this->input->post('no_kitab_anak_delapan'),
                        'nama_ayah_anak_delapan' => $this->input->post('nama_ayah_anak_delapan'),
                        'nama_ibu_anak_delapan' => $this->input->post('nama_ibu_anak_delapan'),
                        'date_created' => date('Y-m-d')
                    ];
                $data2 =
                    [
                        'no_surat' => $this->input->post('no_surat'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'status_kawin' => $this->input->post('status_kawin'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'date_created' => date('Y-m-d')
                    ];
                
                $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                // data dan where untuk tabel pengajuan_kk dan pemohon
    
                $this->pelayanan_model->update_data($where,$data,'pengajuan_kk');
                $this->pelayanan_model->update_data($where,$data2,'pemohon');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/pengajuan_kk');
            }
        }
    
        public function pengajuan_kk_hapus($kode_surat)
        {
            $this->db->trans_start();
            $this->db->delete('pengajuan_kk', array('kode_surat' => $kode_surat));
            $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
            redirect('pelayanan/pengajuan_kk');
        }
        
        public function pengajuan_kk_pdf($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_pengajuan_kk($id);

            $this->load->view('pelayanan/export/pengajuan_kk_pdf', $data);
            $this->load->library('dompdf_gen');
            $paper_size = 'A4';
            $orientation = 'Landscape';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);
    
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $sekarang = date("d:F:Y:h:m:s");
            $this->dompdf->stream("pengajuan kk" . $sekarang . ".pdf", array('Attachment' => 0));
        }
    /////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////SK Pindah Datang///////////////////////////////////////////
        public function sk_pindah_datang()
        {
            $data['title'] = 'SK Pindah Datang';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
                
            $this->load->model('Pelayanan_model', 'pm');
            $data['sk_pindah_datang'] = $this->pm->relasi_option_sk_pindah_datang();
            
            $data['alasan_pindah'] = $this->db->get('skpd_tb_alasan_pindah')->result_array();
            $data['klasifikasi_pindah'] = $this->db->get('skpd_tb_klasifikasi_pindah')->result_array();
            $data['jenis_kepindahan'] = $this->db->get('skpd_tb_jenis_kepindahan')->result_array();
            $data['status_tidak_pindah'] = $this->db->get('skpd_tb_status_tidak_pindah')->result_array();
            $data['status_pindah'] = $this->db->get('skpd_tb_status_pindah')->result_array();
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_pindah_datang', $data);
            $this->load->view('layout/footer_pelayanan');
        }
    
        public function sk_pindah_datang_tambah()
        {
            $data['title'] = 'SK Pindah Datang';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $this->load->model('Pelayanan_model', 'rtrwm');
            $data['sk_pindah_datang'] = $this->rtrwm->relasi_option_sk_pindah_datang();
            $data['alasan_pindah'] = $this->db->get('skpd_tb_alasan_pindah')->result_array();
            $data['klasifikasi_pindah'] = $this->db->get('skpd_tb_klasifikasi_pindah')->result_array();
            $data['jenis_kepindahan'] = $this->db->get('skpd_tb_jenis_kepindahan')->result_array();
            $data['status_tidak_pindah'] = $this->db->get('skpd_tb_status_tidak_pindah')->result_array();
            $data['status_pindah'] = $this->db->get('skpd_tb_status_pindah')->result_array();
    
            $data['sk_pindah_datang'] = $this->pelayanan_model->tampil_sk_pindah_datang('sk_pindah_datang')->result();
            $this->load->model('Pelayanan_model');
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('no_surat', 'no_surat', 'required', [
                'required' => 'Nomor Surat Masih Kosong!'
           ]);
            $this->form_validation->set_rules('no_kk', 'no_kk', 'required|min_length[16]|max_length[16]', [
                'required' => 'Nomor KK Masih Kosong!',
                'min_length' => 'Nomor KK Terlalu Pendek!',
                'max_length' => 'Nomo KK Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]', [
                'required' => 'Nomor Nik Masih Kosong!',
                'min_length' => 'Nik Terlalu Pendek!',
                'max_length' => 'Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('namapenduduk', 'NamaPenduduk', 'required', [
                'required' => 'Nama Masih Kosong!',
            ]);
                    $this->form_validation->set_rules('tempatlahir', 'TempatLahir', 'required', [
                'required' => 'Tempat Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggallahir', 'TanggalLahir', 'required', [
                'required' => 'Tanggal Lahir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('jeniskelamin', 'JenisKelamin', 'required', [
                'required' => 'Jenis Kelamin Masih Kosong!',
            ]);
            $this->form_validation->set_rules('agamapenduduk', 'AgamaPenduduk', 'required', [
                'required' => 'Agama Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pendidikanterakhir', 'PendidikanTerakhir', 'required', [
                'required' => 'Pendidikan Terakhir Masih Kosong!',
            ]);
            $this->form_validation->set_rules('statuskawin', 'StatusKawin', 'required', [
                'required' => 'Status Pernikahan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('warganegara', 'WargaNegara', 'required', [
                'required' => 'Warga Negara Masih Kosong!',
            ]);
            $this->form_validation->set_rules('pekerjaanpenduduk', 'PekerjaanPenduduk', 'required', [
                'required' => 'Pekerjaan Penduduk Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamatpenduduk', 'AlamatPenduduk', 'required', [
                'required' => 'Alamat Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nort', 'nort', 'required', [
                'required' => 'Nomor RT Masih Kosong!',
            ]);
            $this->form_validation->set_rules('norw', 'norw', 'required', [
                'required' => 'Nomor RW Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kodepos', 'KodePos', 'required|min_length[5]|max_length[5]', [
                'required' => 'Kode Pos Masih Kosong!',
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('telepon', 'telepon', 'required|min_length[12]|max_length[12]', [
                'required' => 'Telepon Masih Kosong!',
                'min_length' => 'Telepon Terlalu Pendek!',
                'max_length' => 'Telepon Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('alasan_pindah_id', 'alasan_pindah_id', 'required', [
                'required' => 'Alasan Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('klasifikasi_pindah_id', 'klasifikasi_pindah_id', 'required', [
                'required' => 'Klasifikasi Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('jenis_kepindahan_id', 'jenis_kepindahan_id', 'required', [
                'required' => 'Jenis Kepindahan Masih Kosong!',
            ]);
            $this->form_validation->set_rules('status_tidak_pindah_id', 'status_tidak_pindah_id', 'required', [
                'required' => 'Status Tidak Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('status_pindah_id', 'status_pindah_id', 'required', [
                'required' => 'Status Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('tanggal_pindah', 'tanggal_pindah', 'required', [
                'required' => 'Tanggal Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('alamat_pindah', 'alamat_pindah', 'required', [
                'required' => 'Alamat Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('desa_pindah', 'desa_pindah', 'required', [
                'required' => 'Desa Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kecamatan_pindah', 'kecamatan_pindah', 'required', [
                'required' => 'Kecamatan Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kabupaten_pindah', 'kabupaten_pindah', 'required', [
                'required' => 'Kabupaten Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('provinsi_pindah', 'provinsi_pindah', 'required', [
                'required' => 'Provinsi Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('no_rt_pindah', 'no_rt_pindah', 'required', [
                'required' => 'No RT Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('no_rw_pindah', 'no_rw_pindah', 'required', [
                'required' => 'No RW Pindah Masih Kosong!',
            ]);
            $this->form_validation->set_rules('kodepos_pindah', 'KodePos_pindah', 'required|min_length[5]|max_length[5]', [
                'required' => 'Kode Pos Pindah Masih Kosong!',
                'min_length' => 'Kode Pos Pindah Terlalu Pendek!',
                'max_length' => 'Kode Pos Pindah Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('telepon_pindah', 'telepon_pindah', 'required|min_length[12]|max_length[12]', [
                'required' => 'Telepon Pindah Masih Kosong!',
                'min_length' => 'Telepon Pindah Terlalu Pendek!',
                'max_length' => 'Telepon Pindah Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('nama_pindah_satu', 'nama_pindah_satu', 'required', [
                'required' => 'Nama Pindah Kolom I Masih Kosong!',
            ]);
            $this->form_validation->set_rules('nik_pindah_satu', 'nik_pindah_satu', 'required|min_length[16]|max_length[16]', [
                'required' => 'NIK Pindah Masih Kosong!',
                'min_length' => 'NIK Pindah Terlalu Pendek!',
                'max_length' => 'NIK Pindah Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
    
            //form validation insert   
           if ($this->form_validation->run() == false) {
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_pindah_datang', $data);
            $this->load->view('layout/footer_pelayanan');
            } else {
              
                $data =
                    [
                        'no_surat' => $this->input->post('no_surat'),
                        'kode_surat' => $this->Pelayanan_model->CreateCode_sk_pindah_datang(),
                        'no_kk' => $this->input->post('no_kk'),
                        'nik' => $this->input->post('nonik'),
                        'nama' => $this->input->post('namapenduduk'),
                        'tempat_lahir' => $this->input->post('tempatlahir'),
                        'tanggal_lahir' => $this->input->post('tanggallahir'),
                        'jenis_kelamin' => $this->input->post('jeniskelamin'),
                        'agama' => $this->input->post('agamapenduduk'),
                        'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                        'status_kawin' => $this->input->post('statuskawin'),
                        'warga_negara' => $this->input->post('warganegara'),
                        'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'telepon' => $this->input->post('telepon'),
                        'alasan_pindah_id' => $this->input->post('alasan_pindah_id'),
                        'lainnya' => $this->input->post('lainnya'),
                        'klasifikasi_pindah_id' => $this->input->post('klasifikasi_pindah_id'),
                        'jenis_kepindahan_id' => $this->input->post('jenis_kepindahan_id'),
                        'status_tidak_pindah_id' => $this->input->post('status_tidak_pindah_id'),
                        'status_pindah_id' => $this->input->post('status_pindah_id'),
                        'tanggal_pindah' => $this->input->post('tanggal_pindah'),
                        'alamat_pindah' => $this->input->post('alamat_pindah'),
                        'desa_pindah' => $this->input->post('desa_pindah'),
                        'kecamatan_pindah' => $this->input->post('kecamatan_pindah'),
                        'kabupaten_pindah' => $this->input->post('kabupaten_pindah'),
                        'provinsi_pindah' => $this->input->post('provinsi_pindah'),
                        'no_rt_pindah' => $this->input->post('no_rt_pindah'),
                        'no_rw_pindah' => $this->input->post('no_rw_pindah'),
                        'kodepos_pindah' => $this->input->post('kodepos_pindah'),
                        'telepon_pindah' => $this->input->post('telepon_pindah'),
                        'nama_pindah_satu' => $this->input->post('nama_pindah_satu'),
                        'nik_pindah_satu' => $this->input->post('nik_pindah_satu'),
                        'nama_pindah_dua' => $this->input->post('nama_pindah_dua'),
                        'nik_pindah_dua' => $this->input->post('nik_pindah_dua'),
                        'nama_pindah_tiga' => $this->input->post('nama_pindah_tiga'),
                        'nik_pindah_tiga' => $this->input->post('nik_pindah_tiga'),
                        'nama_pindah_empat' => $this->input->post('nama_pindah_empat'),
                        'nik_pindah_empat' => $this->input->post('nik_pindah_empat'),
                        'nama_pindah_lima' => $this->input->post('nama_pindah_lima'),
                        'nik_pindah_lima' => $this->input->post('nik_pindah_lima'),
                        'nama_pindah_enam' => $this->input->post('nama_pindah_enam'),
                        'nik_pindah_enam' => $this->input->post('nik_pindah_enam'),
                        'nama_pindah_tujuh' => $this->input->post('nama_pindah_tujuh'),
                        'nik_pindah_tujuh' => $this->input->post('nik_pindah_tujuh'),
                        'nama_pindah_delapan' => $this->input->post('nama_pindah_delapan'),
                        'nik_pindah_delapan' => $this->input->post('nik_pindah_delapan'),
                        'nama_pindah_sembilan' => $this->input->post('nama_pindah_sembilan'),
                        'nik_pindah_sembilan' => $this->input->post('nik_pindah_sembilan'),
                        'nama_pindah_sepuluh' => $this->input->post('nama_pindah_sepuluh'),
                        'nik_pindah_sepuluh' => $this->input->post('nik_pindah_sepuluh'),
                        'nama_surat' => "SK Pindah Datang",
                        'date_created' => date('Y-m-d')
                    ];
                $data2 =
                    [  
                        'no_surat' => $this->input->post('no_surat'),
                        'kode_surat' => $this->Pelayanan_model->CreateCode_sk_pindah_datang(),
                        'nik' => $this->input->post('nonik'),
                        'nama' => $this->input->post('namapenduduk'),
                        'tempat_lahir' => $this->input->post('tempatlahir'),
                        'tanggal_lahir' => $this->input->post('tanggallahir'),
                        'jenis_kelamin' => $this->input->post('jeniskelamin'),
                        'agama' => $this->input->post('agamapenduduk'),
                        'pendidikan_terakhir' => $this->input->post('pendidikanterakhir'),
                        'status_kawin' => $this->input->post('statuskawin'),
                        'warga_negara' => $this->input->post('warganegara'),
                        'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'nama_surat' => "SK Pindah Datang",
                        'date_created' => date('Y-m-d')
                    ];
                $this->db->insert('sk_pindah_datang', $data);
                $this->db->insert('pemohon', $data2);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/sk_pindah_datang');
            }
        }
    
        public function sk_pindah_datang_detail()
        {
            $data['title'] = 'SK Pindah Datang';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $this->load->model('Pelayanan_model', 'rtrwm');
            $data['sk_pindah_datang'] = $this->rtrwm->relasi_option_sk_pindah_datang();
            $data['alasan_pindah'] = $this->db->get('skpd_tb_alasan_pindah')->result_array();
            $data['klasifikasi_pindah'] = $this->db->get('skpd_tb_klasifikasi_pindah')->result_array();
            $data['jenis_kepindahan'] = $this->db->get('skpd_tb_jenis_kepindahan')->result_array();
            $data['status_tidak_pindah'] = $this->db->get('skpd_tb_status_tidak_pindah')->result_array();
            $data['status_pindah'] = $this->db->get('skpd_tb_status_pindah')->result_array();
    
            $data['sk_pindah_datang'] = $this->pelayanan_model->tampil_sk_pindah_datang('sk_pindah_datang')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/sk_pindah_datang', $data);
            $this->load->view('layout/footer_pelayanan');
        }
    
        public function sk_pindah_datang_ubah($kode_surat)
        {
            $data['title'] = 'SK Pindah Datang';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $this->load->model('Pelayanan_model', 'rtrwm');
            $data['sk_pindah_datang'] = $this->rtrwm->relasi_option_sk_pindah_datang();
            $data['alasan_pindah'] = $this->db->get('skpd_tb_alasan_pindah')->result_array();
            $data['klasifikasi_pindah'] = $this->db->get('skpd_tb_klasifikasi_pindah')->result_array();
            $data['jenis_kepindahan'] = $this->db->get('skpd_tb_jenis_kepindahan')->result_array();
            $data['status_tidak_pindah'] = $this->db->get('skpd_tb_status_tidak_pindah')->result_array();
            $data['status_pindah'] = $this->db->get('skpd_tb_status_pindah')->result_array();
    
            $data['sk_pindah_datang'] = $this->pelayanan_model->tampil_sk_pindah_datang('sk_pindah_datang')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('no_kk', 'no_kk', 'min_length[16]|max_length[16]', [
                'min_length' => 'No KK Terlalu Pendek!',
                'max_length' => 'No KK Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('nik', 'nik', 'min_length[16]|max_length[16]', [
                'min_length' => 'No Nik Terlalu Pendek!',
                'max_length' => 'No Nik Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('kodepos', 'kodepos', 'min_length[5]|max_length[5]', [
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
            //form validation
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/sk_pindah_datang', $data);
                $this->load->view('layout/footer_pelayanan');
            } else {
                $data =
                    [
                        'no_surat' => $this->input->post('no_surat'),
                        'no_kk' => $this->input->post('no_kk'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'status_kawin' => $this->input->post('status_kawin'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'telepon' => $this->input->post('telepon'),
                        'alasan_pindah_id' => $this->input->post('alasan_pindah_id'),
                        'lainnya' => $this->input->post('lainnya'),
                        'klasifikasi_pindah_id' => $this->input->post('klasifikasi_pindah_id'),
                        'jenis_kepindahan_id' => $this->input->post('jenis_kepindahan_id'),
                        'status_tidak_pindah_id' => $this->input->post('status_tidak_pindah_id'),
                        'status_pindah_id' => $this->input->post('status_pindah_id'),
                        'tanggal_pindah' => $this->input->post('tanggal_pindah'),
                        'alamat_pindah' => $this->input->post('alamat_pindah'),
                        'desa_pindah' => $this->input->post('desa_pindah'),
                        'kecamatan_pindah' => $this->input->post('kecamatan_pindah'),
                        'kabupaten_pindah' => $this->input->post('kabupaten_pindah'),
                        'provinsi_pindah' => $this->input->post('provinsi_pindah'),
                        'no_rt_pindah' => $this->input->post('no_rt_pindah'),
                        'no_rw_pindah' => $this->input->post('no_rw_pindah'),
                        'kodepos_pindah' => $this->input->post('kodepos_pindah'),
                        'telepon_pindah' => $this->input->post('telepon_pindah'),
                        'nama_pindah_satu' => $this->input->post('nama_pindah_satu'),
                        'nik_pindah_satu' => $this->input->post('nik_pindah_satu'),
                        'nama_pindah_dua' => $this->input->post('nama_pindah_dua'),
                        'nik_pindah_dua' => $this->input->post('nik_pindah_dua'),
                        'nama_pindah_tiga' => $this->input->post('nama_pindah_tiga'),
                        'nik_pindah_tiga' => $this->input->post('nik_pindah_tiga'),
                        'nama_pindah_empat' => $this->input->post('nama_pindah_empat'),
                        'nik_pindah_empat' => $this->input->post('nik_pindah_empat'),
                        'nama_pindah_lima' => $this->input->post('nama_pindah_lima'),
                        'nik_pindah_lima' => $this->input->post('nik_pindah_lima'),
                        'nama_pindah_enam' => $this->input->post('nama_pindah_enam'),
                        'nik_pindah_enam' => $this->input->post('nik_pindah_enam'),
                        'nama_pindah_tujuh' => $this->input->post('nama_pindah_tujuh'),
                        'nik_pindah_tujuh' => $this->input->post('nik_pindah_tujuh'),
                        'nama_pindah_delapan' => $this->input->post('nama_pindah_delapan'),
                        'nik_pindah_delapan' => $this->input->post('nik_pindah_delapan'),
                        'nama_pindah_sembilan' => $this->input->post('nama_pindah_sembilan'),
                        'nik_pindah_sembilan' => $this->input->post('nik_pindah_sembilan'),
                        'nama_pindah_sepuluh' => $this->input->post('nama_pindah_sepuluh'),
                        'nik_pindah_sepuluh' => $this->input->post('nik_pindah_sepuluh'),
                        'nama_surat' => "SK Pindah Datang",
                        'date_created' => date('Y-m-d')
                    ];
                $data2 =
                    [  
                        'no_surat' => $this->input->post('no_surat'),
                        'nik' => $this->input->post('nonik'),
                        'nama' => $this->input->post('nama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'status_kawin' => $this->input->post('status_kawin'),
                        'warga_negara' => $this->input->post('warga_negara'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'alamat' => $this->input->post('alamat'),
                        'no_rt' => $this->input->post('no_rt'),
                        'no_rw' => $this->input->post('no_rw'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'nama_surat' => "SK Pindah Datang",
                        'date_created' => date('Y-m-d')
                    ];
                
                $where = array(
                    'kode_surat' => $this->input->post('kode_surat')
                );
    
                // data dan where untuk tabel domisili dan pemohon
                // data2 dan where2 untuk tabel penduduk
    
                $this->pelayanan_model->update_data($where,$data,'sk_pindah_datang');
                $this->pelayanan_model->update_data($where,$data2,'pemohon');
                //$this->pelayanan_model->update_data($where2,$data2,'penduduk');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/sk_pindah_datang');
            }
        }
    
        public function sk_pindah_datang_hapus($kode_surat)
        {
            $this->db->trans_start();
            $this->db->delete('sk_pindah_datang', array('kode_surat' => $kode_surat));
            $this->db->delete('pemohon', array('kode_surat' => $kode_surat));
            $this->db->trans_complete();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
            redirect('pelayanan/sk_pindah_datang');
        }
        
        public function sk_pindah_datang_pdf($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_sk_pindah_datang($id);
            
            $this->load->view('pelayanan/export/sk_pindah_datang_pdf', $data);
            $this->load->library('dompdf_gen');
            $paper_size = 'A4';
            $orientation = 'Landscape';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);
    
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $sekarang = date("d:F:Y:h:m:s");
            $this->dompdf->stream("sk pindah datang" . $sekarang . ".pdf", array('Attachment' => 0));
        }    
    ///////////////////////////////////////////////BATAS///////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////melahirkan//////////////////////////////////////////

    public function melahirkan()
        {
            $data['title'] = 'SK Melahirkan';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['melahirkan'] = $this->pelayanan_model->tampil_melahirkan('melahirkan')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
            $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
            $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
            $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/melahirkan', $data);
            $this->load->view('layout/footer_melahirkan');
        }
    
    public function melahirkan_tambah()
        {
            $data['title'] = 'SK Melahirkan';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['melahirkan'] = $this->pelayanan_model->tampil_melahirkan('melahirkan')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
            $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
            $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
            $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
    
            //form validation pesan error
            $this->form_validation->set_rules('nomelahirkan', 'Nomelahirkan', 'required|is_unique[melahirkan.no_melahirkan]', [
                'required' => 'Data Masih Kosong!',
                'is_unique' => 'Data Sudah Ada!'
            ]);
            $this->form_validation->set_rules('nokk', 'Nokk', 'required|min_length[16]|max_length[16]', [
                'required' => 'Data Masih Kosong!',
                'min_length' => 'Terlalu Pendek!',
                'max_length' => 'Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('nama_anak', 'Nama_anak', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('nama_ayah', 'Nama_ayah', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('nama_ibu', 'Nama_ibu', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('tempat_lahir_anak', 'Tempat_lahir_anak', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('tanggal_lahir_anak', 'Tanggal_lahir_anak', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('jenis_kelamin_anak', 'Jenis_kelamin_anak', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('alamatpenduduk', 'Alamatpenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('nort', 'NoRt', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('norw', 'NoRw', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('kodepos', 'Kodepos', 'required|min_length[5]|max_length[5]', [
                'required' => 'Data Masih Kosong!',
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('kelurahanpenduduk', 'Kelurahanpenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('kecamatanpenduduk', 'Kecamatanpenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('kabupatenpenduduk', 'Kabupatenpenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('provinsipenduduk', 'Provinsipenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            //batas form validasi pesan error
    
    
            //form validation insert
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/melahirkan', $data);
                $this->load->view('layout/footer_melahirkan');
            } else {
                $data =
                    [
                        'no_melahirkan' => $this->input->post('nomelahirkan'),
                        'no_kk' => $this->input->post('nokk'),
                        'nama_anak' => $this->input->post('nama_anak'),
                        'nama_ayah' => $this->input->post('nama_ayah'),
                        'nama_ibu' => $this->input->post('nama_ibu'),
                        'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
                        'tanggal_lahir_anak' => $this->input->post('tanggal_lahir_anak'),
                        'jenis_kelamin_anak' => $this->input->post('jenis_kelamin_anak'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'kelurahan' => $this->input->post('kelurahanpenduduk'),
                        'kecamatan' => $this->input->post('kecamatanpenduduk'),
                        'kabupaten' => $this->input->post('kabupatenpenduduk'),
                        'provinsi' => $this->input->post('provinsipenduduk'),
                        'date_created' => date('Y-m-d')
                    ];
                $this->db->insert('melahirkan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/melahirkan');
            }
        }
    
    
   
    
        public function melahirkan_detail()
        {
            $data['title'] = 'SK Melahirkan';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['melahirkan'] = $this->pelayanan_model->tampil_melahirkan('melahirkan')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
            $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
            $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
            $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
        }
    
    
        public function melahirkan_ubah()
        {
            $data['title'] = 'SK Melahirkan';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            $data['melahirkan'] = $this->pelayanan_model->tampil_melahirkan('melahirkan')->result();
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
            $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
            $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
            $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
    
            //form validation pesan error
            $this->form_validation->set_rules('nokk', 'Nokk', 'min_length[16]|max_length[16]', [
                'min_length' => 'No KK Terlalu Pendek!',
                'max_length' => 'No KK Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('kodepos', 'Kodepos', 'min_length[5]|max_length[5]', [
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
    
            //form validation
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/melahirkan', $data);
                $this->load->view('layout/footer_melahirkan');
            } else {
                $data =
                    [
                        'no_melahirkan' => $this->input->post('nomelahirkan'),
                        'no_kk' => $this->input->post('nokk'),
                        'nama_anak' => $this->input->post('nama_anak'),
                        'nama_ayah' => $this->input->post('nama_ayah'),
                        'nama_ibu' => $this->input->post('nama_ibu'),
                        'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
                        'tanggal_lahir_anak' => $this->input->post('tanggal_lahir_anak'),
                        'jenis_kelamin_anak' => $this->input->post('jenis_kelamin_anak'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'kelurahan' => $this->input->post('kelurahanpenduduk'),
                        'kecamatan' => $this->input->post('kecamatanpenduduk'),
                        'kabupaten' => $this->input->post('kabupatenpenduduk'),
                        'provinsi' => $this->input->post('provinsipenduduk'),
                        'date_created' => time()
                    ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('melahirkan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/melahirkan');
            }
        }
    
    public function melahirkan_hapus($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('melahirkan');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
            redirect('pelayanan/melahirkan');
        }
    
    public function melahirkan_print($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_melahirkan($id);
            $this->load->view('pelayanan/export/melahirkan_print', $data);
        }
    
    public function melahirkan_pdf($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_melahirkan($id);
            $this->load->view('pelayanan/export/melahirkan_pdf', $data);
            $html = $this->output->get_output();
            $this->load->library('dompdf_gen');
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $sekarang = date("d:F:Y:h:m:s");
            $this->dompdf->stream("pendaftaran" . $sekarang . ".pdf", array('Attachment' => 0));
        }
    
    /////////////////////////////////////////////////////////////////////////////////////
    
    ////////////////////////////////////////////MENINGGAL////////////////////////////////
    
    public function meninggal()
        {
            $data['title'] = 'SK Meninggal';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            //model untuk merelasikan 3 tabel user_submenu, user_menu, user_active
            $this->load->model('Pelayanan_model', 'pelayananm');
            $data['meninggalM'] = $this->pelayananm->getstatusmeninggal();
            $data['status_penduduk'] = $this->db->get('tb_status_penduduk')->result_array();
            //batas model
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
            $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
            $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
            $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            $this->load->view('layout/header_pelayanan', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('pelayanan/meninggal', $data);
            $this->load->view('layout/footer_meninggal');
        }
    
    public function meninggal_tambah()
        {
            $data['title'] = 'SK Meninggal';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            //model untuk merelasikan 3 tabel user_submenu, user_menu, user_active
            $this->load->model('Pelayanan_model', 'pelayananm');
            $data['meninggalM'] = $this->pelayananm->getstatusmeninggal();
            $data['status_penduduk'] = $this->db->get('tb_status_penduduk')->result_array();
            //batas model
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
            $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
            $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
            $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('nomeninggal', 'Nomeninggal', 'required|is_unique[meninggal.no_meninggal]', [
                'required' => 'Data Masih Kosong!',
                'is_unique' => 'Nomor Sudah Ada!'
            ]);
            $this->form_validation->set_rules('nonik', 'Nonik', 'required|min_length[16]|max_length[16]|is_unique[meninggal.nik]', [
                'required' => 'Data Masih Kosong!',
                'min_length' => 'No Nik Terlalu Pendek!',
                'max_length' => 'No Nik Terlalu Panjang!',
                'is_unique' => 'No Nik Sudah Ada!'
            ]);
            $this->form_validation->set_rules('namapenduduk', 'Namapenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('tempatlahir', 'Tempatlahir', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('tanggallahir', 'Tanggallahir', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('agamapenduduk', 'Agamapenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('statuskawin', 'Statuskawin', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('statuskeluarga', 'Statuskeluarga', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('pekerjaanpenduduk', 'Pekerjaanpenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('alamatpenduduk', 'Alamatpenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('nort', 'NoRt', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('norw', 'NoRw', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('kodepos', 'Kodepos', 'required|min_length[5]|max_length[5]', [
                'required' => 'Data Masih Kosong!',
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('kelurahanpenduduk', 'Kelurahanpenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('kecamatanpenduduk', 'Kecamatanpenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('kabupatenpenduduk', 'Kabupatenpenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            $this->form_validation->set_rules('provinsipenduduk', 'Provinsipenduduk', 'required', [
                'required' => 'Data Masih Kosong!'
            ]);
            //batas form validasi pesan error
    
    
            //form validation insert
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/meninggal', $data);
                $this->load->view('layout/footer_meninggal');
            } else {
                $data =
                    [
                        'no_meninggal' => $this->input->post('nomeninggal'),
                        'nik' => $this->input->post('nonik'),
                        'nama' => $this->input->post('namapenduduk'),
                        'tempat_lahir' => $this->input->post('tempatlahir'),
                        'tanggal_lahir' => $this->input->post('tanggallahir'),
                        'jenis_kelamin' => $this->input->post('jeniskelamin'),
                        'agama' => $this->input->post('agamapenduduk'),
                        'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                        'status_kawin' => $this->input->post('statuskawin'),
                        'status_keluarga' => $this->input->post('statuskeluarga'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'kelurahan' => $this->input->post('kelurahanpenduduk'),
                        'kecamatan' => $this->input->post('kecamatanpenduduk'),
                        'kabupaten' => $this->input->post('kabupatenpenduduk'),
                        'provinsi' => $this->input->post('provinsipenduduk'),
                        'status' => 1,
                        'date_created' => time()
                    ];
                $this->db->insert('meninggal', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/meninggal');
            }
        }
    
    public function meninggal_detail()
        {
            $data['title'] = 'SK Meninggal';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            //model untuk merelasikan 3 tabel user_submenu, user_menu, user_active
            $this->load->model('Pelayanan_model', 'pelayananm');
            $data['meninggalM'] = $this->pelayananm->getstatusmeninggal();
            $data['status_penduduk'] = $this->db->get('tb_status_penduduk')->result_array();
            //batas model
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
            $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
            $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
            $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
        }
    
    public function meninggal_ubah()
        {
            $data['title'] = 'SK Meninggal';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            //model untuk merelasikan 3 tabel user_submenu, user_menu, user_active
            $this->load->model('Pelayanan_model', 'pelayananm');
            $data['meninggalM'] = $this->pelayananm->getstatusmeninggal();
            $data['status_penduduk'] = $this->db->get('tb_status_penduduk')->result_array();
            //batas model
    
            $data['instansi'] = $this->db->get('instansi')->result_array();
            $data['rt'] = $this->db->get('rt')->result_array();
            $data['rw'] = $this->db->get('rw')->result_array();
            $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
            $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
            $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
            $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
            $data['agama'] = $this->db->get('tb_agama')->result_array();
            $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();
    
            //form validation pesan error
            $this->form_validation->set_rules('nonik', 'Nonik', 'min_length[16]|max_length[16]', [
                'min_length' => 'Terlalu Pendek!',
                'max_length' => 'Terlalu Panjang!'
            ]);
            $this->form_validation->set_rules('kodepos', 'Kodepos', 'min_length[5]|max_length[5]', [
                'min_length' => 'Kode Pos Terlalu Pendek!',
                'max_length' => 'Kode Pos Terlalu Panjang!'
            ]);
            //batas form validasi pesan error
    
            //form validation
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header_pelayanan', $data);
                $this->load->view('layout/sidebar', $data);
                $this->load->view('layout/topbar', $data);
                $this->load->view('pelayanan/meninggal', $data);
                $this->load->view('layout/footer_meninggal');
            } else {
                $data =
                    [
                        'no_meninggal' => $this->input->post('nomeninggal'),
                        'nik' => $this->input->post('nonik'),
                        'nama' => $this->input->post('namapenduduk'),
                        'tempat_lahir' => $this->input->post('tempatlahir'),
                        'tanggal_lahir' => $this->input->post('tanggallahir'),
                        'jenis_kelamin' => $this->input->post('jeniskelamin'),
                        'agama' => $this->input->post('agamapenduduk'),
                        'status_kawin' => $this->input->post('statuskawin'),
                        'status_keluarga' => $this->input->post('statuskeluarga'),
                        'pekerjaan' => $this->input->post('pekerjaanpenduduk'),
                        'status' => $this->input->post('statuspenduduk'),
                        'alamat' => $this->input->post('alamatpenduduk'),
                        'no_rt' => $this->input->post('nort'),
                        'no_rw' => $this->input->post('norw'),
                        'kode_pos' => $this->input->post('kodepos'),
                        'kelurahan' => $this->input->post('kelurahanpenduduk'),
                        'kecamatan' => $this->input->post('kecamatanpenduduk'),
                        'kabupaten' => $this->input->post('kabupatenpenduduk'),
                        'provinsi' => $this->input->post('provinsipenduduk')
                    ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('meninggal', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>');
                redirect('pelayanan/meninggal');
            }
        }
    
    public function meninggal_hapus($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('meninggal');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
            redirect('pelayanan/meninggal');
        }
    
    public function meninggal_print($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_meninggal($id);
            $this->load->view('pelayanan/export/meninggal_print', $data);
        }
    
    public function meninggal_pdf($id)
        {
            $data['instansi'] = $this->db->get('instansi')->row_array();
            $data['export'] = $this->pelayanan_model->ambil_id_meninggal($id);
            $this->load->view('pelayanan/export/meninggal_pdf', $data);
            $html = $this->output->get_output();
            $this->load->library('dompdf_gen');
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $sekarang = date("d:F:Y:h:m:s");
            $this->dompdf->stream("pendaftaran" . $sekarang . ".pdf", array('Attachment' => 0));
        }
    
   
    ////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////
   ///////////////////////////AUTOCOMPLETE///////////////////////////////
 
   function autocomplete_sk_kelahiran()
   {
       if (isset($_GET['term'])) {
           $result = $this->pelayanan_model->get_autocomple_sk_kelahiran($_GET['term']);
           if (count($result) > 0) {
               foreach ($result as $row)
                   $result_array[] = array(
                       'label'     => $row->nik,
                       'namapenduduk'    => ($row->nama),
                       'tempatlahir'     => ($row->tempat_lahir),
                       'tanggallahir'     => ($row->tanggal_lahir),
                       'jeniskelamin'     => ($row->jenis_kelamin),
                       'agamapenduduk'     => ($row->agama),
                       'pendidikanterakhir'     => ($row->pendidikan_terakhir),
                       'statuskawin'     => ($row->status_kawin),
                       'warganegara'     => ($row->warga_negara),
                       'pekerjaanpenduduk'     => ($row->pekerjaan),
                       'alamatpenduduk'    => ($row->alamat),
                       'nort'     => ($row->no_rt),
                       'norw'     => ($row->no_rw),
                       'kodepos'     => ($row->kode_pos),
                   );
               echo json_encode($result_array);
           }
       }
   }
    ///////////////////////////AUTOCOMPLETE///////////////////////////////
 
    function autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->pelayanan_model->get_autocomple($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label'     => $row->nik,
                        'namapenduduk'    => strtolower($row->nama),
                        'tempatlahir'     => strtolower($row->tempat_lahir),
                        'tanggallahir'     => ($row->tanggal_lahir),
                        'jeniskelamin'     => ($row->jenis_kelamin),
                        'agamapenduduk'     => ($row->agama),
                        'pendidikanterakhir'     => ($row->pendidikan_terakhir),
                        'statuskawin'     => ($row->status_kawin),
                        'warganegara'     => ($row->warga_negara),
                        'pekerjaanpenduduk'     => ($row->pekerjaan),
                        'alamatpenduduk'    => strtolower($row->alamat),
                        'nort'     => ($row->no_rt),
                        'norw'     => ($row->no_rw),
                        'kodepos'     => ($row->kode_pos),
                    );
                echo json_encode($result_array);
            }
        }
    }

    ///AUTOCOMPLE UNTUK N1 TIDAK ADA MEMANG SENGAJA////

    function autocomplete_ndua()
    {
        if (isset($_GET['term'])) {
            $result = $this->pelayanan_model->get_autocomple_ndua($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label'     => $row->nik,
                        'namapenduduk'    => ($row->nama),
                        'calonpenduduk'    => ($row->calon),
                        'binbinti'    => ($row->binbinti),
                        'tempatlahir'     => ($row->tempat_lahir),
                        'tanggallahir'     => ($row->tanggal_lahir),
                        'jeniskelamin'     => ($row->jenis_kelamin),
                        'agamapenduduk'     => ($row->agama),
                        'pendidikanterakhir'     => ($row->pendidikan_terakhir),
                        'statuskawin'     => ($row->status_kawin),
                        'statuspenduduk'     => ($row->status),
                        'warganegara'     => ($row->warga_negara),
                        'pekerjaanpenduduk'     => ($row->pekerjaan),
                        'alamatpenduduk'    => ($row->alamat),
                        'nort'     => ($row->no_rt),
                        'norw'     => ($row->no_rw),
                        'kodepos'     => ($row->kode_pos),
                        'namaayah' => ($row->nama_ayah),
                        'tempatlahirayah' => ($row->tempat_lahir_ayah),
                        'tanggallahirayah' => ($row->tanggal_lahir_ayah),
                        'agamaayah' => ($row->agama_ayah),
                        'warganegaraayah' => ($row->warga_negara_ayah),
                        'pekerjaanayah' => ($row->pekerjaan_ayah),
                        'namaibu' => ($row->nama_ibu),
                        'tempatlahiribu' => ($row->tempat_lahir_ibu),
                        'tanggallahiribu' => ($row->tanggal_lahir_ibu),
                        'agamaibu' => ($row->agama_ibu),
                        'warganegaraibu' => ($row->warga_negara_ibu),
                        'pekerjaanibu' => ($row->pekerjaan_ibu),
                        'namapasangan' => ($row->nama_pasangan),
                        'calonpasangan' => ($row->calon_pasangan),
                        'tempatlahirpasangan' => ($row->tempat_lahir_pasangan),
                        'tanggallahirpasangan' => ($row->tanggal_lahir_pasangan),
                        'agamapasangan' => ($row->agama_pasangan),
                        'warganegarapasangan' => ($row->warga_negara_pasangan),
                        'pekerjaanpasangan' => ($row->pekerjaan_pasangan),
                        'alamatpasangan' => ($row->alamat_pasangan),
                    );
                echo json_encode($result_array);
            }
        }
    }

    function autocomplete_ntiga()
    {
        if (isset($_GET['term'])) {
            $result = $this->pelayanan_model->get_autocomple_ntiga($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label'     => $row->nik,
                        'namapenduduk'    => ($row->nama),
                        'calonpenduduk'    => ($row->calon),
                        'binbinti'    => ($row->binbinti),
                        'tempatlahir'     => ($row->tempat_lahir),
                        'tanggallahir'     => ($row->tanggal_lahir),
                        'jeniskelamin'     => ($row->jenis_kelamin),
                        'agamapenduduk'     => ($row->agama),
                        'pendidikanterakhir'     => ($row->pendidikan_terakhir),
                        'statuskawin'     => ($row->status_kawin),
                        'statuspenduduk'     => ($row->status),
                        'warganegara'     => ($row->warga_negara),
                        'pekerjaanpenduduk'     => ($row->pekerjaan),
                        'alamatpenduduk'    => ($row->alamat),
                        'nort'     => ($row->no_rt),
                        'norw'     => ($row->no_rw),
                        'kodepos'     => ($row->kode_pos),
                        'namaayah' => ($row->nama_ayah),
                        'tempatlahirayah' => ($row->tempat_lahir_ayah),
                        'tanggallahirayah' => ($row->tanggal_lahir_ayah),
                        'agamaayah' => ($row->agama_ayah),
                        'warganegaraayah' => ($row->warga_negara_ayah),
                        'pekerjaanayah' => ($row->pekerjaan_ayah),
                        'namaibu' => ($row->nama_ibu),
                        'tempatlahiribu' => ($row->tempat_lahir_ibu),
                        'tanggallahiribu' => ($row->tanggal_lahir_ibu),
                        'agamaibu' => ($row->agama_ibu),
                        'warganegaraibu' => ($row->warga_negara_ibu),
                        'pekerjaanibu' => ($row->pekerjaan_ibu),
                        'namapasangan' => ($row->nama_pasangan),
                        'calonpasangan' => ($row->calon_pasangan),
                        'tempatlahirpasangan' => ($row->tempat_lahir_pasangan),
                        'tanggallahirpasangan' => ($row->tanggal_lahir_pasangan),
                        'agamapasangan' => ($row->agama_pasangan),
                        'warganegarapasangan' => ($row->warga_negara_pasangan),
                        'pekerjaanpasangan' => ($row->pekerjaan_pasangan),
                        'alamatpasangan' => ($row->alamat_pasangan),
                    );
                echo json_encode($result_array);
            }
        }
    }

    function autocomplete_nempat()
    {
        if (isset($_GET['term'])) {
            $result = $this->pelayanan_model->get_autocomple_nempat($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label'     => $row->nik,
                        'namapenduduk'    => ($row->nama),
                        'calonpenduduk'    => ($row->calon),
                        'binbinti'    => ($row->binbinti),
                        'tempatlahir'     => ($row->tempat_lahir),
                        'tanggallahir'     => ($row->tanggal_lahir),
                        'jeniskelamin'     => ($row->jenis_kelamin),
                        'agamapenduduk'     => ($row->agama),
                        'pendidikanterakhir'     => ($row->pendidikan_terakhir),
                        'statuskawin'     => ($row->status_kawin),
                        'statuspenduduk'     => ($row->status),
                        'warganegara'     => ($row->warga_negara),
                        'pekerjaanpenduduk'     => ($row->pekerjaan),
                        'alamatpenduduk'    => ($row->alamat),
                        'nort'     => ($row->no_rt),
                        'norw'     => ($row->no_rw),
                        'kodepos'     => ($row->kode_pos),
                        'namaayah' => ($row->nama_ayah),
                        'tempatlahirayah' => ($row->tempat_lahir_ayah),
                        'tanggallahirayah' => ($row->tanggal_lahir_ayah),
                        'agamaayah' => ($row->agama_ayah),
                        'warganegaraayah' => ($row->warga_negara_ayah),
                        'pekerjaanayah' => ($row->pekerjaan_ayah),
                        'namaibu' => ($row->nama_ibu),
                        'tempatlahiribu' => ($row->tempat_lahir_ibu),
                        'tanggallahiribu' => ($row->tanggal_lahir_ibu),
                        'agamaibu' => ($row->agama_ibu),
                        'warganegaraibu' => ($row->warga_negara_ibu),
                        'pekerjaanibu' => ($row->pekerjaan_ibu),
                        'namapasangan' => ($row->nama_pasangan),
                        'calonpasangan' => ($row->calon_pasangan),
                        'tempatlahirpasangan' => ($row->tempat_lahir_pasangan),
                        'tanggallahirpasangan' => ($row->tanggal_lahir_pasangan),
                        'agamapasangan' => ($row->agama_pasangan),
                        'warganegarapasangan' => ($row->warga_negara_pasangan),
                        'pekerjaanpasangan' => ($row->pekerjaan_pasangan),
                        'alamatpasangan' => ($row->alamat_pasangan),
                    );
                echo json_encode($result_array);
            }
        }
    }

    function autocomplete_nlima()
    {
        if (isset($_GET['term'])) {
            $result = $this->pelayanan_model->get_autocomple_nlima($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label'     => $row->nik,
                        'namapenduduk'    => ($row->nama),
                        'calonpenduduk'    => ($row->calon),
                        'binbinti'    => ($row->binbinti),
                        'tempatlahir'     => ($row->tempat_lahir),
                        'tanggallahir'     => ($row->tanggal_lahir),
                        'jeniskelamin'     => ($row->jenis_kelamin),
                        'agamapenduduk'     => ($row->agama),
                        'pendidikanterakhir'     => ($row->pendidikan_terakhir),
                        'statuskawin'     => ($row->status_kawin),
                        'statuspenduduk'     => ($row->status),
                        'warganegara'     => ($row->warga_negara),
                        'pekerjaanpenduduk'     => ($row->pekerjaan),
                        'alamatpenduduk'    => ($row->alamat),
                        'nort'     => ($row->no_rt),
                        'norw'     => ($row->no_rw),
                        'kodepos'     => ($row->kode_pos),
                        'namaayah' => ($row->nama_ayah),
                        'tempatlahirayah' => ($row->tempat_lahir_ayah),
                        'tanggallahirayah' => ($row->tanggal_lahir_ayah),
                        'agamaayah' => ($row->agama_ayah),
                        'warganegaraayah' => ($row->warga_negara_ayah),
                        'pekerjaanayah' => ($row->pekerjaan_ayah),
                        'namaibu' => ($row->nama_ibu),
                        'tempatlahiribu' => ($row->tempat_lahir_ibu),
                        'tanggallahiribu' => ($row->tanggal_lahir_ibu),
                        'agamaibu' => ($row->agama_ibu),
                        'warganegaraibu' => ($row->warga_negara_ibu),
                        'pekerjaanibu' => ($row->pekerjaan_ibu),
                        'namapasangan' => ($row->nama_pasangan),
                        'calonpasangan' => ($row->calon_pasangan),
                        'tempatlahirpasangan' => ($row->tempat_lahir_pasangan),
                        'tanggallahirpasangan' => ($row->tanggal_lahir_pasangan),
                        'agamapasangan' => ($row->agama_pasangan),
                        'warganegarapasangan' => ($row->warga_negara_pasangan),
                        'pekerjaanpasangan' => ($row->pekerjaan_pasangan),
                        'alamatpasangan' => ($row->alamat_pasangan),
                    );
                echo json_encode($result_array);
            }
        }
    }

    /////////////////////////////////////////////
    function autocomplete_melahirkan()
    {
        if (isset($_GET['term'])) {
            $result = $this->pelayanan_model->get_autocomple_melahirkan($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label'     => $row->no_kk,
                        'alamatpenduduk'   => strtoupper($row->alamat),
                        'nort'     => strtoupper($row->no_rt),
                        'norw'     => strtoupper($row->no_rw),
                        'kodepos'     => strtoupper($row->kode_pos),
                    );
                echo json_encode($result_array);
            }
        }
    }

    function autocomplete_meninggal()
    {
        if (isset($_GET['term'])) {
            $result = $this->pelayanan_model->get_autocomple_meninggal($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $result_array[] = array(
                        'label'     => strtoupper($row->nik),
                        'namapenduduk'    => strtoupper($row->nama),
                        'tempatlahir'     => strtoupper($row->tempat_lahir),
                        'tanggallahir'     => strtoupper($row->tanggal_lahir),
                        'jeniskelamin'     => ($row->jenis_kelamin),
                        'agamapenduduk'     => ($row->agama),
                        'statuskawin'     => ($row->status_kawin),
                        'pekerjaanpenduduk'     => ($row->pekerjaan),
                        'alamatpenduduk'   => strtoupper($row->alamat),
                        'nort'     => strtoupper($row->no_rt),
                        'norw'     => strtoupper($row->no_rw),
                        'kodepos'     => strtoupper($row->kode_pos),
                    );
                echo json_encode($result_array);
            }
        }
    }
}
