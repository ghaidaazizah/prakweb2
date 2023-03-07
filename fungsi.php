<?php
function kelulusan ($_nilai){
    // Jika nilai rata-rata siswa di bawah 55 tidak lulus.
    // Jika nilai rata-rata siswa di atas 55 lulus.
    if ($_nilai > 55 ){
        return 'Anda Lulus';
    } else{
        return 'Tidak Lulus';
    }
}

// 1. buat fungsi grade, lalu kasih keterangannya :
// jika nilai di atas 85-100 grade A
// Jika nilai di atas 70-84 grade B
// Jika nilai di atas 56-69 grade C
// Jika nilai di atas 36-55 grade D
// Jika nilai di atas 10-35 grade E
// Jika tidak ada nilai cetak I (anda tidak ada nilai)
function grade($_nilai){
    if ($_nilai >= 85){
        return "A";
    }elseif ($_nilai >= 70){
        return "B";
    }elseif ($_nilai >= 56){
        return "C";
    }elseif ($_nilai >= 36){
        return "D";
    }elseif ($_nilai >= 10){
        return "E";
    }else{
        return "I(Tidak ada nilai)";
    }
}
?>