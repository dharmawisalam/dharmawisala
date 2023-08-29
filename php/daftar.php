<?php
class DaftarSekolah{
    var $BiayaPendaftaran;
    var $UKT;
    function Biaya_Pendaftaran()
    {
        return "1,5 juta <br/>";
    }
    function Biaya_UKT()
    {
        return "500 ribu <br/>";
    }
}
$sekolah = new DaftarSekolah();
echo $sekolah->Biaya_Pendaftaran();
echo $sekolah->Biaya_UKT();
?>