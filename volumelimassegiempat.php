<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.SPASI{
    background-color:none;
    height: 20px;
    width: 100%;
}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 2px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>


<div class="container">
<div class="row thumbnail" style="margin-left: 25%;margin-right: 25%; margin-top: 15%;" >
<form name=form action="proses.php" method="post">
<h2 style="text-align: center;margin-top: -0.5%">Volume Limas Segiempat</h2>
<table>
<tr class="SPASI">
<tr><td>Panjang Alas:</td><td><input type="text" name="panjang" required size=25 style="margin-left: 89px"> </td></tr>
<tr><td>Lebar Alas:</td> <td><input type="text" name="lebar"   required size=25 style="margin-left: 89px"> </td></tr>
<tr><td>Tinggi limas:</td><td><input type="text" name="tinggi" required  size=25 style="margin-left: 89px"> </td></tr>
<tr class="SPASI" >
</table>
<input class="button" style="background-position: center;margin-left: 40%; background-color: #4CAF50;color: #fff;" type=submit value="Hitung Volume" >
</form>

</div>
</div>

</body>
</html>