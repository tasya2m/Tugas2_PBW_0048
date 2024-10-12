<?php
    class mahasiswa
    {
        var $nama;
        var $nim;
        var $kelas;
        var $jurusan;
        var $ipk;
        var $alamat;

        function __construct(String $nama, $nim, $kelas, $jurusan, $ipk, $alamat)
        {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->kelas = $kelas;
            $this->jurusan = $jurusan;
            $this->ipk = $ipk;
            $this->alamat = $alamat;
        }

        function infomahasiswa()
        {
            return "$this->nama, $this->nim, $this->kelas, $this->jurusan, $this->ipk, $this->alamat;";
        }
    }
?>