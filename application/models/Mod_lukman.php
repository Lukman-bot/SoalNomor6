<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_lukman extends CI_Model {
    public function getBook()
    {
        return $this->db->get('buku');
    }

    public function getBukuBelumDipinjam()
    {
        $eksekusi = $this->db->query("SELECT buku.* from buku WHERE id NOT IN (SELECT book_id from rent)");
        return $eksekusi;
    }

    public function getBukuHarga()
    {
        $eksekusi = $this->db->query("SELECT buku.* FROM buku WHERE buku.price_rent BETWEEN 2000 AND 6000");
        return $eksekusi;
    }

    public function totalPinjam()
    {
        $this->db->select("rent.*, count(buku.id) as jumlah_buku, buku.title, customer.name");
        $this->db->from('rent');
        $this->db->join('buku', 'buku.id=rent.book_id', 'left');
        $this->db->join('customer', 'customer.id=rent.customer_id', 'left');
        return $this->db->get();
    }

    public function jumlahBuku()
    {
        $this->db->select("count(buku.id) as jumlah_produk");
        $this->db->from('rent');
        $this->db->join('buku', 'buku.id=rent.book_id', 'left');
        return $this->db->get();
    }
}