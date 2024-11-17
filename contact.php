<section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Open</p>
    <p>Minggu, Selasa - Jum'at : 16.00 - 22.00</p>
    <p>Sabtu : 16.00 - 23.00</p>
    <p>Senin TUTUP</p>

    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1719977842868!6m8!1m7!1spWCGjANxyWHCvwdKk_FfUA!2m2!1d-6.984809568384279!2d107.8319877484673!3f213.56611383811324!4f-8.56009728927394!5f0.7820865974627469"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

        <form action="" onsubmit="sendWhatsAppMessage(event)">
            <h3>Jika ingin ada yang ditanyakan bisa hubungi kami disini yaa</h3>
            <div class="input-group">
                <i data-feather="user"></i>
                <input type="text" id="nama" placeholder="nama">
            </div>
            <div class="input-group">
                <i data-feather="home"></i>
                <input type="text" id="alamat" placeholder="Alamat">
            </div>
            <div class="input-group">
                <i data-feather="phone"></i>
                <input type="number" id="nohp" placeholder="no. hp">
            </div>
            <div class="input-group">
                <i data-feather="message-circle"></i>
                <input type="text" id="pesan" placeholder="Pesan">
            </div>

            <button type="submit" class="btn">Kirim Pesan</button>
        </form>
    </div>
</section>

<script>
    function sendWhatsAppMessage(event) {
        event.preventDefault();
        const nama = document.getElementById('nama').value;
        const alamat = document.getElementById('alamat').value;
        const nohp = document.getElementById('nohp').value;
        const pesan = document.getElementById('pesan').value;

        const message = `\nNama: ${nama}\nAlamat: ${alamat}\nNo HP: ${nohp}\nPesan: ${pesan}`;
        const whatsappUrl = `https://api.whatsapp.com/send?phone=6289688152886&text=${encodeURIComponent(message)}`;

        window.open(whatsappUrl, '_blank');
    }
</script>