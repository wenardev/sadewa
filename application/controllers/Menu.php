<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_pengguna();
    }

    public function index()
    {
        $data['title'] = 'Judul Menu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model muntuk merubah role dan status active
        $this->load->model('User_model', 'user');
        $data1['user'] = $this->user->getUsermyprofile();
        //akhir model
        $data1['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required', [
            'required' => 'Nama Menu Masih Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('menu/index', $data1);
            $this->load->view('layout/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect('menu');
        }
    }

    public function menuubah()
    {
        $menu = $this->input->post('menu');

        $this->db->where('id', $this->input->post('id'));
        $this->db->set('menu', $menu);
        $this->db->update('user_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect('menu');
    }

    public function menuhapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
             Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('menu');
    }

    public function submenu()
    {
        $data['title'] = 'Judul SubMenu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //model untuk merelasikan 3 tabel user_submenu, user_menu, user_active
        $this->load->model('Menu_model', 'menu');
        $data['subMenu'] = $this->menu->getSubmenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['active'] = $this->db->get('user_active')->result_array();
        //batas model

        //form validation pesan error
        $this->form_validation->set_rules('title', 'Title', 'required', [
            'required' => 'Nama SubMenu Masih Kosong!'
        ]);
        $this->form_validation->set_rules('menu_id', 'Menu', 'required', [
            'required' => 'Menu Belum di Pilih!'
        ]);
        $this->form_validation->set_rules('url', 'Url', 'required', [
            'required' => 'Url Masih Kosong!'
        ]);
        $this->form_validation->set_rules('icon', 'Icon', 'required', [
            'required' => 'Icon Masih Kosong!'
        ]);
        //batas form validasi pesan error

        //form validation insert
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('layout/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            SubMenu Berhasil di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect('menu/submenu');
        }
    }

    public function submenuubah()
    {
        $data = [
            'title' => $this->input->post('title', true),
            'menu_id' => $this->input->post('menu_id', true),
            'url' => $this->input->post('url', true),
            'icon' => $this->input->post('icon', true),
            'is_active' => $this->input->post('is_active', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Berhasil di Ubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect('menu/submenu');
    }

    public function submenuhapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
             Data Berhasil di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button></div>');
        redirect('menu/submenu');
    }
}
