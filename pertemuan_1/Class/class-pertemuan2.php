<?php

class mapel { 
    public $uts;
    public $uas;
    public $kehadiran;
    public $tugas;
    public $quiz;

    public function total_nilai($uts, $uas, $kehadiran, $tugas, $quiz) {
        $hasil = ($uts + $uas +  $kehadiran + $tugas + $quiz) / 5;
        return "hasil nilai anda dalah ". $hasil;
        
        
    }
}


?>