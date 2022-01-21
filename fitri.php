<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title> Belajar php </title>
</head>
<body>

  <?php
  
$nama = "sekolah koding";
$nama = "Bermain koding";

echo "Selamat datang di $nama <br>";

// tipe data angka/number
// 1. Integer 2. Float

$angka = 1000;
$angka2 = 3 ;
$angka3 = 2;

//operator aritmatika
// + - * / % ++ --

// nama = nilai
// $angka = $angka + $angka2;
// $angka *= $angka2;

//---------- math method ----------
// round rand(min,max) max min
 echo "angka hari ini adalah ". min ($angka3,$angka,$angka2);


// ---------- string method ----------
// strlen && str_word_count
// str_replace (find,replance,string)
// str_repeat (text,times);  str_shuffle(text)

$text = " Hai semuanya di sini";
echo str_repeat(str_replace("Hai","Halo",$text),1);


?>

</body>
</html>