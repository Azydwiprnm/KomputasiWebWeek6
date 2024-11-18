<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Form Pendaftaran</h1>
        <p class="description">Silakan isi data pendaftaran di bawah ini:</p>

        <form action="latihanWeek5_2.php" method="POST">
            <div class="box">
                <label for="nama">Nama *</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="box">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="box">
                <label for="hobby">Hobby *</label>
                <input type="text" id="hobby" name="hobby" required>
            </div>

            <div class="box">
                <label for="no-handphone">No Handphone *</label>
                <input type="tel" id="no-handphone" name="no_handphone" required>
            </div>

            <div class="box">
                <label for="gender">Gender *</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Pilih Gender</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Non-binary">Non-binary</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>
            </div>

            <div class="box">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
