<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan
dikirim melalui link (get) -->
 <?php
 $nim=$_GET['nim'];
 //membuat sql tampil data
 $sqldata="SELECT * FROM mahasiswa WHERE nim='$nim'";
 //ambil koneksi data
require_once "db.php";
//proses sql
 $query=mysqli_query($koneksi,$sqldata);
 //mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
 $data=mysqli_fetch_assoc($query);
 //selanjutnya tampilkan pada field dibawah.
?>
<h2>Update Data Mahasiswa</h2>
<!-- tag form -->
<form action="Update.php" method="POST">
<label>Nomor Induk Mahasiswa :</label>
<input type="text" name="nim" value="<?=$data['nim']?>"
placeholder="Nomor Induk Mahasiswa" required>
<br>
<label>Nama Mahasiswa :</label>
<input type="text" name="nama" id="nama" value="<?=$data['name']?>"
placeholder="Nama Lengkap" required>
<br>
<label for="">Alamat :</label>
<input type="text" name="alamat" id="alamat" value="<?=$data['address']?>"
 placeholder="Alamat Lengkap" required>
<br>
<label for="">Jenis Kelamin :</label>
<input type="text" name="jkl" id="jkl" value="<?=$data['gender']?>" placeholder="Jenis Kelamin" required>
<br>
<label for="">Agama :</label>
<input type="text" name="agama" id="agama"
value="<?=$data['religion']?>" placeholder="Agama" required>
<br>
<label for="">Email :</label>
<input type="text" name="email" id="email"
value="<?=$data['email']?>" placeholder="Email" required>
<br>
<label for="">Password :</label>
<input type="text" name="pwd" id="pwd"
value="<?=$data['email']?>" placeholder="Password" required>
<br>
<label for="">create_at :</label>
<input type="text" name="create_at" id="create_at"
value="<?=$data['create_at']?>" placeholder="create_at" required>
<br>
<label for="">updated_at :</label>
<input type="text" name="updated_at" id="updated_at"
value="<?=$data['updated_at']?>" placeholder="updated_at" required>
<br>


<button type="submit" name="kirim" value="kirim">Update Data</button>
</form>