<?php
require_once 'Karyawan.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $hitung_gaji = new Karyawan($pdo);
    
    $jam_kerja_normal = 48;
    $margin_lembur = 0.15;
    $karyawan_gaji_total = 0;
    $karyawan_jam_lembur = 0;
    $karyawan_upah_lembur = 0;
    $karyawan_upah_lembur_Perjam = 0;
   
    $karyawan_jam_kerja = $_POST['jam_kerja'] ?? 0;
    $karyawan_gaji_perjam = $_POST['gaji'] ?? 0;
    $karyawan_nomor = $_POST['nomor_karyawan'] ?? "";

    if (!empty($karyawan_jam_kerja) && !empty($karyawan_nomor)) 
    {
        if($karyawan_jam_kerja > $jam_kerja_normal){
            $karyawan_jam_lembur = $karyawan_jam_kerja - $jam_kerja_normal;
            $karyawan_upah_lembur_Perjam = ($karyawan_jam_lembur * $margin_lembur) + $karyawan_gaji_perjam;
            $karyawan_upah_lembur = $karyawan_upah_lembur_Perjam * $karyawan_jam_lembur;
            $karyawan_gaji_total = ($jam_kerja_normal * $karyawan_gaji_perjam) + $karyawan_upah_lembur;
        } else{
            $karyawan_gaji_total = $karyawan_gaji_perjam * $karyawan_jam_kerja;
        }
        $hitung_gaji->hitungGaji($karyawan_jam_kerja, $karyawan_gaji_total, $karyawan_nomor);
    }
}