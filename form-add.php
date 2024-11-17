<?php
include 'style.php';

$get_kode_menu = $_GET['kode_menu'] ?? '';

if (isset($_POST['btn_add']) || isset($_POST['btn_update'])) {
    // Pengecekan apakah kode_menu sudah ada
    $kode_menu = $_POST['kode_menu'];
    $result = mysqli_query($cn, "SELECT COUNT(*) AS count FROM tb_menu WHERE kode_menu = '$kode_menu'");
    $data = mysqli_fetch_assoc($result);

    if ($data['count'] > 0 && isset($_POST['btn_add'])) {
        // Jika kode_menu sudah ada dan tombol Add diklik, tampilkan pesan error
        // echo "Error: Kode Menu '$kode_menu' sudah ada. Gunakan kode lain.<hr>";
        echo '<div class="center-message">';
        echo "<a href='menu.php'>Kembali</a>";
        echo '</div>';
        exit;
    } else {
        // Handler untuk file
        if (isset($_FILES['gambar'])) {
            $file_baru = strtolower($kode_menu) . '.jpg';
            $tmp_name = $_FILES['gambar']['tmp_name'];
            $lokasi_file_baru = "img/menu/$file_baru";
            if (move_uploaded_file($tmp_name, $lokasi_file_baru)) {
                $upload_sukses = true;
            } else {
                $upload_sukses = false;
                // echo 'Gagal upload file_baru<hr>';
            }
        }

        // Query untuk Add atau Update
        if (isset($_POST['btn_add'])) {
            $s = "INSERT INTO tb_menu (
                kode_menu,
                nama_menu,
                gambar,
                kategori,
                harga
            ) VALUES (
                '$kode_menu',
                '$_POST[nama_menu]',
                '$file_baru',
                '$_POST[kategori]',
                '$_POST[harga]'
            )";
            // echo "Query INSERT dihasilkan: <hr><pre>$s</pre><hr>";
        } elseif (isset($_POST['btn_update'])) {
            $sql_file_baru = $upload_sukses ? "gambar = '$file_baru', " : '';
            $s = "UPDATE tb_menu SET 
                nama_menu = '$_POST[nama_menu]',
                $sql_file_baru
                kategori = '$_POST[kategori]',
                harga = '$_POST[harga]'
            WHERE kode_menu = '$get_kode_menu'";
            // echo "Query UPDATE dihasilkan: <hr><pre>$s</pre><hr>";
        }

        // Eksekusi query
        $q = mysqli_query($cn, $s) or die(mysqli_error($cn));
        echo '<div class="center-message">';
        echo '<h3>Update Berhasil</h3>';
        echo "<a href='menu.php'>Kembali</a>";
        echo '</div>';
        exit;
    }
}

// Logika untuk mode edit atau tambah menu
if ($get_kode_menu) {
    // Mode Update Menu
    $required_file = '';
    $judul = 'Edit Barang | <a href="menu.php">Tambah Barang</a>';
    $kode_menu_readonly = 'readonly';
    $btn_caption = 'Update';

    $s = "SELECT * FROM tb_menu WHERE kode_menu='$get_kode_menu'";
    $q = mysqli_query($cn, $s) or die(mysqli_error($cn));
    $d = mysqli_fetch_assoc($q);

    $btn_name = 'btn_update';
    $nama_menu = $d['nama_menu'] ?? '';
    $gambar = $d['gambar'] ?? '';
    $kategori = $d['kategori'] ?? '';
    $harga = $d['harga'] ?? '';
    $img = !$gambar ? '' : "<img src='img/menu/$gambar' class=gambar2 />";
} else {
    // Mode Tambah Menu
    $required_file = 'required';
    $judul = 'Tambah Menu';
    $kode_menu_readonly = '';
    $btn_caption = 'Add';
    $img = '';
    $btn_name = 'btn_add';

    // Nilai default
    $nama_menu = '';
    $kategori = '';
    $harga = '';
    $gambar = '';
}

// Form tambah menu atau edit hanya ditampilkan jika admin login
if (isset($_SESSION['username'])) {
    $form_add = "
    <form method='post' enctype='multipart/form-data' class='form-add'>
        <h3>$judul</h3>
        <input required type='text' name='kode_menu' value='$get_kode_menu' $kode_menu_readonly placeholder='kode menu'>
        <input required type='text' name='nama_menu' placeholder='nama menu' value='$nama_menu'>
        $img
        <input $required_file type='file' name='gambar' accept='.jpg,.jpeg,.png' value='$gambar'>
        <input required type='text' name='kategori' placeholder='kategori' value='$kategori'>
        <input required type='number' name='harga' placeholder='harga' value='$harga'>
        <button name='$btn_name'>$btn_caption</button>
    </form>";
} else {
    echo ''; // Tidak ada form yang ditampilkan jika belum login
}
