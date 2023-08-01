<?php 

class Barang extends Controller {
    public function index()
    {
        $data['judul'] = 'Data Barang';
        $data['barang'] = $this->model('Barang_model')->getAllBarang();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Barang';
        $data['barang'] = $this->model('Barang_model')->getBarangById($id);
        $this->view('templates/header', $data);
        $this->view('barang/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Barang';
        // $data['mhs'] = $this->model('Barang_model')->getBarangById($id);
        $this->view('templates/header', $data);
        $this->view('barang/tambah', $data);
        $this->view('templates/footer');
    }

    public function simpan()
    {
        if( $this->model('Barang_model')->tambahDataBarang($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Barang_model')->hapusDataBarang($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Barang';
        $data['barang'] = $this->model('Barang_model')->getBarangById($id);
        $this->view('templates/header', $data);
        $this->view('barang/edit', $data);
        $this->view('templates/footer');
    }

    // public function getubah()
    // {
    //     echo json_encode($this->model('Barang_model')->getBarangById($_POST['id']));
    // }

    public function ubah()
    {
        if( $this->model('Barang_model')->ubahDataBarang($_POST) > 0 ) {
            // echo "berhasil";
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            // echo "gagal";
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } 
    }


}