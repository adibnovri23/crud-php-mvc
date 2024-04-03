<?php 

// buat class model untuk dihubungkan ke controller
class User_model
{
    private $nama = 'Adib Novri';

    public function getUser()
    {
        return $this->nama;
    }
}