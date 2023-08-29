<?php

class Rumah{
    var $warna;
    var $harga;
    var $lantai;
    function tampilkan_warna()
    {
        return "warna rumah hitam dan putih <br/>";
    }
    function tampilkan_harga()
    {
        return "harga rumah 20juta<br/>";
    }
    function tampilkan_lantai()
    {
        return "lantai 3 <br/>";
    }

}
    $RumahSaya = new Rumah();
    echo $RumahSaya -> tampilkan_warna();
    echo $RumahSaya -> tampilkan_harga();
    echo $RumahSaya -> tampilkan_lantai();
?>