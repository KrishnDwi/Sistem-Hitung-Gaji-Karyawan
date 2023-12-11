CREATE DATABASE db_php_gaji; 

CREATE TABLE karyawan(
    nik int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nama VARCHAR(255) NOT NULL,
    gaji int(11) NOT NULL,
    jam_kerja int(11),
    total_gaji float
)

INSERT INTO karyawan (nama, gaji) 
VALUES
('Budiono Siregar', 25000),
('Udin Sugianto', 35000),
('Rahmat Saifudin', 15000),
('Ketut Nyamplag', 40000),
('Wayan Sreok', 10000),