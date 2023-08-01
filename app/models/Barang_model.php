<?php 

class Barang_model {
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO barang
                    VALUES
                  ('', :nama_barang, :harga, :jumlah_barang, :keterangan, :terjual, :stok)";
        
        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('jumlah_barang', $data['jumlah_barang']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('terjual', $data['terjual']);
        $this->db->bind('stok', $data['stok']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBarang($id)
    {
        $query = "DELETE FROM barang WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataBarang($data)
    {
        $query = "UPDATE barang SET
                    nama_barang = :nama_barang,
                    harga = :harga,
                    jumlah_barang = :jumlah_barang,
                    keterangan = :keterangan,
                    terjual = :terjual,
                    stok = :stok
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('jumlah_barang', $data['jumlah_barang']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('terjual', $data['terjual']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}