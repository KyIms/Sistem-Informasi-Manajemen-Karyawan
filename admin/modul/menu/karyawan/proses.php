<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "db_imas");

    // Periksa apakah koneksi berhasil
    if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Ambil data dari formulir
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan'];

    // Periksa apakah data sudah ada dalam database
    $query = "SELECT * FROM tb_karyawan WHERE kode='$kode' OR email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Data dengan kode atau email yang sama sudah ada. Silakan coba lagi.";
    } else {
        // Data belum ada dalam database, maka simpan data
        $insertQuery = "INSERT INTO tb_karyawan (kode, nama, email, alamat, password, jabatan) VALUES ('$kode', '$nama', '$email', '$alamat', '$password', '$jabatan')";

        if (mysqli_query($conn, $insertQuery)) {
            // Data berhasil disimpan, arahkan kembali ke halaman karyawan
            // header("Location: ?page=menu&act=karyawan");
            // exit();
        } else {
            echo "Terjadi kesalahan dalam penyimpanan data: " . mysqli_error($conn);
        }
    }

    // Tutup koneksi database
    mysqli_close($conn);
}
?>