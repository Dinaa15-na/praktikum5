<?php

class Mahasiswa {
    public $nama_mahasiswa;
    public $nilai_mahasiswa;

    public function __construct($nama_mahasiswa, $nilai_mahasiswa) {
        $this->nama = $nama_mahasiswa;
        $this->nilai = $nilai_mahasiswa;
}
    

    public function getNama(){
        return $this->nama;
    }

    public function getNilai(){
        return $this->nilai;
    }

    public function getLulus(){
        return $this->nilai >= 60 ? 'Lulus' : 'Tidak lulus';
    }

    public function predikat(){
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 70) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } else {
            return 'D';
        }
    }
}