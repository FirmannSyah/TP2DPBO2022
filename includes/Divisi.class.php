<?php

class Divisi extends DB
{
    function getDivisi()
    {
        $query = "SELECT * FROM Divisi";
        return $this->execute($query);
    }

    function addDivisi($data)
    {
        $nama = $data['nama_divisi'];

        $query = "INSERT INTO divisi VALUES ('', '$nama')";
        // Mengeksekusi query
        return $this->execute($query);
    }
    
    function delete($id)
    {

        $query = "delete FROM Divisi WHERE id_divisi = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

}


?>