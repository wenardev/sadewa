<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_pengguna();
    }

    public function index()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('layout/footer');
    }

    public function edit()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Anda Masih Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('user/index', $data);
            $this->load->view('layout/footer');
        } else {

            $nama = $this->input->post('nama');
            $email = $this->input->post('email');

            //cek jika gambar yang akan di upload
            $upload_image = $_FILES['image'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5000';
                $config['upload_path'] = './assets/deskapp/vendors/images/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/deskapp/vendors/images/profile' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Data Berhasil di Perbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect('user');
        }
    }

    public function editpassword()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('password_lama', 'Password_lama', 'trim');
        $this->form_validation->set_rules('password_baru', 'Password_baru', 'trim|min_length[8]|matches[password_konfirmasi]', [
            'min_length' => 'Minimal Password 8 digit!',
            'matches' => 'Password Baru Tak Sama!'
        ]);
        $this->form_validation->set_rules('password_konfirmasi', 'Password_konfirmasi', 'trim|min_length[8]|matches[password_baru]', [
            'min_length' => 'Minimal Password 8 digit!',
            'matches' => 'Password Baru Tak Sama!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('user/index', $data);
            $this->load->view('layout/footer');
        } else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru');
            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password Lama Salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                </div>');
                redirect('user');
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Password Baru Tidak Boleh Sama Dengan Yang Lama!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        </div>');
                    redirect('user');
                } else {
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Password Berhasil Di Ubah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                </div>');
                    redirect('user');
                }
            }
        }
    }

    public function pengguna()
    {
        $data['title'] = 'Pengguna';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model muntuk merubah role dan status active
        $this->load->model('User_model', 'user');
        $data1['user'] = $this->user->getUserprofile();
        $data1['role'] = $this->db->get('user_role')->result_array();
        $data1['active'] = $this->db->get('user_active')->result_array();
        //akhir model


        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('user/pengguna', $data1);
        $this->load->view('layout/footer');
    }
}
