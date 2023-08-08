<?php
class Siswa {
    private $data = [];

    public function tambahSiswa($nis, $nama) {
        $this->data[] = ['nis' => $nis, 'nama' => $nama];
    }

    public function getSiswa($nis) {
        foreach ($this->data as $siswa) {
            if ($siswa['nis'] == $nis) {
                return $siswa;
            }
        }
        return null;
    }

    public function updateSiswa($nis, $nama) {
        foreach ($this->data as &$siswa) {
            if ($siswa['nis'] == $nis) {
                $siswa['nama'] = $nama;
                break;
            }
        }
    }

    public function hapusSiswa($nis) {
        foreach ($this->data as $key => $siswa) {
            if ($siswa['nis'] == $nis) {
                unset($this->data[$key]);
                break;
            }
        }
        $this->data = array_values($this->data);
    }

    public function getAllSiswa() {
        return $this->data;
    }
}

$siswaList = new Siswa();
$action = "tambah";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tambah'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $siswaList->tambahSiswa($nis, $nama);
    } elseif (isset($_POST['update'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $siswaList->updateSiswa($nis, $nama);
        $action = "tambah"; // Set action kembali ke tambah setelah update
    } elseif (isset($_POST['hapus'])) {
        $nis = $_POST['nis'];
        $siswaList->hapusSiswa($nis);
    }
}

if (isset($_GET['edit'])) {
    $nis = $_GET['edit'];
    $siswaToUpdate = $siswaList->getSiswa($nis);
    $action = "update"; // Set action menjadi update jika sedang dalam mode edit
}
?>

