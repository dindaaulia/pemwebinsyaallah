<?php 
 $NamaDepan= $_POST['NamaDepan']; 
 $NamaBelakang=$_POST['NamaBelakang'];
 $Hari=$_POST['Hari'];
 $Tahun=$_POST['Tahun'];
 $bulan=$_POST['bulan'];
$temp = $_FILES['upload']['tmp_name'];
$Foto = $_FILES['upload']['name'];
rename($temp, $Foto);

$jenis_kelamin = array('L' => 'Laki Laki', 'P' => 'Perempuan');
foreach ($jenis_kelamin as $kode => $detail) {
  $checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
  echo '<label class="radio">
  <input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
</label>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jual Beli Online Aman dan Nyaman - Tokopedia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylepage2.css">
  <style>
      </style>
              </head>
              <body>
<nav class="navbar navbar-default navbar-fixed-top">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" ><img class="img-responsive" src="logo.png" alt="logo" width="152" height="38"> </a>
    </div></div></nav></nav>


  <div class="container">
    <div class="row">
      <div class="col-sm-12 SPASI"></div>
    </div>
  </div>

<div class="container" >
  <div class="row thumbnail" style="margin-left: 20%;margin-right: 20%" >
      <div class="none">
   <p style="text-align: left;" > Halo <?php echo "$NamaDepan" ?> , Selamat Datang di Tokopedia<br>
   Anda memasukkan data diri anda dengan informasi sebagai berikut:
    </p>
    <div class="row thumbnail" style="margin-left: 2%;margin-right: 10%">
    <div class="col-sm-6" style="margin-left: -15px" >
    <p ><strong>Nama Lengkap</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo "$NamaDepan $NamaBelakang"; ?></p>
    <p> <strong>Hari Lahir</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <?php echo "$Hari $bulan $Tahun"; ?> </p>
    <p> <strong>Jenis Kelamin</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php 
    echo (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-')?> 
  </p>
    <p><strong>Alamat</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $_POST['alamat'];?> </p>
    <p> <strong>Nama Pengguna</strong>&nbsp&nbsp&nbsp: <?php echo $_POST['NamaPengguna']; ?></p>
    <p><strong>Alamat Email</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $_POST['email']; ?></p>
    <p> <strong>Nomor Telepon</strong>&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $_POST['nomortelepon']; ?></p>
    <p> <strong>Kata Sandi</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $_POST['Katasandi']; ?></p></div>
    <div class="col-sm-6" >
    <p style="margin-left: 150px">Gambar Profile:</p>
    <img class="pas-foto" src="<?php echo $Foto; ?>" alt="Pas Foto"/ style="position: right; width: 40%;margin-left: 150px;">
    </div></div></div>
    <p style="margin-top: -5px">Apabila informasi yang tertera di atas sudah benar maka konfirmasi akun dengan cara masukkan kode verivikasi yang telah dikirim ke nomor telepon anda di bawah ini. Sedangkan bila informasi anda yang tertera di atas salah maka silahkan kembali pada halaman daftar: </p>
    <input type="text" name="verivikasi" value="078965"> <br><br>
     <div class="col-sm-3" style="margin-left: -2%"><form name="kembali" action="page1.php">
    <input type="submit" value="Kembali"> </form></div>
    <div class="col-sm-3" style="margin-left: -13%">
    <input type="submit" value="Menyerahkan"> 
  </div>
    <br>
    </div>

 <div class="container-fluid">
      <div class="row">
      <p><br></p>
      <div class="garis" style="margin-left: -15%"></div>
      <div class="col-sm-6">
      <img src="logobawah.jpg" alt="logobawah" style="width: 8%;margin-left: -30%"></div>
      <div class="col-sm-6"><p style="margin-left: -125%;margin-top: 3%;font-size: 11px">© 2009-2018, PT. Tokopedia</p></div>
      </div> </div></div></div></div>
   
      
              </body>
              </html>
      