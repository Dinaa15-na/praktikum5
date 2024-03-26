<?php

class Orang {
    public $nama_saya;
    public $umur_saya;
   
    public function setNama($nama_saya){
        $this->nama = $nama_mahasiswa;
    }

    public function setUmur($umur_saya){
        $this->umur = $umur_saya;
    }

    public function getInfo(){
        return "Nama: " . $this->nama . ", umur: " . $this->umur;
    }
}

// Membuat objek nya

$khoirunn = new Orang();
$khoirunn->setNama("Dina Andriani");
$khoirunn->setUmur("20");

$riko = new Orang();
$riko->setNama("sadiatul muawwanah");
$riko->setUmur("20");

echo $Dina->getInfo();

echo "<br>";

echo $caca->getInfo();