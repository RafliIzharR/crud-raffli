<h1>Create warga</h1>

<form action="/warga/store " method="POST">
    @csrf
    <input type="text" name="no" placeholder="No"><br>
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="nik" placeholder="NIK"><br>
    <input type="text" name="no_kk" placeholder="NO KK"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis_Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">P</option>
    </select><br>
    <textarea name="alamat" id="" rows="10"></textarea><br>
    <input type="submit" name="submit" value="save">
</form>