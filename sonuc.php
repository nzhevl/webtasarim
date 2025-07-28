<?php
$isim = $_POST['isim'] ?? 'Arkadaş';
$soru1 = $_POST['soru1'] ?? '';
$soru2 = $_POST['soru2'] ?? '';
$soru3 = $_POST['soru3'] ?? '';

$puan = 0;

// Basit cevap kontrolü
if ($soru1 == 'kedi') $puan += 10;
if ($soru2 == 'su') $puan += 10;
if ($soru3 == 'mavi') $puan += 10;
$soru4 = $_POST['soru4'] ?? '';
if ($soru4 == 'mant�') $puan += 10; // do�ru cevab� sen belirliyorsun

$yorum = "";
if ($puan == 40) {
  $yorum = "MÜKEMMEL! 🏆 Gerçek dostsun!";
} elseif ($puan >= 20) {
  $yorum = "İyi gidiyorsun! 😄";
} else {
  $yorum = "Hmm... Daha tanışmamız lazım 😅";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Sonuç</title>
  <link rel="stylesheet" href="stil.css">
</head>
<body>
  <div class="kutu">
    <h2>Sonuçlar burada, <?php echo htmlspecialchars($isim); ?>!</h2>
    <p><strong>Puanın: <?php echo $puan; ?>/30</strong></p>
    <p><?php echo $yorum; ?></p>
    <br>
    <a href="index.php">Yeniden Dene 🔁</a>
  </div>
</body>
</html>