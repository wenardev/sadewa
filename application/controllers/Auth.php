<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        //ini untuk mencegah user mengakses melalui url
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        //session email di redirect ke info untuk user level pegawai
        if ($this->session->userdata('email')) {
            redirect('info');
        }

        //ini pesan form validation bila text input kosong
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email Wajib di Isi!',
            'valid_email' => 'Email Tidak Valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Wajib di Isi'
        ]);


        if ($this->form_validation->run() == false) {
            $data['title'] = 'SADEWA HALAMAN MASUK';

            $this->load->view('layout/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('layout/auth_footer');
        } else {
            //validasi
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('info');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >
            Email belum di activasi! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        //redirect ke menu info bila user levelnya pegawai
        if ($this->session->userdata('email')) {
            redirect('info');
        }

        //form validation inputan apabila kosong
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Wajib di Isi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email telah terdaftar!',
            'required' => 'Email Wajib di Isi!',
            'valid_email' => 'Email Tidak Valid!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'password tidak sama!',
            'min_length' => 'terlalu pendek!',
            'required' => 'Password Kosong!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        //proses form validation registrasi
        if ($this->form_validation->run() == false) {

            $data['title'] = 'SADEWA HALAMAN DAFTAR';

            $this->load->view('layout/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('layout/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'background' => 'back.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat akun anda berhasil di buat, silahkan masuk! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Anda berhasil keluar! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
