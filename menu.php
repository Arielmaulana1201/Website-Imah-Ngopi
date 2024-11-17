<?php
session_start(); // Pastikan session_start() berada di bagian paling atas
include 'conn.php';

// Menangani proses delete sebelum ada output
if (isset($_POST['btn_delete'])) {
    $kode_menu = $_POST['btn_delete']; // Mengambil nilai dari tombol delete

    // Query untuk menghapus data berdasarkan kode_menu
    $s = "DELETE FROM tb_menu WHERE kode_menu = '$kode_menu'";

    if (mysqli_query($cn, $s)) {
        // Redirect atau refresh halaman setelah penghapusan
        header("Location: menu.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($cn);
    }
}

include 'style.php'; // Include style.php setelah penanganan delete

$username = $_SESSION['username'] ?? '';

if ($username) {
    $btn_login = "<a href='logout.php' class='btn logout' onclick='return confirm(\"Yakin Mau Logout?\")'>Logout</a>";
} else {
    $btn_login = "<a href='login.php' class='btn login'>Login</a>";
}

$s = "SELECT * FROM tb_menu";
$q = mysqli_query($cn, $s) or die(mysqli_error($cn));
$jumlah_menu = mysqli_num_rows($q);

?>

<section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Imah Ngopi memiliki beberapa menu mulai dari makanan, Minuman, Cemilan Dan lain-lain</p>
</section>

<?php
if ($jumlah_menu > 0) {
    echo "<div class='card-container'>";
    while ($d = mysqli_fetch_assoc($q)) {
        // Hanya tampilkan tombol edit dan delete jika admin login
        $btn_edit = $username ? "<a href='?kode_menu=$d[kode_menu]'><button class='action-button btn-edit'>Edit</button></a>" : '';
        $btn_delete = $username ? "
            <form method='post'>
                <button name='btn_delete' value='$d[kode_menu]' class='action-button btn-delete'>Delete</button>
            </form>
        " : '';

        echo "
            <div class='card'>
                <img src='img/menu/$d[gambar]' class='gambar' />
                <div class='menu-card-title'>$d[nama_menu]</div>
                <div class='menu-card-price'>Rp. $d[harga]</div>
                <div class='card-buttons'>
                    $btn_edit
                    $btn_delete
                </div>
            </div>
        ";
    }
    echo "</div>";

    // Form tambah menu hanya untuk admin yang login
    if ($username) {
        include 'form-add.php';
        echo $form_add;
    }
} else {
    echo 'Barang kosong';
}

// Tombol login/logout sesuai status login
echo !$username ? '' : "
<div class='auth-buttons'>$btn_login</div>";
?>