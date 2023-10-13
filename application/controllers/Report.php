<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_pengguna();
    }

    public function index()
    {
        $data['title'] = 'Laporan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('pemohon_model');

        $tgl_awal = $this->input->get('tgl_awal'); 
        // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)        
        $tgl_akhir = $this->input->get('tgl_akhir'); 
        // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)        
        if(empty($tgl_awal) or empty($tgl_akhir)){ 
            // Cek jika tgl_awal atau tgl_akhir kosong, maka :            
            $pemohon = $this->pemohon_model->view_all();  
            // Panggil fungsi view_all yang ada di pemohonModel            
            $url_cetak = 'cetak';            
            $label = 'Semua Data Pemohon';        
        }else{ 
            // Jika terisi            
            $pemohon = $this->pemohon_model->view_by_date($tgl_awal, $tgl_akhir);  
            // Panggil fungsi view_by_date yang ada di pemohonModel           
            $url_cetak = 'cetak?tgl_awal='.$tgl_awal.'&tgl_akhir='.$tgl_akhir;           
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); 
            // Ubah format tanggal jadi dd-mm-yyyy            
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); 
            // Ubah format tanggal jadi dd-mm-yyyy            
            $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;        
        }        $data['pemohon'] = $pemohon;      
        $data['url_cetak'] = base_url('report/'.$url_cetak);       
        $data['label'] = $label;

        $this->load->view('layout/header_laporan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('report/index', $data);
        $this->load->view('layout/footer_laporan');
    }

    public function cetak()
    {   
         $tgl_awal = $this->input->get('tgl_awal'); 
         // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)        
         $tgl_akhir = $this->input->get('tgl_akhir'); 
         // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)        
         if(empty($tgl_awal) or empty($tgl_akhir)){ 
            // Cek jika tgl_awal atau tgl_akhir kosong, maka :            
            $pemohon = $this->pemohon_model->view_all();  
            // Panggil fungsi view_all yang ada di pemohonModel            
            $label = 'Semua Data pemohon';        
        }else{ // Jika terisi            
            $pemohon = $this->pemohon_model->view_by_date($tgl_awal, $tgl_akhir);  
            // Panggil fungsi view_by_date yang ada di pemohonModel            
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); 
            // Ubah format tanggal jadi dd-mm-yyyy            
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); 
            // Ubah format tanggal jadi dd-mm-yyyy            
            $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;        
        }        

        // ini untuk menjumlah nama surat
        //$data['count_nama_surat'] = $this->pemohon_model->get_count_nama_surat();

        // ini untuk menjumlah surat sk domisili
        //$data['hitung_sk_domisili'] = $this->pemohon_model->get_hitung_sk_domisili();
        
        $data['label'] = $label;        
        $data['pemohon'] = $pemohon;  

        ob_start();    
        $this->load->view('report/cetak', $data);    
        $html = ob_get_contents();       
         ob_end_clean();    
         require './assets/html2pdf/autoload.php'; 
         // Load plugin html2pdfnya    
         $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');  
         // Settingan PDFnya    
         $pdf->WriteHTML($html);    
         $pdf->Output('Data pemohon.pdf', 'D');  
        }
        
    
        public function laporan()
    {
        $data['title'] = 'Laporan V2';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('pemohon_model');

        $this->load->view('layout/header_laporan', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('report/laporan', $data);
        $this->load->view('layout/footer_laporan');
    }

    public function filter()
    {
        $tanggal_awal = $this->input->Post('tanggal_awal');
        $tanggal_akhir = $this->input->Post('tanggal_akhir');
        
        $this->load->model('pemohon_model');
             
        $datafilter['laporanfilter'] = $this->pemohon_model->laporanfilter($tanggal_awal, $tanggal_akhir);

        $data = [
            'datafilter' => $datafilter,
            'tanggal_awal' => $tanggal_awal,
            'tanggal_akhir' => $tanggal_akhir
        ];

        return view('report/cetak', $data);
    }

}
