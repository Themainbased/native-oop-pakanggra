Delete:

<?php
    require('../Controllers/CNama.php')
?>

<a href="nama.php">Add</a>
<a href="updatenama.php">Update</a>
<a href="deletenama.php">Delete</a>
<br><br>

<form action="" method="post">
    <table>
        <tr>
            <td>Nama Kelas </td><td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="simpan" value="Delete">
            </td>
        </tr>
    </table>
</form>

<?php
    $Kelas = new CNama();
    if (isset($_POST['simpan'])) {
        echo $Kelas->delete($_POST['nama']);
}
?>