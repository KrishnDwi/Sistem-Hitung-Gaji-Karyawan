<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <!-- <label for="nomor_karyawan">Nomor Karyawan</label> -->
        <input type="number" name="nomor_karyawan" id="nomor_karyawan" placeholder="Nomor Karyawan">

        <!-- <label for="gaji">Gaji Karyawan</label> -->
        <input type="number" name="gaji" id="gaji" placeholder="Gaji Karyawan">
        
        <!-- <label for="jam_kerja">Jam Kerja Karyawan</label> -->
        <input type="number" name="jam_kerja" id="jam_kerja" placeholder="Jam Kerja KAryawan">

        <input type="submit" name="submit" value="Hitung">
    </form>
    <?php include_once 'hitung_gaji.php'; ?>

    <h2>Tabel Data Karyawan</h2>
    <?php include_once 'view_karyawan.php'; ?>
</body>
</html>