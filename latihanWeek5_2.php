<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="success-container">
        <h1>Terima Kasih, <?php echo htmlspecialchars($_POST['nama']); ?>!</h1>
        <p class="description">Selamat, Anda telah berhasil mendaftar. Kami sangat senang Anda bergabung dengan kami!</p>
        <p class="message">Sebagai bagian dari komunitas kami, Anda akan mendapatkan akses ke berbagai informasi, event, dan kesempatan menarik. Kami berharap perjalanan Anda bersama kami akan menjadi pengalaman yang bermanfaat dan menyenangkan.</p>
        
        <div class="user-data">
            <h2>Data yang Anda Isi:</h2>
            <p><strong>Nama:</strong> <?php echo htmlspecialchars($_POST['nama']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
            <p><strong>Hobby:</strong> <?php echo htmlspecialchars($_POST['hobby']); ?></p>
            <p><strong>No Handphone:</strong> <?php echo htmlspecialchars($_POST['no_handphone']); ?></p>
            <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
        </div>

        <button onclick="window.location.href='latihanWeek5.php'">Kembali ke Beranda</button>
    </div>
</body>
</html>
