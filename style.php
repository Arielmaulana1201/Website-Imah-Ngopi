<style>
    /* CSS untuk elemen h2 */
    .menu p {
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }

    .menu h2 span {
        font-family: 'Poppins', sans-serif;
        color: #7D0A0A;
        text-align: center;
    }

    .menu h2 {
        font-family: 'Poppins', sans-serif;
        color: #333;
        text-align: center;
        margin-bottom: 1rem;
        font-size: 2rem;
        font-weight: bold;
    }

    /* CSS untuk tampilan pengunjung dan admin yang disatukan */

    /* Container utama untuk kartu */
    .menu-card-title {
        font-family: 'Poppins', sans-serif;
    }

    .menu-card-price {
        font-family: 'Poppins', sans-serif;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin: 2rem 2rem;
        max-width: 1200px;
    }

    /* Kartu umum */
    .card {
        width: 300px;
        /* Tiga kartu per baris */
        border: solid 1px #ccc;
        margin: 15px 0;
        padding: 8px;
        /* Mengurangi padding */
        font-size: 12px;
        /* Ukuran font lebih kecil */
        text-align: center;
        color: #333;
        border-radius: 8px;
        /* Radius sudut lebih kecil */
        background: #f7f7f7;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    /* Container untuk tombol dalam kartu */
    .card-buttons {
        display: flex;
        flex-direction: column;
        /* Tombol diatur secara vertikal */
        gap: 10px;
        /* Jarak antara tombol */
        width: 70%;
        /* Memastikan tombol memenuhi lebar card */
        margin-top: 10px;
        /* Jarak atas untuk memisahkan dari konten di atasnya */
    }

    /* Style untuk tombol di dalam card */
    .card-buttons .action-button {
        width: 100%;
        /* Lebar tombol mengikuti lebar container */
        padding: 10px;
        /* Padding untuk tombol */
        background-color: #7D0A0A;
        /* Warna latar belakang tombol */
        color: white;
        /* Warna teks tombol */
        border: none;
        /* Menghapus border default */
        border-radius: 5px;
        /* Membuat sudut tombol melengkung */
        font-size: 14px;
        /* Ukuran font tombol */
        cursor: pointer;
        /* Menampilkan kursor pointer saat hover */
        transition: background-color 0.3s ease;
        /* Transisi warna latar belakang saat hover */
        text-align: center;
        /* Teks berada di tengah tombol */
    }

    .card-buttons .action-button:hover {
        background-color: black;
        /* Warna latar belakang tombol saat hover */
    }


    /* Gambar dalam kartu */
    .gambar {
        width: 100px;
        /* Ukuran gambar lebih kecil */
        height: 100px;
        /* Ukuran gambar lebih kecil */
        object-fit: cover;
        border-radius: 8px;
        /* Radius sudut lebih kecil */
        margin-bottom: 8px;
        /* Mengurangi margin bawah */
        box-shadow: 0 0 5px grey;
    }

    .gambar2 {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
        width: 100px;
        /* Ukuran gambar lebih kecil */
        height: 100px;
        /* Ukuran gambar lebih kecil */
        object-fit: cover;
        border-radius: 8px;
        /* Radius sudut lebih kecil */
        margin-bottom: 8px;
        /* Mengurangi margin bawah */
        box-shadow: 0 0 5px grey;
    }

    /* Tombol dalam kartu */
    .action-button {
        width: 100%;
        padding: 8px;
        background-color: #7D0A0A;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 12px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin: 5px 0;
    }

    .action-button:hover {
        background-color: black;
    }

    /* CSS untuk form tambah menu */
    .form-add {
        max-width: 400px;
        margin: 2rem auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background: #f9f9f9;
    }

    .form-add h3 {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        margin-bottom: 1rem;
        font-size: 1.5rem;
        color: #333;
    }

    .form-add input {
        width: calc(100% - 22px);
        display: block;
        margin: 10px auto;
        padding: 10px;
        font-size: 14px;
        border: solid 1px #ccc;
        border-radius: 5px;
    }

    .form-add button {
        width: 100%;
        padding: 10px;
        background-color: #7D0A0A;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-add button:hover {
        background-color: black;
    }

    /* CSS untuk tombol Login dan Logout */
    .auth-buttons {
        display: flex;
        justify-content: center;
        margin: 20px 0;
        /* Menambahkan jarak atas dan bawah untuk tombol */
    }

    .auth-buttons .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
        background-size: cover;
        background-position: center;
        /* Background warna default jika tidak ada gradien */
        background-color: #333;
    }

    .auth-buttons .btn.logout {
        background: #7D0A0A;
        /* Gradien warna tombol Logout */
    }

    .auth-buttons .btn.logout:hover {
        background: black;
        /* Gradien warna tombol Logout saat hover */
    }


    /*  untuk tombol kembali di tampilan admin */
    .center-message {
        text-align: center;
        margin-top: 50px;
    }

    .center-message h3 {
        font-size: 24px;
        color: #333;
    }

    .center-message a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #7D0A0A;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px;
    }

    .center-message a:hover {
        background-color: black;
    }
</style>