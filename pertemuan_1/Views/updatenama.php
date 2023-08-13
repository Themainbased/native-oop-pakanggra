<?php
    require('../Controllers/CNama.php')
?>

<a href="addKelas.php">add</a>
<a href="updateKelas.php">update</a>
<a href="deleteKelas.php">delete</a>
<br><br>

<form action="" method="post">
    <table>
        <tr>
            <td>Nama Kelas </td><td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>edit </td><td>:</td>
            <td><input type="text" name="edit"></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="simpan" value="Update">
            </td>
        </tr>
    </table>
</form>

<?php
    $Kelas = new CNama();
    if (isset($_POST['simpan'])) {
        echo $Kelas->update($_POST['nama'],$_POST['edit']);
 }
?>