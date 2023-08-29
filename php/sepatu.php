<?php
class Sepatu{
    var $harga;
    var $merk;
    function tampilkan_harga()
    {
        return "200 ribu <br/>";
    }
    function tampilkan_merk()
    {
        return "converse <br/>";
    }
}
$SepatuSaya = new sepatu();
echo $SepatuSaya->tampilkan_harga();
echo $SepatuSaya->tampilkan_merk();
?>