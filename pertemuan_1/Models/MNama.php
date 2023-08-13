

<?php

    require('../Config/Database.php');

    class MNama {

        var $sql;

        function Simpan($nama) {
            Global $koneksi;
            $sql="insert into nama values('".$nama."')";
            $check=mysqli_query($koneksi,$sql);
            
            if ($check>0) {
                echo "Data Berhasil Disimpan.";
            } else {
                echo "Data Gagal Disimpan.";
            }
        }

        function Update($nama,$edit) {
            Global $koneksi;
            $sql="UPDATE nama SET nama='$edit' WHERE nama='$nama'";
            $check=mysqli_query($koneksi,$sql);
            
            if ($check>0) {
                return "Data Berhasil Diupdate.";
            } else {
                return "Data Gagal Diupdate.";
            }
        }

        function Delete($nama) {
            Global $koneksi;
            $sql="DELETE FROM nama WHERE nama='$nama'";
            $check=mysqli_query($koneksi,$sql);
            
            if ($check>0) {
                return "Data Berhasil Didelete.";
            } else {
                return "Data Gagal Didelete.";
            }
    }

}

?>