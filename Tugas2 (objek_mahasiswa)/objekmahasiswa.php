<?php
    require_once "mahasiswa.php";
    
    $mahasiswa1 = new mahasiswa("Tasyabillah Maulia Masoli","23.240.0048","3P41", "Teknik Informatika", 4.00, "Kramatsari");

    $mahasiswa1->nama = "Tasyabillah Maulia Masoli";
    $mahasiswa1->nim = "23.240.0048";
    $mahasiswa1->kelas = "3P41";
    $mahasiswa1->jurusan = "Teknik Informatika";
    $mahasiswa1->ipk = "4.00";
    $mahasiswa1->alamat = "Kramatsari";
 
    echo "NAMA : $mahasiswa1->nama <br>";
    echo "NIM : $mahasiswa1->nim <br>";
    echo "KELAS : $mahasiswa1->kelas <br>";
    echo "KELAS : $mahasiswa1->jurusan <br>";
    echo "KELAS : $mahasiswa1->ipk <br>";
    echo "KELAS : $mahasiswa1->alamat <br>";
    
    echo $mahasiswa1->infomahasiswa();
    echo "<br>";
    var_dump($mahasiswa1);
    $Mmahasiswa2 = new mahasiswa("Asa","23.240.0001","3P41", "Teknik Informatika", 3.80, "Batang");

    $Mmahasiswa2->nama = "Asa";
    $Mmahasiswa2->nim = "23.240.0001";
    $Mmahasiswa2->kelas = "3P41";
    $mahasiswa1->jurusan = "Teknik Informatika";
    $mahasiswa1->ipk = "3.80";
    $mahasiswa1->alamat = "Batang";

    echo "NAMA : $Mmahasiswa2->nama <br>";
    echo "NIM : $Mmahasiswa2->nim <br>";
    echo "KELAS : $Mmahasiswa2->kelas <br>";
    echo "KELAS : $mahasiswa1->jurusan <br>";
    echo "KELAS : $mahasiswa1->ipk <br>";
    echo "KELAS : $mahasiswa1->alamat <br>";

        echo $Mmahasiswa2->infomahasiswa();
    echo "<br>";
    var_dump($Mmahasiswa2);
?>