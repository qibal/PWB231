<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
</head>
<body>
    <form action="proses-pendaftaran.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" placeholder="Nama lengkap">
            </p>
            <p>
                <label for="alamat">alamat :</label>
                <textarea type="text" name="alamat" ></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label for="jenis_kelamin">
                    <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
                </label>
                <label for="jenis_kelamin">
                    <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
                </label>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <select name="agama" id="agama">
                    <option value="islam">islam</option>
                    <option value="kristen">Kristien</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="atheis">Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah asal</label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah">
            </p>
            <p>
                <input type="submit" value="daftar" name="daftar">
            </p>
        </fieldset>
    </form>
</body>
</html>