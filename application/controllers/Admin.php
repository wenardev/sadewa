<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_pengguna();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['penduduk'] = $this->spektp_model->tampil_ektp('penduduk')->result();

        //menghitung jumlah count pada setiap kolom di tabel
        $data['count_kk'] = $this->keluarga_model->get_count_kk();
        $data['count_pemohon'] = $this->penduduk_model->get_count_penduduk();
        $data['count_rt'] = $this->rtrw_model->get_count_rt();
        $data['count_rw'] = $this->rtrw_model->get_count_rw();
        $data['count_user'] = $this->user_model->get_count_user();

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
        $this->load->view('admin/index', $data);
        $this->load->view('layout/footer');
    }

    //role tampilan menu submenu role
    public function role()
    {
        $data['title'] = 'User Level';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'is_unique[user_role.role]', [
            'is_unique' => 'Role telah terdaftar!'
        ]);

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('layout/footer');
    }
    //role batas tampilan

    //role tambah data
    public function roletambah()
    {
        $data['title'] = 'User Level';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'is_unique[user_role.role]', [
            'is_unique' => 'User level sudah ada!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('layout/footer');
        } else {

            $role = $this->input->post('role');

            $this->db->set('role', $role);
            $this->db->insert('user_role');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Data Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect('admin/role');
        }
    }
    //role batas tambah data

    //role ubah
    public function roleubah()
    {

        $role = $this->input->post('role');

        $this->db->where('id', $this->input->post('id'));
        $this->db->set('role', $role);
        $this->db->update('user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect('admin/role');
    }
    //role batas ubah

    //role hapus data
    public function rolehapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
             Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('admin/role');
    }
    //role batas hapus data

    //role pengaturan edit dan tambah akses role
    public function roleAccess($role_id)
    {
        $data['title'] = 'User Level';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('layout/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil mengubah Access. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
    }
    //role batas pengaturan edit

    /////////////////////////////////////////////////////////////////////////////////////////////////////
    //Daftar User
    public function daftar_user()
    {
        $data['title'] = 'Daftar User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model muntuk merubah role dan status active
        $this->load->model('User_model', 'user');
        $data1['user'] = $this->user->getUserprofile();
        //akhir model

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('admin/daftar_user', $data1);
        $this->load->view('layout/footer');
    }
    //Batas Daftar user

    public function edit()
    {


        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
        ];

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

        //cek jika gambar yang akan di upload
        $upload_background = $_FILES['background'];
        if ($upload_background) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '5000';
            $config['upload_path'] = './assets/deskapp/vendors/images/profile';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('background')) {
                $old_background = $data['user']['background'];
                if ($old_background != 'default.jpg') {
                    unlink(FCPATH . 'assets/deskapp/vendors/images/profile' . $old_background);
                }

                $new_background = $this->upload->data('file_name');
                $this->db->set('background', $new_background);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            }
        }

        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button></div>');
        redirect('admin/daftar_user');
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    //user active

    public function useractive()
    {
        $data['title'] = 'User Active';
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
        $this->load->view('admin/useractive', $data1);
        $this->load->view('layout/footer');
    }

    //user tambah
    public function useractivetambah()
    {
        $data['title'] = 'User Active';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model muntuk merubah role dan status active
        $this->load->model('User_model', 'user');
        $data['user'] = $this->user->getUserprofile();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['active'] = $this->db->get('user_active')->result_array();
        //akhir model

        $this->form_validation->set_rules('nama', 'Nama', 'is_unique[user.nama]', [
            'is_unique' => 'Nama User sudah ada!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'is_unique[user.email]', [
            'is_unique' => 'Email sudah ada!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('admin/useractive', $data);
            $this->load->view('layout/footer');
        } else {

            //$data = [
              //  'nama' => htmlspecialchars($this->input->post('nama', true)),
              //  'email' => htmlspecialchars($this->input->post('email', true)),
              //  'image' => 'default.jpg',
              //  'background' => 'background.jpg',
              //  'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
              //  'role_id' => 2,
              //  'is_active' => 1,
              //  'date_created' => time()
            //];

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => date('Y-m-d')
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Data berhasil di Tambahkan. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button></div>');
            redirect('admin/useractive');
        }
    }
    //batas user tambah

    //user ubah
    public function useractiveubah()
    {
        $data =
            [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                "role_id" => $this->input->post('role_id'),
                "is_active" => $this->input->post('is_active')
            ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect('admin/useractive');
    }
    //user batas ubah

    //user hapus data
    public function useractivehapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('admin/useractive');
    }
    //user batas hapus data
}
