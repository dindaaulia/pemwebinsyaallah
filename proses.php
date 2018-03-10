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


</style>
</head>
<body>


<div class="container">
<div class="row thumbnail" style="margin-left: 25%;margin-right: 25%; margin-top: 15%;" >
<form name=form >
<h2 style="text-align: center;margin-top: -0.5%">Hasil Volume Limas Segiempat</h2>
<table>
<tr class="SPASI">
<?php
$panjang=$_POST['panjang'];
$lebar=$_POST['lebar'];
$tinggi=$_POST['tinggi'];
$volume=($panjang*$lebar*$tinggi)/3;
 echo "<tr><td>Panjang alas :</td><td> $panjang cm</td></tr>";
 echo "<tr><td>Lebar alas :</td><td> $lebar cm </td></tr>";
 echo "<tr><td>Tinggi Limas :</td><td> $tinggi cm </td></tr>";
 echo "<tr><td>Volume Limas Segiempat :</td><td><b><u> $volume cm3 </u></b> </td></tr>";
?>
<tr class="SPASI" >
</table>
</form>

</div>
</div>

</body>
</html>