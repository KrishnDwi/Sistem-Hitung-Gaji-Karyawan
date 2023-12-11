<?php
require_once 'Karyawan.php';

$view_karyawan = new Karyawan($pdo);
$karyawan = $view_karyawan->getAllKaryawan();

echo "<table>";
echo "<tr> <th> NO Karyawan </th> <th> Nama Karyawan </th> <th> Gaji Karyawan </th> <th> Jam Kerja Karyawan </th> <th> Total Gaji Karyawan </th> </tr>";
foreach ($karyawan as $view_karyawan) 
{
    echo "<tr>" . "<td>" . htmlspecialchars($view_karyawan['nik']) . "</td>";
    echo "<td>" . htmlspecialchars($view_karyawan['nama']) . "</td>";
    echo "<td>" . "Rp." . htmlspecialchars($view_karyawan['gaji']) . "</td>";
    echo "<td>" . htmlspecialchars($view_karyawan['jam_kerja']) . "</td>";
    echo "<td>" . htmlspecialchars($view_karyawan['total_gaji']) . "</td>" . "</tr>";
}
echo "</table>";