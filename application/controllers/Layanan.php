<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_pengguna();
    }


    ///////////////////////////spektp/////////////////////////////////////////////////////
    public function index()
    {
        $data['title'] = 'SP E-KTP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $data['instansi'] = $this->db->get('instansi')->result_array();
        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layanan/index', $data);
        $this->load->view('layout/footer');
    }

    public function spektp_tambah()
    {
        $data['title'] = 'Daftar PerKTP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();


        //form validation pesan error
        $this->form_validation->set_rules('nik', 'Nik', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required', [
            'required' => 'Nama SubMenu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rt', 'no_Rt', 'required', [
            'required' => 'Rt Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rw', 'no_Rw', 'required', [
            'required' => 'Rw Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Masi Kosong!'
        ]);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Masih Kosong!'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Masih Kosong!'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('warga_negara', 'Warga_negara', 'required', [
            'required' => 'Warga Negara Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layanan/index', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi'),
                    'agama' => $this->input->post('agama'),
                    'status' => $this->input->post('status'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'date_created' => time()
                ];
            $this->db->insert('data_perektp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('layanan');
        }
    }

    public function spektp_detail()
    {
        $data['title'] = 'Daftar PerKTP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layanan/index', $data);
        $this->load->view('layout/footer');
    }

    public function spektp_ubah()
    {
        $data['title'] = 'Daftar PerKTP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();


        //form validation pesan error
        $this->form_validation->set_rules('nik', 'Nik', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required', [
            'required' => 'Nama SubMenu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rt', 'no_Rt', 'required', [
            'required' => 'Rt Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rw', 'no_Rw', 'required', [
            'required' => 'Rw Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Masi Kosong!'
        ]);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Masih Kosong!'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Masih Kosong!'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('warga_negara', 'Warga_negara', 'required', [
            'required' => 'Warga Negara Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layanan/index', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi'),
                    'agama' => $this->input->post('agama'),
                    'status' => $this->input->post('status'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'date_created' => time()
                ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('data_perektp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('layanan');
        }
    }

    public function spektp_hapus($id)
    {
        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $this->db->where('id', $id);
        $this->db->delete('data_perektp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('layanan');
    }

    public function spektp_print($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->spektp_model->ambil_id_ektp($id);
        $this->load->view('layanan/export/spektp_print', $data);
    }

    public function spektp_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->spektp_model->ambil_id_ektp($id);
        $this->load->view('layanan/export/spektp_pdf', $data);
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
        $data['title'] = 'Surat Domisili';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layanan/domisili', $data);
        $this->load->view('layout/footer');
    }

    public function domisili_tambah()
    {
        $data['title'] = 'Surat Domisili';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();


        //form validation pesan error
        $this->form_validation->set_rules('nik', 'Nik', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required', [
            'required' => 'Nama SubMenu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rt', 'no_Rt', 'required', [
            'required' => 'Rt Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rw', 'no_Rw', 'required', [
            'required' => 'Rw Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Masi Kosong!'
        ]);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Masih Kosong!'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Masih Kosong!'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('warga_negara', 'Warga_negara', 'required', [
            'required' => 'Warga Negara Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layanan/domisili', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi'),
                    'agama' => $this->input->post('agama'),
                    'status' => $this->input->post('status'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'date_created' => time()
                ];
            $this->db->insert('data_perektp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('layanan/domisili');
        }
    }

    public function domisili_detail()
    {
        $data['title'] = 'Surat Domisili';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layanan/domisili', $data);
        $this->load->view('layout/footer');
    }

    public function domisili_ubah()
    {
        $data['title'] = 'Surat Domisili';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
        $data['agama'] = $this->db->get('tb_agama')->result_array();
        $data['pekerjaan'] = $this->db->get('tb_pekerjaan')->result_array();


        //form validation pesan error
        $this->form_validation->set_rules('nik', 'Nik', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required', [
            'required' => 'Tempat Lahir Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required', [
            'required' => 'Tanggal Lahir Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required', [
            'required' => 'Nama SubMenu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rt', 'no_Rt', 'required', [
            'required' => 'Rt Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rw', 'no_Rw', 'required', [
            'required' => 'Rw Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Masi Kosong!'
        ]);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Masih Kosong!'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Masih Kosong!'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Masih Kosong!'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Masih Kosong!'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('warga_negara', 'Warga_negara', 'required', [
            'required' => 'Warga Negara Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layanan/domisili', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi'),
                    'agama' => $this->input->post('agama'),
                    'status' => $this->input->post('status'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'warga_negara' => $this->input->post('warga_negara'),
                    'date_created' => time()
                ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('data_perektp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('layanan/domisili');
        }
    }

    public function domisili_hapus($id)
    {
        $data['data_perektp'] = $this->spektp_model->tampil_ektp('data_perektp')->result();

        $this->db->where('id', $id);
        $this->db->delete('data_perektp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('layanan/domisili');
    }

    public function domisili_print($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->spektp_model->ambil_id_ektp($id);
        $this->load->view('layanan/export/domisili_print', $data);
    }

    public function domisili_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->spektp_model->ambil_id_ektp($id);
        $this->load->view('layanan/export/domisili_pdf', $data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("pendaftaran" . $sekarang . ".pdf", array('Attachment' => 0));
    }
    /////////////////////////////////////////////////////////////////////////////////////////////

    //////////////////////////////////////////kelahiran//////////////////////////////////////////
    public function kelahiran()
    {
        $data['title'] = 'Surat Kelahiran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layanan/kelahiran', $data);
        $this->load->view('layout/footer');
    }

    public function kelahiran_tambah()
    {
        $data['title'] = 'Surat Kelahiran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_kk', 'No_kk', 'required', [
            'required' => 'No KK Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nik_kepala_keluarga', 'Nik_kepala_keluarga', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_kepala_keluarga', 'Nama_kepala_keluarga', 'required', [
            'required' => 'Nama Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_istri', 'Nama_istri', 'required', [
            'required' => 'Nama Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_anak', 'Nama_anak', 'required', [
            'required' => 'Nama Anak Masih Kosong!'
        ]);

        $this->form_validation->set_rules('tempat_lahir_anak', 'Tempat_lahir_anak', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_anak', 'Tanggal_lahir_anak', 'required', [
            'required' => 'Tanggal Masih Kosong!'
        ]);

        $this->form_validation->set_rules('jenis_kelamin_anak', 'Jenis_kelamin', 'required', [
            'required' => 'Jenis Kelamin Kosong!'
        ]);

        $this->form_validation->set_rules('anak_ke', 'anak_ke', 'required', [
            'required' => 'Anak Ke Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rt', 'No_Rt', 'required', [
            'required' => 'Rt Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rw', 'No_Rw', 'required', [
            'required' => 'Rw Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode_pos', 'required', [
            'required' => 'Kode Pos Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Masi Kosong!'
        ]);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Masih Kosong!'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layanan/kelahiran', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'no_kk' => $this->input->post('no_kk'),
                    'nik_kepala_keluarga' => $this->input->post('nik_kepala_keluarga'),
                    'nama_kepala_keluarga' => $this->input->post('nama_kepala_keluarga'),
                    'nama_istri' => $this->input->post('nama_istri'),
                    'nama_anak' => $this->input->post('nama_anak'),
                    'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
                    'tanggal_lahir_anak' => $this->input->post('tanggal_lahir_anak'),
                    'jenis_kelamin_anak' => $this->input->post('jenis_kelamin_anak'),
                    'anak_ke' => $this->input->post('anak_ke'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi')
                ];
            $this->db->insert('data_perkk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('layanan/kelahiran');
        }
    }

    public function kelahiran_detail()
    {
        $data['title'] = 'Surat Kelahiran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
    }

    public function kelahiran_ubah()
    {
        $data['title'] = 'Surat Kelahiran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_kk', 'No_kk', 'required', [
            'required' => 'No KK Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nik_kepala_keluarga', 'Nik_kepala_keluarga', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_kepala_keluarga', 'Nama_kepala_keluarga', 'required', [
            'required' => 'Nama Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_istri', 'Nama_istri', 'required', [
            'required' => 'Nama Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_anak', 'Nama_anak', 'required', [
            'required' => 'Nama Anak Masih Kosong!'
        ]);

        $this->form_validation->set_rules('tempat_lahir_anak', 'Tempat_lahir_anak', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_anak', 'Tanggal_lahir_anak', 'required', [
            'required' => 'Tanggal Masih Kosong!'
        ]);

        $this->form_validation->set_rules('jenis_kelamin_anak', 'Jenis_kelamin_anak', 'required', [
            'required' => 'Jenis Kelamin Kosong!'
        ]);

        $this->form_validation->set_rules('anak_ke', 'anak_ke', 'required', [
            'required' => 'Anak Ke Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rt', 'No_Rt', 'required', [
            'required' => 'Rt Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rw', 'No_Rw', 'required', [
            'required' => 'Rw Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode_pos', 'required', [
            'required' => 'Kode Pos Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Masi Kosong!'
        ]);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Masih Kosong!'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layanan/kelahiran', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'no_kk' => $this->input->post('no_kk'),
                    'nik_kepala_keluarga' => $this->input->post('nik_kepala_keluarga'),
                    'nama_kepala_keluarga' => $this->input->post('nama_kepala_keluarga'),
                    'nama_istri' => $this->input->post('nama_istri'),
                    'nama_anak' => $this->input->post('nama_anak'),
                    'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
                    'tanggal_lahir_anak' => $this->input->post('tanggal_lahir_anak'),
                    'jenis_kelamin_anak' => $this->input->post('jenis_kelamin_anak'),
                    'anak_ke' => $this->input->post('anak_ke'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi')
                ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('data_perkk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('layanan/kelahiran');
        }
    }

    public function kelahiran_hapus($id)
    {
        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $this->db->where('id', $id);
        $this->db->delete('data_perkk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('layanan/kelahiran');
    }

    public function kelahiran_print($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->kk_model->ambil_id_kk($id);
        $this->load->view('layanan/export/kelahiran_print', $data);
    }

    public function kelahiran_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->kk_model->ambil_id_kk($id);
        $this->load->view('layanan/export/kelahiran_pdf', $data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("pendaftaran" . $sekarang . ".pdf", array('Attachment' => 0));
    }

    public function kematian()
    {
        $data['title'] = 'Surat Kematian';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layanan/kematian', $data);
        $this->load->view('layout/footer');
    }


    public function kematian_tambah()
    {
        $data['title'] = 'Surat Kematian';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_kk', 'No_kk', 'required', [
            'required' => 'No KK Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nik_kepala_keluarga', 'Nik_kepala_keluarga', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_kepala_keluarga', 'Nama_kepala_keluarga', 'required', [
            'required' => 'Nama Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_istri', 'Nama_istri', 'required', [
            'required' => 'Nama Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_anak', 'Nama_anak', 'required', [
            'required' => 'Nama Anak Masih Kosong!'
        ]);

        $this->form_validation->set_rules('tempat_lahir_anak', 'Tempat_lahir_anak', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_anak', 'Tanggal_lahir_anak', 'required', [
            'required' => 'Tanggal Masih Kosong!'
        ]);

        $this->form_validation->set_rules('jenis_kelamin_anak', 'Jenis_kelamin_anak', 'required', [
            'required' => 'Jenis Kelamin Kosong!'
        ]);

        $this->form_validation->set_rules('anak_ke', 'anak_ke', 'required', [
            'required' => 'Anak Ke Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rt', 'No_Rt', 'required', [
            'required' => 'Rt Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rw', 'No_Rw', 'required', [
            'required' => 'Rw Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode_pos', 'required', [
            'required' => 'Kode Pos Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Masi Kosong!'
        ]);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Masih Kosong!'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layanan/kematian', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'no_kk' => $this->input->post('no_kk'),
                    'nik_kepala_keluarga' => $this->input->post('nik_kepala_keluarga'),
                    'nama_kepala_keluarga' => $this->input->post('nama_kepala_keluarga'),
                    'nama_istri' => $this->input->post('nama_istri'),
                    'nama_anak' => $this->input->post('nama_anak'),
                    'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
                    'tanggal_lahir_anak' => $this->input->post('tanggal_lahir_anak'),
                    'jenis_kelamin_anak' => $this->input->post('jenis_kelamin_anak'),
                    'anak_ke' => $this->input->post('anak_ke'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi')
                ];
            $this->db->insert('data_perkk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('layanan/kematian');
        }
    }

    public function kematian_detail()
    {
        $data['title'] = 'Surat Kematian';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();
    }

    public function kematian_ubah()
    {
        $data['title'] = 'Surat Kematian';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $data['rt'] = $this->db->get('rt')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        $data['kelurahan'] = $this->db->get('tb_kelurahan')->result_array();
        $data['kecamatan'] = $this->db->get('tb_kecamatan')->result_array();
        $data['kabupaten'] = $this->db->get('tb_kabupaten')->result_array();
        $data['provinsi'] = $this->db->get('tb_provinsi')->result_array();

        //form validation pesan error
        $this->form_validation->set_rules('no_kk', 'No_kk', 'required', [
            'required' => 'No KK Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nik_kepala_keluarga', 'Nik_kepala_keluarga', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_kepala_keluarga', 'Nama_kepala_keluarga', 'required', [
            'required' => 'Nama Ayah Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_istri', 'Nama_istri', 'required', [
            'required' => 'Nama Ibu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('nama_anak', 'Nama_anak', 'required', [
            'required' => 'Nama Anak Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tempat_lahir_anak', 'Tempat_lahir_anak', 'required', [
            'required' => 'Nik Masih Kosong!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_anak', 'Tanggal_lahir_anak', 'required', [
            'required' => 'Tanggal Masih Kosong!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin_anak', 'Jenis_kelamin_anak', 'required', [
            'required' => 'Jenis Kelamin Kosong!'
        ]);
        $this->form_validation->set_rules('anak_ke', 'Anak_ke', 'required', [
            'required' => 'Anak Ke Masih Kosong!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rt', 'No_Rt', 'required', [
            'required' => 'Rt Masih Kosong!'
        ]);
        $this->form_validation->set_rules('no_rw', 'No_Rw', 'required', [
            'required' => 'Rw Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode_pos', 'required', [
            'required' => 'Kode Pos Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'Kelurahan Masih Kosong!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Masi Kosong!'
        ]);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Masih Kosong!'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layanan/kematian', $data);
            $this->load->view('layout/footer');
        } else {
            $data =
                [
                    'no_kk' => $this->input->post('no_kk'),
                    'nik_kepala_keluarga' => $this->input->post('nik_kepala_keluarga'),
                    'nama_kepala_keluarga' => $this->input->post('nama_kepala_keluarga'),
                    'nama_istri' => $this->input->post('nama_istri'),
                    'nama_anak' => $this->input->post('nama_anak'),
                    'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
                    'tanggal_lahir_anak' => $this->input->post('tanggal_lahir_anak'),
                    'jenis_kelamin_anak' => $this->input->post('jenis_kelamin_anak'),
                    'anak_ke' => $this->input->post('anak_ke'),
                    'alamat' => $this->input->post('alamat'),
                    'no_rt' => $this->input->post('no_rt'),
                    'no_rw' => $this->input->post('no_rw'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kabupaten' => $this->input->post('kabupaten'),
                    'provinsi' => $this->input->post('provinsi')
                ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('data_perkk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            redirect('layanan/kematian');
        }
    }

    public function kematian_hapus($id)
    {
        $data['data_perkk'] = $this->kk_model->tampil_kk('data_perkk')->result();

        $this->db->where('id', $id);
        $this->db->delete('data_perkk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('layanan/kematian');
    }

    public function kematian_print($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->kk_model->ambil_id_kk($id);
        $this->load->view('layanan/export/kematian_print', $data);
    }

    public function kematian_pdf($id)
    {
        $data['instansi'] = $this->db->get('instansi')->row_array();
        $data['export'] = $this->kk_model->ambil_id_kk($id);
        $this->load->view('layanan/export/kematian_pdf', $data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $sekarang = date("d:F:Y:h:m:s");
        $this->dompdf->stream("pendaftaran" . $sekarang . ".pdf", array('Attachment' => 0));
    }
}
