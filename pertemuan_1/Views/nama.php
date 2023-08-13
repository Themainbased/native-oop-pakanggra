<?php 
    require('../Controllers/CNama.php');
    $Siswa = new CNama();
?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama </td><td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" name="simpan" value="Simpan">
                </td>
            </tr>
        </table>
    </form>

    <?php 
        if(isset($_POST['simpan'])){
            $Siswa->SimpanNama($_POST['nama']);
        }
    ?>

