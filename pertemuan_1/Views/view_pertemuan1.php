<?php 
require ('../class/class_pertemuan1.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Siswa</title>
</head>
<body>
    <h1>CRUD Siswa</h1>

    <h2>Tambah / Update Siswa</h2>
    <form method="POST">
        <input type="hidden" name="nis" value="<?php echo isset($siswaToUpdate) ? $siswaToUpdate['nis'] : ''; ?>">
        <label>NIS: </label>
        <input type="text" name="nis" value="<?php echo isset($siswaToUpdate) ? $siswaToUpdate['nis'] : ''; ?>" required><br>
        <label>Nama: </label>
        <input type="text" name="nama" value="<?php echo isset($siswaToUpdate) ? $siswaToUpdate['nama'] : ''; ?>" required><br>
        <?php if ($action === "tambah") : ?>
            <button type="submit" name="tambah">Tambah</button>
        <?php else : ?>
            <button type="submit" name="update">Update</button>
        <?php endif; ?>
    </form>

    <h2>Hapus Siswa</h2>
    <form method="POST">
        <label>NIS: </label>
        <input type="text" name="nis" required><br>
        <button type="submit" name="hapus">Hapus</button>
    </form>

    <h2>Daftar Siswa</h2>
    <ul>
        <?php foreach ($siswaList->getAllSiswa() as $siswa) : ?>
            <li>NIS: <?php echo $siswa['nis']; ?> - Nama: <?php echo $siswa['nama']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
