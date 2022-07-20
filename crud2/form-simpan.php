<?php

if(isset($POST['simpan'])){

$koneksi = mysql_connect("localhost","root", "latihan_db")
or die(mysqli_connect_error());

$jum = $_POST['jum'];

$kode_barang =$_POST['kode-barang'];
$nama_barang =$_POST['nama-barang'];
$harga       =$_POST['harga'];

for ($i=0; $i<$jum; $i++)
{
    mysqli_query($koneksi,"insert into produk set
    kode-barang = '$kode_barang[i]',
    nama-barang = '$nama_barang[i]',
    harga       = '$kode_barang[i]'") or die(mysqli_error($koneksi));

}
echo "<script>alert('Data telah tersimpan');
document.location='form-input.php'</script>";
}