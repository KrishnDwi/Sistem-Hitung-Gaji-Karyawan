<?php
require_once 'dbconfig.php';

class Karyawan 
{
    private $pdo;

    public function __construct($pdo) 
	{
        $this->pdo = $pdo;
    }

    public function getAllKaryawan() 
	{
        $stmt = $this->pdo->query("SELECT * FROM karyawan");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function hitungGaji($jam_kerja, $total_gaji, $nik) {
    //     $stmt = $this->pdo->prepare("UPDATE karyawan SET jam_kerja = :jam_kerja, total_gaji = :total_gaji WHERE nik = :nik");
    //     $stmt->execute([':jam_kerja' => $jam_kerja, ':total_gaji' => $total_gaji, ':nik' => $nik]);
    // }    

    public function hitungGaji($jam_kerja, $total_gaji, $nik) 
{
    try {
        $stmt = $this->pdo->prepare("UPDATE karyawan SET jam_kerja = :jam_kerja, total_gaji = :total_gaji WHERE nik = :nik");
        $stmt->execute([':jam_kerja' => $jam_kerja, ':total_gaji' => $total_gaji, ':nik' => $nik]);
    } catch (PDOException $e) {
        // Log or display the error message
        echo "Error updating data: " . $e->getMessage();
    }
}

}