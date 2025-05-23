<!DOCTYPE html>
<html>
<head>
  <title>If Else PTGM</title>
</head>
<body>
  <h2>Total Nilai</h2>
<form action="" method="post">
  <input type="text" name="nilai">
  <input type="submit" value="cek">
</form>
</body>
</html>

<?php
//scenario pertama
$nilai = $_POST['nilai'];
if ($nilai >= 90 && $nilai <= 100) {
  echo "Nilai Anda : $nilai<br>";
  echo "Nilai = A";
} else if ($nilai >= 80 && $nilai <= 89) {
  echo "Nilai Anda : $nilai<br>";
  echo "Nilai = B";
} else if ($nilai >= 70 && $nilai <= 79){
echo "Nilai Anda : $nilai<br>";
echo "Nilai =  C";
}else if ($nilai >= 0 && $nilai <= 69){
  echo "Nilai Anda : $nilai<br>";
  echo "Nilai = D";
}else {
  echo "ERROR<br>";
  echo "silahkan masukan nilai yang sesuai";
}

// //scenario 2
//  $waktu = $_POST['waktu']??'';
//  $parts = explode(":", $waktu);
//  if (count($parts) == 2){
//  $jam = $parts[0];
//  $menit = $parts[1];
//  if($jam >= 0 && $jam <= 24 && $menit >= 0 && $menit <= 59){
//  }if ($waktu >= "00:00" && $waktu <= "04:00"){
//    echo "Saat ini pukul $waktu Dini hari";
//  }else if ($waktu > "04:00" && $waktu <= "10:00"){
//    echo "Saat ini pukul $waktu Pagi";
//  }else if ($waktu > "10:00" && $waktu <="15:00"){
//    echo "Saat ini pukul $waktu Siang";
//  }else if ($waktu >"15:00" && $waktu <= "17:30"){
//    echo "Saat ini pukul $waktu Sore";
//  }else if ($waktu >"17:30" && $waktu <="18:30"){
//    echo "Saat ini pukul $waktu Petang";
//  }else if ($waktu >"18:30" && $waktu <="24:00"){
//    echo "Saat ini pukul $waktu Malam";
//  }else{
//    echo "dunia lain";
//  }
//  }else {
//    echo "Format waktu tidak valid. Jam harus 0-24 dan menit harus 0-59.";
//  }
?>

