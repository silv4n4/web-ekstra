<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - SMKN 3 Yogyakarta</title>
    <link rel="stylesheet" href="stail.css">
    <link rel="icon" type="image/x-icon" href="gambar/skm.png">

</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
        <img src="../uploads/foto1.png" alt="SMK N 3 Yogyakarta">
        <a>SMK N 3 Yogyakarta</a>
        </div>
        <ul>
        <li><a href="daftar.php">Daftar</a></li>
        <li><a href="index.php">Home</a></li>
        <?php
            session_start();
            if (isset($_SESSION['username'])) {
                echo '<li><a href="logout.php">Logout (' . htmlspecialchars($_SESSION['username']) . ')</a></li>';
            } else {
        
            }
            ?>
    </ul>
    </nav>
<!-- Konten Utama -->
    <div class="container">
    <h1>Daftar Ekstrakurikuler Di SMK N 3 Yogyakarta</h1>


<!-- Kartu untuk setiap ekstrakurikuler -->
    <div id="cards">
    <div id="pramuka" class="card">
    <h3>Pramuka</h3>       
    <img src="https://images.bisnis.com/posts/2023/11/14/1714300/pramuka_1_1699953189.jpeg" alt="Pramuka">         
    <p>Jumat, 16:00 - 17:00</p>

    </div>
    <div id="tonti" class="card">
    <h3>Tonti</h3>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR72rygQx_rzw8b0zOEx71AO2DeePwDhI38W3twxLx534tk93wFkW5iNYX5ikBJX7YH36E&usqp=CAU" alt="Tonti">
    <p>Rabu dan Selasa, 16:00 - 17:00</p>

    </div>
    <div id="futsal" class="card">
    <h3>Marching Band</h3>
    <img src="https://kontras.id/wp-content/uploads/2023/01/IMG_20230113_225650-e1673621964166.jpg" alt="Marching Band">
    <p>Kamis, 15:30 - 17:00</p>

    </div>
    <div id="Basket" class="card">
    <h3>Basket</h3>
    <img src="https://seru.co.id/wp-content/uploads/2021/12/Final-Basket-Putra-Invitasi-Bola-Basket-Antar-Pelajar.jpg" alt="Basket">
    <p>Selasa, 15:00 - 17:00</p>

    </div>
    <div id="PMR" class="card">
    <h3>PMR</h3>
    <img src="https://smkn1gambut.sch.id/wp-content/uploads/2022/10/WhatsApp-Image-2022-10-28-at-5.02.44-AM-800x445.jpeg" alt="PMR">
    <p>Senin dan Kamis, 15:30 - 17:00</p>

    </div>
    <div id="Renang" class="card">
    <h3>Renang</h3>
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj8pKpl_00aQ-qUni61oPBNKypgbHz4WsoXoCBTof_T1R4MYZJSGC2zesIb6cLtO5EvPcdnLcYnaemxD1K8PXHzdXpdnAGozWN0Aa9lw5X9ogx810jprXZmtGgFo6nE_VTDKfiJi2NYeS4/s1600/Renang.jpg" alt="Renang">
    <p>Senin, 14:00 - 16:00</p>

    </div>
    <div id="Karawitan" class="card">
    <h3>Karawitan</h3>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2NON-dasM0ofCmOcI8io0SRgxrsC6uuZD-w&s" alt="Karawitan">
    <p>Kamis, 16:00 - 17:00</p>

    </div>
    <div id="Bulutangkis" class="card">
    <h3>Bulutangkis</h3>
    <img src="https://pbdjarum.org//public/images/mitraclub/96a7f0aa59021b180290712b619517d8.jpg" alt="Bulutangkis">
    <p>Senin, 15:00 - 17:00</p>

    </div>
    <div id="Pecinta Alam" class="card">
    <h3>Pecinta Alam</h3>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUUikCN0sYOu6Bm0tMyvjALH3Hqc9bAjQaky4Hkz6tB_tCSSru2ZFqv3fNzGmQUU9H97M&usqp=CAU" alt="Pecinta Alam">
    <p>Selasa, 15:00 - 18:00</p>>

    </div>
    <div id="Paduan Suara" class="card">
    <h3>Paduan Suara</h3>
    <img src="https://ugm.ac.id/wp-content/uploads/2021/07/26072116273031251471024186-825x463.jpg" alt="Paduan Suara">
    <p>Kamis, 15:30 - 17:30</p>

    </div>
    <div id="English Club" class="card">
    <h3>English Club</h3>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9fDrczipxy43sYuCpA8c2KsbZuReH58HhVA&s" alt="English Club">
    <p>Selasa, 15:30 - 17:00</p>

    </div>
    <div id="Bela diri" class="card">
    <h3>Bela Diri</h3>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQId1WbP5A2DIaNDhOaem150D0kcbs4c1uNLQ&s" alt="Bela Diri">
    <p>Senin, 16:00 - 17:00</p>

    </div>
    <div id="Voli" class="card">
    <h3>Voli</h3>
    <img src="https://img.inews.co.id/media/1200/files/inews_new/2023/06/22/ant_timnas_voli_putri___1_.jpg" alt="Voli">
    <p>Selasa, 14:00 - 16:00</p>

    </div>
    <div id="Hadroh" class="card">
    <h3>Hadroh</h3>
    <img src="https://smkn3jogja.sch.id/wp-content/uploads/2024/02/WhatsApp-Image-2024-02-07-at-12.32.37-1024x768.jpeg" alt="Hadroh">
    <p>Selasa, 15:00 - 17:00</p>

    </div>
    <div id="Band" class="card">
    <h3>Band</h3>
    <img src="https://inilahmojokerto.com/wp-content/uploads/2022/12/OGI1281.jpg" alt="Band">
    <p>Rabu, 15:00 - 16:00</p>

    </div>
    </div>
    <a href="daftar.php"><button class="buttonbalik">Masuk ke Halaman Pendaftaran</button></a>
    </div>

    <script>
    function showCard(id) {
            // Sembunyikan semua kartu
            var cards = document.querySelectorAll('.card');
            cards.forEach(function(card) {
                card.style.display = 'none';
            });

            // Tampilkan kartu yang dipilih
            var selectedCard = document.getElementById(id);
            if (selectedCard) {
                selectedCard.style.display = 'block';
            }
             }

    var currentCardId = null; // Variabel global untuk menyimpan ID kartu yang saat ini ditampilkan
    function showCard(id) {
        // Sembunyikan semua kartu
        var cards = document.querySelectorAll('.card');
        cards.forEach(function(card) {
            card.style.display = 'none';
        });

        // Cek apakah tombol yang sama ditekan lagi
        if (currentCardId === id) {
            currentCardId = null; // Reset jika kartu yang sama ditekan
        } else {
            currentCardId = id; // Simpan ID kartu yang baru dipilih
            var selectedCard = document.getElementById(id);
            if (selectedCard) {
                selectedCard.style.display = 'block'; // Tampilkan kartu yang dipilih
            }
        }
    }   
</script>
</body>
</html>
