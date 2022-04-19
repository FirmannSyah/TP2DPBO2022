<?php

class Bidang_Divisi extends DB
{
    function getBidang_Divisi()
    {
        $query = "SELECT * FROM Bidang_Divisi";
        return $this->execute($query);
    }

    function addBidang_Divisi($data)
    {
        $jabatan = $data['tjabatan'];
        $id_divisi = $data['tid_divisi'];

        $query = "INSERT INTO Bidang_divisi VALUES ('', '$jabatan', '$id_divisi')";
        
        // Mengeksekusi query
        return $this->execute($query);
    }
    
    function delete($id)
    {

        $query = "delete FROM Bidang_divisi WHERE id_bidang = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

}


?>