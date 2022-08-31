--mysql

create database pariwisata;

use pariwisata;

create table data_wisata(
    id_wisata int primary key not null auto_increment,
    nama_wisata varchar(255) not null,
    kategori_wisataa varchar(255) not null,
    nama_pengelola varchar(255) not null,
    no_telp int(14) not null,
    alamat varchar(255) not null
);