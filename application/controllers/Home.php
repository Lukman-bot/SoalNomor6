<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_lukman', 'lukman');
    }

    public function index()
    {
        $data['title']      = 'Rental Buku';
        $data['page']       = 'dashboard';
        $data['data_buku']  = $this->lukman->getBook()->result();

        $this->load->view('main', $data);
    }

    public function Belum()
    {
        $data['title']      = 'Daftar Buku yang Belum Pernah dipinjam';
        $data['page']       = 'belum-pinjam';
        $data['data_buku']  = $this->lukman->getBukuBelumDipinjam()->result();

        $this->load->view('main', $data);
    }

    public function Harga()
    {
        $data['title']      = 'Harga Antara 2000 dan 6000';
        $data['page']       = 'harga-antara';
        $data['data_buku']  = $this->lukman->getBukuHarga()->result();

        $this->load->view('main', $data);
    }

    public function Customer()
    {
        $data['title']          = 'Customer yang Meminjam Buku Lebih dari 10';
        $data['page']           = 'customer';
        $data['jumlah_buku']    = $this->lukman->jumlahBuku()->row();
        $data['data_customer']  = $this->lukman->totalPinjam()->result();

        $this->load->view('main', $data);
    }
}