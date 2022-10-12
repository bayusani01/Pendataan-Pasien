<html>
    <head>
</head>
<body>
    <h1>Form pendaftaran pasien baru</h1>
    <form action="proses_pasien.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_lengkap">Nama Lengakap :</label>
                    <input type="text" name="nama" />
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" row="S"></textarea>
                </p>
                <p>
                    <label for="jk">Jenis Kelamin :</label>
                    <input type="radio" name="jk" value="Laki-Laki"/>Laki-Laki
                    <input type="radio" name="jk" value="Perempuan" />Perempuan
                </p>
                <p>
                    <label for="no_tlpn">No.Telepon :</label>
                    <input type="number" name="no_tlpn" />
                </p>
                <p>
                    <label for="agama">Agama :</label>
                    <SELECT name="agama">
                    <option value="islam">Islam </option>
                    <option value="kristen">Kristen </option> 
                    <option value="katolik">Katolik </option> 
                    <option value="hindu">Hindu </option> 
                    <option value="budha">Budha </option> 
                    <option value="konghuchu">Konghuchu </option> 
</select></br>
                </p>

                <p>
                    <label for="tanggal_masuk">Tanggal Masuk :</label>
                    <input type="date" name="tanggal_masuk" />
                </p>
                <p>
                    <label for="gejala">Gejala :</label>
                    <input type="text" name="gejala" />
                </p>
                <p>
                    <label for="tempat_lahir">Tempat Lahir :</label>
                    <input type="text" name="tempat_lahir" />
                </p>
                <p>
                    <label for="tanggal_lahir">Tanggal Lahir :</label>
                    <input type="date" name="birth" />
                </p>
                <p>
                    <label for="no_kamar">No.Kamar :</label>
                    <input type="number" name="no_kamar" />
                </p>
                <p>
                    <input type="submit" value="Tambah Pasien" name="tambah_pasien" />
                </p>
            </fieldset>
        </form>
</body>
</html>