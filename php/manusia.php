<?php
class manusia{
public $nama_saya;
function berinama($saya){
        $this->nama_saya=$saya;

    }
}        
class teman extends manusia{
    public $nama_teman;
    function berinamateman($teman){
        $this->nama_teman=$teman;
    }
}
$temanSaya = new teman;
$temanSaya->berinama(" Muhammad Dharmawi Salam ");
$temanSaya->berinamateman(" Muhammad Ghiffari ");
echo "Nama Saya :". $temanSaya->nama_saya . "<br/>";
echo "Nama Teman Saya :" . $temanSaya->nama_teman;
?>