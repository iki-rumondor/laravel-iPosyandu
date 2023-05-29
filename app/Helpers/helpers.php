<?php 

function ubahFormatTanggal($tanggal) {
    $bulanIndonesia = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    );

    $tanggalArray = explode('-', $tanggal);
    $tahun = $tanggalArray[0];
    $bulan = $tanggalArray[1];
    $hari = $tanggalArray[2];

    $formatBaru = $hari . ' ' . $bulanIndonesia[(int)$bulan] . ' ' . $tahun;
    return $formatBaru;
}
