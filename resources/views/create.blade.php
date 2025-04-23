<form action="{{ route('siswa.store') }}" method="POST">
    @csrf

    <label>Nama:</label>
    <input type="text" name="nama" required><br>

    <label>Nomor Induk Siswa:</label>
    <input type="number" name="nomor_induk_siswa" required><br>

    <label>Jenis Kelamin:</label>
    <select name="jenis_kelamin" required>
        <option value="">Pilih</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>

    <label>Kelas:</label>
    <input type="text" name="kelas" required><br>

    <label>Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required><br>

    <label>Alamat:</label>
    <textarea name="alamat" required></textarea><br>

    <label>Nama Ibu:</label>
    <input type="text" name="nama_ibu" required><br>

    <label>Nama Ayah:</label>
    <input type="text" name="nama_ayah" required><br>

    <label>Pekerjaan Ibu:</label>
    <input type="text" name="pekerjaan_ibu" required><br>

    <label>Pekerjaan Ayah:</label>
    <input type="text" name="pekerjaan_ayah" required><br>

    <label>Penghasilan Ibu:</label>
    <input type="number" name="penghasilan_ibu" required><br>

    <label>Penghasilan Ayah:</label>
    <input type="number" name="penghasilan_ayah" required><br>

    <label>Nomor HP Ibu:</label>
    <input type="text" name="hp_ibu" required><br>

    <label>Nomor HP Ayah:</label>
    <input type="text" name="hp_ayah" required><br>

    <label>Status:</label>
    <select name="status" required>
        <option value="">Pilih</option>
        <option value="aktif">Aktif</option>
        <option value="non-aktif">Non-Aktif</option>
    </select><br>

    <button type="submit">Simpan</button>
</form>
