<?php

class Siswa{
    
    public $nama;
    public $nisn;
    public $gender;

public function set_nama($nama){
    $this->nama=$nama;
}
public function get_nama(){
    return $this->nama;
}
function get_nisn(){
    return $this->nisn;
}
function set_nisn($nisn){
    $this->nisn=$nisn;
}
    public function hadir(){
        return "siswa ini hadir di kelas";
    }
    function nilaisiswa($nilaiuts,$nilaiuas,$nilai_tugas ){
        return($nilaiuts+$nilaiuas+$nilai_tugas)/3;
    }
}

$siswa1= new Siswa();
$siswa1->set_nama("mumtaz");
$siswa1->set_nisn("0110120002");
echo $siswa1->get_nama();
echo "<br/>";
echo $siswa1->get_nisn();
echo"<br/>";
echo $siswa1->nilaisiswa(80,80,90);


$siswa2=new Siswa();
$siswa2->set_nama("Abdullah");
$siswa2->set_nisn("02131387");

echo "<br/>";
echo "nama siswa:".$siswa2->get_nama();
echo "<br/>";
echo  "nisn siswa:".$siswa2->get_nisn();
echo "<br/>";
echo "Nilai Akhir siswa:".$siswa2->nilaisiswa(95,80,90);
?>