<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'] ?? '';
    $nim = $_POST['nim'] ?? '';
    $usia = $_POST['usia'] ?? '';
    $lahir = $_POST['lahir'] ?? '';
    $jk = $_POST['jk'] ?? '';
    $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : '';
    $agama = $_POST['agama'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    
    // Proses penyimpanan data
    $data = "Nama: $nama\nNIM: $nim\nUsia: $usia\nTanggal Lahir: $lahir\nJenis Kelamin: $jk\nHobi: $hobi\nAgama: $agama\nAlamat: $alamat\n\n";
    
    if (file_put_contents('form.txt', $data, FILE_APPEND) !== false) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Gagal menyimpan data. Periksa izin folder.";
    }
} else {
    // Jika bukan metode POST, redirect ke halaman form
    header("Location: index.html");
    exit();
}
?>