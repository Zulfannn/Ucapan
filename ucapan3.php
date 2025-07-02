<?php
$nama = $_POST['nama'] ?? 'Sayang';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan 2</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="bg3">
    <div class="card custom-card flip-card" id="card">
        <img src="assets/images/serius.png" alt="Vector" class="vector-img">
        <h2>🌹 Hehhhhh <?= htmlspecialchars($nama) ?> 🌹</h2>
        <p>Kali ini Mau Ngomong Serius</p>
        <form action="ucapan4.php" method="POST" id="form">
            <input type="hidden" name="nama" value="<?= htmlspecialchars($nama) ?>">
            <button type="submit" class="button-next" id="nextBtn">👉 Pasti Kepooo</button>
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