<?php
//PHP Class, Object, Property dan Method
//class motor
class motor{
//property
var $motor;
var $warna;

//method motor
function tampilkan_motor(){
return "Nama motor saya vino <br/>";
}

function warna_motor(){
return "Warna motor saya hitam dan putih <br/>";
}

}
//instansiasi class motor
$motor   = new motor();

//memanggil method tampilkan_nama dari class motor
echo $motor->tampilkan_motor();

//memanggil method warna_kulit dari class motor
echo $motor->warna_motor();
?>