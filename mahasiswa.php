<?php

class Mahasiswa{

    public $nama;
    public $nim;
    public $gender;

    public function __construct($nama,$nim,$gender){

        $this->nama = $nama;
        $this->nim = $nim;
        $this->gender = $gender;
        

    }

    public function nama_mahasiswa(){
        return "nama mahasiswa:".$this->nama;
    }

}

$mahasiswa1 = new Mahasiswa("Yazid","0110217042","Laki Laki");

echo $mahasiswa1->nama;
echo "<br>";
echo $mahasiswa1->nim;
echo "<br>";
echo $mahasiswa1->gender;
echo "<br>";
echo $mahasiswa1->nama_mahasiswa();

echo"<br>";

echo"<br>";
echo"<br>";

$mahasiswa2 = new Mahasiswa("Natalie","0190910018","Perempuan");
echo $mahasiswa2->nama;
echo "<br>";
echo $mahasiswa2->nim;
echo "<br>";
echo $mahasiswa2->gender;
echo "<br>";
echo $mahasiswa2->nama_mahasiswa();



?>
