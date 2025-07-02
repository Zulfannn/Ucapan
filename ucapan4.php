<?php
$nama = $_POST['nama'] ?? 'Sayang';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan 3</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="bg4">
    <audio id="bg-music" autoplay loop>
        <source src="assets/musik/monokrom.mp3" type="audio/mpeg">
        Browser kamu tidak mendukung audio.
    </audio>
    <script>
        window.addEventListener('click', () => {
            const audio = document.getElementById('bg-music');
            if (audio) {
                audio.play().catch(() => {});
            }
        });
    </script>

    <div class="card custom-card flip-card" id="card">
        <h2>🎉 Selamat Ulang Tahun, <?= htmlspecialchars($nama) ?> 🎂</h2>
        <p>Hari ini adalah hari spesial yang menandai awal dari babak baru dalam hidupmu. Semoga setiap langkah yang kamu ambil dipenuhi dengan kebahagiaan, keberkahan, dan kesuksesan.</p>
        <h4>🌟 Doaku untukmu: </h4>
        <p>Semoga Allah selalu memberimu kesehatan yang sempurna, umur yang berkah, rezeki yang melimpah, dan hati yang selalu bersyukur. Semoga setiap impianmu dimudahkan jalannya, dan setiap tantangan yang datang mampu kau hadapi dengan kekuatan dan keteguhan hati.</p>
        <h4>✨ Motivasi untukmu: </h4>
        <p>Hidup ini mungkin tidak selalu mudah, tapi ingatlah! badai pasti berlalu, dan pelangi akan datang setelah hujan. Teruslah berjalan, walau pelan. Karena setiap langkah kecil hari ini adalah pijakan menuju keberhasilan esok hari. Jangan takut gagal, karena dari kegagalan kita belajar menjadi lebih kuat. Kamu hebat, kamu mampu, dan kamu layak untuk bahagia.</p>
        <form action="ucapan5.php" method="POST" id="form">
            <input type="hidden" name="nama" value="<?= htmlspecialchars($nama) ?>">
            <button type="submit" class="button-next" id="nextBtn">👉 Lanjut</button>
        </form>
    </div>

    <script>
        const btn = document.getElementById('nextBtn');
        const form = document.getElementById('form');
        const card = document.getElementById('card');

        btn.addEventListener('click', function(e) {
            e.preventDefault();
            card.classList.add('flip-out');
            setTimeout(() => {
                form.submit();
            }, 800);
        });
    </script>
</body>

</html>