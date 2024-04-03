<?php 

class Product_model
{
    private $table = 'product';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllProduct() 
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProductById($id) 
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id' );
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataProduct($data)
    {
        $query = "INSERT INTO product
                VALUES
                ('', :nama, :harga, :jenis)";
    
        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('jenis', $data['jenis']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataProduct($id)
    {
        $query = "DELETE FROM product WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataProduct($data)
    {
        $query = "UPDATE product SET
        nama = :nama,
        harga = :harga,
        jenis = :jenis
        WHERE id = :id";
    
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataProduct()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM product WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet(); 
    }

} 