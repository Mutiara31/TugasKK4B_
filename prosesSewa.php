//1. Melakukan koneksi db terlebih dahulu dengan memanggil file koneksi 
include_once('koneksi.php');

//2. Membuat variabel menampung data yang dikirimkan form
$judul = $_POST['input-judul'];
$penyewa = $_POST['input-penyewa'];
$durasi = $_POST['input-durasi'];

//memasukkan tanggal sewa otomatis
$tanggal_sewa = date('Y-m-d');

//3. Memasukkan data pada database
$query = "INSERT INTO sewa (judul, penyewa, tanggal_sewa, durasi)
            VALUES('$judul','$penyewa','$tanggal_sewa','$durasi')";
mysqli_query($koneksi,$query);


//apabila berhasil maka akan berpindah lokasi file,
//disertai mengirimkan value v1
header("location: FormSewa.php?v1= Berhasil Input Data");
//Header adalah fungsi untuk memasukan nilai pada URL/http