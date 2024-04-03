<?php 

class Product extends Controller {
    public function index()
    {
        $data ['judul'] = 'Daftar Product';
        $data ['prd'] = $this->model('product_model')->getAllProduct();
        $this->view('templates/header', $data);
        $this->view('product/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data ['judul'] = 'Detail Product';
        $data ['prd'] = $this->model('product_model')->getProductById($id);
        $this->view('templates/header', $data);
        $this->view('product/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('product_model')->tambahDataProduct($_POST) > 0 )  {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/product');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/product');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('product_model')->hapusDataProduct($id) > 0 )  {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/product');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/product');
            exit;
        }
    }

    public function getubah() 
    {
        echo json_encode($this->model('product_model')->getProductById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('product_model')->ubahDataProduct($_POST) > 0 )  {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/product');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/product');
            exit;
        }       
    }

    public function cari()
    {
        $data ['judul'] = 'Daftar Product';
        $data ['prd'] = $this->model('product_model')->cariDataProduct();
        $this->view('templates/header', $data);
        $this->view('product/index', $data);
        $this->view('templates/footer');
    }
}