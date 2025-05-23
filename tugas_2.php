<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>scenario 2</title>
</head>
<body>
  <h2>waktu</h2>
  <form action="" method="post">
    <input type="text" name="waktu">
    <input type="submit" value="cek">
  </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
$waktu = $_POST['waktu']??'';
if (preg_match("/^(?:[01]?\d|2[0-3]):([0-5]?\d)$/", $waktu)) {
$parts = explode(":", $waktu);
$jam = (int)$parts[0];
$menit = (int)$parts[1];
if($jam >= 0 && $jam <= 23 && $menit >= 0 && $menit <= 59){
}if ($waktu >= "00:00" && $waktu <= "04:00"){
  echo "Saat ini pukul $waktu Dini hari";
}else if ($waktu > "04:00" && $waktu <= "10:00"){
  echo "Saat ini pukul $waktu Pagi";
}else if ($waktu > "10:00" && $waktu <="15:00"){
  echo "Saat ini pukul $waktu Siang";
}else if ($waktu >"15:00" && $waktu <= "17:30"){
  echo "Saat ini pukul $waktu Sore";
}else if ($waktu >"17:30" && $waktu <="18:30"){
  echo "Saat ini pukul $waktu Petang";
}else if ($waktu >"18:30" && $waktu <="24:00"){
  echo "Saat ini pukul $waktu Malam";
}else{
  echo "dunia lain";
}
}else {
  echo "Format waktu tidak valid. Silahkan masukan format waktu yang sesuai";
}

?>
