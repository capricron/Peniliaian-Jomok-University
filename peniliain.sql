CREATE DATABASE jomok_univ;

USE jomok_univ;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    tugas FLOAT NOT NULL,
    uts FLOAT NOT NULL,
    uas FLOAT NOT NULL,
    nilai_akhir FLOAT,
    status VARCHAR(20)
);

DROP TABLE mahasiswa;