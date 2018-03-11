<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jual Beli Online Aman dan Nyaman - Tokopedia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylepage1.css">

              </head>
              <body>
                      <div class="container">
                              <div class="row" >
      
                            <div class="col-sm-12" style="text-align: center;">
                            <div >
                                <img src="logo.png" alt="logo" style="position: center; margin-top: 4%;margin-bottom: 5px" width="152" height="38">
                                </div>
                                <div class="garis"></div>
                                <div >
                                  <p style="text-align: center;" ><strong style="font-size: 22px;margin-top: 15px">DAFTAR DI TOKOPEDIA</strong></p>
                                </div>
                                <div>
                                  <p style="text-align: center;font-size: 15px;margin-top: -5px"> Sudah punya akun Tokopedia? Masuk <a href="#" style="color:rgb(54, 228, 91)"><u
                                    > disini </u> </a></p>
                                </div>
                              </div>
                              </div>
                              </div>
      
              <div class="container ">
              <div class="row">
              <div class="col-sm-12">
              <div class="col-sm-5" style="position: center; margin-top: 10%;padding-left: 10%;padding-top: 5%">
              <img src="fb.png" alt="fb" >
              <img src="google.png" alt="google" style="margin-top: 5px">
              <img src="tracking.png" alt="tracking" align="right"  style="padding-left: -9%;positon:left; margin-top: 48%;padding-left: 10%;padding-top: 135%;padding-bottom: 10%;width:105%" >
              <br>
              <p> 
                  <strong style="font-size: 15px; text-align: justify-all">Tokopedia - Jual Beli Online Aman dan Nyaman</strong><br>
                  Tokopedia merupakan pasar / mal online terbesar di Indonesia yang memungkinkan individu maupun pemilik usaha di Indonesia untuk membuka dan mengelola toko online mereka secara mudah dan gratis, sekaligus memberikan pengalaman berbelanja online yang lebih aman dan nyaman. Jual beli online menjadi lebih menyenangkan. Punya online shop? Buka cabang nya di Tokopedia sekarang! Gratis!
                     </p>
                     </div>
      
              <div class="col-sm-2" style="font-size: 12pt;position: center; margin-top: 10%;padding-left: 7%;" >
                  <div class="grsvertikal"> </div>
              <p style=" style="font-size: 12pt;position: center;"><i>Atau</i></p>
                  <div class="grsvertikal"> </div>  </div>
                <div class="col-sm-5" style="margin-top: 5%">
      

        <form  name="form" action="page2.php" method="POST" enctype="multipart/form-data">
        <div class="table-bordered" style="padding-top: 10px"><strong>Daftar </strong>  <br><br></table></div>
        <br>
        Nama Lengkap:<br>
        Depan:
        <input type="text" name="NamaDepan" value="Dinda" style="margin-bottom: -0.5px"> Belakang: <input type="text" name="NamaBelakang" value= "Aulia" ><br>
        <p style="margin-top: -20px";font-size:8px;><i style="color: red">! Nama lengkap harus diisi</i></p>
        Nomor Telepon:<br>
        <input type="text" name="nomortelepon" value="085851165468">
        <p style="margin-top: -20px";font-size:8px;><i style="color: red">! Nomor Telepon harus diisi</i></p>
        Nama Pengguna:<br>
        <input type="text" name="NamaPengguna" value="DindaAulia">
        <p style="margin-top: -20px";font-size:8px;><i style="color: red">! Nama Pengguna harus diisi</i></p>
        Kata Sandi:<br>
        <input type="text" name="Katasandi" value="tokopedeiaaja">
        <p style="margin-top: -20px";font-size:8px;><i style="color: red">! Kata Sandi harus 6 karakter atau lebih</i></p>
        Konfirmasi Kata Sandi:<br>
        <input type="password" name="KonfirmasiKataSandi" value="tokopediaaja" id="myInput" style="width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;">
        <input type="checkbox" onclick="myFunction()" style="margin-top: -20px">Tampilkan Password
        <br><br>
        Email:<br>
        <input type="text" name="email" value="dindaaulia894@gmail.com">
         <br>
        Jenis Kelamin: 
        <br>
        <div class="options">
          <label class="radio" style="margin-left: 20px">
  <input name="jenis_kelamin" type="radio" value="L" >Laki Laki</option>
  </label>
  <label class="radio" style="margin-left: 20px">
  <input name="jenis_kelamin" type="radio" value="P" checked="checked">Perempuan</option>
  </label>
</div>

          Hari Lahir: <br>
          <p>Bulan
          <select name="bulan" >
          <?php $options = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
        foreach ($options as $bulan) {
          $selected = @$_POST['bulan'] == $area ? ' selected="selected"' : '';
          echo '<option value="' . $bulan . '"' . $selected . '>' . $bulan . '</option>';
        }?>
          </select>
          Hari
          <input type="teks" name="Hari" value="19" style="width: 20%"> Tahun <input type="teks" name="Tahun" value= "1998" style="width: 20%"><br>
          <br>
          Alamat:
          <input type="text" name="alamat" value="Bojonegoro">
          <p style="margin-top: -20px";font-size:8px;><i style="color: red">! Alamat harus diisi</i></p>
          <input required type="file" name="upload" accept="image/*">
          <br>
          <a href="#" style="color:dodgerblue">Kondisi & Kebijakan </a> <input type="checkbox" id="myCheck"  onclick="myFunction2() ">
          <p id="text" style="display:none">Dengan Membuat sebuah akun anda setuju dengan <a href="#" style="color:dodgerblue">Kondisi & Kebijakan </a> yang kami sajikan.</p>
          <br><br>
      <input type="submit" value="Menyerahkan">
      <br>
      <br>
     </div></div></div></div>
      <div class="container-fluid">
      <div class="row">
      <div class="col-sm-12">
      <div class="garis"></div>
      <div style="margin-left: 88%">
      <img src="ig.png" alt="ig" style="align-content: ;margin-left: %,width: 2%">
      <img src="twitter.png" alt="twitter" style="align-content: ;margin-right: %;width: 32%">
      <img src="pinterest.png" alt="pinterest" style="align-content: right;margin-right: %;width: 32%">
    </div> </div></div></div></div>
   
      
      <script>
      function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
              x.type = "text";
          } else {
              x.type = "password";
          }
      }
      </script>
      
      <script>
      function myFunction2() {
          var checkBox = document.getElementById("myCheck");
          var text = document.getElementById("text");
          if (checkBox.checked == true){
              text.style.display = "block";
          } else {
             text.style.display = "none";
          }
      }
      </script>
      
      
              </body>
              </html>
      