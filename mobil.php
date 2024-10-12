<?php
    class mobil{
        var $nama;
        var $merk;
        var $warna = null;
        var $tahun;
        var $kecepatanmaks;

        //constant
        const AUTHOR = "TASYABILLAH";

        //function construct
        public function __construct(String $nama, ?String $merk)
        {
            $this->nama = $nama;
            $this->merk = $merk;
        }

        //membuat informasi function tambah kecepatan
        function tambahkecepatan()
        {
            echo "Kecepatan Bertambah!";
        }

        //membuat function info mobil
        function infomobil()
        {
            return "$this->nama, $this->merk, $this->tahun";
        }
    }
?>