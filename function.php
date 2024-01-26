<?php
//koneksi ke database//
$koneksi = mysqli_connect("localhost", "root","", "japindo");

function query($query)
{
    global $koneksi; //tambahkan ini untuk membuat variabel koneksi dapat diakses diu dalam funngsi 
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}