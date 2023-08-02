<?php 

class aritmatika {
    var $sisi;
    var $panjang;
    var $lebar;
    var $hasil; 
    var $alas;
    var $tinggi;

    function persegi ($sisi)  {
       $hasil=$sisi*$sisi;
       return "hasil luas persegi : ".$hasil."<br>"; 
    }

    function persegipanjang ($panjang, $lebar){
       $hasil=$panjang*$lebar;
       return "Hasil Luas Persegi Panjang : ".$hasil."<br>";
    }

    function luas_segitiga ($alas, $tinggi){
       $hasil=$alas*$tinggi*0.5;
       return "hasil luas segitiga :".$hasil."<br>";
    }

}
?>