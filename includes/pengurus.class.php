<?php

class Pengurus extends DB
{
    function getPengurus()
    {
        $query = "SELECT * FROM Pengurus";
        return $this->execute($query);
    }

    function addPengurus($data)
    {
        $nim = $data['tnim'];
        $nama = $data['tnama'];
        $semester = $data['id_bidang'];
        $foto = $data['tfoto'];
        $id_bidang = $data['id_bidang'];

        $query = "INSERT INTO pengurus VALUES ('$nim', '$nama', '$semester', '$foto', '$id_bidang')";
        
        // Mengeksekusi query
        return $this->execute($query);
    }
    
    function delete($id)
    {

        $query = "delete FROM pengurus WHERE nim = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

}


?>