<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_pengguna();
    }

    public function index()
    {
        //session login
        $data['title'] = 'Instansi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        //session batas login 

        //mengeluarkan data pada instansi dengan array instansi
        $data['kelurahan'] = $this->db->get('instansi')->row_array();

        //form validation error
        $this->form_validation->set_rules('nama_instansi', 'nama_instansi', 'required', [
            'required' => 'Nama Instansi Kosong!'
        ]);
        $this->form_validation->set_rules('jenis_instansi', 'jenis_instansi', 'required', [
            'required' => 'Jenis Instansi Kosong!'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('info/index', $data);
            $this->load->view('layout/footer');
        } else {
            $nama_instansi = $this->input->post('nama_instansi');
            $jenis_instansi = $this->input->post('jenis_instansi');
            $email_instansi = $this->input->post('email_instansi');
            $telephone_instansi = $this->input->post('telephone_instansi');
            $alamat = $this->input->post('alamat');
            $kode_pos = $this->input->post('kode_pos');
            $kelurahan = $this->input->post('kelurahan');
            $kecamatan = $this->input->post('kecamatan');
            $kabupaten = $this->input->post('kabupaten');

            $this->db->set('nama_instansi', $nama_instansi);
            $this->db->set('jenis_instansi', $jenis_instansi);
            $this->db->set('email_instansi', $email_instansi);
            $this->db->set('telephone_instansi', $telephone_instansi);
            $this->db->set('alamat', $alamat);
            $this->db->set('kode_pos', $kode_pos);
            $this->db->set('kelurahan', $kelurahan);
            $this->db->set('kecamatan', $kecamatan);
            $this->db->set('kabupaten', $kabupaten);

            $this->db->update('instansi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil di Ubah. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect('info');
        }
    }

    //ubah
    public function ubah_pimpinan()
    {

        $data = [
            'nama_pimpinan' => htmlspecialchars($this->input->post('nama_pimpinan', true)),
            'nip_pimpinan' => htmlspecialchars($this->input->post('nip_pimpinan', true)),
            'email_pimpinan' => htmlspecialchars($this->input->post('email_pimpinan', true)),
            'telephone_pimpinan' => htmlspecialchars($this->input->post('telephone_pimpinan', true))
        ];

        //cek jika gambar yang akan di upload
        $upload_image = $_FILES['image_pimpinan'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '5000';
            $config['upload_path'] = './assets/deskapp/vendors/images/kelurahan';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image_pimpinan')) {
                $old_image = $data['kelurahan']['image_pimpinan'];
                if ($old_image != 'photo.jpg') {
                    unlink(FCPATH . '/assets/deskapp/vendors/images/kelurahan' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image_pimpinan', $new_image);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            }
        }

        $this->db->update('instansi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button></div>');
        redirect('info');
    }
    //batas ubah
    //////////////////////////submenu kelurahan//////////////////////////////////

    public function struktur()
    {
        $data['title'] = 'Struktur';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('info/struktur', $data);
        $this->load->view('layout/footer');
    }
    /////////////////////////submenu struktur///////////////////////////////////

    public function rtrw()
    {
        $data['title'] = 'RT/RW';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan tabel rt dan tabel rw dengan pendidikan 
        $this->load->model('Rtrw_model', 'rtrwm');
        $data['rt'] = $this->rtrwm->getRt();
        //ini rwu supaya tidak bentrok dengan data array rw yang sudah ada 
        $data['rwu'] = $this->rtrwm->getRw();

        $data['pendidikan'] = $this->db->get('tb_pendidikan')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('info/rtrw', $data);
        $this->load->view('layout/footer');
    }
    /////////////////////////CRUD RT///////////////////////////////////////////////////////////
    public function rttambah()
    {

        $data['title'] = 'RT/RW';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan rt dengan pendidikan 
        $this->load->model('Rtrw_model', 'rtrwm');
        $data['rt'] = $this->rtrwm->getRt();
        $data['pendidikan'] = $this->db->get('tb_pendidikan')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        //batas model

        $this->form_validation->set_rules('no_rt', 'No_rt', 'is_unique[rt.no_rt]', [
            'is_unique' => 'No RT Sudah Ada!'
        ]);
        $this->form_validation->set_rules('no_rw_id', 'No_rw_id', 'required', [
            'required' => 'No RW Belum Di Pilih!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
            'required' => 'Jenis Kelamin Belum di Pilih!'
        ]);
        $this->form_validation->set_rules('pendidikan_id', 'pendidikan_id', 'required', [
            'required' => 'Pendidikan Belum di Pilih!'
        ]);
        $this->form_validation->set_rules('no_telephone', 'No_telephone', 'min_length[10]|max_length[13]', [
            'min_length' => 'No Telephone Terlalu Pendek!',
            'max_length' => 'No Telephone Terlalu Panjang!'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('info/rtrw', $data);
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama_rt' => htmlspecialchars($this->input->post('nama_rt', true)),
                'no_rt' => $this->input->post('no_rt', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pendidikan_id' => $this->input->post('pendidikan_id'),
                'no_telephone' => $this->input->post('no_telephone', true),
                'alamat' => $this->input->post('alamat', true),
                'no_rw_id' => $this->input->post('no_rw_id', true)
            ];

            $this->db->insert('rt', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Data berhasil di Ubah. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button></div>');
            redirect('info/rtrw');
        }
    }

    //rt ubah
    public function rtubah()
    {
        $data['title'] = 'Rt/Rw';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan rt dengan pendidikan 
        $this->load->model('Rtrw_model', 'rtrwm');
        $data['rt'] = $this->rtrwm->getRt();
        $data['pendidikan'] = $this->db->get('tb_pendidikan')->result_array();
        $data['rw'] = $this->db->get('rw')->result_array();
        //batas model

        $this->form_validation->set_rules('no_telephone', 'No_telephone', 'min_length[10]|max_length[13]', [
            'min_length' => 'No Telephone Terlalu Pendek!',
            'max_length' => 'No Telephone Terlalu Panjang!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('info/rtrw', $data);
            $this->load->view('layout/footer');
        } else {

            $data =
                [
                    'nama_rt' => $this->input->post('nama_rt', true),
                    'no_rt' => $this->input->post('no_rt', true),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'pendidikan_id' => $this->input->post('pendidikan_id'),
                    'no_telephone' => $this->input->post('no_telephone', true),
                    'alamat' => $this->input->post('alamat', true),
                    'no_rw_id' => $this->input->post('no_rw_id', true)
                ];


            $this->db->where('id', $this->input->post('id'));
            $this->db->update('rt', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
         Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button></div>');
            redirect('info/rtrw');
        }
    }
    //rt batas ubah

    //rt hapus data
    public function rthapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('rt');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('info/rtrw');
    }
    //rt batas hapus data

    ////////////////////////CRUD BATAS RT/////////////////////////////////////////////////////////////

    /////////////////////////CRUD RW///////////////////////////////////////////////////////////
    public function rwtambah()
    {

        $data['title'] = 'Rt/Rw';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan rt dengan pendidikan 
        $this->load->model('Rtrw_model', 'rtrwm');
        $data['rwu'] = $this->rtrwm->getRw();
        $data['pendidikan'] = $this->db->get('tb_pendidikan')->result_array();
        //batas model

        $this->form_validation->set_rules('no_rw', 'No_rw', 'is_unique[rt.no_rt]', [
            'is_unique' => 'No RT Sudah Ada!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required', [
            'required' => 'Jenis Kelamin Belum di Pilih!'
        ]);
        $this->form_validation->set_rules('pendidikan_id', 'Pendidikan_id', 'required', [
            'required' => 'Pendidikan Belum di Pilih!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('info/rtrw', $data);
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama_rw' => htmlspecialchars($this->input->post('nama_rw', true)),
                'no_rw' => $this->input->post('no_rw', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pendidikan_id' => $this->input->post('pendidikan_id'),
                'no_telephone' => $this->input->post('no_telephone', true),
                'alamat' => $this->input->post('alamat', true)
            ];

            $this->db->insert('rw', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Data berhasil di Ubah. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button></div>');
            redirect('info/rtrw');
        }
    }

    //rt ubah
    public function rwubah()
    {
        $data['title'] = 'Rt/Rw';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan rt dengan pendidikan 
        $this->load->model('Rtrw_model', 'rtrwm');
        $data['rwu'] = $this->rtrwm->getRw();
        $data['pendidikan'] = $this->db->get('tb_pendidikan')->result_array();
        //batas model

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required', [
            'required' => 'Jenis Kelamin Belum di Pilih!'
        ]);
        $this->form_validation->set_rules('pendidikan_id', 'Pendidikan_id', 'required', [
            'required' => 'Pendidikan Belum di Pilih!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('info/rtrw', $data);
            $this->load->view('layout/footer');
        } else {

            $data =
                [
                    'nama_rw' => $this->input->post('nama_rw', true),
                    'no_rw' => $this->input->post('no_rw', true),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                    'pendidikan_id' => $this->input->post('pendidikan_id', true),
                    'no_telephone' => $this->input->post('no_telephone', true),
                    'alamat' => $this->input->post('alamat', true),
                ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('rw', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                 Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button></div>');
            redirect('info/rtrw');
        }
    }
    //rt batas ubah

    //rt hapus data
    public function rwhapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('rw');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('info/rtrw');
    }
    //rt batas hapus data

    ////////////////////////CRUD/////////////////////////////////////////////////////////////


}
